<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function admin(){
        return view('admin');
    }
    public function settings()
    {
        return view('settings');
    }
    public function coaches()
    {
        return view('coachList');
    }
    public function coach()
    {
        return view('coach');
    }
    public function fields()
    {
        return view('fieldList');
    }
    public function field()
    {
        return view('field');
    }
    public function reserve()
    {
        return view('reserve');
    }
    public function payment()
    {
        return view('payment');
    }
    public function cash()
    {
        return view('cash');
    }
    public function card()
    {
        return view('card');
    }
    public function thanks()
    {
        return view('thanksReservation');
    }

    public function trainings()
    {
        return view('trainingList');
    }
    public function training()
    {
        return view('training');
    }
    
}
