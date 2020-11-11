<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movie Detail</title>
    <style>
        .page-link{
            background-color: black;
            color:#F3C507;
            border-color: black;
        }
        .page-item.active .page-link {
            z-index: 3;
            color: black;
            background-color: #F3C507;
            border-color: black;
        }
        .page-item.disabled .page-link {
            background-color: black;
            color:#F3C507;
            border-color: black;
        }
        .page-link:hover{
            z-index: 3;
            color: black;
            background-color: #F3C507;
            border-color: black;
        }
    </style>
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
    <div class="section" style="background-color: #F3C507;height:90vh; ">
        <div class="container-fluid" style=" width:75%;">
            <div class="row" >
                <div class="col-md-3" style="margin-top:5%">
                    <img style="width: 270px" src="/{{$movie[0]->photo}} " alt="">
                </div>
                <div class="col-md-9" style="margin-top:5%">
                    <p style="font-size: 40px; font-weight: bold; color:black;">{{$movie[0]->title}}</p>
                    <p style="font-size: 15px;">{{$movie[0]->description}}</p>
                    <p style="font-size: 20px; font-weight: bold;">Ratings:</p>
                    @for ($i = 0; $i < $movie[0]->rating; $i++)
                        <img style="width: 30px" src="/img/star.png" alt="">
                    @endfor
                    <p style="font-size: 20px; font-weight: bold; margin-top:3%">Category:</p>
                    <a href="{{route('movieCategory', ['name' => $genre[0]->name])}}" class="card-link"><button type="button" class="btn btn-dark">{{$genre[0]->name}}</button> </a>
                </div>
                <div class="col-md-12", style="margin-top:2%">
                    <p style="font-size: 30px; font-weight: bold;">Episode</p>
                    <table class="table table-striped" style="background-color:white">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Episode</th>
                            <th scope="col">Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($episodes as $episode)
                                <tr>
                                <th scope="row">Episode {{$episode->episode}} </th>
                                <td>{{$episode->title}} </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <div class="paginate" style="color:yellow">
                            {{$episodes->links()}} 
                        </div>
                                   
                </div>
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