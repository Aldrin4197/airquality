<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class NodesController extends Controller
{
    public function index()
    {
        return Inertia::render('Nodes/Index');
    }
}
