@extends('layouts/admin/layout')

@section('title', 'Add Blog')
@section('main')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-capitalize">add blog</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('blog-submit') }}" method="post" class="form-horizontal"
                    enctype="multipart/form-data">
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
    </div>
    {{-- list --}}
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-2">
                        <h3 class="card-title text-capitalize">all blogs</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive ps">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <table id="datatable" class="table table-striped">
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
                                            <a href="{{ route('blog-delete', $item->id) }}" type="button" rel="tooltip"
                                                class="btn btn-danger btn-link btn-sm " data-original-title="Delete"
                                                title="">
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
        </div>
    </div>

    {{-- <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th class="sorting_desc_disabled sorting_asc_disabled text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td class="text-right">
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-info btn-icon btn-sm btn-neutral like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-warning btn-icon btn-sm btn-neutral  edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-danger btn-icon btn-sm btn-neutral remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td class="text-right">
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-info btn-icon btn-sm btn-neutral like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-warning btn-icon btn-sm btn-neutral  edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-danger btn-icon btn-sm btn-neutral remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td class="text-right">
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-info btn-icon btn-sm btn-neutral like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-warning btn-icon btn-sm btn-neutral  edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-danger btn-icon btn-sm btn-neutral remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td class="text-right">
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-info btn-icon btn-sm btn-neutral like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-warning btn-icon btn-sm btn-neutral  edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-danger btn-icon btn-sm btn-neutral remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td class="text-right">
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-info btn-icon btn-sm btn-neutral like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-warning btn-icon btn-sm btn-neutral  edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)"
                                    class="btn btn-link btn-danger btn-icon btn-sm btn-neutral remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>65</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td class="text-right">
                                <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                                        class="tim-icons icon-heart-2"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                        class="tim-icons icon-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                                        class="tim-icons icon-simple-remove"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div> --}}


@endsection
