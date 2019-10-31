@extends('layouts.app')

@section('content')



<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-7">
            <h1 class="display-1 ">Corrigir</h1>
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

                                
                                    <?php $count = 0 ?>
                                    <!-- Loop que mostra os alunos -->
                                        
                                        @foreach ($testQuestion as $y)

                                        @endforeach

                                        
                                         <?php $count++ ?>
                                        <form method="POST" action="{{ route('corrigidoProva', $y->test_id) }}" enctype="multipart/form-data">
                                            @csrf
                                         
                                            <div class="row justify-content-center ">
                                                    <div class="form-group col-md-12">
                                                        Aluno
                                                        <select name="aluno" class="formulariosquestoes">
                                                           @foreach ($student as $s)
                                                            <option value="{{$s->id}}">{{$s->nome}}</option>
                                                           @endforeach
                                                        </select>
                                                      </div>
                                                </div>
                                        @foreach ($testQuestion as $q)
                                                    <div class="col-md-12">
                                                            <b>Questão <?php echo$count ?>:</b> {{$q->enunciado}}
                                                    </div>
                                                    <br>
                                                    <center>

                                                        <div class="row justify-content-center ">
                                                            <div class="form-group col-md-4">
                                                                <b>Alternativa</b>
                                                                        <select name="alternativa_selected[]" class="formulariosquestoes">
                                                                            <option>A</option>
                                                                            <option>B</option>
                                                                            <option>C</option>
                                                                            <option>D</option>
                                                                            <option>E</option>
                                                                        </select>
                                                                      </div>
                                                        </div>
                                                </center>
                                                <br>
                                           

                                        @endforeach

                                            <button type="submit" class="btn btn-success">Corrigir</button>
                                                    
                                                    <a href="/correcao" class="btn btn-danger">Cancelar</a>             
            
                                            </form>






                        <div>
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>

@endsection