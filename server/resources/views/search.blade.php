@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="card-title">Lista de contatos</h5>
                <a href="contact/add"><button type="button" class="btn btn-primary">
                    <i class="ri-add-fill align-middle"></i>
                    add
                </button></a>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>john@doe.com</td>
                        <td><a href="tel:5511943218822">(11) 94321-8822</a></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="contact/edit/1"><button type="button" class="btn btn-sm btn-outline-dark">
                                    <i class="ri-pencil-line align-middle"></i>
                                    editar
                                </button></a>

                                <button type="button" class="btn btn-sm btn-outline-dark">
                                    <i class="ri-delete-bin-line align-middle"></i>
                                    remover
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
