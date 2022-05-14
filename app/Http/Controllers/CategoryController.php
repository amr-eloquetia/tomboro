<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => 'required|min:3',
            'parent_id' => 'required'
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'message' => 'Check the errors below',
                'status' => 'error'
            ]);
            dd($validator->errors());
            return Redirect::back()->withInput()->exceptInput('password')->withErrors($validator->errors());
        }

        // $category->name = $data['name'];
        // $category->parent_id = $data['parent_id'];
        $category = Category::create($data);


        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Category Created'
        ]);
        return Redirect::back();
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $category = Category::find($id);
        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => 'required|min:3',
            'parent_id' => 'required'
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'message' => 'Check the errors below',
                'status' => 'error'
            ]);
            dd($validator->errors());
            return Redirect::back()->withInput()->exceptInput('password')->withErrors($validator->errors());
        }

        $category->name = $data['name'];
        $category->parent_id = $data['parent_id'];
        $category->save();

        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Category updated'
        ]);
        return Redirect::back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('dashboard.categories')->with('success', 'category deleted');
    }
}
