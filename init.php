<?php defined('SYSPATH') or die('No direct script access.');

// Add an autoload handler to load Symfony YAML files
spl_autoload_register(function($class) {

	$file = str_replace('\\', '/', $class);

	if ($path = Kohana::find_file('vendor', 'symfony-yaml/lib/'.$file))
	{
		// Load the file
		require $path;

		return TRUE;
	}

	return FALSE;
});
