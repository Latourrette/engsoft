<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Restaurant
 * @package App
 */
class Restaurant extends Model
{

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'restaurants';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'contact', 'service_type', 'capacity', 'food_speciality', 'lat', 'lon'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    /**
     * A restaurant has many menus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menu()
    {
        return $this->hasMany(Menu::class, 'restaurant_id', 'id');
    }

    /**
     * A restaurant has one schedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function schedule()
    {
        return $this->hasOne(Schedule::class, 'restaurant_id', 'id');
    }

    /**
     * A restaurant has many reservations
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'restaurant_id', 'id');
    }


}
