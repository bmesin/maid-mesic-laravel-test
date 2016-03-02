<?php namespace App\Services\Destination;

class ResolveDestination
{
    public function resolve($input = [])
    {
        // TODO: populate cid, aid, sid, date, rand and something from some json file
        return $input['destination'];
    }
}
