<?php namespace MoonWalkerz\Slider\Models;

use Model;

/**
 * Model
 */
class Slideshow extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'moonwalkerz_slider_slideshows';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $jsonable = ['payload', 'responsive'];
}
