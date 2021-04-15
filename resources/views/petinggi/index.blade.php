@extends('layout/main')    

@section('titlle','Daftar Para Petinggi')
    
@section('container')

 <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
            <h1><div class="mt-5"></div>Pembina dan Petinggi PMR</h1>
            <br>

            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Telfon</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Jabatan</th>
                    </tr> 
                </thead>
            </div>
                <tbody>
                    @foreach($tb_petinggi as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $mhs->nama}}</td>
                        <td>{{ $mhs->notelfon}}</td>
                        <td>{{ $mhs->jurusan}}</td>                                                                          
                        <td>{{ $mhs->jabatan}}</td>                                                                          
                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
</div>
    
@endsection
