@extends('layout.admin')

@section('contents')
    @include('flash.flash')

    <div class="container">
        <div class="bg-white row">
            <div class="col-md-12">
                <legend>Locations</legend>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ $location->name ?? '' }}"
                                    placeholder="e.g Cheers" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <legend>Address</legend>
                            <div class="form-group">
                                <textarea class="form-control" name="address" id="" cols="60" rows="2" required>{{ $location->address ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Type</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="type" id=""
                                    required>
                                    <option value="">Select</option>
                                    <option value="branch">Branch Office</option>
                                    <option value="head">Head Office</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{ $location->email ?? '' }}"
                                    placeholder="email@example.com" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Email 2</label>
                                <input type="text" name="email1" value="{{ $location->email1 ?? '' }}"
                                    placeholder="email@example.com" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Email 3</label>
                                <input type="text" name="email2" value="{{ $location->email2 ?? '' }}"
                                    placeholder="email@example.com" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" value="{{ $location->phone ?? '' }}" placeholder=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Phone 2</label>
                                <input type="text" name="phone1" value="{{ $location->phone1 ?? '' }}" placeholder=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Phone 3</label>
                                <input type="text" name="phone2" value="{{ $location->phone2 ?? '' }}" placeholder=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Phone 4</label>
                                <input type="text" name="phone3" value="{{ $location->phone3 ?? '' }}" placeholder=""
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-warning" href="{{ url()->previous() }}">Back</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <hr>
                    <hr>
                </form>
            </div>

            <div class="row col-lg-12">
                @forelse ($locations as $location)
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text"><b>Name:</b> <small>{{ Str::limit($location->name, 50) ?? '-' }}</small>
                            </p>
                            <p class="card-text"><b>Type:</b> <small>{{ Str::limit($location->type, 50) ?? '-' }}
                                    office</small>
                            </p>
                            <div class="row">
                                <div class="d-flex">

                                    <a class="btn btn-primary mx-2 btn-sm"
                                        href="/admin/edit_location?id={{ base64_encode($location->id) ?? '' }}">
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
