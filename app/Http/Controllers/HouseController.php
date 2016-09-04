<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\User;
use App\Models\Role;
use App\Models\Advert;
use App\Models\Region_Type;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $houses = House::with('type','material','sewage','water','gas','electricity','state','reference_point','region','street','advert');
        Log::info($request->input());
        if(count($request->input()) > 0){
            if($request->has('street')){
                $street = json_decode($request->input('street'), true);                
                $houses->where('id_street', $street['id']);
            }
            if($request->has('region')){
                $region = json_decode($request->input('region'), true);                
                $houses->where('id_region', $region['id']);
            }            
            if($request->has('id')){
                $houses->where('id', $request->input('id'));
            }
            if($request->has('type')){
                $type = json_decode($request->input('type'), true);                
                $houses->where('id_type', $type['id']);
            }            
            if(($request->has('rooms_from')) && ($request->has('rooms_to'))){
                $houses->whereBetween('count_of_rooms',[$request->input('rooms_from'), $request->input('rooms_to')]);
            }
            elseif (($request->has('rooms_from'))) {                
                $houses->where('count_of_rooms','>',$request->input('rooms_from'));
            }            
            elseif (($request->has('rooms_to'))) {                
                $houses->where('count_of_rooms', '<', $request->input('rooms_to'));
            }            
            if(($request->has('price_from')) && ($request->has('price_to'))){
                $houses->whereBetween('cost',[$request->input('price_from'), $request->input('price_to')]);
            }
            elseif (($request->has('price_from'))) {                
                $houses->where('cost','>',$request->input('rooms_from'));
            }            
            elseif (($request->has('price_to'))){
                $houses->where('cost', '<', $request->input('price_to'));
            }
            if(($request->has('living_square')) && ($request->has('kitchen_square')) && ($request->has('total_square'))){
                $houses->where('living_square','>', $request->input('living_square'));
                $houses->where('kitchen_square','>', $request->input('kitchen_square'));
                $houses->where('total_square','>', $request->input('total_square'));
            }
            elseif (($request->has('living_square'))) {
                $houses->where('living_square','>', $request->input('living_square'));
            }
            elseif (($request->has('kitchen_square'))){
                $houses->where('kitchen_square','>', $request->input('kitchen_square'));
            }
            elseif (($request->has('total_square'))){
                $houses->where('total_square','>', $request->input('total_square'));
            }
            elseif (($request->has('total_square')) && ($request->has('kitchen_square'))){
                $houses->where('kitchen_square','>', $request->input('kitchen_square'));
                $houses->where('total_square','>', $request->input('total_square'));
            }
            elseif (($request->has('total_square')) && ($request->has('living_square'))){
                $houses->where('living_square','>', $request->input('living_square'));
                $houses->where('total_square','>', $request->input('total_square'));
            }
            elseif (($request->has('kitchen_square')) && ($request->has('living_square'))){
                $houses->where('living_square','>', $request->input('living_square'));
                $houses->where('kitchen_square','>', $request->input('kitchen_square'));
            }
            if($request->has('floor_concrete')){
                $houses->where('floor', $request->input('floor_concrete'));
            }
            elseif (($request->has('floor_from')) && ($request->has('floor_to'))) {
                $houses->whereBetween('floor', [$request->input('floor_from'), $request->input('floor_to')]);
            }
            elseif ($request->has('floor_from')) {
                $houses->where('floor', '>', $request->input('floor_from'));
            }
            elseif ($request->has('floor_to')) {
                $houses->where('floor', '<', $request->input('floor_to'));
            }
        }
        return $houses->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $house = House::with('type','material','sewage','water','gas','electricity','state','reference_point','region','street','advert')->find($id);        
        Log::info($house);
        $user = User::find($house->advert->id_user);
        $role = Role::find($user->id_role);        
        $send_data = 
        [
            'id' => $house->id,
            'advert' => $house->advert,
            'count_of_rooms' => $house->count_of_rooms,
            'type' => $house->type,
            'count_of_floors' => $house->count_of_floors,
            'living_square' => $house->living_square,
            'total_square' => $house->total_square,
            'kitchen_square' => $house->kitchen_square,
            'area_square' => $house->area_square,
            'cost' => $house->cost,
            'material' => $house->material,
            'sewage' => $house->sewage,
            'water' => $house->water,
            'gas' => $house->gas,
            'electricity' => $house->electricity,
            'state' => $house->state,
            'region' => $house->region,
            'reference_point' => $house->reference_point,
            'street' => $house->street,
            'house_number' => $house->house_number,
            'user' => $user,
            'role' => $role,
            'add_information' => $house->add_information,
            'header' => $house->header,
            'status' => $house->advert->status
        ];
        return $send_data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
