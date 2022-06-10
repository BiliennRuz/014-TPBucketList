<?php

namespace App\Service;


class Censurator {

    public function purify($string) {
        $forbidenWords = Array("con", "idiot");
        $stringPurify = str_replace($forbidenWords, "*", $string,);
        return $stringPurify;
    }

}