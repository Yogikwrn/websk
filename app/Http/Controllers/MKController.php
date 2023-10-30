<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $MK = [
        [   'ID MK' => "MK3712",
            'NAMA MK' => "WEB PROGAMING",
            'JURUSAN' => "SISTEM KOMPUTER",
        ],
        [
            'ID MK' => "MK3099",
            'NAMA MK' => "DATABASE",
            'JURUSAN' => "SISTEM KOMPUTER",
        ],
        [   'ID MK' => "MK3023",
            'NAMA MK' => "OPJECT ORIENTED PROGAMING",
            'JURUSAN' => "SISTEM KOMPUTER",
        ],
        [
            'ID MK' => "MK3033",
            'NAMA MK' => "MICROPOSESOR",
            'JURUSAN' => "SISTEM KOMPUTER",
        ],
    ];

    public function index()
    {
        return view('MK.index', ['MK' => $this->MK]);
    }

    public function create()
    {
        return view('MK.create');
    }

}
