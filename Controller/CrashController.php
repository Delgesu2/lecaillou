<?php

namespace Controller;

/**
* call page 404
*/
class CrashController
{
	
	function __construct()
	{
		require __DIR__ . './../templates/crash.html';
	}
}