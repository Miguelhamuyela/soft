<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Doc;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Schedule;
use App\Models\Signup;
use App\Models\SlideShow;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['slideFirst'] = SlideShow::orderBy('id', 'desc')->first();
        if ($response['slideFirst']){
            $response['slideshows'] = SlideShow::where('id','!=',$response['slideFirst']->id)->orderBy('id', 'desc')->get();
        }
        
        $response['about'] = About::first();
        $response['galleries'] = Gallery::orderBy('id', 'desc')->limit(3)->get();
        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(3)->get();
        $response['docs'] = Doc::orderBy('id', 'desc')->get();
        $response['signup'] =  Signup::count();


        /* programs & activities */
        $response['schedulesI'] = Schedule::where('day', 'I')->get();
        $response['schedulesII'] = Schedule::where('day', 'II')->get();
        $response['schedulesIII'] = Schedule::where('day', 'III')->get();
        $response['schedulesIV'] = Schedule::where('day', 'IV')->get();
        $response['schedulesV'] = Schedule::where('day', 'V')->get();
        $response['schedulesVI'] = Schedule::where('day', 'VI')->get();

       
    
        return view('site.home.index', $response);
    }
}
