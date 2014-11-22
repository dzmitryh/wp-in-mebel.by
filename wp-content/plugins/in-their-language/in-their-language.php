<?php /*

**************************************************************************

Plugin Name:  In Their Language
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/other-plugins/in-their-language/
Version:      1.0.0
Description:  Attempts to switch WordPress to the viewer's language. Only works for translatable strings (i.e. not posts) and if there's a translation file in the user's language present.
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/

**************************************************************************/

add_filter( 'locale', 'itl_locale_switcher', 2 );

function itl_locale_switcher( $locale ) {
	global $itl_customized_locale;

	// If we've already done this, return the value we previously found
	if ( ! empty( $itl_customized_locale ) )
		return $itl_customized_locale;

	// Examine the user's language header if they sent one
	if ( ! empty( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) && preg_match_all( '/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $userlangs ) ) {

		// Get available languages
		if ( ! $available_languages = get_transient( 'itl_available_languages' ) ) {

			// English is always available
			$available_languages = array(
				'en-us' => 'en_US',
				'en'    => 'en_US',
			);

			$available_languages_files = get_available_languages();

			if ( ! empty( $available_languages_files ) ) {
				// Translate the list into something that's easier to search
				foreach ( $available_languages_files as $available_language ) {
					$parts = explode( '_', $available_language );
					
					if ( empty( $parts[0] ) )
						continue;

					$available_languages[ strtolower( $parts[0] ) ] = $available_language;

					$santized = strtolower( $available_language );
					$santized = str_replace( '_', '-', $santized );
					$available_languages[$santized] = $available_language;
				}
			}

			// Cache the results for 1 minute to avoid having to read the filesystem every time
			// Something like an hour or a day would be best, but the majority of blogs aren't high traffic
			// Plus it'd confuse people who installed a new language file
			set_transient( 'itl_available_languages', $available_languages, 60 );
		}

		// Go through the user's languages and see if we have a language file for them
		foreach ( $userlangs[1] as $userlang ) {
			if ( ! empty( $available_languages[$userlang] ) ) {
				$locale = $itl_customized_locale = $available_languages[$userlang];
				break;
			}
		}
	}

	return $locale;
}