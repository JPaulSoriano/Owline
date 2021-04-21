<?php

namespace App\Http\Controllers;

use App\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $keys = Key::latest()->paginate(2);
  
        return view('key.index',compact('keys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('key.create');
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
        $randomKey = Str::random(7);
        $save = new Key;
        $save->key = $randomKey;
        $save->save();


        return redirect()->route('key.index')
        ->with('success','Key created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function show(Key $key)
    {
        //
        return view('key.show',compact('key'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function edit(Key $key)
    {
        //
        return view('key.edit',compact('key'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Key $key)
    {
        //
        $randomKey = Str::random(7);
        $key->key = $randomKey;
        $key->save();


        return redirect()->route('key.index')
        ->with('success','Key created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function destroy(Key $key)
    {
        //

        $key->delete();
  
        return redirect()->route('key.index')
                        ->with('success','Category deleted successfully');
    }
}
