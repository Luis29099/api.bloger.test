<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index(){
        // $computers=Computer::included()->get();
        $computers=Computer::with(['apprentice']);
        return response()->json($computers);
    //     $computers=Computer::all();
    //     return response()->json($computers);
    // }
    // public function store(Request $request){
    //     $request->validate([
    //         'number' => 'required|max:255',
    //     'brand' => 'required|max:255',
    //     ]);
    //     $computers=Computer::create($request->all());
    //     return response()->json($computers);
    // }
    // public function show($id){
    //     $computers=Computer::findOrFail($id);
    }


}
