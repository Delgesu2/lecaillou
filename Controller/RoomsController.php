<?php

namespace Controller;

/**
* calling view
*/
class RoomsController
{
	
	public function __construct()
	{
		require __DIR__ . './../templates/chambres.php';
	}
}