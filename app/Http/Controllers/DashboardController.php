<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $idea = new Idea([
            'content' => 'testing',
        ]);
        $idea->save();
        return view('dashboard');
    }
}
