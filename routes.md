#
URL: /

`GET`
`App\Http\Controllers\RestaurantController@index`
#
URL: /menu/

`GET`
`App\Http\Controllers\MenuController@index`
#
URL: /menu/{id}

`GET`
`App\Http\Controllers\MenuController@getMenu`
#
URL: /menu

`POST`
`App\Http\Controllers\MenuController@createMenu`

Key | Value
-------- | ---
name | requerido, string
price | requerido, int
restaurant_id | int
#
URL: /menu/{id}

`PUT`
`App\Http\Controllers\MenuController@updateMenu`

Key | Value
-------- | ---
name | requerido, string
price | requerido, int
restaurant_id | int
#
URL: /menu/{id}

`DELETE`
`App\Http\Controllers\MenuController@deleteMenu`
#
URL: /reservation/

`GET`
`App\Http\Controllers\ReservationController@index`
#
URL: /reservation/{id}

`GET`
`App\Http\Controllers\ReservationController@getReservation`
#
URL: /reservation

`POST`
`App\Http\Controllers\ReservationController@createReservation`

Key | Value
-------- | ---
time_reserved | requerido, Date
number_people | requerido, smallint
restaurant_id | int
#
URL: /reservation/{id}

`PUT`
`App\Http\Controllers\ReservationController@updateReservation`

Key | Value
-------- | ---
time_reserved | requerido, Date
number_people | requerido, smallint
restaurant_id | int
#
URL: /reservation/{id}

`DELETE`
`App\Http\Controllers\ReservationController@deleteReservation`
#
