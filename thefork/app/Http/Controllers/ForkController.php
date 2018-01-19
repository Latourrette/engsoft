<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fork;

class ForkController extends Controller
{
    /**
     * Dependency Injection Fork Model
     * @var $fork
     */
    protected $fork;

    /**
     * Create a new controller instance.
     *
     * @param Fork $fork
     */
    public function __construct(Fork $fork)
    {
        $this->fork = $fork;
    }

    /**
     * Display all the restaurants
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $forks = $this->fork->all();
        $restaurant = [];
        foreach ($forks as $fork) {
            $restaurant[] = json_decode(file_get_contents($fork->restaurant));
        }
        return response()->json($restaurant);
    }

    /**
     * Displays a restaurant
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRestaurant($id)
    {
        $fork = $this->fork->find($id);

        if ($fork == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Restaurant not found!'
            ]);
        }
        $restaurant = json_decode(file_get_contents($fork->restaurant));
        return response()->json($restaurant);
    }


    /**
     * Deletes a restaurant
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteRestaurant($id)
    {
        $fork = $this->fork->find($id);

        if ($fork == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Menu not found!'
            ]);
        }

        $fork->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Menu removed with success!',
        ]);
    }


}
