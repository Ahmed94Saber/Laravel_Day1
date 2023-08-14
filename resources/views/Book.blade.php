<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$book-> title}}</h5>
    <p class="card-text">{{$book-> description}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Price: {{$book-> price}}</li>
  </ul>
</div>










</body>

</html>