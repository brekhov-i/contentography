<?php

/**
 * 
 * File include settings custom path REST API
 * 
 * @package contentography
 * 
 */

namespace contentography\RestApi;

use contentography\Inc\Traits\Singleton;
use WP_REST_Request;

class Courses
{

  use Singleton;

  protected function __construct()
  {
    $this->set_hooks();
  }

  protected function set_hooks()
  {
    add_action('rest_api_init', [$this, 'restApiCourses', 'restApiCoursesTaxonomy']);
  }

  public function restApiCourses()
  {
    //Получение информации о курсах
    register_rest_route('wp/v2', '/coursesNewYear', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\get_courses',
      'permission_callback' => '__return_true'
    ));
    function get_courses()
    {
      $coursesArr = array();
      $courses = get_posts([
        'posts_per_page' => -1,
        'post_type'   => 'p',
        'meta_query' => array(
          array(
            'key' => 'viewCart', // name of custom field
            'value' => true, // matches exactly "123", not just 123. This prevents a match for "1234"
            'compare' => '='
          ),
          array(
            'key' => 'participationInPromotions',
            'value' => true,
            'compare' => '='
          )
        ),
      ]);


      foreach ($courses as $course) {

        $authorId = get_field('avtor', $course->ID);
        $numberOrString = get_field('number_or_string', $course->ID);
        $prices = array();
        $complexity = array();
        $thematics = array();

        foreach (get_the_terms($course->ID, "price") as $term) {
          array_push($prices, $term->term_id);
        }
        foreach (get_the_terms($course->ID, "complexity") as $term) {
          array_push($complexity, $term->term_id);
        }
        foreach (get_the_terms($course->ID, "thematics") as $term) {
          array_push($thematics, $term->term_id);
        }

        array_push($coursesArr, array(
          "ID" => $course->ID,
          "title" => $course->post_title,
          "stay_places" => get_field('stay_places', $course->ID),
          "author" => array(
            "ID" => $authorId,
            "name" => get_the_title($authorId),
            "avatar" => array(
              "url" => get_field('img_for_cource', $authorId)['url'],
              "alt" => get_field('img_for_cource', $authorId)['alt'],
            )
          ),
          "image" => array(
            "url" => get_field('image_course', $course->ID)['url'],
            "alt" => get_field('image_course', $course->ID)['alt'],
          ),
          "countPeople" => $numberOrString ? get_field('count_people', $course->ID) : get_field('string_count_people', $course->ID),
          "description" => get_field('description_in_cart', $course->ID),
          "prices" => $prices,
          "complexity" => $complexity,
          "thematics" => $thematics,
          "url" => get_the_permalink($course->ID)
        ));
      }


      return $coursesArr;
    }
  }

  public function restApiCoursesTaxonomy(WP_REST_Request $request)
  {

    //Получение информации о таксономии "Стоимость"
    register_rest_route('wp/v2', '/pricesCourse', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\get_pricesCourse',
      'permission_callback' => '__return_true'
    ));
    function get_pricesCourse()
    {
      $prices = get_terms(array(
        'taxonomy' => 'price',
        'fields'   => 'all',
        'hide_empty' => false
      ));



      $pricesArr = array();

      foreach ($prices as $term) {
        array_push($pricesArr, array(
          'ID' => $term->term_id,
          'title' => $term->name,
          'count' => $term->count
        ));
      }



      return $pricesArr;
    }


    //Получение информации о таксономии "Уровень сложности"
    register_rest_route('wp/v2', '/complexityCourse', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\get_complexityCourse',
      'permission_callback' => '__return_true'
    ));
    function get_complexityCourse()
    {
      $complexity = get_terms(array(
        'taxonomy' => 'complexity',
        'fields'   => 'all',
        'hide_empty' => false
      ));



      $complexityArr = array();

      foreach ($complexity as $term) {
        array_push($complexityArr, array(
          'ID' => $term->term_id,
          'title' => $term->name,
          'count' => $term->count
        ));
      }



      return $complexityArr;
    }


    //Получение информации о таксономии "Тематика"
    register_rest_route('wp/v2', '/thematicsCourse', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\get_thematicsCourse',
      'permission_callback' => '__return_true'
    ));
    function get_thematicsCourse()
    {
      $thematics = get_terms(array(
        'taxonomy' => 'thematics',
        'fields'   => 'all',
        'hide_empty' => false
      ));



      $thematicsArr = array();

      foreach ($thematics as $term) {
        array_push($thematicsArr, array(
          'ID' => $term->term_id,
          'title' => $term->name,
          'count' => $term->count
        ));
      }



      return $thematicsArr;
    }
  }
}
