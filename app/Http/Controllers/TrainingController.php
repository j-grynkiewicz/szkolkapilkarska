<?php

namespace App\Http\Controllers;

use App\Training;
use App\Field;
use App\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class TrainingController extends Controller
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
        $training = Training::all()->toArray();
        $coaches = Coach::select('id', 'name')->get();
        $fields = Field::select('id', 'name')->get();
        return view('trainings.index', compact('training'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coaches = Coach::select('id', 'name')->get();
        $fields = Field::select('id', 'name')->get();
        return view('trainings.create');
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
            'title'    =>  'required',
            'coach'     =>  'required',
            'field'     =>  'required',
            'places'     =>  'required',
            'date'     =>  'required'
        ]);
        $training = new Training([
            'title'    =>  $request->get('title'),
            'coach'     =>  $request->get('coach'),
            'field'     =>  $request->get('field'),
            'places'     =>  $request->get('places'),
            'date' =>  $request->get('date')
        ]);
        $training->save();
        return redirect()->route('trainings.create')->with('success', 'Data Added');
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
        $training = Training::find($id);
        return view('trainings.edit', compact('training', 'id'));
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
            'title'    =>  'required',
            'coach'     =>  'required',
            'field'     =>  'required',
            'places'     =>  'required',
            'date'     =>  'required'

        ]);
        $training = $training = Training::find($id);
        $training->title = $request->get('title');
        $training->coach = $request->get('coach');
        $training->field = $request->get('field');
        $training->places = $request->get('places');
        $training->date = $request->get('date');
        $training->save();
        return redirect()->route('trainings.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reserve($id)
    {
        $training = Training::find($id);
        return view('trainings.reserve', compact('training', 'id'));
    }
    public function subtraction(Request $request, $id)
    {
        $training = Training::all()->toArray();
        $this->validate($request, [
            'places'     =>  'required',

        ]);
        $training = $training = Training::find($id);
        $training->places = $request->get('places');
        $training->save();
        return redirect()->route('home')->with('success', 'Data Updated');
    }
    
    public function destroy($id)
    {
        $training = $training = Training::find($id);
        $training->delete();
        return redirect()->route('trainings.index')->with('success', 'Data Deleted');
    }
}
