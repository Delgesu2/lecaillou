<?php

namespace Controller;

/**
* calling landing page
*/
class HomeController
{
	
	public function __construct()
	{
		require __DIR__ . './../templates/accueil.php';
	}
}