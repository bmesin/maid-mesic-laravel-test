@extends('layouts.master')

@section('title', 'Resolve Destination')

@section('content')
    <form method="POST">
        <div class="panel panel-default">
            <div class="panel-heading">Input Parameters</div>
            <div class="panel-body">
                @if($inputError)
                <div class="row">
                    <div class="col-md-12 alert alert-danger">
                        Campaign and affiliate have to be selected!
                    </div>
                </div>
                @endif
                <div class="form-group">
                    <label for="cid">Campaign ID</label>
                    <select class="form-control" id="cid" name="cid">
                        <option value="">- Select -</option>
                        @foreach($campaigns as $campaign)
                            <option value="{{$campaign['id']}}">{{$campaign['id']}}: {{$campaign['title']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="aid">Affiliate ID</label>
                    <select class="form-control" id="aid" name="aid">
                        <option value="">- Select -</option>
                        @foreach($affiliates as $affiliate)
                            <option value="{{$affiliate['id']}}">{{$affiliate['id']}}: {{$affiliate['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sid">Sub ID</label>
                    <input type="text" class="form-control" id="sid" placeholder="SID Input" name="sid">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Resolve</button>
    </form>
@endsection
