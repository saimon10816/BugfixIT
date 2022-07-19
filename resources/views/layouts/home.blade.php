@extends('adminlayout.admin-index')
@section('content')

                <div class="col-12 col-lg-9">
                    <h1>Homepage</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <form action="{{route('admin.home.update')}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <div class="row">
                                        <div class="form-group col-md-10 mt-10">
                                            <div class="mb-7">
                                                <label for="title"><h4>Title</h4></label>
                                                @if(is_null($home))
                                                    <input type="text" class="form-control" id="title"
                                                           name="title">
                                                @else
                                                    <input type="text" class="form-control" id="title"
                                                           name="title"
                                                           value="{{$home->title}}">
                                                @endif
                                            </div>
                                            <div class="mb-4">
                                                <label for="subtitle"><h4>Sub Title</h4></label>
                                                @if(is_null($home))
                                                    <textarea type="text" class="form-control" id="subtitle"
                                                              name="subtitle" required autocomplete="subtitle"></textarea>
                                                @else
                                                    <textarea type="text" class="form-control" id="subtitle"
                                                              name="subtitle" required autocomplete="subtitle">{{$home->subtitle}}</textarea>
                                                @endif
                                            </div>
                                            <div class="mb-4">
                                                <label for="link"><h4>Link</h4></label>
                                                @if(is_null($home))
                                                    <textarea type="text" class="form-control" id="link"
                                                              name="link" required autocomplete="link"></textarea>
                                                @else
                                                    <textarea type="text" class="form-control" id="link"
                                                              name="link" required autocomplete="link">{{$home->link}}</textarea>
                                                @endif
                                            </div>
                                            {{--                                                <div class="mb-4">--}}
                                            {{--                                                    <h4>Upload Resume</h4>--}}
                                            {{--                                                    <input class="mt-2" type="file" id="resume" name="resume">--}}
                                            {{--                                                </div>--}}
                                            <div class="col-3">
                                                <input type="submit" name="submit" class="btn btn-outline-primary primary btn-block btn-rounded mt3">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
