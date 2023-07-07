<?php namespace Moonwalkerz\Slider;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Moonwalkerz\Slider\Components\Slider' => 'slider'
        ];
    }
    public function registerPageSnippets()
    {
        return [
            'Moonwalkerz\Slider\Components\Slider' => 'slider'
        ];
    }
    public function registerSettings()
    {
    }
    public function registerPermissions()
    {
        return [
            'moonwalkerz.slider.access' => [
                'tab'   => 'moonwalkerz.slider::lang.plugin.tab',
                'label' => 'moonwalkerz.slider::lang.plugin.slider.access'
            ],
        ];
    }
}
