<?php namespace App;

use Orchestra\Model\User as Eloquent;

class User extends Eloquent
{
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['profile'];

    /**
     * Has one relationship to user profile.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }
}
