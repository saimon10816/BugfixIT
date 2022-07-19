@extends('adminlayout.admin-index')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Project</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.project.update', $projectLists->id)}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{--                                        {{method_field('PUT')}}--}}
                                        <div class="row">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="mb-7">
                                                    <label for="projectName"><h4>Project Name</h4></label>
                                                    <input type="text" class="form-control" id="projectName"
                                                           name="projectName" value="{{$projectLists->projectName}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="projectImage"><h4>Project Image</h4></label>

                                                    <img src="{{url($projectLists->projectImage)}}"
                                                         class="img-thumbnail">

                                                    <input class="mt-2" type="file" id="projectImage"
                                                           name="projectImage">
                                                </div>
                                                <div class="mb-7">
                                                    <label for="projectBy"><h4>Project By</h4></label>

                                                    <input type="text" class="form-control" id="projectBy"
                                                           name="projectBy"
                                                           value="{{$projectLists->projectBy}}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="projectBrief">Project Brief</label>

                                                    <textarea name="projectBrief" id="projectBrief" class="form-control"
                                                              required autocomplete="projectBrief"
                                                              autofocus>{{$projectLists->projectBrief}}</textarea>

                                                    <span class="input-filed-error"
                                                          id="testTypeDescriptionError"></span>
                                                </div>


                                                <div class="col-3">
                                                    <input type="submit" name="submit"
                                                           class="btn btn-outline-primary primary btn-block btn-rounded mt3">
                                                </div>
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
