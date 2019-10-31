@extends('layouts.app')

@section('content')



<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-12">
            <h1 class="display-1 ">Relatório de notas</h1>
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


                            <table class="table">
                                <thead>
                                <tr>
                                    <th><span class="corTabela">Aluno</span></th>
                                    <th><span class="corTabela">Email</span></th>
                                    <th><span class="corTabela">Prova</span></th>
                                    <th><span class="corTabela">Nota</span></th>
                                </tr>
                                </thead>
                                <tbody>

                                @php $soma = 0;
                                    $count = 0;
                                @endphp
                             <!-- loop para mostrar provas  do usuario -->
                             @foreach ($grades as $q)
                             
                             
                                
                                  <tr>
                                    <td class="corTabela" scope="row"><span class="corTabela">{{$q->nomeAluno ?? ''}}</span></th>
                                    <td class="corTabela" scope="row"><span class="corTabela">{{$q->email ?? ''}}</span></th>
                                        <td class="corTabela" scope="row"><span class="corTabela">{{$q->nomeProva ?? ''}}</span></th>
                                    <td class="corTabela"><span class="corTabela">{{$q->nota ?? ''}}</span></th>
                                  </tr>

                                  @php 
                                       $soma += $q->nota; 
                                       $count++
                                  @endphp
                                
                             
                             @endforeach

                             @php
                                if($count != 0){
                                    $media = $soma / $count;
                                }
                                
                             @endphp

                            

                            </tbody>
                        </table>

                        @if($count != 0)
                        <div class="row justify-content-center" >
                            <span class="mediaProva">Média da turma na prova : {{$media}}</span>
                        </div>
                        @endif



                        <div>
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>

@endsection