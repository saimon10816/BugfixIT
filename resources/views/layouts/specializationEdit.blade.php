@extends('adminlayout.admin-index')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Specialization</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.specialization.update', $specializationLists->id)}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{--                                        {{method_field('PUT')}}--}}
                                        <div class="row">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="mb-7">
                                                    <label for="icon"><h4>Icon</h4></label>
                                                    @if(is_null($addSpecialization))
                                                        <input type="text" class="form-control" id="icon"
                                                               name="icon">
                                                    @else
                                                        <input type="text" class="form-control" id="icon"
                                                               name="icon" value="{{$addSpecialization->icon}}">
                                                    @endif
                                                </div>
                                                <div class="mb-7">
                                                    <label for="heading"><h4>Heading</h4></label>
                                                    @if(is_null($specializationLists))
                                                        <input type="text" class="form-control" id="heading"
                                                               name="heading">
                                                    @else
                                                        <input type="text" class="form-control" id="heading"
                                                               name="heading"
                                                               value="{{$specializationLists->heading}}">
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    @if(is_null($specializationLists))
                                                        <textarea name="description" id="description" class="form-control"
                                                                  required autocomplete="description" autofocus></textarea>
                                                    @else
                                                        <textarea name="description" id="description" class="form-control"
                                                                  required autocomplete="description"
                                                                  autofocus>{{$specializationLists->description}}</textarea>
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
