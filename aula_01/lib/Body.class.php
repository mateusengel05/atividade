<?php

class Body {
    private $lista = array();

    public function addH1($pH1) {
        $this->lista[] = $pH1;
    }

    public function __toString() {
        $vBody = '<h1>';
        foreach ($this->lista as $valor) {
            $vBody .= $valor;
        }
        $vBody .= '</h1>';
        return $vBody;
    }

}