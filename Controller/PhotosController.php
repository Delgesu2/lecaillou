<?php

namespace Controller;

/**
* calling view
*/
class PhotosController
{
	
	public function __construct()
	{
		require __DIR__ . './../templates/photos.php';
	}
}
