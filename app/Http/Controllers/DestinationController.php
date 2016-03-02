<?php namespace App\Http\Controllers;

use App\Services\Destination\ResolveDestination;

class DestinationController extends Controller
{
    public function showResolveForm()
    {
        // TODO: Populate from json resource
        $campaigns = [];
        $affiliates = [];

        return view('destinations.resolve.form', [
            'campaigns' => $campaigns,
            'affiliates' => $affiliates,
        ]);
    }

    public function resolveDestination()
    {
        // TODO: Validation & ResolveDestination service
        $resultDestination = new ResolveDestination()->resolve();

        return view('destinations.result', ['resultDestination' => $resultDestination]);
    }
}
