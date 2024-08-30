<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Signup;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;


class CredencialController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }


    /**
     * Display a verify with certified QrScan
     *
     * @return \Illuminate\Http\Response
     */
    public function verify($code)
    {
        $response['signup'] = Signup::where('code',$code)->first();

        return view('site.verify.index', $response);
    }

    
    /**
     * Print the Certified
     *
     * @return \Illuminate\Http\Response
     */
    public function print($code)
    {

        $response['signup'] = Signup::where('code', $code)->first();
        if($response['signup']->status == 'APROVADO'){

            if($response['signup']->category == 'CONVIDADO'){

                $response['background'] = '#100160';
                $response['color'] = '#FFFFFF';

            }elseif($response['signup']->category == 'ORGANIZAÇÃO'){

                $response['background'] = '#100160';
                $response['color'] = '#FFFFFF';
            }elseif($response['signup']->category == 'APOIO TÉCNICO'){
                $response['background'] = '#4D1933';
                $response['color'] = '#fff';

            }elseif($response['signup']->category == 'IMPRENSA'){

                $response['background'] = 'rgb(255, 215, 0)';
                $response['color'] =  '#000';
            }

            $response['qrcode'] = QrCode::size(130)->backgroundColor(0,0,0,0)->generate(route('admin.credencial.verify',$code));
            $pdf = PDF::loadView('pdf/credencial/index', $response);
            $pdf->setPaper('A6', 'portrait');
           
            //Logger
            $this->Logger->log('emergency', 'Imprimiu uma credencial com o código: '.$response['signup']->code);
            return $pdf->stream('credenciamento-' . $response['signup']->code . ".pdf");

        }else{
    
            return redirect()->route('login')->with('NoAuth', '1');
        }

    }


}

