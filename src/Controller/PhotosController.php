<?php

namespace Controller;

/**
* calling view
*/
class PhotosController
{
	
	public function __invoke()
	{
		require __DIR__ . './../../templates/photos.php';
	}
}
