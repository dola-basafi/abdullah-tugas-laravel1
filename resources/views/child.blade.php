@php

  if (!isset($role)) {
    $role = 'admin';
  }  
  if (!isset($active)){
    $active = true;
  }else {
    $active = $active == 'active' ? true : false;
  }

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

@endphp

@extends('parent',['title'=>'judul','icon'=>'/images/star.png'])
@section('card')
<div class="container">
<form action="" class="m-5 p-5" method="POST">
  @csrf
  <div class="input-group input-group-lg">
    <span class="input-group-text" id="inputGroup-sizing-lg">Status</span>
    <select class="form-select" aria-label="Default select example" name="active">
      <option value="active" {{ $active  ? 'selected' : '' }}>Active</option>
      <option value="nonactive" {{ !$active  ? 'selected' : '' }}>Nonactive</option>
    </select>
  </div>
  <div class="input-group input-group-lg">
    <span class="input-group-text" id="inputGroup-sizing-lg">Role</span>
    <select class="form-select" aria-label="Default select example" name="role">      
      <option value="admin" {{ $role == 'admin' ? 'selected' : '' }}>Admin</option>
      <option value="user" {{ $role == 'user' ? 'selected' : '' }}>User</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary mx-auto">Submit</button>

</form>

  
  

<div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
@foreach ($user as $item)
{{-- @if ($item['active'] == $filter['active']  && $item['role'] == $filter['role'])     --}}
@if ($item['active'] == $active  && $item['role'] == $role)    
  <div class="col mx-auto">
    <div class="card gap-4">
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
