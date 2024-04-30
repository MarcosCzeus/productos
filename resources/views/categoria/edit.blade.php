<!doctype html
chtal lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale-1">
<title>Actualizar Categoria </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css"
 rel="stylesheet" Integrity sha584-QUTEZYJPEJIS SWARUSOFRk6YcYr5ply@ALETH
cressorigin="anonymous>
</head>
<body>
<div class="container h-100 mt-5>
<div class="row h-100 justify-content-center align-items-center">
<div class="col-10 col-md-a col-lg-6">
<h3>actualizar Categoria</h3> 
<form action="{{roots(categoria.update, $categoria->id)}}" method="post">
@csrf
@method('PUT')
<div class="form-group">
<label for=nostre> Nombre </label>
<input type="text" class="form-control" id="nombre" name="nombre" value="{{ $categoria->}}" required>
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $categoria->descripcion }}</textarea>
</div>
<br>
<button type="submit" class="btn btn-primary">Guardar</button>
<a href="javascrip:history.go(-1)" class="btn btn-secondary">Regresar</a>
</form>
</div>
</div>
</div>

<scrip src="http://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYfetY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIds1K1eN7N6jIeHz" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
integrity="sha384-1768VVD/1smYTF4hNIPjVp/Zjvgyo16VFvRkX/vR+Vc4jQkC+hVqc2pM80Dewa9r" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T@toSeqruptly" 
crossorigin="anonymous"></script>
</body>
</html>