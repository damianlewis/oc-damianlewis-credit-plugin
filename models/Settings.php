<?php

namespace DamianLewis\Credits\Models;

use Model;
use System\Behaviors\SettingsModel;

class Settings extends Model
{
    /**
     * @inheritDoc
     */
    public $implement = [
        SettingsModel::class
    ];

    /**
     * A unique key used for saving the settings in the database.
     *
     * @var string
     */
    public $settingsCode = 'credits_settings';

    /**
     * Reference to the field definitions file for the settings model.
     *
     * @var string
     */
    public $settingsFields = 'fields.yaml';
}
