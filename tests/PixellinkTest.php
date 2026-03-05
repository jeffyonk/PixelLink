<?php
/**
 * Tests for PixelLink
 */

use PHPUnit\Framework\TestCase;
use Pixellink\Pixellink;

class PixellinkTest extends TestCase {
    private Pixellink $instance;

    protected function setUp(): void {
        $this->instance = new Pixellink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixellink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
