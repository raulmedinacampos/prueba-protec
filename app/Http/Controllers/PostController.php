<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

//use App\Models\Post;

class PostController extends Controller {
    public function records() {
        $data = array();
        $data['entradas'] = PostModel::all();
        return view('posts.list', $data);
    }
    
    public function details($id) {
        $state = false;
        $data = array();
        $entrada = PostModel::where('id', $id)->first();
        $entrada->fecha = date('d/m/Y', strtotime($entrada->fecha));
        if ( !empty($entrada)) {
            $state = true;
        }
        $data['status'] = $state;
        $data['response'] = $entrada;
        return response()->json($data);
    }
    
    public function new() {
        return view('posts.new');
    }
    
    public function save(Request $request) {
        $state = false;
        $data = array();
        
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'autor' => 'required',
            'fecha' => 'required',
            'contenido' => 'required',
        ]);
        
        if ( $validator->fails() ) {
            return response()->json($validator->errors(), 400);
        }
        
        $req = (object)$request->all();
        $post = PostModel::create([
            'titulo'    => $req->titulo,
            'autor'     => $req->autor,
            'fecha'     => $req->fecha,
            'contenido' => $req->contenido
        ]);
        
        if ( $post ) {
            $state = true;
        }
        
        $data['status'] = $state;
        $data['mensaje'] = "Entrada agregada";
        
        return response()->json($data);
    }
}