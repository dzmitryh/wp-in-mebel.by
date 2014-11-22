=== In Their Language ===
Contributors: Viper007Bond
Tags: l8n, language, translation
Requires at least: 3.0
Tested up to: 3.1
Stable tag: trunk

Change your blog's language based on the user's preferred language.

== Description ==

In Their Language detects the user's browser language preferences and attempts to switch your site/blog to that language.

One great example usage of this plugin is if your site/blog is managed by multiple people who speak multiple languages, then this plugin will automatically switch the administration area to each user's language.

Only translatable strings will be affected and only if a translation file is present for that language. See the Installation and FAQ tabs for more details on that.

== Installation ==

###Plugin Installation###

Go to Plugins -> Add New in your WordPress administration area and search for the name of this plugin. Click the install link/button.

###Additional Configuration###

1. Download the language files for any languages you wish to support. See [WordPress in Your Language](http://codex.wordpress.org/WordPress_in_Your_Language) for links to a lot of language files. Note that you'll likely need a separate language file for your theme if you aren't using the standard WordPress theme.

2. Stick the `.mo` language files in `/wp-content/languages/`.

== Frequently Asked Questions ==

= My posts / my theme / other things aren't being translated! Why not? =

This plugin just dynamically switches the internal language setting for WordPress. This makes WordPress attempt to load up localization files to display things in that language. However to do this requires that a language file be present and that the language file contain a translation for each displayed string.

Posts cannot be translated in this method and if you aren't using the default WordPress theme, then you'll also need a translation file for it.

= How do I know it's working? =

[Change the preferred language setting in your browser](http://www.w3.org/International/questions/qa-lang-priorities) to one that you have a language file. For example install the French translation file [`fr_FR.mo`](http://svn.automattic.com/wordpress-i18n/fr_FR/branches/3.1/messages/) and then change your browser's setting to French being the preferred language.

= What if I want to have my posts be translated too? =

That's a job for another plugin. See [Multilingual WordPress](http://codex.wordpress.org/Multilingual_WordPress) on the Codex for a list.

= I installed a new language file but it isn't working! =

Try again in a minute. This plugin uses a little bit of caching to avoid looking at the languages directory on every page load. Results are cached for 60 seconds.

== ChangeLog ==

= Version 1.0.0 =

* Initial release!