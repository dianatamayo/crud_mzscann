<?php

Class MainController{

	public function mainPage(){
		require_once("views/include/header.php");
		require_once("views/dashboard.php");
		require_once("views/include/footer.php");
	}
}

?>
