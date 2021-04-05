<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    
    <ul>
    
        {{-- <li>hola les dice {{ $empleados->nombre}}</li> --}}
    
    </ul>
    <div class='row'>
        <div class='col-md-12'>
            <h4>Lista de Empleados</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Codigo</td>
                            <td>Nombre</td>
                            <td>Lugar de Nacimiento</td>
                            <td>Fecha de Nacimiento</td>
                            <td>Telefono</td>
                            <td>Cargo</td>
                            <td>Estado</td>
                            <td>Empresa</td>
                        </tr>
                        </thead>

                    <tbody>
                        @foreach ($empleado as $empleados )
                            <tr>
                                <td>{{ $empleados->id}}</td>
                                <td>{{ $empleados->codigo}}</td>
                                <td>{{ $empleados->nombre}}</td>
                                <td>{{ $empleados->lugar_nacimiento}}</td>
                                <td>{{ $empleados->fecha_nacimiento}}</td>
                                <td>{{ $empleados->telefono}}</td>
                                <td>{{ $empleados->cargo}}</td>
                                <td>{{ $empleados->estado}}</td>
                                <td>{{ $empleados->empresa_id}}</td>
                            </tr>
                        @endforeach
                 </table>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>    
</body>

</html>

