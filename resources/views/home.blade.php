  <!-- Styles -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

  @extends('layouts.app')
  @section('content')

  <div class="container">
      <div class="row justify-content-center">
          <h1>The List</h1>
          <div class="col-md-12 mt-5">
              <table>
                  <tr>
                      <th>FirstName</th>
                      <th>LastName</th>
                      <th>Email</th>
                      <th>password</th>
                      <th>Delete</th>
                  </tr>
                  @foreach ($users as $user)
                  <tr>
                      <td>{{$user->firstname}}</td>
                      <td>{{$user->lastname}}</td>
                      <td>{{$user->email}}</td>
                      <td id="pass">{{$user->password}}</td>
                      <td><a href="delete/{{$user->id}}" class="btn btn-danger">delete</a></td>
                  </tr>
                  @endforeach
              </table>
          </div>
      </div>
  </div>
  @endsection