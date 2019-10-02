<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $devices = Device::all();

        return view('devices.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('devices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $device = new Device();
        $device->name = request('name');
        $device->serial_number = request('serial_number');
        $device->inventory_number = request('inventory_number');

        $device->save();

        return redirect('/devices');
    }

    /**
     * Display the specified resource.
     *
     * @param Device $device
     * @return Response
     */
    public function show(Device $device)
    {
        return view('devices.show', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Device $device
     * @return Response
     */
    public function edit(Device $device)
    {

        return view('devices.edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Device $device
     * @return Response
     */
    public function update(Request $request, Device $device)
    {
        $device->update(request(['name', 'serial_number', 'inventory_number', 'description']));

        return redirect('/devices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Device $device
     * @return Response
     */
    public function destroy(Device $device)
    {
        $device->delete();

        return redirect('/devices');
    }
}
