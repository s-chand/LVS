@extends('layouts.app')

@section('content')
  <div class="col-md-8 ">
    <div class="panel panel-primary">
      <div class="panel-heading">Parcel Search</div>

      <div class="panel-body">
        <div class="container-fluid">
          <div class="col-xs-8 col-xs-offset-2">

            <!-- Default panel contents -->
            <form  class="" action="" method="post">
              <div class="col-lg-8">
                <div class="input-group">
                  <input type="text" class="form-control input-group-lg" placeholder="Enter Parcel Number...">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Go!</button>
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
          No results to show.
        </div>
    </div>
  </div>

@endsection
