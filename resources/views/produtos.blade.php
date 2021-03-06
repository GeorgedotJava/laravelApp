@extends('layouts.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
                           
            
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Qtd</th>
                            <th>Preço</th>
                            <th>Departamento</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            
                        
                    </tbody>
                </table>
            
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary">Novo Produto</button>
        </div>
        <div class="model" tabindex="-1" role="dialog" id="cadProduto">
            <div class="modal-dialog" role="document">
                <form class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo Produto</h5>                    
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" class="form-control">

                        <div class="form-group">
                            <label for="nomeProduto" class="control-label">Nome do Produto</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="precoProduto" class="control-label">Preço</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="precoProduto" placeholder="Preço do Produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="qtdProduto" class="control-label">Quantidade</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="qtdProduto" placeholder="Nome do Produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nomeProduto" class="control-label">Nome do Produto</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection