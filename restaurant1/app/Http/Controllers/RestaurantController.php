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

    /**
     * Updates a Restaurant
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateRestaurant(Request $request, $id)
    {
        $restaurant = $this->restaurant->find($id);

        if ($restaurant == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Restaurant not found!'
            ]);
        }

        $restaurant->name = $request->input('name');
        $restaurant->address = $request->input('address');
        $restaurant->contact = $request->input('contact');
        $restaurant->service_type = $request->input('service_type');
        $restaurant->capacity = $request->input('capacity');
        $restaurant->food_speciality = $request->input('food_speciality');


        $restaurant->save();

        return response()->json($restaurant);
    }



}
