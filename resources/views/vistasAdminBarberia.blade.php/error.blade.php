@include('Llamados.links')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-danger" role="alert">
                    No cuentas con los permisos para ver esta pagina.
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href="{{ url()->previous() }}">Volver</a></p>
</body>
</html>