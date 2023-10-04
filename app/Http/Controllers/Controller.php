<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('content.homepage', [
            'title' => "homepage",
            'navbar' => 'info',
        ]);
    }
    public function update(){
        return view('content.program',
        [
            'title' => "update",
        ]);
    }
}
