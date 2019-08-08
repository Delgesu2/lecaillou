<?php

namespace Controller;

/**
* 
*/
class SentController
{
	
	public function __invoke()
	{
		require __DIR__ . './../../templates/messagesent.php';
	}
}