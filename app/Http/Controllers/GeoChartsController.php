<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\User;

class GeoChartsController extends Controller
{
    public function index()
    {
        $lava = new Lavacharts;
        $users = $lava->DataTable();
        $value = User::select('country as 0', 'salary as 1')->get()->toArray();

        $users->addStringColumn('Country')
            ->addNumberColumn('Salary')
            ->addRows($value);

        $lava->GeoChart('User', $users ,[
            'title' => 'Stock Market Trends',
            'animation' => [
                'startup' => true,
                'easing' => 'inAndOut'
            ],
            'colors' => ['blue', '#F4C1D8']
        ]);

        return view('geo_chart.index',compact('lava'));
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