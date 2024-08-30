<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Classes\Random;
use App\Http\Controllers\Controller;
use App\Models\Signup;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use PDF;

class SignupController extends Controller
{
    private $Logger;
    private $random;

    public function __construct()
    {
        $this->Logger = new Logger();
        $this->random = new Random();
    }

    public function list()
    {
        $response['signups'] = Signup::orderBy('id', 'desc')->get();

        //Logger
        $this->Logger->log('emergency', 'Listou as Inscrições');
        return view('admin.signup.list.index', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['signup'] = Signup::find($id);

        //Logger
        $this->Logger->log(
            'emergency',
            'Visualizar um registo com o identificador ' . $id
        );
        return view('admin.signup.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['signup'] = Signup::find($id);
        //Logger
        $this->Logger->log(
            'emergency',
            'Entrou em editar um registo com o identificador ' . $id
        );
        return view('admin.signup.edit.index', $response);
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
        $validation = $request->validate([
            'idcard' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'photo' => 'mimes:jpg,png,jpeg,svg,gif',
            'category' => 'required|string|max:255'
        ]);

        if ($file = $request->file('photo')) {
            $img = Image::make($file)->resize(428, 395);
            $namefile = $this->random->AlphaNumeric(8) . '.jpg';
            $img->save('../storage/app/public/signups/' . $namefile);
            $file = 'signups/' . $namefile;
        } else {
            $file = Signup::find($id)->photo;
        }

        Signup::find($id)->update([
            'photo' => $file,
            'name' => $request->name,
            'country' => $request->country,
            'email' => $request->email,
            'idcard' => $request->idcard,
            'status' => $request->status,
            'category' => $request->category
        ]);

      
        //Logger
        $this->Logger->log(
            'emergency',
            'Editou um registo com o identificador ' . $id
        );

        return redirect()
            ->route('admin.signup.show', $id)
            ->with('edit', '1');
    }


    public function report(Request $request){

        $response['checkbox'] = $request->all();



        //Start Filter by category 


        //ORGANIZER

        $response['totalInvited']=Signup::where(
            [
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();

        $response['totalPress']=Signup::where(
            [
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
            ]
        )->get();

        $response['totalTechnicalSuporte']=Signup::where(
            [
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'APOIO TÉCNICO'.'%']
            ]
        )->get();

        $response['totalOrganizer']=Signup::where(
            [
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
            ]
        )->get();

        //End Start Filter by category 


        //filter by coutry

        $response['totalAngola']=Signup::where(
            [
                ['country','LIKE','%'.'angola'.'%'],
                ['status','!=','RECUSADO']
            ]
        )->get();

        $response['totalPortugal']=Signup::where(
            [
                ['country','LIKE','%'.'portugal'.'%'],
                ['status','!=','RECUSADO']
            ]
        )->get();

        $response['totalBrasil']=Signup::where(
            [
                ['country','LIKE','%'.'brasil'.'%'],
                ['status','!=','RECUSADO']
            ]
        )->get();

        $response['totalCaboVerde']=Signup::where(
            [
                ['country','LIKE','%'.'cabo verde'.'%'],
                ['status','!=','RECUSADO']
            ]
        )->get();

        $response['totalGuineBissau']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné-Bissau'.'%'],
                ['status','!=','RECUSADO']
            ]
        )->get();

        $response['totalGuineEquatorial']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné Equatoria'.'%'],
                ['status','!=','RECUSADO']
            ]
        )->get();

        $response['totalMoz']=Signup::where(
            [
                ['country','LIKE','%'.'Moçambique'.'%'],
                ['status','!=','RECUSADO']
            ]
        )->get();

        $response['totalSaoTome']=Signup::where(
            [
                ['country','LIKE','%'.'São Tomé e Príncipe'.'%'],
                ['status','!=','RECUSADO']
            ]
        )->get();

        $response['totalTimorLeste']=Signup::where(
            [
                ['country','LIKE','%'.'Timor-leste'.'%'],
                ['status','!=','RECUSADO']
            ]
        )->get();

