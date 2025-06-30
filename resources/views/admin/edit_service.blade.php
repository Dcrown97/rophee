@extends('layout.admin')

@section('contents')
    @include('flash.flash')

    <div class="container">
        <div class="bg-white row">
            <div class="col-md-12">
                <legend>Edit Service</legend>
                <form method="POST" action="/admin/services" enctype="multipart/form-data">
                    @csrf
                    {{-- {{dd($edit_service)}} --}}
                     <input type="hidden" name="id" value="{{ $edit_service->id }}">
                     <input type="hidden" name="old_photo" value="{{ $edit_service->photo }}">
                    <div class="row">
                        <div class="col">
                              <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ $edit_service->name ?? '' }}" placeholder="e.g ECG"
                            class="form-control" required>
                    </div>
                        </div>
                        <div class="col">
                            <legend>Description </legend>
                            <div class="form-group">
                                <textarea class="form-control" name="desc" id="" cols="60" rows="5" required>{{ $edit_service->desc ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{-- <div class="col">
                            <div class="form-group">
                                <label for="">Image</label>
                                <input id="picture" type="file" onchange="preview()" name="photo" value="{{ $edit_service->photo }}"
                                    class="form-control">
                            </div>
                        </div> --}}

                        <div class="col">
                            <img src="{{ isset($edit_service->photo) ? asset('storage' . '/' . $edit_service->photo) : '' }}"
                                class="img-responsive" id="image" alt="" style="max-height: 150px; max-width:50%">
                        </div>
                    </div>

                    <a class="btn btn-warning" href="{{ url()->previous() }}">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <hr>
                    <hr>
                </form>
            </div>

        </div>
        </div>

    </div>
    </div>
    </div>

    <script src="/assets2/js/lib/jquery.min.js"></script>
    <script>
        function changeImage() {
            $('#picture').show();
            console.log('path1', ($('#image').attr()));
        }

        function preview() {
            $('#image').attr("src", URL.createObjectURL(event.target.files[0]));
        }

        function setImage() {
            console.log('path', ($('#picture').val()));
            $('#image').attr("src", ($('#picture').val()));
        }
    </script>
@endsection
