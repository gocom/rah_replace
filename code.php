<?php	##################
	#
	#	rah_replace-plugin for Textpattern
	#	version 0.3
	#	by Jukka Svahn
	#	http://rahforum.biz
	#
	###################

	function rah_replace($atts,$thing) {
		
		extract(lAtts(array(
			'from' => '',
			'to' => '',
			'delimiter' => ','
		),$atts));
		
		if($delimiter !== '') {
			$from = explode($delimiter,$from);
			$to = explode($delimiter,$to);
			$to = count($to) <= 1 ? implode('',$to) : $to;
		}
		
		return str_replace($from,$to,parse($thing));
	}
?>