@extends('layout/main')    

@section('tittle','Galeri')
    
@section('container')

<section class="portfolio" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">Galeri</h1><hr>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
            <img src={{ asset('/img/1.jpg')}} class="img-thumbnail">
        </div>
        <div class="col-4">
            <img src={{ asset('/img/2.jpg')}} class="img-thumbnail">
        </div>
        <div class="col-4">
            <img src={{ asset('/img/3.jpg')}} class="img-thumbnail">
        </div>
        <div class="col-4">
            <img src={{ asset('/img/4.jpg')}} class="img-thumbnail">
        </div>
        <div class="col-4">
            <img src={{ asset('/img/5.jpg')}} class="img-thumbnail">
        </div>
        <div class="col-4">
            <img src={{ asset('/img/6.jpg')}} class="img-thumbnail">
        </div>
    </div>
  </section>
    
@endsection
