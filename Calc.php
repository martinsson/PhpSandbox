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
    private $cell;
    public function insert($cell, $content) {
        $this->cell = $content;
    }
    public function contentOf() {
        return $this->cell;
    }
}

?>
