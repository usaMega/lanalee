<?php

namespace App\Controllers;

class Lanalee extends BaseController
{
    public function cloy()
    {
        $data = [
            'title' => 'Crash Landing On You',
        ];

        return view('lanalee/cloy', $data);
    }

    public function dots()
    {
        $data = [
            'title' => 'Descendants Of The Sun',
        ];

        return view('lanalee/dots', $data);
    }
    public function th()
    {
        $data = [
            'title' => 'The Heirs',
        ];

        return view('lanalee/th', $data);
    }

    public function V()
    {
        $data = [
            'title' => 'Vincenzo',
        ];

        return view('lanalee/V', $data);
    }
    
}
