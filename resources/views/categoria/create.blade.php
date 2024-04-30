<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agregar Categoría</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin-"anonymous">
</head>
<body>
<div class="container h-100 mt-5">
<div class="row h-100 justify-content-center align-items-center">
<div class="col-10 col-md-8 col-lg-6">
<h3>Agregar Categoría</h3>
form action="{{ route('categoria.store') }}" method="post"> <
@csrf
<div class="form-group">
<label for="nombre">Nombre</label>
<input type="text" class="form-control" id="nombre" name="nombre" required>
</div>
<div class="form-group">
<label for="descripcion">Descripción</label>
<textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
</div>
<br>
<button type="submit" class="btn btn-primary">Guardar</button>
<a href="javascript:history.go(-1)" class="btn btn-secondary">Regresar</a>
</form>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDz0xhy9GkcIds1K1eN7N6jIeHz"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-17E8VVD/1smYTF4hNIPjVp/Zjvgyo16VFvRkX/vR+Vc4jQkC+hVqc2pM80Dewa9r"
crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
integrity="sha384-0pUGZvbkm6XF6gxjEn1muGrJXVbNuzT9qBBavbLwCsOGabYfZo@T@toSeqruptly"
crossorigin="anonymous"></script>
</body>
</html>