@extends('adminlayout.admin-index')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Team Member</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.message.update', $messageLists->id)}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{--                                        {{method_field('PUT')}}--}}
                                        <div class="row">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="mb-7">
                                                    <label for="name"><h4>Name</h4></label>
                                                        <input type="text" class="form-control" id="name"
                                                               name="name" value="{{$messageLists->name}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="image"><h4>Image</h4></label>

                                                    <img src="{{url($messageLists->image)}}"
                                                             class="img-thumbnail">

                                                    <input class="mt-2" type="file" id="image"
                                                           name="image">
                                                </div>
                                                <div class="mb-7">
                                                    <label for="designation"><h4>Designation</h4></label>

                                                        <input type="text" class="form-control" id="designation"
                                                               name="designation"
                                                               value="{{$messageLists->designation}}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="message">Message</label>

                                                        <textarea name="message" id="message" class="form-control"
                                                                  required autocomplete="message"
                                                                  autofocus>{{$messageLists->message}}</textarea>

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
