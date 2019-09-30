@extends('layouts.app')

@section('content')



<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Turmas</h1>
        </div>
        <div class="col-md-2">
                <!-- Criar Turma -->
                <a href="/questoes/criar" class="btn btn-primary questoesMargin1">Criar Turma</a>
        </div>
    </div>



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

                        
                            <div class=" row justify-content-center ">
                                    <div class="titleListQuestion col-md-2">
                                        <span>Nome</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                            <span>Instituição</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                        <span>Curso</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                        <span>Período</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                        <span>Semestre</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                        <span>Alunos</span>
                                    </div>
                            </div>
                                     <!-- Confirmação -->
                        <script>
                                function confirmDelete(id) {
                                    var confirmation = confirm("Deseja realmente excluir?");

                                    if(confirmation){
                                        window.location = "/questoes/delete/"+id;
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

                                    <!-- loop para mostrar questões  do usuario -->
                                    
                                    @foreach ($question as $q)
                                    <div class="container">
                                    <div class="listquestions row justify-content-center">
                                        <div class="col-md-2">
                                            <span class="textQuestionList1" >{{$q->assunto ?? ''}}</span>
                                        </div>
                                        <div class="col-md-7">
                                                <span class="textQuestionList" >{{$q->enunciado ?? ''}}</span>
                                        </div>
                                        
                                        <div class=" textQuestionList1 col-md-1">
                                        <button class="button" onclick="confirmDelete({{ $q->id }})">Excluir</button>
                                        </div>
                                        <div class=" textQuestionList1 col-md-1">
                                        <a class="button" href="/questoes/editar/{{ $q->id }}">Editar</a>
                                        </div>
                                        <div class="textQuestionList1 col-md-1">
                                                <button type="button" class="button" data-toggle="modal" data-target="#exampleModal">Visualizar</button>
                                        </div>
                                    </div>
                                </div>
                                
                                    @endforeach

                                    <!-- Modal Visualizar -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLabel">Visualizar Questão</h2>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Assunto:<br>
                                            <p>{{$q->assunto ?? ''}}</p>
                                            Enunciado: <br>
                                            <p>{{$q->enunciado ?? ''}}</p>
                                            Alternativas: <br>
                                            
                                            <p>A = {{$q->alternativaA ?? ''}}</p>
                                            <p>B = {{$q->alternativaB ?? ''}}</p>
                                            <p>C = {{$q->alternativaC ?? ''}}</p>
                                            <p>D = {{$q->alternativaD ?? ''}}</p>
                                            <p>E = {{$q->alternativaE ?? ''}}</p>

                                            Alternativa Correta: {{$q->resposta ?? ''}};
                                        
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    

                                    
                                    

                <div>
                    
                
                </div>           


                


                </div>
            </div>
        </div>
    </div>
</div>

@endsection