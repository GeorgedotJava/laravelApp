@extends('layouts.app', ["current" => "index"])

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Cadastro de produtos
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre os seus produtos</a>
                    </div>
                </div>
            </div>


            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card-text">
                            Cadastro de produtos
                        </p>
                        <a href="/categorias" class="btn btn-primary">Cadastre os seus categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection