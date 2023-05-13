<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\assignment;
use App\Models\admin;
use App\Models\client;

class createproject extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
        $data = assignment::all();
        return view('assignment.create_project',compact('data'));
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try{
        $data = assignment::all();
        $dataadmin = admin::all();
        $dataclient = client::all();
        return view('assignment.create',compact('data','dataadmin','dataclient'));
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = assignment::create([
                'title' => request('title'),
                'description' => request('description'),
                'deadline' => request('deadline'),
                'status' => request('status'),
                'admin_id' => request('admin_id'),
                'client_id' => request('client_id'),
            ]);
            return redirect()->route('assignment.create_project',compact('data'));
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,Request $request)
    {
        try{
        $data = assignment::findOrFail($id);
        $dataadmin = admin::get();
        $dataclient = client::get();
        return view('assignment.edit',compact('data','dataadmin','dataclient'));
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $id = request('id');
            $data = assignment::find($id);
            $data->update([
                'title' => request('title'),
                'description' => request('description'),
                'deadline' => request('deadline'),
                'status' => request('status'),
                'admin_id' => request('admin_id'),
                'client_id' => request('client_id'),
            ]);
            return redirect()->route('assignment.create_project',compact('data'));
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        try{
        $id = request('id');
        assignment::find($id)->forceDelete();
        return redirect()->route('assignment.create_project');
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


}
