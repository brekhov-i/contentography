<?php

/**
 * 
 * File include settings custom path REST API
 * 
 * @package contentography
 * 
 */

namespace CONTENTOGRAPHY_THEME\RestApi;

use CONTENTOGRAPHY_THEME\Inc\Traits\Singleton;
use WP_REST_Request;

class Experts
{

  use Singleton;

  protected function __construct()
  {
    $this->set_hooks();
  }

  protected function set_hooks()
  {
    add_action('rest_api_init', [$this, 'restApiExperts']);
  }

  public function restApiExperts()
  {

    //Получение экспертов
    register_rest_route('wp/v2', '/getExperts', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\getExperts',
      'permission_callback' => '__return_true'
    ));

    function getExperts()
    {

      $experts = get_posts(array(
        'numberposts' => -1,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'experts',
        'meta_query' => array(
          array(
            'key' => 'pokazyvat_kartochku', // name of custom field
            'value' => true, // matches exactly "123", not just 123. This prevents a match for "1234"
            'compare' => '='
          )
        ),
        'suppress_filters' => true,
      ));

      $expertsData = array();

      foreach ($experts as $expert) {

        $portfolio = array();


        foreach (get_field('primery_rabot', $expert->ID) as $img) {
          $dataImg = (object) array(
            "ID" => (int) $img["ID"],
            "url" => $img["url"],
            "alt" => $img["alt"]
          );

          array_push($portfolio, $dataImg);
        }

        $data = (object) array(
          "ID" => (int) $expert->ID,
          "title" => $expert->post_title,
          "img" => get_the_post_thumbnail($expert->ID),
          "telegram" => get_field('telegram', $expert->ID),
          "description" => get_field('opisanie', $expert->ID),
          "portfolio" => $portfolio
        );

        array_push($expertsData, $data);
      }


      return $expertsData;
    }
  }
}
