<?php namespace App\Http\Controllers;

class DestinationController extends Controller
{
    public function showPopulateForm()
    {
        return view('destinations.populate');
    }

    public function populateDestination()
    {
        // TODO: Validation & PopulateDestination service
        $resultDestination = 'TODO';
        return view('destinations.result', ['resultDestination' => $resultDestination]);
    }
}
