<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getProject($project)
    {
        return view('projects/' . $project);
    }
}
