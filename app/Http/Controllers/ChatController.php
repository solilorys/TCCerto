<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatController extends Controller
{
    public function chat() {
        $message = "teste";
        return view('site.chat');
    }
}
