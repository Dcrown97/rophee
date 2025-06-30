@extends('layout.admin')

@section('contents')
    @include('flash.flash')

    <div class="container">
        <div class="bg-white row">
            <div class="col-md-12">
                <legend>Services</legend>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                              <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ $service->name ?? '' }}" placeholder="e.g ECG"
                            class="form-control" required>
                    </div>
                        </div>
                        <div class="col">
                            <legend>Description </legend>
                            <div class="form-group">
                                <textarea class="form-control" name="desc" id="" cols="60" rows="5" required>{{ $service->desc ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{-- <div class="col">
                            <div class="form-group">
                                <label for="">Image</label>
                                <input id="picture" type="file" onchange="preview()" name="photo"
                                    class="form-control">
                            </div>
                        </div> --}}

                        <div class="col">
                            <img src="{{ isset($service->photo) ? asset('storage' . '/' . $service->photo) : '' }}"
                                class="img-responsive" id="image" alt="" style="max-height: 150px; max-width:50%">
                        </div>
                    </div>

                    <a class="btn btn-warning" href="{{ url()->previous() }}">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <hr>
                    <hr>
                </form>
            </div>

             <div class="row col-lg-12">
            @forelse ($services as $service)
                <div class="card m-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{  asset('storage'.'/'.$service->image) ?? '' }}" alt="">
                    <div class="card-body">
                        <p class="card-text"><b>Title:</b> <small>{{ Str::limit($service->name, 50) ?? '-' }}</small></p>
                        <p class="card-text"><b>Description:</b> <small>{{ Str::limit($service->desc, 50) ?? '-' }}</small></p>
                        <div class="row">
                            <div class="d-flex">
                            <a class="btn btn-primary mx-2 btn-sm"
                                href="/admin/edit_service?id={{ base64_encode($service->id) ?? '' }}">
                                <i class="fa fa-edit"></i> Edit</a>

                     
                            </div>
                        </div>
                    </div>

                </div>
            @empty
                <p>No result found</p>
            @endforelse

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
