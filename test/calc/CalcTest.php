<?php
require_once 'Calc.php';
class CalcTest  extends PHPUnit_Framework_TestCase{
    /** @test */
    public function returnsEmptyStringPerDefault() {
        $calc = new Calc();
        assertThat($calc->contentOf('A1'), equalTo(""));
        assertThat($calc->contentOf('GHJ134'), equalTo(""));
    }
    
    /** @test */
    public function whateverIsInsertedIsImmediatelyAvailable() {
        $calc = new Calc();
        $calc->insert('A1', 'A string');
        assertThat($calc->contentOf('A1'), equalTo('A string'));
        $calc->insert('A1', 'Another string');
        assertThat($calc->contentOf('A1'), equalTo('Another string'));
        $calc->insert('A1', '');
        assertThat($calc->contentOf('A1'), equalTo(''));
    }
    /** @test */
    public function theContentOfCellsIsIndependant() {
        $calc = new Calc();
        $calc->insert('A1', 'One');
        $calc->insert('X3', 'Two');
        $calc->insert('ZKH345', 'Three');
        assertThat($calc->contentOf('A1'), equalTo('One'));
        assertThat($calc->contentOf('X3'), equalTo('Two'));
        assertThat($calc->contentOf('ZKH345'), equalTo('Three'));
        $calc->insert('A1', 'Four');
        assertThat($calc->contentOf('A1'), equalTo('Four'));
        assertThat($calc->contentOf('X3'), equalTo('Two'));
        assertThat($calc->contentOf('ZKH345'), equalTo('Three'));
    }
    /** @test */
    public function spacesAreIgnoredForNumericContent() {
        $calc = new Calc();
        $calc->insert('A21', '  1234  ');
        assertThat($calc->contentOf('A21'), equalTo('1234'));
        $calc->insert('B32', '   ');
        assertThat($calc->contentOf('B32'), equalTo('   '));
    }

    /** @test */
    public function theLiteralContentIsStillAvailable() {
        $calc = new Calc();
        $calc->insert('A21', '  1234  ');
        assertThat($calc->literalContentOf('A21'), equalTo('  1234  '));
    }

    
}

?>
