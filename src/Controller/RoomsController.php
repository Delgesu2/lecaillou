<?php

namespace Controller;

/**
* calling view
*/
class RoomsController
{
	
	public function __invoke()
	{
		require __DIR__ . './../../templates/chambres.php';
	}
}