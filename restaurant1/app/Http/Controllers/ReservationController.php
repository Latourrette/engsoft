<?php

namespace App\Http\Controllers;

use App\Reservation;

class ReservationController extends Controller
{
    /**
     * Dependency Injection Reservation Model
     * @var $menu
     */
    protected $reservation;

    /**
     * Create a new controller instance.
     *
     * @param Reservation $reservation
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Display all the reservations
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $reservation = $this->reservation->all();

        return response()->json($reservation);
    }

    /**
     * Displays a reservation
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getReservation($id)
    {
        $reservation = $this->reservation->find($id);

        if ($reservation == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Reservation not found!'
            ]);
        }

        return response()->json($reservation);
    }


    /**
     * Creates a Reservations
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMenu(Request $request)
    {
        $reservation = $this->reservation->create($request->all());

        return response()->json($reservation);
    }

    /**
     * Deletes a Menu
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMenu($id)
    {
        $reservation = $this->reservation->find($id);

        if ($reservation == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Reservation not found!'
            ]);
        }

        $reservation->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Reservation removed with success!',
        ]);
    }

    /**
     * Updates a Reservation
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateMenu(Request $request, $id)
    {
        $reservation = $this->reservation->find($id);

        if ($reservation == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Reservation not found!'
            ]);
        }

        $reservation->time_reserved = $request->input('time_reserved');
        $reservation->number_people = $request->input('number_people');

        $reservation->save();

        return response()->json($reservation);
    }
}
