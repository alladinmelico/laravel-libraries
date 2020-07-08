<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use ExcelReport;

class ReportsController extends Controller
{
    public function index(){
        return view('report.index');
    }

    public function displayReport(Request $request)
    {
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        // $sortBy = $request->input('sort_by');

        $title = 'Registered User Report'; // Report title

        $meta = [ // For displaying filters description on header
            'Registered on' => $fromDate . ' To ' . $toDate
        ];

        $queryBuilder = User::select(['name', 'salary', 'created_at']) // Do some querying..
                            ->whereBetween('created_at', [$fromDate, $toDate]);

        $columns = [
            'Name' => function($customer) {
                return $customer->name;
            },
            'Registered At' => function($customer) {
                return $customer->created_at;
            },
            'Total Salary' => function($customer) {
                return $customer->salary;
            },
            'Status' => function($customer) { // You can do if statement or any action do you want inside this closure
                return ($customer->salary > 50000) ? 'Rich Man' : 'Normal Guy';
            }
        ];

        // Generate Report with flexibility to manipulate column class even manipulate column value (using Carbon, etc).
        return ExcelReport::of($title, $meta, $queryBuilder, $columns)
                        ->editColumn('Registered At', [ // Change column class or manipulate its data for displaying to report
                            'displayAs' => function($result) {
                                return $result->registered_at;
                            },
                            'class' => 'left'
                        ])
                        ->editColumns(['Total Salaries', 'Status'], [ // Mass edit column
                            'class' => 'right bold'
                        ])
                        ->showTotal([ // Used to sum all value on specified column on the last table (except using groupBy method). 'point' is a type for displaying total with a thousand separator
                            'Total Salaries' => 'point' // if you want to show dollar sign ($) then use 'Total Balance' => '$'
                        ])
                        ->limit(20) // Limit record to be showed
                        ->download('foo'); // other available method: download('filename') to download pdf / make() that will producing DomPDF / SnappyPdf instance so you could do any other DomPDF / snappyPdf method such as stream() or download()
    }
}