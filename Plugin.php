<?php

namespace DamianLewis\Credits;

use DamianLewis\Credits\Models\Settings;
use DamianLewis\Credits\ReportWidgets\Credits;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
     * @inheritDoc
     */
    public function pluginDetails(): array
    {
        return [
            'name' => 'Credits',
            'description' => 'Manage the third-party attributions for the backend.',
            'author' => 'Damian Lewis',
            'icon' => 'icon-copyright'
        ];
    }

    /**
     * @inheritDoc
     */
    public function registerPermissions(): array
    {
        return [
            'damianlewis.credits.access_attributions' => [
                'tab' => 'Credits',
                'label' => 'Manage the third-party attributions'
            ]
        ];
    }

    /**
     * @inheritDoc
     */
    public function registerSettings(): array
    {
        return [
            'image_attributions' => [
                'label' => 'Image Attributions',
                'description' => 'Manage the backend image attributions.',
                'category' => 'Credits',
                'icon' => 'icon-creative-commons',
                'class' => Settings::class,
                'permissions' => ['damianlewis.credits.access_attributions'],
                'keywords' => 'credits',
                'order' => 1001
            ],
        ];
    }

    /**
     * @inheritDoc
     */
    public function registerReportWidgets(): array
    {
        return [
            Credits::class => [
                'label' => 'Credits',
                'context' => 'dashboard'
            ]
        ];
    }
}
