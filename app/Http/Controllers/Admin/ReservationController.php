<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;
use App\Http\Requests\Reservation\ReservationRequest;
use App\Enums\TableStatus;
use App\Enums\TableLocation;
use Carbon\Carbon;
use DateTime;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = reservation::all();

        return view('admin.reservations.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tables = table::where('status',TableStatus::Avalaiable)->get();
        return view('admin.reservations.create',compact('tables'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){

            return back()->with('warning','Please choose the table base on guests');
        }
        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $reservation) {
            if( $reservation->res_date == $request_date){
                return back()->with('warning','This table is reserved for this');
            }
        }
        Reservation::create($request->validated());
        return to_route('admin.reservations.index')->with('success','Reservation created successfully!!');
    }

    public function edit(Reservation $reservation)
    {

        $tables = table::where('status',TableStatus::Avalaiable)->get();
        return view('admin.reservations.edit',compact('reservation','tables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){

            return back()->with('warning','Please choose the table base on guests');
        }
        $request_date = Carbon::parse($request->res_date);
        $reservations = $table->reservations()->where('id','!=',$reservation->id)->get();
        foreach ($reservations as $reservation) {
            if( $reservation->res_date == $request_date){
                return back()->with('warning','This table is reserved for this');
            }
        }
        $reservation->update($request->validated());
        return to_route('admin.reservations.index')->with('success','Reservation updated successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return to_route('admin.reservations.index')->with('danger','Reservation deleted!!');
    }
}
