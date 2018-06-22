<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\School;
use Charts;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Stores Schools Per District*/
    public function dashboard()
    {

        $schoolsperdestrict = DB::table('schools')->selectRAW('COUNT(id) AS school_count,district')->groupBy('district')->get();
        $schoolcount = [];
        $districtslist = [];
        foreach($schoolsperdestrict as $schoolsperdestrictlist)
        {
            array_push($schoolcount, $schoolsperdestrictlist->school_count);
            array_push($districtslist, $schoolsperdestrictlist->district);
        }
        //Generating the Chart
        $chart = Charts::create('bar', 'highcharts')->elementLabel('School per district in Rwanda')
            ->title('School per district in Rwanda')
            ->labels($districtslist)
            ->values($schoolcount)
            ->dimensions(0,500);

        return view('school.dashboard', compact('chart'));
    }

    public function index()
    {
        //
        $schools = School::all();
        return view('school.index', compact('schools'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
