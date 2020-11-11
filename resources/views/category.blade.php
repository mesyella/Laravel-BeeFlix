<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Category</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid"style=" width:75%;">
            <a class="navbar-brand" href="{{route('home')}}" style="font-size: 30px; font-weight: bold; color:black;">BeeFlix-</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}"> <span style="font-size:20px">Categories</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="goBack()"><span style="font-size:20px">Return</span></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>  
<div class="section" style="background-color: #F3C507; padding-bottom:5%">
    <div class="container-fluid" style="width:75%; height:90vh;">
        <div class="row h-100 align-items-center">
            <div class="col-md-12 text-center">
                <p style=" font-weight: bold; font-size:50px">-{{$genre[0]->name}}-</p>
            </div>
            @foreach($genre[0]->movies as $movie)
                <div class="col-md-3">
                    <div class="card">
                        <img src="/{{$movie->photo}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style=" font-size:30px;">{{$movie->title}} </h5>
                            <a href="{{route('movieDetail', ['title' => $movie->title])}}" class="card-link"><button type="button" class="btn btn-light btn-lg" style="width:100%; background-color: #F3C507;"><span style="font-weight:bold"> View Details </span></button></a>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</div>

 <div class="container-fluid"  style=" height: 10vh;">
        <div class="row h-100  align-items-center">
            <div class="col-md-12 text-center">
                <a class="navbar-brand" href="#" style="font-size: 20px; color:black;">@Copyright-Mesyella-2201793281</a>
            </div>
        </div> 
    </div>
</body>
<script>
    function goBack() {
    window.history.back();
    }
</script>
</html>