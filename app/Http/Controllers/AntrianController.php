<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index(){
        $data['antri_cs'] = 0;
        $data['antri_teller1'] = 0;
        $data['antri_teller2'] = 0;
        $data['antri'] = "-";
        return view('antrian', $data);
    }

    public function antri_cs($sc, $teller1, $teller2) {
        $data['antri_cs'] = $cs+1;
        $data['antri_teller1'] = $teller1;
        $data['antri_teller2'] = $teller2;
        $data['antri'] = "cs";
        return view('antrian', $data);
    }

    public function antri_teller1($sc, $teller1, $teller2) {
        $data['antri_cs'] = $cs;
        $data['antri_teller1'] = $teller1+1;
        $data['antri_teller2'] = $teller2;
        $data['antri'] = "tl1";
        return view('antrian', $data);
    }

    public function antri_teller2($sc, $teller1, $teller2) {
        $data['antri_cs'] = $cs;
        $data['antri_teller1'] = $teller1;
        $data['antri_teller2'] = $teller2+1;
        $data['antri'] = "tl2";
        return view('antrian', $data);
    }
}
