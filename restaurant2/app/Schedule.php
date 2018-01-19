<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * @package App
 */
class Schedule extends Model
{

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'schedules';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'weekday_open', 'weekday_close', 'weekend_open', 'weekend_close',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'created_at', 'updated_at', 'restaurant_id',
    ];

    /**
     * A Schedule has one restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }


}
