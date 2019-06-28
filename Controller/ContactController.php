<?php

namespace Controller;

/**
* calling view
*/
class ContactController
{
	
	public function __construct()
	{
		require __DIR__ . './../templates/contact.php';
	}
}
