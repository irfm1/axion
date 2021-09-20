@extends('template.app')
@section('content')

    <div class="card ">
        <div class="card-header text-center">Chamados</div>
        <div class="card-body">
            <div class="card text-center m-2">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Não consigo alterar um rodapé no word</h5>
                    <p class="card-text">Preciso alterar o conteudo do rodpé porem não consigo.</p>
                    <a href="#" class="btn btn-primary">Ajudar</a>
                </div>
                <div class="card-footer text-muted">
                    2 minutos atrás
                </div>
            </div>
            <div class="card text-center m-2">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Preciso de um tecnico para instalar um software</h5>
                    <p class="card-text">Praesent vitae tincidunt erat, sed cursus neque. Maecenas ante nisi, cursus ut est quis, facilisis laoreet quam. Pellentesque malesuada interdum augue mollis ullamcorper.</p>
                    <a href="#" class="btn btn-primary">Ajudar</a>
                </div>
                <div class="card-footer text-muted">
                    17 minutos atrás
                </div>
            </div>
            <div class="card text-center m-2">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Não consigo alterar um documento word</h5>
                    <p class="card-text">Preciso alterar o conteudo porem não consigo.</p>
                    <a href="#" class="btn btn-primary">Ajudar</a>
                </div>
                <div class="card-footer text-muted">
                    38 minutos atrás
                </div>
            </div>
        </div>
        <div class="card-footer text-center">1 2 3 4 ...</div>
    </div>
@endsection
@section('filter')
    <div class="card ">
        <div class="card-header text-center">filtros</div>
        <div class="card-body">
            <select class="custom-select p-2">
                <option value="0">Tipo</option>
            </select>
            <select class="custom-select md-2">
                <option value="0">area</option>
            </select>
            <select class="custom-select md-2">
                <option value="0">valor</option>
            </select>
            <select class="custom-select md-2">
                <option value="0">tempo</option>
            </select>
            <select class="custom-select md-2">
                <option value="0">dificuldade</option>
            </select>
        </div>
        <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Filtrar</a>
        </div>
    </div>
@endsection
