<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller {
    // this function will load the page only
    function pageLoading( Request $request ) {
        return view( 'pages.projects' );
    }

    // to get data from server each function will work individually like API.
    function getProjectsData( Request $request ) {
        return DB::table( 'projects' )->get();
    }

}