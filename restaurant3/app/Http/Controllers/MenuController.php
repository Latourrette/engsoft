<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Dependency Injection Menu Model
     * @var $menu
     */
    protected $menu;

    /**
     * Create a new controller instance.
     *
     * @param Menu $menu
     */
    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    /**
     * Display all the menus
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $menu = $this->menu->all();

        return response()->json($menu);
    }

    /**
     * Displays a menu
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMenu($id)
    {
        $menu = $this->menu->find($id);

        if ($menu == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Menu not found!'
            ]);
        }

        return response()->json($menu);
    }


    /**
     * Creates a Menu
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMenu(Request $request)
    {
        $menu = $this->menu->create($request->all());

        return response()->json($menu);
    }

    /**
     * Deletes a Schedule
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMenu($id)
    {
        $menu = $this->menu->find($id);

        if ($menu == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Menu not found!'
            ]);
        }

        $menu->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Menu removed with success!',
        ]);
    }

    /**
     * Updates a Schedule
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateMenu(Request $request, $id)
    {
        $menu = $this->menu->find($id);

        if ($menu == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Menu not found!'
            ]);
        }

        $menu->name = $request->input('name');
        $menu->price = $request->input('price');

        $menu->save();

        return response()->json($menu);
    }

}
