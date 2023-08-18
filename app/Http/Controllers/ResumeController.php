<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller {
    // this function will load the page only
    function pageLoading( Request $request ) {
        return view( 'pages.resume' );
    }

    // to get data from server each function will work individually like API.
    function resumeLink( Request $request ) {
        return DB::table( 'resumes' )->first();
    }

    function getExperiencesData( Request $request ) {
        return DB::table( 'experiences' )->orderBy( 'id', 'desc' )->get();
    }

    function getEducationsData( Request $request ) {
        return DB::table( 'educations' )->get();
    }

    function getSkillsData( Request $request ) {
        return DB::table( 'skills' )->get();
    }

    function getLanguagesData( Request $request ) {
        return DB::table( 'languages' )->get();
    }
}