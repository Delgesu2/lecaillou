<?php

namespace Controller;

/**
* call page 404
*/
class CrashController
{
	
	function __invoke()
	{
		require __DIR__ . './../../templates/crash.html';
	}
}