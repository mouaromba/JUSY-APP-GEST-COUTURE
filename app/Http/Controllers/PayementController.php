<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Modele;
use App\Models\Payement;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;

class PayementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Payement.liste', [
            'payements' => Payement::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Payement.formulaire', [
            'clients' => Client::all(),
            'modeles' => Modele::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reste = $request->prix - $request->avance;
        Payement::create([
            'date' => $request->date,
            'prix' => $request->prix,
            'avance' => $request->avavce,
            'reste' => $reste,
            'clients_id' => $request->clients_id,
            'modeles_id' => $request->modeles_id

           
    
        ]);
        return redirect()->route('gestion_payement.index'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Payement.show', [
            'finds' => Payement::find($id),
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
        return view('Payement.edit', [
            'finds' => Payement::find($id),
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
        return view('Payement.update', [
            'finds' => Payement::find($id),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('Payement.destroy', [
            'finds' => Payement::find($id),
        ]);
    }
}
