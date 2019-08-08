<?php

namespace Controller;

/**
* calling view
*/
class ContactController
{
    /**
     * ContactController constructor.
     */
	public function __invoke()
	{
		require __DIR__ . './../../templates/contact.php';
	}
}
