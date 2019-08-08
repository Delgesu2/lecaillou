<?php

namespace Controller;

/**
* calling landing page
*/
class HomeController
{
	
	public function __invoke()
	{
		require __DIR__ . './../../templates/accueil.php';
	}
}