<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* programs & activities */
        $response['schedulesI'] = Schedule::where('day', 'I')->get();
        $response['schedulesII'] = Schedule::where('day', 'II')->get();
        $response['schedulesIII'] = Schedule::where('day', 'III')->get();
        $response['schedulesIV'] = Schedule::where('day', 'IV')->get();
        $response['schedulesV'] = Schedule::where('day', 'V')->get();
        $response['schedulesVI'] = Schedule::where('day', 'VI')->get();
        return view('site.schedule.index', $response);
    }


}
