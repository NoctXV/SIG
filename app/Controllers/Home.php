<?php

namespace App\Controllers;

class Home extends BaseController
 
{
    public function index(): string
    {
            $data = [
                'judul' => 'Dashboard',
                'page' => 'v_dashboard',            
            ];
        return view('v_template', $data);
    }

    public function transparant(): string
    {
            $data = [
                'judul' => 'Transparant',
                'page' => 'v_transparant',            
            ];
        return view('v_template', $data);
    }

    public function bold(): string
    {
            $data = [
                'judul' => 'Bold',
                'page' => 'v_bold',            
            ];
        return view('v_template', $data);
    }
}
