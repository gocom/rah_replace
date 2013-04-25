<?php

/**
 * Rah_replace plugin for Textpattern CMS.
 *
 * @author  Jukka Svahn
 * @date    2009-
 * @license GNU GPLv2
 * @link    http://rahforum.biz/plugins/rah_replace
 *
 * Copyright (C) 2012 Jukka Svahn http://rahforum.biz
 * Licensed under GNU Genral Public License version 2
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

	function rah_replace($atts, $thing)
	{
		extract(lAtts(array(
			'from'      => '',
			'to'        => '',
			'delimiter' => ',',
		), $atts));

		if ($delimiter !== '')
		{
			$from = explode($delimiter, $from);

			if (strpos($to, $delimiter) !== false)
			{
				$to = explode($delimiter, $to);
			}
		}

		return str_replace($from, $to, parse($thing));
	}