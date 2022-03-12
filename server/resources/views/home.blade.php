@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="card-title">Contact List</h5>
                <a href="contact/add"><button type="button" class="btn btn-primary">
                    <i class="ri-add-fill align-middle"></i>
                    add
                </button></a>
            </div>

            @if (COUNT($vars['book']) < 1)
                <div class="alert alert-danger">No contact found. <a href="{{ url(route('add')) }}">Click here to add</a></div>
            @else
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
                        @foreach ($vars['book'] as $contact)
                        <tr>
                            <th scope="row">{{ $contact->id }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td><a href="tel:5511943218822">{{ $contact->phone_number }}</a></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="contact/edit/{{$contact->id}}"><button type="button" class="btn btn-sm btn-outline-dark">
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
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
