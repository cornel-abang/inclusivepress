<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DataSetImport;
use App\Models\DataSet;
use Maatwebsite\Excel\Facades\Excel;

class VisualizerController extends Controller
{
    public function index()
    {
        $title = 'Data Visualizer';
        return view('visual.index', compact('title'));
    }

    public function importDataSet(Request $request)
    {
        $file = $request->file('data-set');
        Excel::import(new DataSetImport, $file);
        return redirect()->back();
    }

    public function retrieveMapData()
    {
        $data = [];
        $attacks = DataSet::all();

        foreach ($attacks->groupBy('event_zone') as $key => $value) {
            $fatalities = 0;
            foreach ($value as $val) {
                $fatalities += $val->event_fatalities;
            }
            $percentage = $this->getPercentage($value->count(), $attacks->count());
            $att_data = [
                    'name' => $key,
                    'y' => $value->count(),
                    'z' => $fatalities,
                    'pct' => $percentage
                ];

                array_push($data, $att_data);
        }
        return response()->json(['attacks'=>$data]);
    }

    public function getPercentage($part, $whole)
    {
        return round(($part/$whole) * 100, 3);
    }

    public function contactUs()
    {
        $title = 'Contact Inclusive Press';
        return view('contact', compact('title'));
    }
}
