<?php

namespace App\Http\Controllers;



use App\Models\Dataclient;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreDataclientRequest;
use App\Http\Requests\UpdateDataclientRequest;

class DataclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Dataclients = Dataclient::orderBy('id','desc');
        return view('index', compact('Dataclients'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataclientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataclientRequest $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'childNode' => 'required',
            'username' => 'required',
            'birthday' => 'required',
        ]);

        Dataclient::create($request->post());
 
        return redirect()->route('index')->with('success','Student has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataclient  $dataclient
     * @return \Illuminate\Http\Response
     */
    public function show(Dataclient $dataclient)
    {
        return view('show',compact('dataclient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataclient  $dataclient
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataclient $dataclient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataclientRequest  $request
     * @param  \App\Models\Dataclient  $dataclient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataclientRequest $request, Dataclient $dataclient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataclient  $dataclient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataclient $dataclient)
    {
        //
    }
}
