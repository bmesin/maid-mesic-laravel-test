<?php namespace App\Http\Controllers;

use App\Contracts\Services\Destination\ResolveDestinationInterface;
use App\Services\Destination\ResolveDestination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function showResolveForm()
    {
        // TODO: Populate campaigns and affiliates select options from JSON data:
        // Hint: The storage_path() helper function will help you to access the data.
        $campaigns = [];
        $affiliates = [];

        return view('destinations.resolve.form', [
            'campaigns' => $campaigns,
            'affiliates' => $affiliates,
        ]);
    }

    public function resolveDestination(Request $request, ResolveDestinationInterface $resolveDestination)
    {
        // Bonus TODO: Validation: At least cid and aid have to be selected
        $resultDestination = $resolveDestination->resolve($request->all());

        return view('destinations.resolve.result', ['resultDestination' => $resultDestination]);
    }
}
