<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use PDF;

class TaskController extends Controller
{


    public function taskOne()
    {
        $data = [1,2,3,4,5,6,7,8,9,10];
        $count = count($data);
        $array = [];
        for($i = 0; $i < $count; $i++)
        {
            if(count($data) < 1){
                    break;
            }
            if($i % 2 == 0)
            {
                $array[] = array_splice($data, 0,3);
            }else{
                $array[] = array_splice($data, 0,2);
            }
        }
        return view('task_one', compact('array'));
    }

    public function taskTwo()
    {
        $days = \Carbon\CarbonPeriod::create('first day of this month', 'last day of this month');
        return view('task_two', compact('days'));
    }

    public function taskThree()
    {
        $str = "saiful myful jafrul elias hossen akash muktadir";
        return view('task_three', compact('str'));
    }

    public function taskFour()
    {
        $agents = Agent::all();
        return view('task_four', compact('agents'));
    }

    public function printPdf()
    {
        $agents = Agent::all();
        $pdf = PDF::loadView('table', compact('agents'))->setPaper('letter');
        return $pdf->stream();
    }
}
