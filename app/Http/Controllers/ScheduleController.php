<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Auth;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Schedule::where('user_id',Auth()->id())->get();
        return view('layouts.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $list = new Schedule();
        $list->name = $request->name;
        $list->time = $request->time;
        $list->user_id = \Auth::user()->id;
        $list->save();
        return redirect()->back()->with(['success'=>'Kegiatan ' . $list->name . ' telah ditambahkan ke daftar']);
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
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = Schedule::findOrfail($id);
        $list->delete();
        return redirect()->back()->with(['danger'=>'Kegiatan ' . $list->name . ' telah dihapus dari daftar']);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
