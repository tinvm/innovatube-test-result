<?php
/**
 * Unit test file
 * @author TinVM
 * @since Mar08 2018
 */
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    private $NestedString;

    protected function setUp ()
    {
        parent::setUp();
        $this->NestedString = new NestedString();
    }

    protected function tearDown ()
    {
        $this->NestedString = null;
        parent::tearDown();
    }

    public function testEmptyStringCase(){
        $this->assertEquals($this->NestedString->checkNestedString(''), 0);
    }

    public function checkNestedStringCase(){
        $this->assertEquals($this->NestedString->checkNestedString("{[()()]}"), 1);
        $this->assertEquals($this->NestedString->checkNestedString("{[()()]}>"), 0);

    }
}
?>