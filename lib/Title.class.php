<?php

class Title {
    private $txt;
   

    function Title($pTxt) {
        $this->txt   = $pTxt;   
    }

    function __toString() {
        return '<title>'.$this->txt. '</title>';
    }
}