<?php

/*
 * rah_replace - Memcached templates for Textpattern CMS
 * https://github.com/gocom/rah_replace
 *
 * Copyright (C) 2019 Jukka Svahn
 *
 * This file is part of rah_replace.
 *
 * rah_replace is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, version 2.
 *
 * rah_replace is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with rah_replace. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Search and replace contents.
 *
 * @param  array  $atts  Attributes
 * @param  string $thing Contents
 * @return string Parsed contents
 */
function rah_replace($atts, $thing = '')
{
	extract(lAtts(array(
		'from'      => '',
		'to'        => '',
		'delimiter' => ',',
	), $atts));

	if ($delimiter !== '') {
		$from = explode($delimiter, $from);

		if (strpos($to, $delimiter) !== false) {
			$to = explode($delimiter, $to);
		}
	}

	return str_replace($from, $to, parse($thing));
}