        //End Filter by country


        //Start Filter by category per country


        //Angola

        $response['totalAngolaPress']=Signup::where(
            [
                ['country','LIKE','%'.'angola'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
            ]
        )->get();

        $response['totalAngolaInvited']=Signup::where(
            [
                ['country','LIKE','%'.'angola'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();

        $response['totalAngolaOrganizer']=Signup::where(
            [
                ['country','LIKE','%'.'angola'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
               
            ]
        )->get();

        $response['totalAngolaTechnicalSuport']=Signup::where(
            [
                ['country','LIKE','%'.'angola'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'APOIO TÉCNICO'.'%']

            ]
        )->get();

        //End Angola



        //Portugal
        $response['totalPortugalPress']=Signup::where(
            [
                ['country','LIKE','%'.'portugal'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
                
            ]
        )->get();

        $response['totalPortugalIvented']=Signup::where(
            [
                ['country','LIKE','%'.'portugal'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();

        $response['totalPortugalOrganizer']=Signup::where(
            [
                ['country','LIKE','%'.'portugal'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
              
            ]
        )->get();

        $response['totalPortugalTechnicalSuporte']=Signup::where(
            [
                ['country','LIKE','%'.'portugal'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'APOIO TÉCNICO'.'%']
            ]
        )->get();

        //End Portugal


        //START BRASIL

        $response['totalBrasilPress']=Signup::where(
            [
                ['country','LIKE','%'.'brasil'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
            ]
        )->get();

        $response['totalBrasilInvited']=Signup::where(
            [
                ['country','LIKE','%'.'brasil'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();

            
        $response['totalBrasilOrganizer']=Signup::where(
            [
                ['country','LIKE','%'.'brasil'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
            ]
        )->get();

        $response['totalBrasilTechnicalSuporte']=Signup::where(
            [
                ['country','LIKE','%'.'brasil'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'APOIO TÉCNICO'.'%']
            ]
        )->get();

        //END BRASIL

        //START CABO VERDE

        $response['totalCaboVerdePress']=Signup::where(
            [
                ['country','LIKE','%'.'cabo verde'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
            ]
        )->get();

        $response['totalCaboVerdeInvited']=Signup::where(
            [
                ['country','LIKE','%'.'cabo verde'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();

        $response['totalCaboVerdeOrganizer']=Signup::where(
            [
                ['country','LIKE','%'.'cabo verde'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
            ]
        )->get();

        $response['totalCaboVerdeTechnicalSuporte']=Signup::where(
            [
                ['country','LIKE','%'.'cabo verde'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'APOIO TÉCNICO'.'%']
            ]
        )->get();

        //END CABO VERDE


        
        //START GUINEBISSAU
        $response['totalGuineBissauPress']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné-Bissau'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
            ]
        )->get();


        $response['totalGuineBissauInvited']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné-Bissau'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();


        $response['totalGuineBissauOrganizer']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné-Bissau'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
            ]
        )->get();

        $response['totalGuineBissauTechnicalSuporte']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné-Bissau'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'APOIO TÉCNICO'.'%']
            ]
        )->get();

        //END GUINE BISSAU


        //START GUINE EQUATORIAL
        $response['totalGuineEquatorialPress']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné Equatoria'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
            ]
        )->get();


        $response['totalGuineEquatorialInvited']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné Equatoria'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();


        $response['totalGuineEquatorialOrganizer']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné Equatoria'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
            ]
        )->get();

        $response['totalGuineEquatorialTechnicalSuporte']=Signup::where(
            [
                ['country','LIKE','%'.'Guiné Equatoria'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'APOIO TÉCNICO'.'%']
            ]
        )->get();

        //END GUINE EQUATORIAL



        //START MOZ

        $response['totalMozPress']=Signup::where(
            [
                ['country','LIKE','%'.'Moçambique'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
            ]
        )->get();

        $response['totalMozInvited']=Signup::where(
            [
                ['country','LIKE','%'.'Moçambique'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();


        $response['totalMozOrganizer']=Signup::where(
            [
                ['country','LIKE','%'.'Moçambique'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
            ]
        )->get();

        $response['totalMozTechnicalSuporte']=Signup::where(
            [
                ['country','LIKE','%'.'Moçambique'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'APOIO TÉCNICO'.'%']
            ]
        )->get();

        //END MOZ


        //START SAO TOME
        $response['totalSaoTomePress']=Signup::where(
            [
                ['country','LIKE','%'.'São Tomé e Príncipe'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
            ]
        )->get();

        $response['totalSaoTomeInvited']=Signup::where(
            [
                ['country','LIKE','%'.'São Tomé e Príncipe'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();

        $response['totalSaoTomeOrganizer']=Signup::where(
            [
                ['country','LIKE','%'.'São Tomé e Príncipe'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
            ]
        )->get();

        $response['totalSaoTomeTechnicalSuporte']=Signup::where(
            [
                ['country','LIKE','%'.'São Tomé e Príncipe'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'APOIO TÉCNICO'.'%']
            ]
        )->get();

        //END SAO TOME


        //START TIMOR LESTE
        $response['totalTimorLestePress']=Signup::where(
            [
                ['country','LIKE','%'.'Timor-leste'.'%'],
                ['status','!=','RECUSADO'],
                ['category','LIKE','%'.'IMPRENSA'.'%']
            ]
        )->get();

        $response['totalTimorLesteInvited']=Signup::where(
            [
                ['country','LIKE','%'.'Timor-leste'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'CONVIDADO'.'%']
            ]
        )->get();

        $response['totalTimorLesteOrganizer']=Signup::where(
            [
                ['country','LIKE','%'.'Timor-leste'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'ORGANIZAÇÃO'.'%']
            ]
        )->get();

        $response['totalTimorLesteTechnicalSuporte']=Signup::where(
            [
                ['country','LIKE','%'.'Timor-leste'.'%'],
                ['status','!=','RECUSADO'],
                 ['category','LIKE','%'.'APOIO TÉCNICO'.'%']
            ]
        )->get();
                // END TIMOR LESTE




        


        //End Start Filter by category per country



        if ($request->category == 'all') {

            $response['signups'] = Signup::where([
                ['status','!=','RECUSADO']
            ])->orderBy('country', 'ASC')->orderBy('category', 'ASC')->orderBy('name', 'ASC')->get();

        }else{

            if($request->category == 'CONVIDADO'){
                $response['signups'] = Signup::where(

                    [

                    ['category','LIKE', '%'."CONVIDADO".'%'],
                    ['status','!=','RECUSADO']

                    ]

                )->orderBy('country', 'ASC')->orderBy('category', 'ASC')->orderBy('name', 'ASC')->get();

            }else if($request->category == 'ORGANIZAÇÃO'){

                $response['signups'] = Signup::where(

                    [

                    ['category','LIKE', '%'."ORGANIZAÇÃO".'%'],
                    ['status','!=','RECUSADO']

                    ]

                )->orderBy('country', 'ASC')->orderBy('category', 'ASC')->orderBy('name', 'ASC')->get();
                
            }else if($request->category == 'IMPRENSA'){

                $response['signups'] = Signup::where(

                    [

                    ['category','LIKE', '%'."IMPRENSA".'%'],
                    ['status','!=','RECUSADO']

                    ]

                )->orderBy('country', 'ASC')->orderBy('category', 'ASC')->orderBy('name', 'ASC')->get();

            }else{

                $response['signups'] = Signup::where(

                    [

                    ['category','LIKE', '%'."APOIO TÉCNICO".'%'],
                    ['status','!=','RECUSADO']

                    ]

                )->orderBy('country', 'ASC')->orderBy('category', 'ASC')->orderBy('name', 'ASC')->get();

            }

        }



        //Logger
        $this->Logger->log('info', 'Imprimiu lista de Relatório');
        
        $pdf = PDF::loadview('pdf.report.index', $response);
        return $pdf->setPaper('a3', 'landscape')->stream('pdf');
    }

}
