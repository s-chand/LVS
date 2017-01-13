@extends('layouts.app')

@section('content')
  <div class="col-md-8 ">
    <div class="panel panel-primary">
      <div class="panel-heading">Parcel Search</div>

      <div class="panel-body">
        <div class="container-fluid">
          <div class="col-xs-8 col-xs-offset-2">

            <!-- Default panel contents -->
            <form id="searchform" required="true">
              <div class="col-lg-10">
                <div class="input-group center-block">
                  <div class="form-group label-floating">
                    {{csrf_field()}}
                    <label class="control-label"></label>
                    <input type="text" class="form-control" name="parcel_number" id="parcel_number" autocomplete="off" placeholder="Parcel Number" required>
                  </div>
                  <span class="input-group-btn">
                    <input id="searchParcel" class="btn btn-primary" type="submit" value="Go!">
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
            <div id="result">No results to show.</div>
        </div>
    </div>
  </div>


@endsection
