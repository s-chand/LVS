@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            Services
          </div>
          <div class="panel-body">
            <div class="list-group">
              <a href="{{url('/')}}/land/verify" class="list-group-item active">
                <h4 class="list-group-item-heading">Land Verification Service</h4>
                <p class="list-group-item-text">
                  This section allows you verify a property by the given property number.
                </p>
              </a>
              <a href="{{url('/')}}/user/{{Auth::id()}}/payments" class="list-group-item">
                <h4 class="list-group-item-heading">Payments</h4>
                <p class="list-group-item-text">
                  Check your payments history and print payment reports here.
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="panel panel-primary">
          <div class="panel-heading">Dashboard</div>

          <div class="panel-body">
            <div class="container-fluid">
              <div class="col-xs-4">
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">Recent Searches</div>
                  <div class="panel-body">
                    <p>...</p>
                  </div>

                  <!-- Table -->
                  <table class="table">
                    <tr>
                      <td>test</td>
                    </tr>
                    <tr>
                      <td>test</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-xs-4">
                Favorites
              </div>
              <div class="col-xs-4">
                Your Properties
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
