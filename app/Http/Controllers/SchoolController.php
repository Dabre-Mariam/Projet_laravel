<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schools = School::all();
        return view('affichageEnregistrement', compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $school= New School();
        $school->nom= $request->input('nom');
        $school->prenom=$request->input('prenom');
        $school->email=$request->input('email');
        $school->titre=$request->input('titre');
       // $school->password= hash($request->input('password'));
        $school->password=bcrypt(request('password'));
        $school->save();
        if($school){
            redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $objet=School::find($id)->find($id);
        return view('affichageObjet', compact('objet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $objet=School::find($id)->find($id);
        return view('edit', compact('objet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $objet=School::find($id);
        $objet->nom= $request->input('nom');
        $objet->prenom=$request->input('prenom');
        $objet->email=$request->input('email');
        $objet->titre=$request->input('titre');
       // $objet->password= hash($request->input('password'));
        $objet->password=bcrypt(request('password'));
        $objet->update();
        if($objet){
            return view('affichageObjet', compact('objet'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $objet=School::find($id);
        $objet->delete();
        if($objet){
            return view('welcome');
        }
    }
}
