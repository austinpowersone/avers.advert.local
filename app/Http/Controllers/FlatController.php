<?php

namespace App\Http\Controllers;

use App\Models\Flat;
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
                Log::info($street['title']);
                $flats->where('id_street', $street['id']);
            }
            if($request->has('region')){
                $region = json_decode($request->input('region'), true);
                Log::info($region['title']);
                $flats->where('id_region', $region['id']);
            }            
            if($request->has('id')){
                Log::info($request->input('id'));
            }
            if($request->has('type')){
                $type = json_decode($request->input('type'), true);
                Log::info($type['title']);
                $flats->where('id_type', $type['id']);
            }
            if($request->has('rooms_from') && ($request->has('rooms_to'))){
                $flats->whereBetween('count_of_rooms',[$request->input('rooms_from'), $request->input('rooms_to')]);
            }else{
                if($request->has('rooms_from')){
                Log::info($request->input('rooms_from'));
                $flats->where('count_of_rooms','>',$request->input('rooms_from'));
            }
            if($request->has('rooms_to')){
                Log::info($request->input('rooms_to'));
                $flats->where('count_of_rooms', '<', $request->input('rooms_to'));
            }
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
        return $flat;
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
