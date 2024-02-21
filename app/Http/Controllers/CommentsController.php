<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Product;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$comments = Comments::all();
        //return view("groceries.detail", compact('comments'));

        return view('groceries.detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if ($request->isMethod('post')) {
            $request->validate([
                'nombre' => 'required',
                'comentario' => 'required',
            ], [
                'nombre.required' => 'Proporciona nombre.',
                'comentario.required' => 'Favor de escribir el mensaje.',
            ]);
            $comment = new Comments();
            $comment->nombre = $request->input('nombre');
            $comment->comentario = $request->input('comentario');
            $comment->products_id = $request->input('product_id');
            $comment->save();
            return redirect()->route('detail', ['id' => $comment->products_id])->with('success', 'Tu comentario ha sido enviado.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
/*
        $product = Product::find($id);
        $comments = $product->comments; // Obtener todos los comentarios asociados con este producto
    
        dd($comments);

        return view("groceries.detail", compact('product', 'comments'));*/
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
