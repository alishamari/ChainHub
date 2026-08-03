<?php
/**
 * Tests for ChainHub
 */

use PHPUnit\Framework\TestCase;
use Chainhub\Chainhub;

class ChainhubTest extends TestCase {
    private Chainhub $instance;

    protected function setUp(): void {
        $this->instance = new Chainhub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainhub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
