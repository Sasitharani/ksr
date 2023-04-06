<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    @section('pageTitle', 'KSR Home')
    
    <title>@yield('pageTitle')</title>




    {{-- ////////////////Logo and name //////////////////// --}}

    <div class="container">
      <div class="row mb-2">
      
          <div class="col-lg-3 col-md-7 d-none d-sm-block ">
            <img class="d-block w-120;" src="{{ asset('/img/logo.jpg') }}" alt="First slide" style="height: 105px;">
        </div>

        <div class="col-lg-9 col-md-7 d-flex justify-content-end">
          <img class="col-lg-9 col-md-7" src="{{ asset('/img/heading.png') }}" alt="First slide" style="height: 90px;">
        </div>
        
      </div>

 {{--  ENd ////////////////Logo and name //////////////////// --}}

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mb-2">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{Route('invoice')}}">Invoice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bill</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quotation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    

  </head>
  <body>

