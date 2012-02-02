<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Config_YAML extends Config_File {

	public function load($group)
	{
		$config = array();

		if ($files = Kohana::find_file($this->_directory, $group, 'yaml', TRUE))
		{
			foreach ($files as $file)
			{
				// Decode the YAML file
				$yaml = sfYaml::load($file);

				// Merge each file to the configuration array
				$config = Arr::merge($config, $yaml);
			}
		}

		return $config;
	}
}
