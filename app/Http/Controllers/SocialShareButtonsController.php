<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SocialShareButtonsController extends Controller
{

    public function ShareWidget()
    {
        $shareComponent = \Share::page(
            'https://localhost/property/1',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
        
        return view('posts', compact('shareComponent'));
    }
    
}