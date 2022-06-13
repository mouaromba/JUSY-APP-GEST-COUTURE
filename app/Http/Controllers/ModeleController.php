<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;


class ModeleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Modele.liste', [
            'modeles' => Modele::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Modele.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Modele::create([
            'nom' => $request->nom,
            'prix' => $request->prix,
            'photo' => $request->photo->store('img_gestion_modele', 'public')
        ]);
        return redirect()->route('gestion_modele.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Modele.show', [
            'finds' => Modele::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Modele.edit', [
            'finds' => Modele::find($id),
        ]);
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
        $mdl = Modele::find($id);
        $mdl->update($request->all());

        return redirect()->route('gestion_modele.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('Modele.destroy', [
            'finds' => Modele::find($id),
        ]);

        return redirect()->route('gestion_modele.index');
    }
}
