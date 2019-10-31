@extends('layouts.app')

@section('content')



<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-12">
            <h1 class="display-1 ">Relatórios</h1>
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
                                        window.location = "/turmas/delete/"+id;
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

                                
                             <!-- loop para mostrar provas  do usuario -->
                             @foreach ($testList as $q)
                             
                             <div class="">
                             <div class="listquestions row justify-content-center">
                                 <div class="col-md-2">
                                   <b>Nome:</b><span class="textQuestionList1" >{{$q->nome ?? ''}}</span>
                                 </div>
                                 <div class="col-md-3">
                                     <b>Assunto:</b><span class="textQuestionList1" >{{$q->assunto ?? ''}}</span>
                                 </div>         
                                 <div class="col-md-3">
                                     <b>Instituição:</b><span class="textQuestionList1" >{{$q->instituicao ?? ''}}</span>
                                 </div> 
                                 <div class="col-md-2">
                                     <b>Semestre:</b><span class="textQuestionList1" >{{$q->semestre ?? ''}}</span>
                                 </div>
                                 <div class=" textQuestionList1 ">
                                 <a class="btn btn-primary btn-sm" href="/relatorios/notas/{{ $q->id }}">Relatório de Notas</a>
                                 </div>
                             </div>
                             </div>
                             
                             @endforeach

                        <div>
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>

@endsection