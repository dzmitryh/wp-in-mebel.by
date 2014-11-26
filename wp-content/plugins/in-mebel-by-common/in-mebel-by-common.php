<?php
/*
 Plugin Name: In-mebel.by plugin
 Description: This plugin handles some custom elements for in-mebel.by
 Author: Dzmitry H
 Version: 1.0
 Requires at least: 3.8
 License: GPL v3

 Copyright (C) 2008-2014, Dzmitry H - dzmitry.hubin@gmail.com
 */

add_action( 'wp_head', 'handle_meta_tags');

function handle_meta_tags() {
	// yandex meta-tag..
	echo "<meta name='yandex-verification' content='4347d186416b6498' />";
}

?>