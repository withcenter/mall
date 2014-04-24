<?php


	if ( admin() && config_page() ){
		echo "<link rel='stylesheet' href='" . x::url() . "/module/mall/mall.css'>";
		include 'menu.php';
	}
	