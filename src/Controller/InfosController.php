<?php

namespace Controller;

/**
* calling view
*/
class InfosController
{
	
	public function __invoke()
	{
		require __DIR__ . './../../templates/infos.php';
	}
}
