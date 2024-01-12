<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Satting  $satting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $satting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Satting  $satting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $satting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Satting  $satting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $satting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Satting  $satting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $satting)
    {
        //
    }
    public function currency()
    {
        return view('settings.currency');
    }
    public function setting()
    {
        return view('settings.settings');
    }
}
