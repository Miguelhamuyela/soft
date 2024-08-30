<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Accreditation;
use Illuminate\Http\Request;

class AccreditationController extends Controller
{
    
    public function create()
    {
      return view('site.accreditation.index');
    }

  

    

}
