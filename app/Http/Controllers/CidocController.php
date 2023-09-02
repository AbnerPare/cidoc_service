<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Symfony\Contracts\Service\Attribute\Required;

class CidocController extends Controller {
    //

    public  function forum() {
        return view( 'forum' );
    }

    public  function mission() {
        return view( 'mission' );
    }

    public  function attestation() {
        return view( 'attestation' );
    }

    public  function conge() {
        return view( 'conge' );
    }

    public  function admin() {
        return view( 'admin' );
    }

}

