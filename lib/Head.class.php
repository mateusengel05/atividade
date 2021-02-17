<?php

class Head {
    private $lista = array();

    public function addLink2($pLink) {
        $this->lista[] = $pLink;
    }

    public function addTitle($pTitle) {
        $this->lista[] = $pTitle;
    }


    public function __toString() {
        $vLink = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> ';
        foreach ($this->lista as $valor) {
            $vLink .= $valor;
        }
        return $vLink;
    }

}