<?php

class Html {
    private $lista = array();

    public function addHead($pHead) {
        $this->lista[] = $pHead;
    }

    public function __toString() {
        $vHtml = '<head>';
        foreach ($this->lista as $valor) {
            $vHtml .= $valor;
        }
        $vHtml .= '</head>';
        return $vHtml;
    }

}