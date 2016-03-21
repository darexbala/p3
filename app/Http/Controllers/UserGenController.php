<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker;

class UserGenController extends Controller {
    
    /**
    * Responds to requests to GET /textgen
    */
    public function getIndex() {
        return view('usergen.index', ['users' => '']);
    }

    public function postIndex(Request $request) {

        $this->validate($request, [
            'usercount' => 'required|integer|max:10'
        ]);

        $faker = Faker\Factory::create();
        $userprofiles = array();
        for ($i=0; $i < $request->input('usercount'); $i++) {
            $userprofile = array( '<b> '.$faker->firstName.' '.$faker->lastName.' </b>' );
            if($request->input('phone') == "on"){
                array_push($userprofile, $faker->phoneNumber);
            }
            if($request->input('email') == "on"){
                array_push($userprofile, $faker->freeEmail);
            }
            if($request->input('birthday') == "on"){
                array_push($userprofile, $faker->date($format = 'Y-m-d', $max = 'now'));
            }
            if($request->input('address') == "on"){
                array_push($userprofile, $faker->address);
            }
            if($request->input('profileBlurb') == "on"){
                array_push($userprofile, $faker->text($maxNbChars = 200) );
            }
            $userprofileString = implode("<br />", $userprofile);
            array_push($userprofiles, $userprofileString);
        }
        $userprofilesFormatted = "<p>".implode("</p><p>", $userprofiles)."</p>";
        return view('usergen.index')->with(['users' => $userprofilesFormatted]);
    }
}
