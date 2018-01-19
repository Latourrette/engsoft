<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * @package App
 */
class Reservation extends Model
{

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'reservations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time_reserved',
        'number_people',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'restaurant_id',
    ];

    /**
     * A menu has one restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }


}
