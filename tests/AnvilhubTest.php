<?php
/**
 * Tests for AnvilHub
 */

use PHPUnit\Framework\TestCase;
use Anvilhub\Anvilhub;

class AnvilhubTest extends TestCase {
    private Anvilhub $instance;

    protected function setUp(): void {
        $this->instance = new Anvilhub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Anvilhub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
