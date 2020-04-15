<?php 

/**
 * This file is part of the Gtm package.
 * 
 * (c) Marc Witteveen <marc.witteveen@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MarcWitteveen\Gtm;

/**
 * A simple php wrapper for Google Tag Manager.
 */
class Gtm {

	/**
	 * Render the Google Tag Manager header tag
	 * 
	 * @param string $container_id The Google Tag Manager Container ID
	 * @return string The generated HTML code
	 */
	public static function renderHeadTag($container_id = "")
	{
		$output = "<!-- Google Tag Manager -->";
		$output .= sprintf("<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','%s');</script>", $container_id);
		$output .= "<!-- End Google Tag Manager -->";
		echo $output;
	}

	/**
	 * Render the Google Tag Manager body tag
	 * 
	 * @param string $container_id The Google Tag Manager Container ID
	 * @return string The generated HTML code
	 */
	public static function renderBodyTag($container_id = "")
	{
		$output = "<!-- Google Tag Manager (noscript) -->";
		$output .= sprintf("<noscript><iframe src='https://www.googletagmanager.com/ns.html?id=%s' height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>", $container_id);
		$output .= "<!-- End Google Tag Manager (noscript) -->";
		echo $output;
	}

}