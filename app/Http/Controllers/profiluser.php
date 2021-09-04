<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profiluser extends Controller
{
    public function profil()
    {
        $data = 'halo nama saya aldhi';
        return view('aldhi.profil', [
            'data' => $data]);
    }
}
