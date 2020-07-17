<?php

namespace App\Http\Controllers;

class TermsOfServiceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('terms-of-service');
    }
}
