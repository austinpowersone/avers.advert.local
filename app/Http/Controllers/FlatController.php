<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\User;
use App\Models\Role;
use App\Models\Advert;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $flats = Flat::with('type', 'schema', 'material', 'bathroom', 'balcony', 'state', 'reference_point', 'street', 'advert', 'region');
        Log::info($request->input());
        if(count($request->input()) > 0){
            if($request->has('street')){
                $street = json_decode($request->input('street'), true);                
                $flats->where('id_street', $street['id']);
            }

            if($request->has('region')){
                $region = json_decode($request->input('region'), true);                
                $flats->where('id_region', $region['id']);                
            }

            if($request->has('id')){
                $flats->where('id', $request->input('id'));
            }

            if ($request->has('phone')){
                //$user = User::where('phone', $request->input('phone'))->get();                
                //$advert = Advert::where('id_user', $user->id);
                //flats->where('id_advert', $advert->id);
            }

            if($request->has('type')){
                $type = json_decode($request->input('type'), true);
                $flats->where('id_type', $type['id']);
            }

            if(($request->has('rooms_from')) && ($request->has('rooms_to'))){
                $flats->whereBetween('count_of_rooms',[$request->input('rooms_from'), $request->input('rooms_to')]);
            }
            elseif (($request->has('rooms_from'))) {                
                $flats->where('count_of_rooms','>',$request->input('rooms_from'));
            }
            elseif (($request->has('rooms_to'))){                
                $flats->where('count_of_rooms', '<', $request->input('rooms_to'));
            }       

            if(($request->has('living_square')) && ($request->has('kitchen_square')) && ($request->has('total_square'))){
                $flats->where('living_square','>', $request->input('living_square'));
                $flats->where('kitchen_square','>', $request->input('kitchen_square'));
                $flats->where('total_square','>', $request->input('total_square'));
            }
            elseif (($request->has('living_square'))) {
                $flats->where('living_square','>', $request->input('living_square'));
            }
            elseif (($request->has('kitchen_square'))){
                $flats->where('kitchen_square','>', $request->input('kitchen_square'));
            }
            elseif (($request->has('total_square'))){
                $flats->where('total_square','>', $request->input('total_square'));
            }
            elseif (($request->has('total_square')) && ($request->has('kitchen_square'))){
                $flats->where('kitchen_square','>', $request->input('kitchen_square'));
                $flats->where('total_square','>', $request->input('total_square'));
            }
            elseif (($request->has('total_square')) && ($request->has('living_square'))){
                $flats->where('living_square','>', $request->input('living_square'));
                $flats->where('total_square','>', $request->input('total_square'));
            }
            elseif (($request->has('kitchen_square')) && ($request->has('living_square'))){
                $flats->where('living_square','>', $request->input('living_square'));
                $flats->where('kitchen_square','>', $request->input('kitchen_square'));
            }

            if(($request->has('price_from')) && ($request->has('price_to'))){
                $flats->whereBetween('cost',[$request->input('price_from'), $request->input('price_to')]);
            }
            elseif (($request->has('price_from'))) {                
                $flats->where('cost','>',$request->input('rooms_from'));
            }            
            elseif (($request->has('price_to'))){
                $flats->where('cost', '<', $request->input('price_to'));
            }

            if($request->has('floor_concrete')){
                $flats->where('floor', $request->input('floor_concrete'));
            }
            elseif (($request->has('floor_from')) && ($request->has('floor_to'))) {
                $flats->whereBetween('floor', [$request->input('floor_from'), $request->input('floor_to')]);
            }
            elseif ($request->has('floor_from')) {
                $flats->where('floor', '>', $request->input('floor_from'));
            }
            elseif ($request->has('floor_to')) {
                $flats->where('floor', '<', $request->input('floor_to'));
            }

            if($request->has('count_floor_concrete')){
                $flats->where('count_of_floor', $request->input('count_floor_concrete'));
            }
            elseif (($request->has('count_floor_from')) && ($request->has('count_floor_to'))) {
                $flats->whereBetween('count_of_floor', [$request->input('count_floor_from'), $request->input('count_floor_to')]);
            }
            elseif ($request->has('count_floor_from')) {
                $flats->where('count_of_floor', '>', $request->input('count_floor_from'));
            }
            elseif ($request->has('count_floor_to')) {
                $flats->where('count_of_floor', '<', $request->input('count_floor_to'));
            }

            
        }
        return $flats->get();
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
        $flat = Flat::with('type','schema','material','bathroom','balcony','state','reference_point','street','advert','region')->find($id);
        $user = User::find($flat->advert->id_user);
        $role = Role::find($user->id_role);       
        $send_data = 
        [
            'id' => $flat->id,
            'type' => $flat->type,
            'schema' => $flat->schema,
            'material' => $flat->material,
            'bathroom' => $flat->bathroom,
            'balcony' => $flat->balcony,
            'state' => $flat->state,
            'reference_point' => $flat->reference_point,
            'street' => $flat->street,
            'advert' => $flat->advert,
            'region' => $flat->region,
            'user' => $user,
            'role' => $role,
            'cost' => $flat->cost,
            'house_number' => $flat->house_number,
            'count_of_floor' => $flat->count_of_floor,
            'floor' => $flat->floor,
            'count_of_rooms' => $flat->count_of_rooms,
            'living_square' => $flat->living_square,
            'kitchen_square' => $flat->kitchen_square,
            'total_square' => $flat->total_square,
            'header' => $flat->header,
            'add_information' => $flat->add_information,
            'status' => $flat->advert->status
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