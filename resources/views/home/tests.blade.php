@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-6 ">
            <h1 class="display-1 ">Provas</h1>
        </div>
        <div class="col-md-3">
                <!-- Busca -->
                
                <div class="md-form active-pink active-pink-2 mb-3 mt-0">
                        <form action="/search" method="get">
                            <input class="form-control barrapesquisa" type="search"  placeholder="Buscar" name="search">
                        
                        </form>
                </div>
        </div>
        <div class="col-md-2">
                <!-- Busca -->
                <a href="/provas/criar" class="btn btn-primary questoesMargin1">Criar prova</a>
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

                                

                                 <!-- Confirmação -->
                        <script>
                                function confirmDelete(id) {
                                    var confirmation = confirm("Deseja realmente excluir?");

                                    if(confirmation){
                                        window.location = "/provas/delete/"+id;
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

                                
                                <!-- Mostrar as provas criadas -->
                                     @foreach ($test as $q)
                                    <div class="listquestions row justify-content-center ">
                                        <div class="col-md-4">
                                            <b>Nome:</b><span class="textQuestionList1" >{{$q->nome ?? ''}}</span>
                                        </div>
                                        <div class="col-md-6">
                                               <b>Assunto: </b> <span class="textQuestionList1" >{{$q->assunto ?? ''}}</span>
                                        </div>
                                        
                                        <div class=" textQuestionList1">
                                        
                                                <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $q->id }})" class="">Excluir</button>

                                                
                                        </div>
                                        <div class="textQuestionList1">
                                                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#exampleModal{{$q->id}}">Visualizar</button>
                                        </div>
                                    </div>

                                    <!-- Modal Visualizar -->
                                    <div class="modal fade" id="exampleModal{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="exampleModalLabel">Visualizar Prova</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <b>Nome:</b> {{$q->nome ?? ''}}<br>
                                                <b>Unidade Curricular:</b> {{$q->unidadeCurricular ?? ''}}<br>
                                                <b>Assunto:</b> {{$q->assunto ?? ''}}<br>
    
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    <!-- Fim modal -->

                                    @endforeach

                                    {{$test->links()}}

                                     

                <div>
                    
                
                </div>           


                


                </div>
            </div>
        </div>
    </div>
</div>

@endsection