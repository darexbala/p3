<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserGenController extends Controller {

    /**
    * Responds to requests to GET /textgen
    */
    public function getIndex() {
        return 'Show a list of books';
    }
}
