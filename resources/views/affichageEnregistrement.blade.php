<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Title</title>
</head>
<body>
<header>

<div class="container-fluid">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{URL::to('/pageEnregistrement')}}">Voir les enregistrements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">S'inscrire</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</header>
</div>

    <div class="container-fluid pt-5">
    <div class="container">


    <table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Titre</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody class="table-info">
    @foreach($schools as $school)
  <tr>
      <th scope="row">{{ $school->id }}</th>
      <td>{{ $school->nom }}</td>
      <td>{{ $school->prenom }}</td>
      <td>{{ $school->email }}</td>
      <td>{{$school->titre}}</td>
<td>
   <a href="{{URL('/affichageSimple',$school->id)}}" type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
<a href="{{url('edit-objet',$school->id)}}" type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
<form action="{{url('delete-objet',$school->id)}}" method="post">
{{method_field('DELETE')}}
@csrf

<button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</form>
</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</div>
</body>
</html>