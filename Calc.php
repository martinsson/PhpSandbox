<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calc
 *
 * @author jm1974
 */
class Calc {
    private $cells = array();
    public function insert($cell, $content) {
        $this->cells[$cell] = $content;
    }
    public function contentOf($cell) {
        $content =  isset($this->cells[$cell]) ? $this->cells[$cell] : '';
        $content = substr($content, 0, 1) == "="? substr($content, 1) : $content;
        return is_numeric(trim($content)) ? trim($content) : $content;
    }
    public function literalContentOf($cell) {
        return $this->cells[$cell];
    }
}

?>
