<?php

/**
 * 
 * File include settings custom path REST API
 * 
 * @package contentography
 * 
 */

namespace CONTENTOGRAPHY_THEME\RestApi;

use CONTENTOGRAPHY_THEME\Inc\Getters;
use CONTENTOGRAPHY_THEME\Inc\Traits\Singleton;
use WP_REST_Request;

class Comments
{

  use Singleton;

  protected function __construct()
  {
    $this->set_hooks();
  }

  protected function set_hooks()
  {
    add_action('rest_api_init', [$this, 'restApiComments']);
  }

  public function restApiComments()
  {

    //Загрузка комментариев
    register_rest_route('wp/v2', '/getComments', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\getComments',
      'permission_callback' => '__return_true'
    ));

    function getComments(WP_REST_Request $request)
    {
      $postID = (int) $request->get_params()['idPost'];
      $comments = [];
      $commentsDB = get_comments(array(
        "post_id" => $postID,
        'order'   => 'ASC',
        'status'  => 'approve'
      ));

      foreach ($commentsDB as $comment) {
        $imagesData = get_field('izobrazheniya_comment', $comment);

        $imgArr = [];
        if (is_array($imagesData) || is_object($imagesData)) {
          foreach ($imagesData as $img) {

            $imgMeta = (object) array(
              "url" => $img['url'],
              "alt" => $img['alt']
            );
            array_push($imgArr, $imgMeta);
          }
        }



        $commentItem = (object) array(
          "id" => $comment->comment_ID,
          "date" => $comment->comment_date,
          "author" => $comment->comment_author,
          "content" => $comment->comment_content,
          "images" => $imgArr
        );



        array_push($comments, $commentItem);
      }

      return $comments;
      // return $comments;
    }

    //Добавление комментария
    register_rest_route('wp/v2', '/addComments', array(
      'methods' => 'POST',
      'callback' => __NAMESPACE__ . '\\addComments',
      'permission_callback' => '__return_true'
    ));

    function addComments(WP_REST_Request $request)
    {

      $body = $request->get_body_params();
      $idPost = $body["postID"];
      $images = uploadsImg($request->get_file_params(), $idPost);
      $user = wp_get_current_user();


      // создаем массив данных нового комментария
      $commentdata = [
        'comment_post_ID'      => $idPost,
        'comment_author'       => $body['name'] . " " . $body['lastName'],
        'comment_author_email' => '',
        'comment_author_url'   => '',
        'comment_content'      => $body['textComment'],
        'comment_type'         => 'comment',
        'user_ID'              => $user->ID,
        'comment_approved'     => 1,
      ];

      $commentId = wp_new_comment($commentdata, true);

      add_filter('pre_comment_approved', function ($approved, $commentdata) {

        return 1;
      }, 10, 2);

      // ошибка при добавлении комментария
      if (is_wp_error($commentId)) {
        wp_send_json_error($commentId->get_error_message());
      }

      $comment = get_comment($commentId);

      $update = update_field('izobrazheniya_comment', $images, $comment);

      wp_send_json_success($comment);
    }

    //Загрузка изображений
    function uploadsImg($files, $post_id)
    {
      global $debug;
      if (!function_exists('media_handle_sideload')) {
        require_once ABSPATH . 'wp-admin/includes/image.php';
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/media.php';
      }
      $arrImages = [];
      if (!empty($files['file']['name']) && is_array($files['file']['name'])) {
        foreach ($files['file']['name'] as $key => $file) {
          $file_array = [
            'name'     => $files['file']['name'][$key],
            'tmp_name' => $files['file']['tmp_name'][$key]
          ];

          if (is_wp_error($tmp)) {
            $file_array['tmp_name'] = '';
            if ($debug) echo 'Ошибка нет временного файла! <br />';
          }
          if ($debug) {
            echo 'File array: <br />';
            var_dump($file_array);
            echo '<br /> Post id: ' . $post_id . '<br />';
          }
          $id = media_handle_sideload($file_array, $post_id);
          if (is_wp_error($id)) {
            var_dump($id->get_error_messages());
          } else {
            update_post_meta($post_id, '_thumbnail_id', $id);
          }
          array_push($arrImages, $id);
          @unlink($tmp);
        }
      }
      return $arrImages;
    }
  }
}
