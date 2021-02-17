<?php

class Link2 {
    private $txt;
   

    function Link2($pTxt) {
        $this->txt   = $pTxt;   
    }

    function __toString() {
        return '<link>'.$this->txt;
    }
}