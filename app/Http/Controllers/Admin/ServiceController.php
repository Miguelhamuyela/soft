<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Servece;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    
    
    public function index()
    {
        $response['services'] = Servece::get();
        $this->Logger->log('info', 'Listou  reda-car');
        return view('admin.service.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $this->Logger->log('info', 'Entrou em cadastrar  reda-car');
        return view('admin.service.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validation = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required|mimes:jpg,png,gif',
        ]);
        $file = $request->file('photo')->store('services');


        $services = Servece::create([
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $file,

        ]);
        $this->Logger->log('info', 'Cadastrou um Hospital com o nome ' . $services->name);
        
        return redirect("admin/services/show/$services->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $response['services'] = Servece::find($id);
        $this->Logger->log('info', 'Visualizou um Projecto com o identificador ' . $id);
        return view('admin.service.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $response['services'] = Servece::find($id);
        $this->Logger->log('info', 'Entrou em editar um Projecto com o identificador ' . $id);
        return view('admin.service.edit.index', $response);
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
            'name' => 'required',
            'description' => 'required',
            'photo' => 'mimes:jpg,png,gif',
        ]);
        if ($file = $request->file('photo')) {
            $file = $file->store('services');
        } else {
            $file = Servece::find($id)->photo;
        }

        Servece::find($id)->update([

            'name' => $request->name,
            'description' => $request->description,
            'photo' => $file,
        ]);

        $this->Logger->log('info', 'Editou  um Projecto com o identificador ' . $id);
        return redirect("admin/services/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um Projecto com o identificador ' . $id);
        Servece::find($id)->delete();

        return redirect()->back()->with('destroy', '1');
    }
}
