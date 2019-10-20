

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Prova</title>
</head>
<body>
    <!-- Informações cabeçalio -->
    @foreach ($test as $t)
        <p>Unidade Curricular:{{$t->unidadeCurricular}}</p>
        <p>Assunto: {{$t->assunto}}</p>
        <p>Nome:</p>
        <p>Data:</p>
    @endforeach
  <div>

    <!-- Loop gabarito -->
    <p><b>Gabarito:</b><p>
    @foreach ($classTests as $q)
    
    <center>Questão {{$count}}: A(  ) B(  ) C(  ) D(  ) E(  )<br></center>

    <?php $count++ ?>
    @endforeach

    
    <?php $count = 1 ?>
    
    <!-- loop questões -->
    @foreach ($classTests as $q)
    <p>Questão {{$count}}: {{$q->enunciado}} </p>

    <p>A( ) - {{$q->alternativaA}}</p>
    <p>B( ) - {{$q->alternativaB}}</p>
    <p>C( ) - {{$q->alternativaC}}</p>
    <p>D( ) - {{$q->alternativaD}}</p>
    <p>E( ) - {{$q->alternativaE}}</p>

    <?php $count++ ?>
    @endforeach


  </div>
</body>
</body>
</html>