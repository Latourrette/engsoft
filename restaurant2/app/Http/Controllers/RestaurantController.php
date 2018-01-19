<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{

    /**
     * Dependency Injection Restaurant Model
     * @var $restaurant
     */
    protected $restaurant;

    /**
     * Create a new controller instance.
     *
     * @param Restaurant $restaurant
     */
    public function __construct(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant::with(['schedule'])->get();;
    }

    /**
     * Display the restaurant
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $restaurant = $this->restaurant->all();

        return response()->json($restaurant);
    }

}
