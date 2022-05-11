@extends('layouts/admin/layout')

@section('title', 'Edit Movies')
@section('main')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-2">
                        <h3 class="card-title text-capitalize">edit movie</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('m-update',$movie->id ) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ $movie->name }}" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description" name="desc" cols="10" rows="10">{{ $movie->desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <select class="text-capitalize selectpicker p-1" name="language" id="">
                                    <option class="text-capitalize" disabled="" selected="">{{ $movie->language }}</option>
                                    <option value="English">English</option>
                                    <option value="Urdu">Urdu</option>
                                    <option value="Hindi">Hindi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="text-capitalize selectpicker p-1" name="genre" id="">
                                    <option class="text-capitalize" disabled="" selected="">{{ $movie->genre }}</option>
                                    <option value="Action">Action</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Comedy">Comedy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" value="{{ $movie->released_at }}" class="form-control" name="released_at">
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="form-group">
                                <input type="text" class="form-control text-capitalize" value="{{ $movie->trailer }}" name="trailer" placeholder="trailer link">
                            </div>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    {{-- <img src="{{ asset('admin/assets/img/image_placeholder.jpg') }}" alt="..."> --}}
                                    <img src="{{ asset('storage/'.$movie->poster) }}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Change</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" value="{{ $movie->poster }}" name="poster" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center text-capitalize">
                        <button type="submit" class="btn btn-primary text-capitalize w-50">update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
