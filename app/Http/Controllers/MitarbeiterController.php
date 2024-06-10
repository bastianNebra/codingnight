<?php

namespace App\Http\Controllers;

use App\Models\Mitarbeiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MitarbeiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //create a user
        $mitarbeiterValidation = Validator::make($request->all(),
            [
                'username'=> 'required',
                'bericht'=> 'required',
                'lohn'=> 'required',
                'age'=> 'required',
            ]
        );

        if($mitarbeiterValidation->fails()){
            return response()->json([
                'status'=> false,
                'message'=> $mitarbeiterValidation->errors()
            ],400);
        }

            $mitarbeiter = Mitarbeiter::create([
                'username'=> $request->username,
                'bericht' => $request->bericht,
                'lohn'=> $request->lohn,
                'age'=> $request->age
            ]);

            
            return response()->json([
                'status'=> true,
                'message'=> 'Mitarbeiter data create successfuly',
                'mitarbeiter'=> $mitarbeiter
            ], 201);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
