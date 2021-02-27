<?php

add_action( 'after_setup_theme', function() {

    	/**
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add Support for Editor Styles
		 */
		add_theme_support( 'editor-styles' );

		/**
		 * Enqueue Editor Stylesheet
		 */
		add_editor_style( get_template_directory_uri() . '/style.css' );

		/**
		 * Enable Wide and Full Block alignment for the Block Editor
		 */
		add_theme_support( 'align-wide' );

} );