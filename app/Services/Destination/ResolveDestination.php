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

        $campaignsJson = str_replace('\\', '/',storage_path('/data/campaigns.json'));
        $campaigns = json_decode(file_get_contents($campaignsJson), true);

        // check is campaign selected
        if ($input["cid"]) {
            // check is selected campaign in array
            $objectKey = array_search($input["cid"], array_column($campaigns, 'id'));
            if ($objectKey) {
                $campaign = $campaigns[$objectKey];

                // TODO: populate tokens {cid}, {aid}, {sid}, {date}, {rand}
                $randomInteger = rand();
                $destination = str_replace(['{cid}', '{sid}', '{aid}', '{rand}', '{date}'], [$input['cid'], $input['sid'], $input['aid'], $randomInteger, date("Y-m-d")], $campaign["destination"]);

                return $destination;

            } else {
                return "Something went wrong!";
            }
        } else {
            return "Campaign is not selected!";
        }

    }
}
