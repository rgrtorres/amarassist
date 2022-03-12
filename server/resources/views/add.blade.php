@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="card-title">Add a new contact</h5>
            <a href="/"><button type="button" class="btn btn-primary">
                <i class="ri-file-list-line"></i>
                List
            </button></a>
        </div>

        <form action="" method="POST">
            <input type="hidden" name="csrf-token" content="{{ csrf_token() }}">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <i class="ri-user-3-line"></i>
                </span>
                <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <i class="ri-mail-line"></i>
                </span>
                <input type="text" class="form-control" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <i class="ri-phone-line"></i>
                </span>
                <input type="text" class="form-control" placeholder="Phone number" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <i class="ri-earth-line"></i>
                </span>
                <input type="text" class="form-control" v-model="cep" placeholder="Postal Code" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <i class="ri-map-2-line"></i>
                </span>
                <input type="text" class="form-control" placeholder="Address" value="" aria-label="Username" disabled aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <i class="ri-map-pin-2-line"></i>
                </span>
                <input type="text" class="form-control" placeholder="City" aria-label="Username" disabled aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <i class="ri-navigation-line"></i>
                </span>
                <input type="text" class="form-control" placeholder="States" aria-label="Username" disabled aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
