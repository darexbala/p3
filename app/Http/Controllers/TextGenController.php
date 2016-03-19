<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TextGenController extends Controller {

    /**
    * Responds to requests to GET /textgen
    */
    public function getIndex() {
        return view('textgen.index');
    }

    public function postIndex() {
        return 'Add the book: '.$_POST['title'];
    }
}
