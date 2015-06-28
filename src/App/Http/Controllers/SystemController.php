<?php
namespace App\Http\Controllers;

class SystemController extends Controller {
	
	/**
	 * Permission Guest.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware ( 'guest' );
	}
	
	/**
	 * Create a Table in Database.
	 *
	 * @return Response
	 */
	public function install() {
		$sql = "CREATE TABLE `messages` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `person` char(1) COLLATE utf8_unicode_ci NOT NULL,
              `message` text COLLATE utf8_unicode_ci,
              `updated_at` datetime DEFAULT NULL,
              `created_at` datetime DEFAULT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
		if (\DB::statement($sql) ) {
			echo "<p>Create Table: OK.</p>";
		} else {
			echo "<p>Create Table: Fail.</p>";
		}
	}
}