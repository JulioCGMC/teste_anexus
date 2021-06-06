<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Create a new instance of the given model.
     *
     * @param  array  $attributes
     * @param  bool  $exists
     * @return static
    */
    public static function create($attributes = [], $exists = false) {
        $user = static::query()->create(
            array_intersect_key($attributes, array_flip((new User)->getFillable())));
        if ($attributes['type'] == 'admin') {
            // echo'<pre>';var_dump($user->attributes).exit;
            $user->profile()->create(
                array_intersect_key($attributes, array_flip((new Admin)->getFillable())));
        }
        else {
            $user->profile()->create(
                array_intersect_key($attributes, array_flip((new Common)->getFillable())));
        }
        return $user;
    }

    /**
     * Get the profile associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile(): HasOne
    {
        $this->guard = $this->type;
        if ($this->type == 'common')
            return $this->hasOne(Common::class, 'id');
        else if ($this->type == 'admin')
            return $this->hasOne(Admin::class, 'id');
        return null;
    }
}
