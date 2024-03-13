<!doctype html>
<html lang="en">
  <head>
    <title>index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">contact</a>
            </li>
           
        </ul>
       
    </div>
  </nav>
  <div class="container mt-5">
    @for($i=0;$i<=10;$i++)
    {{$i}}
    @endfor
    <table class="table">
        
        <tbody>
            @for($i=0;$i<=10;$i++)
            <tr>
                <td>{{13}}</td>
                <td>{{'x'}}</td>
                <td>{{$i}}</td>
                <td>{{'='}}</td>
                <td>{{13*$i}}</td>
            </tr>
           @endfor
        </tbody>
    </table>
  </div>
  </body>
</html>