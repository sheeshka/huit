<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::paginate(10)
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
        return view('admin.categories.create', [
            'category'   => [],
            'categories' => Category::with('children')->where('parent_id', '0')->get(),
            'delimiter'  => ''
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
        Category::create($request->all());

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function show(Caregory $caregory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function edit(Caregory $caregory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caregory $caregory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caregory $caregory)
    {
        //
    }
}
