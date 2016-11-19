<?php

namespace dungnv\helloworld;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

// use Illuminate\Http\Request;
//
// use App\Http\Requests;

class TimezonesController extends Controller
{
    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }
}
