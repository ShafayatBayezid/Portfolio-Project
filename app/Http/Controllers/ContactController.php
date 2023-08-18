<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller {
    // this function will load the page only
    function pageLoading( Request $request ) {
        return view( 'pages.contact' );
    }

    // to get data from server each function will work individually like API.
    function manageContactRequest( Request $request ) {
        return DB::table( 'contacts' )->insert( $request->input() );
    }
}