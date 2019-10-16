@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-7 ">
            <h1 class="display-1 ">Alunos:</h1>
        </div>
        <div class="col-md-5"> 
                <div class="card-body">
                        <form action="{{ route('importarAluno') }}" method="POST" name="importform" enctype="multipart/form-data">
                            @csrf
                            <div class="btn btn-primary btn-sm">
                                    Escolher Arquivo
                                    <input type="file" class="uploadz" name="file" class="btn btn-primary">
                                    
                                </div>
                            <a class="btn btn-info btn-sm" href="{{ route ('exportarAluno') }}">Exportar</a>
                            <button type="submit" class="btn btn-success btn-sm">Importar</button>
                        </form>
                    </div>       
        </div>
    </div>
     <!-- Busca -->
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card">
                <div class=" "></div>

                <div class="card-body fundoContent ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <!-- Formulário adicionar aluno -->
                        <div>                            
                            <form method="POST" action="{{ route('criadoaluno') }}" enctype="multipart/form-data">
                                @csrf                                 
                                    Nome:
                                    <input name="nome" type="text" class="formulariosquestoes" placeholder="Nome" required>
                                    Email:
                                    <input name="email" type="text" class="formulariosquestoes" placeholder="Email" required>       
                                    <button type="submit" class="btn btn-success">Adicionar</button>
                                    <a href="/turmas/criar"  class="btn btn-danger">Cancelar</a>
                                    <br>                                                                                                                                          
                            </form>
                        </div> 

                <script>
                    function confirmDelete(id) {
                            var confirmation = confirm("Deseja realmente excluir?");
                                    if(confirmation){
                                        window.location = "/alunos/delete/"+id;
                                    }   
                                } 
                </script>
                 <!-- script do modal -->
                 <script>
                                // Get the modal
                                var modal = document.getElementById("myModal");

                                // Get the button that opens the modal
                                var btn = document.getElementById("modalBtn");

                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];

                                // When the user clicks the button, open the modal 
                                btn.onclick = function() {
                                modal.style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() {
                                modal.style.display = "none";
                                }

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                                }
                            </script>
                        <!-- Mostrar os alunos  -->
                        @foreach ($student as $q)

                            <div class="listquestions row justify-content-center ">
                                <div class="col-md-4">
                                    <b>Nome: </b><span class="textQuestionList1" >{{$q->nome}}</span>
                                </div>
                                <div class="col-md-6">
                                    <b>Email: </b><span class="textQuestionList1" >{{$q->email}}</span>
                                </div>
                                <div class=" textQuestionList1 col-md-2">
                                    <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $q->id }})">Excluir</button>
                                </div>
                            </div>
                        @endforeach
                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection