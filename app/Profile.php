<?php namespace App;

use Orchestra\Model\Eloquent;

class Profile extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_profile';
}
