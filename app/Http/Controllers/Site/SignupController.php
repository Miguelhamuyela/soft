<?php

namespace App\Http\Controllers\Site;

use App\Classes\Random;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Models\Signup;
use App\Models\SlideShow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSignUp;
use Intervention\Image\ImageManagerStatic as Image;

class SignupController extends Controller
{
    private $random;
    public function __construct()
    {
        $this->random = new Random();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['slideshows'] = SlideShow::orderBy('id', 'desc')
            ->limit(3)
            ->get();
        return view('site.signup.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SignupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignupRequest $request)
    {
        $response['code'] = $this->random->AlphaNumeric(6);
        $nameFile = $response['code'] . '.jpg';

        //RESIZE PHOTO
        $img = Image::make($request->file('photo'))->resize(428, 395);
        $img->save('../storage/app/public/signups/' . $nameFile);

        $signup = Signup::create([
            'photo' => 'signups/' . $nameFile,
            'name' => $request->name,
            'country' => $request->country,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'email' => $request->email,
            'idcard' => $request->idcard,
            'code' => $response['code'],
        ]);
        Mail::to($signup->email)->send(new MailSignUp($signup));
        return redirect()
            ->back()
            ->with('create', '1');
    }
}
