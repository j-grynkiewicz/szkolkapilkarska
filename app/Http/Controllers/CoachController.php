<?php

namespace App\Http\Controllers;

use App\Coach;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'admin']);
    }
    public function index()
    {
        $coach = Coach::all()->toArray();
        return view('coaches.index', compact('coach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coaches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'    =>  'required',
            'name'     =>  'required',
            'phone'     =>  'required',
            'email'     =>  'required',
            'description'     =>  'required',
            'licence'     =>  'required'
        ]);
        $coach = new Coach([
                'image'    =>  $request->get('image'),
                 'name'     =>  $request->get('name'),
                    'phone'     =>  $request->get('phone'),
                    'email'     =>  $request->get('email'),
                    'description'     =>  $request->get('description'),
                    'licence' =>  $request->get('licence')
        ]);
        $coach->save();
        return redirect()->route('coaches.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coach = Coach::find($id);
        return view('coaches.edit', compact('coach', 'id'));
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
        $this->validate($request, [
            'image'    =>  'required',
            'name'     =>  'required',
            'phone'     =>  'required',
            'email'     =>  'required',
            'description'     =>  'required',
            'licence'     =>  'required'

        ]);
        $coach = $coach = Coach::find($id);
        $coach->image = $request->get('image');
        $coach->name = $request->get('name');
        $coach->phone = $request->get('phone');
        $coach->email = $request->get('email');
        $coach->description = $request->get('description');
        $coach->licence = $request->get('licence');
        $coach->save();
        return redirect()->route('coaches.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coach = $coach = Coach::find($id);
        $coach->delete();
        return redirect()->route('coaches.index')->with('success', 'Data Deleted');
    }
}
