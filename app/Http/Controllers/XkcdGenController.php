<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class XkcdGenController extends Controller {

    static protected $symbols = array('~', '`', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '{', '}', ']', '[', ':', ';', '\'', '"', '<', '.', '>', '/', '|', '?');
    /**
    * Responds to requests to GET /textgen
    */
    public function getIndex() {
        if(empty($_SESSION['words']))
        {
            XkcdGenController::loadWordsIntoSession();
        }
        return view('xkcdgen.index', ['password' => '']);
    }

    /**
    * Responds to requests to POST /xkcdgen
    */
    public function postIndex(Request $request) {
        $this->validate($request, [
            'size' => 'required|integer|max:10'
        ]);

        if(empty($_SESSION['words']))
        {
            dd($_SESSION['words']);
            XkcdGenController::loadWordsIntoSession();
        }

        $size = $request->input('size');
        $case = $request->input('case');
        $addNumber = $request->input('addNumber');
        $addSymbol = $request->input('addSymbol');
        $separator = $request->input('separator');

        $tempPassword = XkcdGenController::getPassword($_SESSION['words'], $size, $case, $addNumber, $addSymbol, $separator, self::$symbols);
        while(strlen($tempPassword) > intval($request->input('maxlength'))){
            $tempPassword = XkcdGenController::getPassword($_SESSION['words'], $size, $case, $addNumber, $addSymbol, $separator, self::$symbols);
        }
        $password = $tempPassword;

        return view('xkcdgen.index', ['password' => $password]);
    }

    private function loadWordsIntoSession()
    {
        for ($x = 1; $x <= 30; $x++) {
            $firstVal = $x;
            $secondVal = $firstVal + 1;
            if($firstVal < 10){
                $firstVal = sprintf( '%02d', $firstVal );
            }
            if($secondVal < 10){
                $secondVal = sprintf( '%02d', $secondVal );
            }
            $urlToScrape = 'http://www.paulnoll.com/Books/Clear-English/words-' . $firstVal . '-' .$secondVal . '-hundred.html';
            $pageContent = file_get_contents($urlToScrape);
            $match_count = preg_match_all('@<li>(.*?)</li>@si',$pageContent,$matches_all);
            foreach ($matches_all[1] as $value) {
                $words[] = $value;
            }
            $x++;
        }
        $_SESSION['words'] = $words;
    }

    private function getPassword($words, $size, $case, $Add_Number, $Add_Symbol, $separator, $symbols) {
        $passwordList = [];
        $rand_keys = array_rand($words, intval($size));
        $keysLength = count($rand_keys);
        if($keysLength == 1){
            $rand_keys = array($rand_keys);
        }

        foreach ($rand_keys as $value) {
            $currVal = trim($words[$value]);
            switch ($case) {
                case 'First upper':
                $currVal = ucfirst($currVal);
                break;
                case 'All upper':
                $currVal = strtoupper($currVal);
                break;
                case 'All lower':
                $currVal = strtolower($currVal);
                break;
                default:
                break;
            }
            $passwordList[] = $currVal;
        }
        $password = implode($separator, $passwordList);

        if($Add_Number == 'on'){
            $password = $password . rand(1, 9);
        }
        if($Add_Symbol == 'on'){
            $password = $password . $symbols[array_rand($symbols)];
        }
        return $password;
    }
}
