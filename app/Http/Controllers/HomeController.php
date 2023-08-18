<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Heroproparties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    // this function will load the page only.
    function pageLoading( Request $request ) {
        return view( 'pages.home' );
    }

    // to get data from server each function will work individually like API.
    function getHeroData( Request $request ) {
        return DB::table( 'heroproparties' )->first();
    }

    function getAboutData( Request $request ) {
        return DB::table( 'abouts' )->first();
    }

    function getSocialData( Request $request ) {
        return DB::table( 'socials' )->first();
    }

// Upload Heroproperties data to database

    function uploadHeroData( Request $request ) {

        return Heroproparties::create( $request->input() );
    }

}