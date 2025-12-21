<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fejobs = Job::all();
        $months = [
            1 => 'ΙΑΝΟΥΑΡΙΟΣ',
            2 => 'ΦΕΒΡΟΥΑΡΙΟΣ',
            3 => 'ΜΑΡΤΙΟΣ',
            4 => 'ΑΠΡΙΛΙΟΣ',
            5 => 'ΜΑΙΟΣ',
            6 => 'ΙΟΥΝΙΟΣ',
            7 => 'ΙΟΥΛΙΟΣ',
            8 => 'ΑΥΓΟΥΣΤΟΣ',
            9 => 'ΣΕΠΤΕΒΡΙΟΣ',
            10 => 'ΟΚΤΩΒΡΙΟΣ',
            11 => 'ΝΟΕΜΒΡΙΟΣ',
            12 => 'ΔΕΚΕΜΒΡΙΟΣ'
        ];

        foreach ($fejobs as $fejob) {
            $fejob->period = $months[$fejob->period];
        }
        
        return view('jobs.index', ['fejobs' => $fejobs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all() ?? false;
        return view('jobs.create',['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'location'      => ['required'],
            'period'        => ['required'],
            'company_id'       => ['required'],
            'fe6'           => ['required'],
            'fe12'          => ['required'],
            'contact_information'   => [],
            'comments'      => []
        ]);
        
        $fejob = Job::create($attributes); 
        
        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
