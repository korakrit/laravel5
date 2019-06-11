<?php

namespace App\Http\Controllers;

use App\TypeBooks;
use Illuminate\Http\Request;

class TypeBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typebooks = TypeBooks::all();
        $count = TypeBooks::count();

        //แบ่งหน้า
        //$typebooks = TypeBooks::simplePaginate(3);
        $typebooks = TypeBooks::paginate(3);


        return view('typebooks.index', [
            'typebooks' => $typebooks,
            'count' => $count
            ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeBooks  $typeBooks
     * @return \Illuminate\Http\Response
     */
    public function show(TypeBooks $typeBooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeBooks  $typeBooks
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeBooks $typeBooks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeBooks  $typeBooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeBooks $typeBooks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeBooks  $typeBooks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //TypeBooks::find($id)->delete();
        TypeBooks::destroy($id);
        return back();
    }
}
