@php
 $user= [
  [
  "nama" => "dola",
  "foto" => "/images/male.jpg",
  "bio" => "lorem ipsum lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
  "active" => true,
  "alamat" => "Bandung",
  "role" => "admin",  
],
[
  "nama" => "tono",
  "foto" => "/images/male.jpg",
  "bio" => "lorem ipsum lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
  "active" => true,
  "alamat" => "Surabaya",
  "role" => "admin",  
],
[
  "nama" => "Budi",
  "foto" => "/images/male.jpg",
  "bio" => "lorem ipsum lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
  "active" => false,
  "alamat" => "Jakarta",
  "role" => "admin",  
],
[
  "nama" => "Sinta",
  "foto" => "/images/female.jpg",
  "bio" => "lorem ipsum lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
  "active" => false,
  "alamat" => "Bandung",
  "role" => "admin",  
],
[
  "nama" => "Faris",
  "foto" => "/images/male.jpg",
  "bio" => "lorem ipsum lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
  "active" => false,
  "alamat" => "Malang",
  "role" => "user",  
],
[
  "nama" => "Ani",
  "foto" => "/images/female.jpg",
  "bio" => "lorem ipsum lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
  "active" => false,
  "alamat" => "Semarang",
  "role" => "user",  
],
[
  "nama" => "Tini",
  "foto" => "/images/female.jpg",
  "bio" => "lorem ipsum lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
  "active" => false,
  "alamat" => "Medan",
  "role" => "user",  
],
[
  "nama" => "Fulan",
  "foto" => "/images/male.jpg",
  "bio" => "lorem ipsum lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
  "active" => true,
  "alamat" => "Bandung",
  "role" => "user",  
],
[
  "nama" => "Fulanah",
  "foto" => "/images/female.jpg",
  "bio" => "lorem ipsum lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
  "active" => true,
  "alamat" => "Bandung",
  "role" => "user",  
],
];
$filter = [
  "active" => false,
  "role" => "user"
]
@endphp

@extends('parent',['title'=>'judul','icon'=>'/images/star.png'])
@section('card')
<div class="container">
<h1 class="display-1 text-center">
  Role = {{$filter['role']}} 
</h1>
<h1 class="display-1 text-center">
  Status = {{$filter['active'] ? 'active':'nonactive'}}
</h1>
<div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
@foreach ($user as $item)
@if ($item['active'] == $filter['active']  && $item['role'] == $filter['role'])    
  <div class="col">
    <div class="card">
      <img src="{{$item['foto']}}" class="card-img-top img-thumbnail rounded mx-auto d-block" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nama : {{$item['nama']}}</h5>
        <p class="card-text text-primary">Role : {{$item['role']}}</p>
        <p class="card-text">alamat : {{$item['alamat']}}</p>
        <p class="card-text text-danger">Status = {{$item['active'] ? 'active':'nonactive'}}</p>
        <p class="card-text ">Biodata : {{$item['bio']}}</p>
      </div>
    </div>
  </div>  
  @endif
  
  @endforeach
</div>
</div>

@endsection
