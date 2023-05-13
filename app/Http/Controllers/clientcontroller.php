<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //

     //   return view($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $data = client::create([
                'name' => request('name'),
                'email' => request('email'),
                'mobile' => request('mobile'),
            ]);
            return redirect()->route('users.client',compact('data'));
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = client::all();
        return view('users.client',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $id = request('id');
            $data = client::where('id', $id);
            $data->update([
                'name' => request('name'),
                'email' => request('email'),
                'mobile' => request('mobile'),
            ]);
            return redirect()->route('users.client',compact('data'));
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = request('id');
        client::find($id)->forceDelete();
        return redirect()->route('users.client');
    }
}
