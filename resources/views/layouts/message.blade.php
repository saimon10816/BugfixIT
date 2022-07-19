@extends('adminlayout.admin-index')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Team Member</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.message.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{--                                        {{method_field('PUT')}}--}}
                                        <div class="row">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="mb-7">
                                                    <label for="name"><h4>Name</h4></label>
                                                    @if(is_null($addMessage))
                                                        <input type="text" class="form-control" id="name"
                                                               name="name">
                                                    @else
                                                        <input type="text" class="form-control" id="name"
                                                               name="name" value="{{$addMessage->name}}">
                                                    @endif
                                                </div>
                                                <div class="mb-4">
                                                    <label for="image"><h4>Image</h4></label>
                                                    @if(is_null($addMessage))
                                                        No Media Image Found
                                                    @else
                                                        <img src="{{url($addMessage->image)}}"
                                                             class="img-thumbnail">
                                                    @endif
                                                    <input class="mt-2" type="file" id="image"
                                                           name="image">
                                                </div>
                                                <div class="mb-7">
                                                    <label for="designation"><h4>Designation</h4></label>
                                                    @if(is_null($addMessage))
                                                        <input type="text" class="form-control" id="designation"
                                                               name="designation">
                                                    @else
                                                        <input type="text" class="form-control" id="designation"
                                                               name="designation"
                                                               value="{{$addMessage->designation}}">
                                                    @endif
                                                </div>
                                                <div class="mb-7">
                                                    <label for="message"><h4>Message</h4></label>
                                                    @if(is_null($addMessage))
                                                        <textarea name="message" type="longText" id="message" class="form-control"
                                                                  required autocomplete="message"></textarea>
                                                    @else
                                                        <textarea name="message" type="longText" id="message" class="form-control"
                                                                  required autocomplete="message">{{$addMessage->message}}</textarea>
                                                    @endif
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
