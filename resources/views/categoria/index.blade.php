<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Categorías</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pN1yT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-1g navbar-light bg-warning">
<div class="container-fluid">
<a class="navbar-brand h1" href={{ route('categoria.index') }}>CRUD Categoría</a>
<div class="justify-end ">
<div class="col ">
<a class="btn btn-sm btn-success" href={{ route('categoria.create') }}>Agregar Categoría</a>
</div>
</div>
</div>
</nav>
<div class="container mt-5">
<table class="table">
<thead>
<tr>
<th scope="col">Nombre</th>
<th scope="col">Descripción</th>
<th scope="col">Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($categorias as $categoria)
<tr>
<td>{{ $categoria->nombre }}</td>
<td>{{ $categoria->descripcion }}</td>
<td>
<a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-primary btn-sm">Editar</a>
<form action="{{ route('categoria.destroy', $categoria->id) }}" method="post" style="display: inline;">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIds1K1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-17E8VVD/ismYTF4hNIPjVp/Zjvgyo16VFvRkX/vR+Vc4jQkC+hVqc2pM80Dewa9r" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
integrity ="sha384-8pUGZvbkm6XF6gxjEn1muGrJXVbNuzT9qBBavbLwCsOGabYfZo0T@to5eqruptly" crossorigin="anonymous"></script>
</body>
</html>