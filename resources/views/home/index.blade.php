@extends('template.template')

@section('content')

<div class="area" >
    <ul class="circles">

                    <!-- Texto de boas vindas -->
                    <div class="textoinicio" >
                        <h1 class="display-1">ACA</h1>
                        <h3 class="display-3">Aplicativo de correção automatizada</h3>
                        <h3>
                            <small class="text-muted">Cansado de passar dias corrigindo provas? o ACA faz isso pra você e totalmente de graça! <br> 
                            Registre-se agora e obtenha mais momentos em sua vida!
                        </h3>
                        <a href="/register"  class="btn btn-primary">
                                    {{ __('Registrar-se') }}
                        </a>
                        <a href="/login">
                                    {{ __('ou Entre') }}
                        </a>
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