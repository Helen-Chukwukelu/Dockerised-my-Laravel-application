<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

 
class IPAddressController extends Controller
{
    public function getPublicIP(){
        $response = Http::get('https://icanhazip.com');
        return response("Your Public IP is: " .$response->body(), 200)
                  ->header('Content-Type', 'text/plain');
    }
}