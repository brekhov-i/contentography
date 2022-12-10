<?php

/**
 * 
 * File include all getters themes
 * 
 * @package contentography
 * 
 */

namespace contentography\Inc;

use contentography\Inc\Traits\Singleton;

class Getters
{

    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks()
    {
    }

    /**
     * 
     * Функция для получения записей курсов
     * 
     * @param count int
     * @param field string
     * @param filter boolean
     */

    public function get_posts_p(
        int $count = -1,
        string $field = "",
        bool $filter = true
    ) {
        if ($filter && $field != "") {

            $courses = get_posts(array(
                'numberposts' => $count,
                'category' => 0,
                'orderby' => 'date',
                'order' => 'DESC',
                'meta_query' => array(
                    array(
                        'key' => $field, // name of custom field
                        'value' => true, // matches exactly "123", not just 123. This prevents a match for "1234"
                        'compare' => '='
                    )
                ),
                'post_status' => 'publish',
                'post_type' => 'p'
            ));

            return $courses;
        } else {
            $courses = get_posts(array(
                'numberposts' => $count,
                'category' => 0,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_status' => 'publish',
                'post_type' => 'p'
            ));
            return $courses;
        }
    }

    public function get_course_by_author(
        int $ID
    ) {
        $courseForAuthor = array();
        $courses = get_posts(array(
            'numberposts' => -1,
            'category' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'meta_query' => array(
                array(
                    'key' => "viewCart", // name of custom field
                    'value' => true, // matches exactly "123", not just 123. This prevents a match for "1234"
                    'compare' => '='
                )
            ),
            'post_status' => 'publish',
            'post_type' => 'p'
        ));

        foreach ($courses as $course) {
            $authorCourse = (int) get_field('avtor', $course->ID)->ID;

            if ($authorCourse === $ID) {
                array_push($courseForAuthor, $course);
            }
        }

        return $courseForAuthor;
    }

    public function get_posts_post($count, $field = "", $filter = true, $sort = "date")
    {
        if ($filter && $field) {

            $posts = get_posts(array(
                'numberposts' => $count,
                'category' => 0,
                'orderby' => $sort,
                'order' => 'DESC',
                'meta_query' => array(
                    array(
                        'key' => $field, // name of custom field
                        'value' => true, // matches exactly "123", not just 123. This prevents a match for "1234"
                        'compare' => '='
                    )
                ),
                'post_status' => 'publish',
                'post_type' => 'post'
            ));

            return $posts;
        } else {
            $posts = get_posts(array(
                'numberposts' => $count,
                'category' => 0,
                'orderby' => $sort,
                'order' => 'DESC',
                'post_status' => 'publish',
                'post_type' => 'post'
            ));
            return $posts;
        }
    }

    public function get_info_author($ID)
    {

        $authorObj = get_posts(array(
            'post_type'   => 'experts',
            'include'     => array($ID)
        ));

        $author = (object) array(
            'ID' => $authorObj[0]->ID,
            'title' => $authorObj[0]->post_title,
            'content' => $authorObj[0]->post_content,
            'avatar' => get_field('img_for_cource', $authorObj[0]->ID),
            'portfolio' => get_field('portfolio', $authorObj[0]->ID),
            'contentCourse' => get_field('opisanie_dlya_kursov', $authorObj[0]->ID)
        );

        return $author;
    }

    public function get_all_author()
    {
        $authors = get_posts(array(
            'numberposts' => -1,
            'meta_query' => array(
                array(
                    'key' => 'view_on_page_expert', // name of custom field
                    'value' => true, // matches exactly "123", not just 123. This prevents a match for "1234"
                    'compare' => '='
                )
            ),
            'post_type'   => 'experts',
            'suppress_filters' => true,
        ));

        return $authors;
    }

    public function get_comments()
    {
        $comments = get_comments();

        return $comments;
    }

    public function contrast_color($hex)
    {
        $hex = trim($hex, ' #');

        $size = strlen($hex);
        if ($size == 3) {
            $parts = str_split($hex, 1);
            $hex = '';
            foreach ($parts as $row) {
                $hex .= $row . $row;
            }
        }

        $dec = hexdec($hex);
        $rgb = array(
            0xFF & ($dec >> 0x10),
            0xFF & ($dec >> 0x8),
            0xFF & $dec
        );

        $contrast = (round($rgb[0] * 299) + round($rgb[1] * 587) + round($rgb[2] * 114)) / 1000;
        return ($contrast >= 125) ? '#000' : '#fff';
    }

    public function compareDate($date)
    {
        date_default_timezone_set('Europe/Moscow');
        $date_1 = date("Y-m-d H:i:s");
        // вторая дата, с которой будет сравнение

        // перевод дат в формат timestamp
        $date_timestamp_1 = strtotime($date_1);
        $date_timestamp_2 = strtotime($date);
        $view = false;
        // сравниваем
        if ($date_timestamp_1 > $date_timestamp_2) {
            $view = false;
        } else if ($date_timestamp_1 < $date_timestamp_2) {
            $view = true;
        }

        return $view;
    }

    public function getPathPrice($price)
    {
        return number_format(round($price / 4, 0, PHP_ROUND_HALF_EVEN), 0, " ", ' ');
    }

    public function getInstallmentPrice($price, $term = 12)
    {
        return number_format(round($price / $term, 0, PHP_ROUND_HALF_EVEN), 0, " ", ' ');
    }
}
