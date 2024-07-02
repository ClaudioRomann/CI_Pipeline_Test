<?php
use PHPUnit\Framework\TestCase;

require_once 'functions.php';

class FunctionsTest extends TestCase {
    public function testAdd() {
        $this->assertEquals(5, add(2, 3));
        $this->assertEquals(0, add(-1, 1));
        $this->assertEquals(-5, add(-2, -3));
    }
}
?>