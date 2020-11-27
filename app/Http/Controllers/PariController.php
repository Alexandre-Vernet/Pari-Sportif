<?php

namespace App\Http\Controllers;

use App\Pari;
use Illuminate\Http\Request;

class PariController extends Controller
{
    public function index()
    {
        $paris = Pari::orderBy("created_at", 'desc')->paginate(4);

        return view('paris.index', compact('paris'));
    }
}