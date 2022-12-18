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
use DateTimeImmutable;
use WP_REST_Request;


class Vipuskniky
{

  use Singleton;



  protected function __construct()
  {
    $this->set_hooks();
  }

  protected function set_hooks()
  {
    add_action('rest_api_init', [$this, 'restApiVipuskniky']);
    add_action('rest_api_init', [$this, 'restApiVipusknikyTaxonomy']);
  }

  public function restApiVipuskniky()
  {
    //Получение информации о выпускниках
    register_rest_route('wp/v2', '/vipuskniky', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\get_vipuskniky',
      'permission_callback' => '__return_true'
    ));
    function get_vipuskniky(WP_REST_Request $request)
    {
      $formatUsers = [];

      $users = Getters::get_instance()->get_allVipuskniky();

      $allAcf = get_fields($users[3]);

      foreach ($users as $user) {

        $allAcf = get_fields($user->ID);
        $gallery = [];
        foreach ($allAcf['gallery'] as $foto) {
          $fotoInfo = (object) array(
            'url' => $foto['fotografiya']['url'],
            'alt' => $foto['fotografiya']['alt'],
            'kolonki' => $foto['kolonki'],
            'stroki' => $foto['stroki'],
          );

          array_push($gallery, $fotoInfo);
        };
        $acfField = (string) get_field('date_start_job', $user->ID);
        $nowDate = date("Y-m-d");

        $origin = new DateTimeImmutable($acfField);
        $target = new DateTimeImmutable($nowDate);
        $interval = $origin->diff($target);
        $experience = $interval->y;
        $acfFormat = (object) array(
          'razmery_setki' => $allAcf['razmery_setki'],
          'gallery' => $gallery,
          'vk' => $allAcf['vk'],
          'telegram' => $allAcf['telegram'],
          'email' => $allAcf['email'],
          'phone' => $allAcf['phone'],
          'avatarka' => (object) array(
            'url' => $allAcf['avatarka']['url'],
            'alt' => $allAcf['avatarka']['alt']
          ),
          'courses' => $allAcf['projdennye_kursy'],
          'experience' => $experience
        );

        $cities = [];
        if (is_array(get_the_terms($user->ID, 'city')) || is_object(get_the_terms($user->ID, 'city'))) {

          foreach (get_the_terms($user->ID, 'city') as $city) {

            $cityFilter = (object) array(
              'ID' => $city->term_id,
              'title' => $city->name
            );

            array_push($cities, $cityFilter);
          }
        }
        $countries = [];

        if (is_array(get_the_terms($user->ID, 'country')) || is_object(get_the_terms($user->ID, 'country'))) {

          foreach (get_the_terms($user->ID, 'country') as $country) {

            $countryFilter = (object) array(
              'ID' => $country->term_id,
              'title' => $country->name
            );

            array_push($countries, $countryFilter);
          }
        }

        $arr = (object) array(
          'ID' => $user->ID,
          'title' => $user->post_title,
          'content' => $user->post_content,
          'cities' => $cities,
          'countries' => $countries,
          'acf' => $acfFormat
        );
        array_push($formatUsers, $arr);
      }
      return $formatUsers;
    }
  }

  public function restApiVipusknikyTaxonomy()
  {
    //Получение информации о городах
    register_rest_route('wp/v2', '/cities', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\get_cities',
      'permission_callback' => '__return_true'
    ));
    function get_cities()
    {

      $cities = get_terms([
        'taxonomy' => 'city'
      ]);

      $citiesFilter = [];

      foreach ($cities as $city) {

        $arr = (object) array(
          'ID' => $city->term_id,
          'title' => $city->name,
          'count' => $city->count
        );

        array_push($citiesFilter, $arr);
      }

      return $citiesFilter;
    }

    //Получение информации о странах
    register_rest_route('wp/v2', '/countries', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\get_countries',
      'permission_callback' => '__return_true'
    ));
    function get_countries()
    {
      $countries = get_terms([
        'taxonomy' => 'country'
      ]);

      $countriesFilter = [];

      foreach ($countries as $country) {

        $arr = (object) array(
          'ID' => $country->term_id,
          'title' => $country->name,
          'count' => $country->count
        );

        array_push($countriesFilter, $arr);
      }

      return $countriesFilter;
    }
    //Получение стажа
    register_rest_route('wp/v2', '/experience', array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\get_experience',
      'permission_callback' => '__return_true'
    ));

    function get_experience()
    {

      $max = 1;

      $users = get_posts([
        'posts_per_page' => -1,
        'post_type' => 'vypuskniky'
      ]);

      foreach ($users as $user) {

        date_default_timezone_set('Europe/Moscow');

        $acfField = (string) get_field('date_start_job', $user->ID);
        $nowDate = date("Y-m-d");

        $origin = new DateTimeImmutable($acfField);
        $target = new DateTimeImmutable($nowDate);
        $interval = $origin->diff($target);

        if ($interval->y > $max) {
          $max = $interval->y;
        } else {
          continue;
        }
      }

      return (object) array(
        'min' => 1,
        'max' => $max
      );
    }
  }
}
