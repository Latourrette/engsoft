<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Fork extends Model
{


    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'forks';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'restaurant',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

}
