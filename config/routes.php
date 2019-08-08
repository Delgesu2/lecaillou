<?php

return [
	'homepage' => [
		'path'       => '/',
		'controller' => \Controller\HomeController::class
	],

	'rooms'   => [
		'path'       => '/rooms',
		'controller' => \Controller\RoomsController::class
	],

	'photos'  => [
		'path'       => '/photos',
		'controller' => \Controller\PhotosController::class
	],

	'contact' => [
		'path'      => '/contact',
		'controller'=> \Controller\ContactController::class
	],

	'mailer'  => [
		'path'      => '/send',
		'controller'=> \Controller\MailerController::class
	],  

	'sent'    => [
		'path'      => '/sent',
		'controller'=> \Controller\SentController::class
	],

	'infos'   => [
		'path'      => '/infos',
		'controller'=> \Controller\InfosController::class
	],

	'blog'   => [
		'path'      => '/blog',
		'controller'=> \Controller\BlogController::class
	],

	'404'    => [
		'path'      => '/crash',
		'controller'=> \Controller\CrashController::class
	],

    'book'   => [
        'path'      => '/book',
        'controller'=> \Controller\BookController::class
    ],

    'create' => [
        'path'      => '/create',
        'controller'=> \Controller\CreateController::class
    ]
];