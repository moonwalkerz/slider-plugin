<?php namespace MoonWalkerz\Slider;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'MoonWalkerz\Slider\Components\Slider' => 'slider'
        ];
    }
    public function registerPageSnippets()
    {
        return [
            'MoonWalkerz\Slider\Components\Slider' => 'slider'
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
