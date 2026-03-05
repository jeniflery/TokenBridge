<?php
/**
 * Tests for TokenBridge
 */

use PHPUnit\Framework\TestCase;
use Tokenbridge\Tokenbridge;

class TokenbridgeTest extends TestCase {
    private Tokenbridge $instance;

    protected function setUp(): void {
        $this->instance = new Tokenbridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenbridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
