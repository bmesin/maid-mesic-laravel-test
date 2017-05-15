<?php namespace App\Http\Controllers;

use App\Contracts\Services\Destination\ResolveDestinationInterface;
use App\Services\Destination\ResolveDestination;
use Illuminate\Http\Request;



class DestinationController extends Controller
{
    public function showResolveForm($error = false)
    {
        // TODO: Populate campaigns and affiliates select options from JSON data:
        // Hint: The storage_path() helper function will help you to access the data.

        $campaignsJson = str_replace('\\', '/',storage_path('/data/campaigns.json'));
        $campaigns = json_decode(file_get_contents($campaignsJson), true);

        $affiliatesJson = str_replace('\\', '/',storage_path('/data/affiliates.json')) ;
        $affiliates =  json_decode(file_get_contents($affiliatesJson), true);


        return view('destinations.resolve.form', [
            'campaigns' => $campaigns,
            'affiliates' => $affiliates,
            'inputError' => $error
        ]);
    }

    public function resolveDestination(Request $request, ResolveDestinationInterface $resolveDestination)
    {
        // Bonus TODO: Validation: At least cid and aid have to be selected

        $input = $request->all();
        // check are cid and aid selected
        if ($input["cid"] && $input["aid"]) {
            $resultDestination = $resolveDestination->resolve($input);
            return view('destinations.resolve.result', ['resultDestination' => $resultDestination]);
        } else {
            return $this->showResolveForm(true);
        }

    }
}
