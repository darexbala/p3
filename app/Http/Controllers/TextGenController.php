<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextGenController extends Controller {

    /**
    * Responds to requests to GET /textgen
    */
    public function getIndex() {
        return view('textgen.index', ['loremcontent' => '']);
    }

    public function postIndex(Request $request) {

        $this->validate($request, [
            'paragraph' => 'required'
        ]);
        //dd($request->input('startwith'));
        return view('textgen.index', ['loremcontent' => 'Add the book']);
    }
}
