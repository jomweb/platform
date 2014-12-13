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

    /**
     * Belongs to relationship to users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
