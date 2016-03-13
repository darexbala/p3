<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TextGenController extends Controller {

    /**
    * Responds to requests to GET /textgen
    */
    public function getIndex() {
        return 'Show a list of books';
    }
}
