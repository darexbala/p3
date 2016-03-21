<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow;

class TextGenController extends Controller {

    /**
    * Responds to requests to GET /textgen
    */
    public function getIndex() {
        return view('textgen.index', ['loremcontent' => '']);
    }

    /**
    * Responds to requests to POST /textgen
    */
    public function postIndex(Request $request) {

        $this->validate($request, [
            'paragraph' => 'required|integer|max:10'
        ]);
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($request->input('paragraph'));
        $updatedParagraphs = array();
        for ($i=0; $i < count($paragraphs); $i++) {
            if($request->input('startwith') == "on" && $i == 0){
                array_push($updatedParagraphs, 'Lorem ipsum dolor sit amet, '.$paragraphs[$i]);
            }
            else{
                array_push($updatedParagraphs, $paragraphs[$i]);
            }
        }

        $paragraphsFormatted = "<p>".implode("</p><p>", $updatedParagraphs)."</p>";

        return view('textgen.index', ['loremcontent' => $paragraphsFormatted]);
    }
}
