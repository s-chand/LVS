@extends('layouts.app')

@section('content')
  <div class="col-md-8 ">
    <div class="panel panel-primary">
      <div class="panel-heading">Parcel Search</div>

      <div class="panel-body">
        <div class="container-fluid">
          <div class="col-xs-8 col-xs-offset-2">

            <!-- Default panel contents -->
            <form class="" action="{{url('/')}}/land/search" method="post">
              {{ csrf_field() }}
              <div class="col-lg-8">
                <div class="input-group">
                  <input type="text" name="parcel_number" class="form-control input-group-lg"
                         placeholder="Enter Parcel Number...">
                  <span class="input-group-btn">
                    <input class="btn btn-primary" type="submit" value="Go!">
                  </span>
                </div><!-- /input-group -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">Search results</div>
        <div class="panel-body">
          @if ($result)
            @foreach ($result as $value)
              <div class="panel panel-success">
                <div class="panel-body">
                  <label>Parcel Number:</label> <span class="h4">{{$value}}</span>
                </div>
              </div>
            @endforeach
          @elseif (!$result)
            No results to show.
          @endif

        </div>
    </div>
  </div>

@endsection
