<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    
    public function cleate(Request $request)
    {
        return redirect('admin,news,create');
    }
}


