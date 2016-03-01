@extends('layouts.master')

@section('title', 'Populate Destination')

@section('content')
    <form method="POST">
        <div class="panel panel-default">
            <div class="panel-heading">Input Parameters</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="cid">{cid}</label>
                    <input type="text" class="form-control" id="cid" placeholder="CID Input" name="cid">
                </div>
                <div class="form-group">
                    <label for="aid">{aid}</label>
                    <input type="text" class="form-control" id="aid" placeholder="AID Input" name="aid">
                </div>
                <div class="form-group">
                    <label for="sid">{sid}</label>
                    <input type="text" class="form-control" id="sid" placeholder="SID Input" name="sid">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="destination">Destination</label>
            <input type="text" class="form-control" id="destination" placeholder="Destination" name="destination">
            <p class="help-block">Possible tokens: {cid}, {aid}, {sid}, {date}, {rand}</p>
        </div>
        <button type="submit" class="btn btn-primary">Populate</button>
    </form>
@endsection
