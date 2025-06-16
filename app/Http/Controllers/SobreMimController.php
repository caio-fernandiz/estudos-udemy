<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreMimController extends Controller
{
    public function sobreMim() {
        return view('site.views.sobremim');
    }
}
