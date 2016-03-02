<?php

use App\Services\Destination\ResolveDestination;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ResolveDestinationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $resolveDestination = new ResolveDestination();

        $this->assertEquals(
            "TODO: Result",
            $resolveDestination->resolve([
                'cid' => 123,
                'aid' => 456,
                'sid' => 'hello',
            ])
        );
    }
}
