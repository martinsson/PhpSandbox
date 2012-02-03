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
        return is_numeric(trim($content)) ? trim($content) : $content;
    }
    public function literalContentOf($cell) {
        return $this->cells[$cell];
    }
}

?>
