@extends('layout.admin')
@section('contents')
    <div class="row">

        @include('flash.flash')
        <legend>Staff Mails</legend>
        <div class="row mt-4">

            <div class="col-md-12">
                <legend>Create a new email </legend>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" value="" placeholder="Email" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Pasword</label>
                                <input type="password" name="password" value="" placeholder="Password"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    {{-- <a class="btn btn-warning" href="{{ url()->previous() }}">Back</a> --}}
                    <button class="btn btn-primary" type="submit">Save</button>
                    <hr>
                    <hr>
                </form>
            </div>

            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mails as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->email }}</td>
                                    <td class="d-flex">
                                        {{-- <a onclick="return confirm('Are you sure ?')"
                                            href="/admin/delete_contact/{{ base64_encode($item->id) }}"
                                            class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> --}}

                                        <form action="/admin/mails/delete/{{ $item->id }}" method="POST">
                                            @csrf

                                            <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-danger mr-4">Delete</button>
                                        </form>

                                        {{-- <form action="/admin/mails/reset" method="POST">
                                            @csrf
                                            <input hidden value="{{ $item->email }}" name="email" />
                                            <button type="submit" class="btn btn-primary">Reset</button>
                                        </form> --}}
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No data</td>
                                </tr>
                            @endforelse
                        </tbody>
                        {{-- pagination with count --}}
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    {{ $mails->links() }}
                                    <span class="float-right">Showing {{ $mails->firstItem() }} to
                                        {{ $mails->lastItem() }}
                                        of {{ $mails->total() }} entries</span>
                                </td>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
