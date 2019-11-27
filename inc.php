<?php
	$cigar		= explode("\n", file_get_contents('conf'));
	$cigar		= $cigar[0];
	function cricket($klobot, $cigar){
		$sebat	= "";
		$klobot	= base64_decode($klobot);
		for($i=0; $i<strlen($klobot); $i++){
			$tobacco	= substr($klobot, $i, 1);
			$cigaro		= substr($cigar, ($i % strlen($cigar))-1, 1);
			$tobacco	= chr(ord($tobacco)-ord($cigaro));
			$sebat.=$tobacco;
		}
		return $sebat;
	}
	?>