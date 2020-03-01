<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
@extends('layouts.app')
@section('content')
<br>
<br/>
<div class="container" syle="width:100%;">
<div  class="jumbotron jumbotron-fluid" syle="width:100%;">
<button type="button" class="btn btn-success"><a href ='/createinvoice'>Stworz Fakture</a></button>
<br/>
@foreach ($fakturas as $faktura)
<br/>
<table class="table table-striped table-dark" syle="width:100%;" >
  <thead>
    <tr>
      <th scope="col">Typ Faktury</th>
      <th scope="col">Data Wystawienia</th>
      <th scope="col">Data Sprzedazy</th>
      <th scope="col">Wartosc brutto</th>
      <th scope="col">Staus Faktury</th>
      <th scope="col">Sposob Platnoci </th>
    </tr>
  </thead>
  <tbody class="">
    <tr>
      <th>{{$faktura->typ_faktury}}</th>
      <td>{{$faktura->data_wystawienia}}</td>
      <td>{{$faktura->data_sprzedazy}}</td>
      <td>{{$faktura->wartosc_brutto}}</td>
      <td>{{$faktura->status}}</td>
      <td>{{$faktura->sposob_platnosci}}</td>
    </tr>
    <tr>
  </tbody>
</table>
<button type="button" class="btn btn-warning"><a href = 'edit/{{ $faktura->id}}'>Edytuj Fakture</a></button>
<button type="button" class="btn btn-light">PDF Faktury</button>
<button type="submit" class="btn btn-danger"><a href = 'delete/{{ $faktura->id}}'>Usun Fakture</a></button>
<br/>
@endforeach

</div>
</div>
@endsection
</body>

</html>
