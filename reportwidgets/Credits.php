<?php

namespace DamianLewis\Credits\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use DamianLewis\Credits\Models\Settings;

class Credits extends ReportWidgetBase
{
    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('widget');
    }

    /**
     * @inheritDoc
     */
    public function defineProperties(): array
    {
        return [
            'title' => [
                'title' => 'Title',
                'type' => 'string',
                'default' => 'Credits'
            ]
        ];
    }

    /**
     * Defines the variables required by the rendered partial.
     *
     * @return void
     */
    protected function prepareVars()
    {
        $this->vars['imageAttributions'] = $this->getImageAttributions();
    }

    /**
     * Returns the image attributions.
     *
     * @return array
     */
    protected function getImageAttributions(): array
    {
        $imageAttributions = Settings::get('image_attributions');

        return $imageAttributions;
    }
}
