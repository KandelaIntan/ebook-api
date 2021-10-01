<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{ 
    public function me(){
        return [
            'Nama' => 'Kandela Intan Utami',
            'NIS' => 3103119096,
            'Kelas' => 'XII RPL 3'
        ];
    }
}
