@extends('layout.admin')

@section('contents')
    @include('flash.flash')

    <div class="container">
        <div class="bg-white row">
            <div class="col-md-12">
                <legend>Testimonials</legend>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{ $testimonial->title ?? '' }}"
                                    placeholder="e.g ECG" class="form-control" required>
                            </div>
                        </div>
                        {{-- <div class="col">
                            <div class="form-group">
                                <label for="">Type</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="branch" id=""
                                    required>
                                    <option value="">Select</option>
                                    @forelse ($locations as $location)
                                        
                                    <option value="{{ $location->name?? 'None' }}">{{ $location->name?? 'None' }}</option>
                                    @empty
                                    <option value="others">No Location</option>
                                    @endforelse
                                </select>
                            </div>
                        </div> --}}
                        <div class="col">
                            <legend>Content </legend>
                            <div class="form-group">
                                <textarea class="form-control" name="content" id="" cols="60" rows="5" required>{{ $testimonial->content ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Image</label>
                                <input id="picture" type="file" onchange="preview()" name="image"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col">
                            <img src="{{ isset($testimonial->photo) ? asset('storage' . '/' . $testimonial->photo) : '' }}"
                                class="img-responsive" id="image" alt=""
                                style="max-height: 150px; max-width:50%">
                        </div>
                    </div>

                    <a class="btn btn-warning" href="{{ url()->previous() }}">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <hr>
                    <hr>
                </form>
            </div>

            <div class="row col-lg-12">
                @forelse ($testimonials as $testimonial)
                    <div class="card m-2" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage' . '/' . $testimonial->image) ?? '' }}" alt="">
                        <div class="card-body">
                            <p class="card-text"><b>Title:</b>
                                <small>{{ Str::limit($testimonial->title, 50) ?? '-' }}</small></p>
                            <p class="card-text"><b>Content:</b>
                                <small>{{ Str::limit($testimonial->content, 50) ?? '-' }}</small></p>
                            <div class="row">
                                <div class="d-flex">
                                    <a class="btn btn-primary mx-2 btn-sm"
                                        href="/admin/edit_testimonial?id={{ base64_encode($testimonial->id) ?? '' }}">
                                        <i class="fa fa-edit"></i> Edit</a>

                                    <a class="btn btn-danger mx-2 btn-sm"
                                        href="/admin/delete_testimonial?id={{ base64_encode($testimonial->id) ?? '' }}">
                                        <i class="fa fa-trash"></i> Delete</a>
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
