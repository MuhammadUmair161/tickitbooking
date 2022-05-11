@extends('layouts/admin/layout')

@section('title', 'Add Movies')
@section('main')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-2">
                        <h3 class="card-title text-capitalize">add movie</h3>
                    </div>
                    {{-- <div class="offset-8 col-sm-2">
                        <a href="{{ route('m-tablelist') }}" class="btn btn-primary text-capitalize">view list</a>
                    </div> --}}
                </div>
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
                                <input type="text" class="form-control text-capitalize" name="trailer" placeholder="trailer link">
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
                    <div class="card-footer text-center text-capitalize">
                        <button type="submit" class="btn btn-primary text-capitalize w-50">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--list --}}
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-2">
                        <h3 class="card-title text-capitalize">all movies</h3>
                    </div>
                    {{-- <div class="offset-8 col-sm-2">
                        <a href="{{ route('m-create') }}" class="btn btn-primary text-capitalize">add movie</a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive ps">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        genre
                                    </th>
                                    <th class="text-center">
                                        language
                                    </th>
                                    <th class="text-right">
                                        released
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($movies as $item)
                                    <tr>
                                        <td class="text-center">
                                            <div class="photo">
                                                <img src="{{ asset('storage/' . $item->poster) }}" alt="Table image">
                                            </div>
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->genre }}
                                        </td>
                                        <td class="text-center">
                                            {{ $item->language }}
                                        </td>
                                        <td class="text-right">
                                            {{ $item->released_at }}
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('m-edit', $item->id) }}" type="button" rel="tooltip"
                                                class="btn btn-success btn-link btn-sm btn-icon "
                                                data-original-title="Refresh" title="">
                                                <i class="tim-icons icon-refresh-01"></i>
                                            </a>
                                            <a href="{{ route('m-delete') }}" type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm "
                                                data-original-title="Delete" title="">
                                                <i class="tim-icons icon-simple-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
