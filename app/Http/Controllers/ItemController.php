<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItemController extends Controller
{
    public function itemContent()
    {
        return view('item.content');
    }

    public function itemEdit()
    {
        return view('item.edit');
    }
}
