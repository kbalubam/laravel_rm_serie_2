<?php

namespace App\Http\Controllers;

use App\Models\Serviceslinkfooter;
use Illuminate\Http\Request;

class ServiceslinkfooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceslinks = Serviceslinkfooter::all();
        return view('back.serviceslink.allServiceslink',compact('serviceslinks'));
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
     * @param  \App\Models\Serviceslinkfooter  $serviceslinkfooter
     * @return \Illuminate\Http\Response
     */
    public function show(Serviceslinkfooter $serviceslinkfooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serviceslinkfooter  $serviceslinkfooter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  dd($serviceslinkfooter->id);
        $serviceslink = Serviceslinkfooter::find($id);
        return view('back.serviceslink.edit',compact('serviceslink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serviceslinkfooter  $serviceslinkfooter
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $rq )
    {
        $rq->validate([
            "name"=>["required"],
            "link"=>["required"],
        ]);
        $serviceslinkfooter = Serviceslinkfooter::find($id);
        $serviceslinkfooter->name = $rq->name;
        $serviceslinkfooter->link = $rq->link;
        $serviceslinkfooter->save();


        return redirect()->route('serviceslinks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serviceslinkfooter  $serviceslinkfooter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serviceslinkfooter = Serviceslinkfooter::find($id);
        $serviceslinkfooter->delete();
        return redirect()->back();
    }
}
