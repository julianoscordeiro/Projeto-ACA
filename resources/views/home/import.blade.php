<!DOCTYPE html>
<html>
<head>
    <title>Importe e exporte formulários de alunos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
    
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
        Importe e exporte formulários de alunos
        </div>
        <div class="card-body">
            <form action="{{ route('importarAluno') }}" method="POST" name="importform" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <a class="btn btn-info" href="{{ route ('exportarAluno') }}">Exportar arquivo</a>
                <button type="submit" class="btn btn-success">Importar arquivo</button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>