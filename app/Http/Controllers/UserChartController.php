<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use Illuminate\Http\Request;

class UserChartController extends Controller
{

    public function index()
    {
        $usersChart = new UserChart;
        $usersChart->labels(['Jan','Feb','Mar']);
        $usersChart->dataset('Users by trimester', 'line', [10,25,13])
            ->color("rgb(255,99,132)")
            ->backgroundcolor("rgb(255,99,132)");

        return view('users',compact('usersChart'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}