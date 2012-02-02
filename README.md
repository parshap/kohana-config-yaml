# Kohana YAML Configuration Reader

## Compatibility

Kohana 3.2

## Usage

 1. Enable the module

        Kohana::modules(array(
            // ...
            'config-yaml' => MODPATH.'kohana-config-yaml',
        ));

 1. Attach a YAML configuration reader

        Kohana::$config->attach(new Config_YAML);
