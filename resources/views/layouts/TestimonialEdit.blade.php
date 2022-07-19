@extends('adminlayout.admin-index')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Testimonial</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.testimonial.update', $testimonialLists->id)}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{--                                        {{method_field('PUT')}}--}}
                                        <div class="row">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="mb-7">
                                                    <label for="authorName"><h4>Testimonial Name</h4></label>
                                                    <input type="text" class="form-control" id="authorName"
                                                           name="authorName" value="{{$testimonialLists->authorName}}">
                                                </div>
                                                <div class="mb-7">
                                                    <label for="authorBy"><h4>Testimonial By</h4></label>

                                                    <input type="text" class="form-control" id="authorBy"
                                                           name="authorBy"
                                                           value="{{$testimonialLists->authorBy}}">

                                                </div>
                                                <div class="mb-7">
                                                <div class="form-group">

                                                    <label for="quote"><h4>Testimonial Brief</h4></label>

                                                    <textarea name="quote" id="quote" class="form-control"
                                                              required autocomplete="quote"
                                                              autofocus>{{$testimonialLists->quote}}</textarea>

                                                    <span class="input-filed-error"
                                                          id="testTypeDescriptionError"></span>
                                                </div>
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
