<?php namespace App\Services\Destination;

use App\Contracts\Services\Destination\ResolveDestinationInterface;

/**
 * Class ResolveDestination
 * This service can resolve the given input (cid, aid and sid) into the corresponding populated destination URL.
 *
 * @package App\Services\Destination
 */
class ResolveDestination implements ResolveDestinationInterface
{
    public function resolve($input = [])
    {
        // TODO: Find destination by cid
        // TODO: populate tokens {cid}, {aid}, {sid}, {date}, {rand}
        return "TODO: Result";
    }
}
