<?php
require_once 'Calc.php';
class CalcTest  extends PHPUnit_Framework_TestCase{
    /** @test */
    public function returnsEmptyStringPerDefault() {
        $calc = new Calc();
        assertThat($calc->contentOf('A1'), equalTo(""));
        assertThat($calc->contentOf('GHJ134'), equalTo(""));
    }
}

?>
