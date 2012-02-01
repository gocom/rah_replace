<?php	##################
	#
	#	rah_replace-plugin for Textpattern
	#	version 0.2
	#	by Jukka Svahn
	#	http://rahforum.biz
	#
	###################

	function rah_replace($atts,$thing) {
		global $pretext;
		extract(lAtts(array(
			'from' => '',
			'to' => '',
			'delimiter' => ','
		),$atts));
		$from = explode($delimiter,$from);
		$to = explode($delimiter,$to);
		$count = count($to);
		if($count == 1) $to = implode('',$to);
		if($count == 0) $to = '';
		return str_replace($from,$to,parse($thing));
	}?>