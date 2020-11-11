<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Home</title>
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
    <div class="section-1" style="background-color: #F3C507; height:70vh;">
        <div class="container-fluid h-100" style="width:75%">
            <div class="row h-100  align-items-center">
                <div class="col-md-7">
                    <p style=" font-weight: bold; font-size:70px">Welcome to BeeFlix!</p>
                    <p style=" font-size:20px">Hello Movies Lover! <br> Welcome to BeeFlix. Read about your favorite movies with us. There are 3 genres you can found, Drama, Kids, and TV Shows. You can see some recommended movies from each genres. For each movie, you can read about the title, description, rating, and episodes for each movies. </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <img src="/img/illus.png" alt="illustration" style="width: 500px;">
                </div>
            </div>
        </div> 
    </div>
        <div class="container-fluid" style="width:75%">
            <div class="row">
                @foreach($genres as $genre)
                    <div class="container-fluid" style="height:90vh">
                        <div class="row h-100 align-items-center">
                            <div class="col-md-12 text-center">
                                <a href="{{route('movieCategory', ['name' => $genre->name])}}" style=" font-weight: bold; font-size:50px; color:black;">-{{$genre->name}}-</a>
                            </div>
                            @foreach($genre->movies as $movie)
                            <div class="col-md-3">
                                <div class="card" style= >
                                    <img src="{{$movie->photo}}" class="card-img-top" alt="...">
                                    <div class="card-body" style="background-color: #F3C507;">
                                        <h5 class="card-title" style=" font-size:25px; ">{{$movie->title}} </h5>
                                        <a href="{{route('movieDetail', ['title' => $movie->title])}}" class="card-link"><button type="button" class="btn btn-light btn-lg" style="width: 100%"> <span style="font-weight:bold"> View Details </span></button></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <div class="container-fluid"  style="background-color: #F3C507; height: 10vh; margin-top:10%">
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