@extends('layouts.app')
@section('content')
<main class="main">
  <div class="container-fluid">
    <div class="row row--grid">
      <!-- breadcrumb -->
      <div class="col-12">
        <ul class="breadcrumb">
          <li class="breadcrumb__item"><a href="/">Home</a></li>
          <li class="breadcrumb__item breadcrumb__item--active">Error 404</li>
        </ul>
      </div>
      <!-- end breadcrumb -->

      <!-- error -->
      <div class="col-12">
        <div class="page-404">
          <div class="page-404__wrap">
            <div class="page-404__content">
              <h1 class="page-404__title">404</h1>
              <p class="page-404__text">The page you are looking for not available!</p>
              <a href="#" class="page-404__btn" onclick="history.back()">go back</a>
            </div>
          </div>
        </div>
      </div>
      <!-- end error -->
    </div>
  </div>
</main>
@endsection