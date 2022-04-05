@extends('layouts/admin/layout')

@section('title', 'Add Movies')
@section('main')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-capitalize">add movie</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('m-submit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description" name="desc" cols="10" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <select class="text-capitalize selectpicker p-1" name="language" id="">
                                    <option class="text-capitalize" disabled="" selected="">Language</option>
                                    <option value="English">English</option>
                                    <option value="Urdu">Urdu</option>
                                    <option value="Hindi">Hindi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="text-capitalize selectpicker p-1" name="genre" id="">
                                    <option class="text-capitalize" disabled="" selected="">Genre</option>
                                    <option value="Action">Action</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Comedy">Comedy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="released_at">
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="form-group">
                                <input type="text" class="form-control" name="trailer" placeholder="trailer link">
                            </div>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{ asset('admin/assets/img/image_placeholder.jpg') }}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="poster" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary w-50">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
