@extends('layout.admin')

@section('contents')
    @include('flash.flash')

    <div class="container">
        <div class="bg-white row">
            <div class="col-md-12">
                <legend>About</legend>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <legend>Content</legend>
                            <div class="form-group">
                                <textarea class="form-control" name="content" id="summernote" cols="60" rows="4" required>{{ old('content', $aboutus->first()->content ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>

                    {{-- <a class="btn btn-warning" href="{{ url()->previous() }}">Back</a> --}}
                    <button class="btn btn-primary" type="submit">Save</button>
                    <hr>
                </form>
            </div>

            <div class="row col-lg-12">
                @if ($aboutus->isNotEmpty())
                    <div class="card m-2" style="width: 100%;">
                        <div class="card-body">
                            <p class="card-text">
                                <b>Content:</b>
                                <small>{!! $aboutus->first()->content ?? '-' !!}</small>
                            </p>
                        </div>
                    </div>
                @else
                    <p>No About Us content found.</p>
                @endif
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
