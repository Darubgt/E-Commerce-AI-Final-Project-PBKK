<?php

namespace Tests\Unit;

use App\Http\Controllers\SearchController;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class allTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $result = SearchController::imageSearchAI();
        dump($result);
        $this->assertTrue(true);
    }
}
