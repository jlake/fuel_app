<?php
/**
 * Part of the Fuel framework.
 *
 * @package    Fuel
 * @version    1.6
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */


return array(

	// the active pagination template
	'active'                      => 'foundation',

	// foundation 4 pagination template
	'foundation'                     => array(
		'wrapper'                 => "<ul class=\"pagination\">\n\t{pagination}\n</ul>\n",

		'first'                   => "<li class=\"arrow\">\n\t{link}\n</li>\n",
		'first-marker'            => "&laquo;&laquo;",
		'first-link'              => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'first-inactive'          => "",
		'first-inactive-link'     => "",

		'previous'                => "<li class=\"arrow\">\n\t{link}\n</li>\n",
		'previous-marker'         => "&laquo;",
		'previous-link'           => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'previous-inactive'       => "<li class=\"arrow unavailable\">\n\t{link}\n</li>\n",
		'previous-inactive-link'  => "\t\t<a href=\"#\">{page}</a>\n",

		'regular'                 => "<li>\n\t{link}\n</li>\n",
		'regular-link'            => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'active'                  => "<li class=\"current\">\n\t{link}\n</li>\n",
		'active-link'             => "\t\t<a href=\"#\">{page}</a>\n",

		'next'                    => "<li class=\"arrow\">\n\t{link}\n</li>\n",
		'next-marker'            => "&raquo;",
		'next-link'               => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'next-inactive'           => "<li class=\"arrow unavailable\">\n\t{link}\n</li>\n",
		'next-inactive-link'      => "\t\t<a href=\"#\">{page}</a>\n",

		'last'                    => "<li class=\"arrow\">\n\t{link}\n</li>\n",
		'last-marker'             => "&raquo;&raquo;",
		'last-link'               => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'last-inactive'           => "",
		'last-inactive-link'      => "",
	),

	// Twitter bootstrap 2.x template
	'bootstrap'                   => array(
		'wrapper'                 => "<div class=\"pagination\">\n\t<ul>{pagination}\n\t</ul>\n</div>\n",

		'first'                   => "\n\t\t<li>{link}</li>",
		'first-marker'            => "&laquo;&laquo;",
		'first-link'              => "<a href=\"{uri}\">{page}</a>",

		'first-inactive'          => "",
		'first-inactive-link'     => "",

		'previous'                => "\n\t\t<li>{link}</li>",
		'previous-marker'         => "&laquo;",
		'previous-link'           => "<a href=\"{uri}\" rel=\"prev\">{page}</a>",

		'previous-inactive'       => "\n\t\t<li class=\"disabled\">{link}</li>",
		'previous-inactive-link'  => "<a href=\"#\" rel=\"prev\">{page}</a>",

		'regular'                 => "\n\t\t<li>{link}</li>",
		'regular-link'            => "<a href=\"{uri}\">{page}</a>",

		'active'                  => "\n\t\t<li class=\"active\">{link}</li>",
		'active-link'             => "<a href=\"#\">{page}</a>",

		'next'                    => "\n\t\t<li>{link}</li>",
		'next-marker'             => "&raquo;",
		'next-link'               => "<a href=\"{uri}\" rel=\"next\">{page}</a>",

		'next-inactive'           => "\n\t\t<li class=\"disabled\">{link}</li>",
		'next-inactive-link'      => "<a href=\"#\" rel=\"next\">{page}</a>",

		'last'                    => "\n\t\t<li>{link}</li>",
		'last-marker'             => "&raquo;&raquo;",
		'last-link'               => "<a href=\"{uri}\">{page}</a>",

		'last-inactive'           => "",
		'last-inactive-link'      => "",
	),

);
