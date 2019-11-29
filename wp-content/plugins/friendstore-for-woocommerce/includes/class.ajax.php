<?php
/**
 * Copyright (c) VietFriend, Inc. and its affiliates. All Rights Reserved
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 *
 * @package FriendStore for WooCommerce
 */

defined('ABSPATH') || exit;

if (!class_exists('FoW_Ajax')) {
    class FoW_Ajax {

        function __construct() {
            self::add_ajax_events();
        }

        public static function add_ajax_events() {
            $ajax_events_nopriv = array(
                'update_district',
                'update_ward',
            );

            foreach ($ajax_events_nopriv as $ajax_event) {
                add_action('wp_ajax_fsw_' . $ajax_event, array(__CLASS__, $ajax_event));
                add_action('wp_ajax_nopriv_fsw_' . $ajax_event, array(__CLASS__, $ajax_event));

                add_action('vf_ajax_fsw_' . $ajax_event, array(__CLASS__, $ajax_event));
                add_action('vf_ajax_nopriv_fsw_' . $ajax_event, array(__CLASS__, $ajax_event));
            }
        }

        public static function update_district() {
            if (isset($_POST['city_id'])) {
                $city_id = sanitize_key($_POST['city_id']);
                FoW_Ultility::show_districts_option_by_city_id($city_id);
            }
            die();
        }

        public static function update_ward() {
            if (isset($_POST['district_id'])) {
                $district_id = sanitize_key($_POST['district_id']);
                FoW_Ultility::show_wards_option_by_district_id($district_id);
            }
            die();
        }
    }

    new FoW_Ajax();
}