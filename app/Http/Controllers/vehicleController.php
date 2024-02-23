<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $vehicle = Vehicle::all();
        // return view('vehicle.index', compact('vehicle'));
        $vehicle = Vehicle::all();

        return view('vehicle.index', compact('vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehicle.create');
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
        $this->validate($request, [
            'name' => 'required',
            // 'color'=>'required',
            // 'tire_wheel'=>'required',
            'price'=>'required',
        ]);

        Vehicle::create([
            'name' => $request->name,
            'color' => $request->color ?? 'black',
            'tire_wheel'=>$request->tire_wheel ?? 2,
            'machine'=>$request->machine,
            'price'=>$request->price
        ]);
        return redirect()->route('vehicle.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return view('vehicle.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return view('vehicle.edit', compact('vehicle'));
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
         //validate
         $this->validate($request,[
            'name'=> 'required',
            'color',
            'tire_wheel',
            'machine',
            'price' => 'required',
        ]);
        //get data by id
        $vehicle = Vehicle::findOrFail($id);
        //update data
        $vehicle->update([
            'name'=> $request->name,
            'color' => $request->color,
            'tire_wheel' => $request->tire_wheel,
            'machine' => $request->machine,
            'price' => $request->price
        ]);

        return redirect()->route('vehicle.index')->with(['success'=> 'Data Berhasil Disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        $vehicle->delete();

        return redirect()->route('vehicle.index')->with(['success' => 'Data berhasil di hapus']);
    }
}
