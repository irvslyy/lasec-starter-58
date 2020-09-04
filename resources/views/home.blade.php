@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <!--  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
<script type="text/javascript">
    
    var app = angular.module('myApp', []);

    app.controller('Userku', function($scope, $http) {
        $http.get("http://localhost/payroll/public/users/json")
        .then(function ($response) {
           $scope.kotas = response.data.usersnya;
        });
    });


</script>

@endsection