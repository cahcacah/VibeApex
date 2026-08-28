<?php
/**
 * Tests for VibeApex
 */

use PHPUnit\Framework\TestCase;
use Vibeapex\Vibeapex;

class VibeapexTest extends TestCase {
    private Vibeapex $instance;

    protected function setUp(): void {
        $this->instance = new Vibeapex(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Vibeapex::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
