@extends('layouts.app')
<style>
 #table{
    font-size: 16px;
    font-family: sans-serif;
    width:100%;
    height:40px;
  }
  @media screen and (max-width: 760px) {
    #table{
      width:100%;
      font-size:14px;
    }
 
    #btn_danger{
      margin-top:10px;
    }
  }
  @media screen and (max-width: 500px) {
    #table{
      width:100%;
      font-size:13px;
    }
    #btn_danger{
      margin-top:10px;
    }
  }
  h1{
    font-family: sans-serif;
    margin-left:25px;
}
  #profil{
    font-size: 18px;
    font-family: sans-serif;
    margin-left:20px;
    height:60px;
    padding: 20px;
    color:black;
    text-align:center;
    width: 200px;
  }
  #link{
    color:black;
    text-decoration:none;
    font-size: 18px;
    font-family: sans-serif;

  }
  #btn_light{
    margin-left:20px;
    height:60px;
    padding: 20px;
    text-align:center;
    width: 200px;
    background-color: white;
    border:1px solid white;
    cursor: pointer;
  }
  #btn_light:hover{
    background-color: #f4511e;
    border:1px solid #f4511e;
  }
  #btn_success{
    height:60px;
    text-align:center;
    width: 200px;
    background-color: white;
    border:1px solid white;
    margin-left:20px;
    cursor: pointer;
    padding: 20px;
  }
  #btn_success:hover{
  background-color:#28A745;
  border:1px solid #28A745;
}
  #btn_warning {
    height:60px;
    margin-left:20px;
    width: 200px;
    text-align:center;
    background-color: white;
    border:1px solid white;
    cursor: pointer;
  
}
</style>
@section('content')
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
<div class = "container">
<div  class="jumbotron jumbotron-fluid">
  <h1>Witaj</h1>
  <hr class="my-4">
  <button class="btn btn-info btn-lg" href="showinvoice" role="button"id="btn_success"><a id="link"  href="showinvoice" >Pokaz Faktury</a></button>
  <a class="btn btn-primary btn-lg" href="profile" id="profil" role="button">Profil</a>
</div>
</div>
</body>

</html>
@endsection