<?php
namespace App\Http\Controllers\Test\Passport\Client;
use App\Http\Controllers\Controller;

class TestApiController extends Controller
{
    public function getInfo(){
        return ['ok'=>'ok hello haode'];
    }
}