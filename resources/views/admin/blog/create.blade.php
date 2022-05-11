@extends('layouts/admin/layout')

@section('title', 'Add Blog')
@section('main')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-capitalize">add blog</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('blog-submit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Subtitle" name="sub_title" cols="10" rows="10"></textarea> 
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Blog" name="blog" cols="10" rows="30"></textarea> 
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{ asset('admin/assets/img/image_placeholder.jpg') }}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image" />
                                    </span>
                                    <a href="#" class="btn btn-danger btn-round fileinput-exists"
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
        <div class="card-body">
            <div class="table-responsive ps">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                            <th class="text-center text-capitalize">
                                #
                            </th>
                            <th class="text-capitalize">
                                title
                            </th>
                            <th class="text-capitalize">
                                author
                            </th>
                            <th class="text-right text-capitalize">
                                posted at
                            </th>
                            <th class="text-right">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $item)
                            <tr>
                                <td class="text-center">
                                    <div class="photo">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Table image">
                                    </div>
                                </td>
                                <td class="text-capitalize">
                                    {{ $item->title }}
                                </td>
                                <td class="text-capitalize">
                                    {{ $item->user->name }}
                                </td>
                                <td class="text-right">
                                    {{ $item->created_at }}
                                </td>
                                <td class="text-right">
                                    <a href="{{ route('blog-delete', $item->id) }}" type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm "
                                        data-original-title="Delete" title="">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
