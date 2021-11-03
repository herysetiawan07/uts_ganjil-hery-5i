<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Program;
use App\Http\Resources\ProgramResource;

class ProgramController extends Controller
{
    public function index () {

        $data = Program::latest()->get();
        return response()->json([ProgramResource::collection($data),
        'Program Tidak ditemukan']);
    }
    public function store (Request $request) {
        $validator = Validator::make($request->all(),
        [ 'nama_obat' => 'required|string|max:255',
         'harga' => 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
         }

         $program = Program::create([
             'nama_obat'=>$request->nama_obat,
             'harga'=>$request->harga,

        ]);
        return response()->json(['Program created successfully.', new ProgramResource($program)]);
    }
}