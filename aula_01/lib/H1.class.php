<?php

class H1 {
    private $txt;

    function H1($pTxt) {
        $this->txt   = $pTxt;   
    }

    function __toString() {
        return '<h1>'.$this->txt.'</h1>';
    }
}