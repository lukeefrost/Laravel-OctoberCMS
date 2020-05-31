<?php namespace luke\resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return ['name' => 'luke', 'description' => 'Tutorial Work', 'author' => 'Luke', 'icon' => 'icon-leaf'];
    }

    public function registerComponents()
    {
        return [
            '\luke\resources\components\links' => 'resourcesLinks'
        ];
    }
}
