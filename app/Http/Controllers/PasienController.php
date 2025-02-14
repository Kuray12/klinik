<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $myName = "nanda";
        $data['pasien'] = \App\Models\Pasien::latest()->paginate(10);
        return view('pasien_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * 
     */
    public function create()
    {
        $data['nama'] = "nanda";
        $data['umur'] = 19;
        $data['hobi'] = "tidur";
        return view('pasien_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * 
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * 
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     */
    public function destroy(string $id)
    {
        //
    }
}
