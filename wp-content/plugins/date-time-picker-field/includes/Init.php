<?php
/**
 * @package date-time-picker-field
 */

namespace CMoreira\Plugins\DateTimePicker;

if ( ! class_exists( 'Init' ) ) {
	class Init {

		public static function init(){

			// Creates Settings Page & Link.
			new Admin\SettingsPage();
			new Admin\SettingsLink();

			// Create Date Picker Instance
			new DateTimePicker();
		}
	}
}