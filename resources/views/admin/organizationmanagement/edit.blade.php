@extends('layouts.main')

@section('title')
    Organization Management Edit Page| Pursell Admin Panel
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #E60000">
                            <h6 class="text-white text-capitalize ps-3">Organization Management - Edit Table
                            </h6>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success text-white" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body px-0 pb-2">
                        <form action="{{ url('organization-management-update/' . $organizations->id) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <style>
                                #formFile::before {
                                    content: "Pick file";
                                    position: absolute;
                                    z-index: 2;
                                    display: block;
                                    background-color: #eee;
                                    width: 80px;
                                }
                            </style>
                            <div class="modal-body px-3">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" name="name" class="form-control border px-2"
                                        value="{{ $organizations->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Image:</label><br>

                                    <input type="file" name="image" class="form-control border px-2" id=formFile>
                                    <img class="mx-2 my-2" src="{{ asset('images/' . $organizations->image) }}"
                                        width="70px" height="70px" alt="Image">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea type="description" name="description" class="form-control border px-2">{{ $organizations->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Telephone:</label>
                                    <input type="text" name="telephone" class="form-control border px-2"
                                        value="{{ $organizations->telephone }}">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Location:</label>
                                    <input type="text" name="location" class="form-control border px-2"
                                        value="{{ $organizations->location }}">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Street:</label>
                                    <input type="text" name="street" class="form-control border px-2"
                                        value="{{ $organizations->street }}">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="text" name="email" class="form-control border px-2"
                                        value="{{ $organizations->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Website:</label>
                                    <input type="text" name="website" class="form-control border px-2"
                                        value="{{ $organizations->website }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="{{ url('organization-management') }}" class="btn btn-secondary my-2 mx-2">BACK</a>
                                <button type="submit" class="btn my-3 mx-1 me-4"
                                    style="background-color: #E60000; color:white;">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection
