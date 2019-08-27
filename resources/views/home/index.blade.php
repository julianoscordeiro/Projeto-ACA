@extends('template.template')

@section('content')

<div class="area" >
    <ul class="circles">

                    <!-- Texto de boas vindas -->
                    <div class="textoinicio" >
                        <h1 class="display-1">PROVA PRO</h1>
                        <h3 class="display-3">Elaboração e Correção Automatizada</h3>
                        <h2>
                            <small class="text-muted">                     
                            Conheça a ferramenta que vai auxiliar o professor em suas atividades                            
                            <h3>
                                <small class="text-muted">
                                Elabore suas provas e questões, corrija seus exames e gerencie suas turmas, com eficiência e qualidade
                            </h3>                           
                        </h2>  
                        <a href="/register"  class="btn btn-primary">
                                {{ __('Casdastre-se') }}
                        </a><br>
                        <h5>
                            <a href="/login">
                                {{ __('Entre') }}
                            </a>
                        </h5>
                    </div>
                    
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>

    </ul>
</div >

@endsection