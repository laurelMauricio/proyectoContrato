<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Search</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="page header">   
                    <h1>
                            Busqueda de contratoss
                            {{ Form::open (['route' => 'contrato', 'method' => 'GET', 'class' => 'form-inline pull-right'])}}
                            
                            <div class="form-group">
                                {{ Form::text('ci_persona', null, ['class' => 'form-control', 'placeholder' => 'Ci'])}}
                            </div>

                            <div class="form-group">
                                {{ Form::text('primer_nom', null, ['class' => 'form-control', 'placeholder' => 'Nombres'])}}
                            </div>
                            
                            <div class="form-group">
                                {{ Form::text('paterno', null, ['class' => 'form-control', 'placeholder' => 'Paterno'])}}
                            </div>
                            
                            <div class="form-group">
                                {{ Form::text('nombre_US', null, ['class' => 'form-control', 'placeholder' => 'UnidSolic'])}}
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                            {{ Form::close() }}
                    </h1>    
                </div>
                <div class="col-md-8">
                    <table class="table table-hover table-striped">
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                
                                <td>{{ $user->ci_persona }}</td>
                                <td>{{ $user->persona->primer_nom }}</td>
                                <td>{{ $user->persona->paterno }}</td>
                                <td>{{ $user->persona->materno }}</td>
                                <td>{{ $user->unidadsolicitante->nombre_US }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{--{{ $users->render() }}--}}
                    
                </div>    
                
                
            </div>
        </div>

    </div>    
</body>
</html>