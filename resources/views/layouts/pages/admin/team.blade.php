@extends('layouts.main')

@section('title')
    Team
@endsection
@push('script')
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            handleDeleteToast();
            handleErrors();
        });

        function handleDeleteToast() {
            @if (Session::has('message'))
                $(document).ready(function() {
                    $('#deleteToast').toast('show');
                });
            @endif
        }

        function handleErrors() {
            @if ($errors->any())
                var errorMessage = '';
                @foreach ($errors->all() as $error)
                    errorMessage += '{{ $error }}\n';
                @endforeach

                var errorToast = `
                    <div class="toast align-items-center text-white bg-primary border-0 position-absolute top-0 end-0 mt-2 me-2 p-2" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                ${errorMessage}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                `;

                $(document.body).append(errorToast);
                $('.toast').toast('show');
            @endif
        }
    </script>
@endpush

@section('container')
    <div id="deleteToast"
        class="toast align-items-center text-white bg-primary border-0 position-absolute top-0 end-0 mt-2 me-2 p-2"
        role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ Session::get('message') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Teams</h6>
                        </div>
                        <button type="button" class="btn bg-gradient-dark mb-0 mt-3 float-end" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="material-icons text-sm">add</i>
                            &nbsp;&nbsp;Add Team
                        </button>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="dataTable" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-center text-black font-weight-bolder">
                                            No</th>
                                        <th class="text-center  text-uppercase text-black font-weight-bolder">
                                            Name</th>
                                        <th class="text-center text-uppercase text-black font-weight-bolder">
                                            About</th>
                                        <th class="text-center text-uppercase text-black font-weight-bolder">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="font-weight-bolder text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="font-weight-bolder text-center">
                                                <p class=" font-weight-bold mb-0">{{ $item->name }}</p>
                                            </td>
                                            <td class="font-weight-bolder text-center">
                                                <p class=" text-secondary mb-0">
                                                    {{ \Illuminate\Support\Str::limit($item->about, 100) }}</p>
                                            </td>
                                            <td class="font-weight-bolder text-center">
                                                <a class="btn btn-danger text-white px-3 mb-0"
                                                    href="{{ route('admin.team.delete', ['id' => $item->id]) }}"><i
                                                        class="material-icons  me-2">delete</i>Delete</a>

                                                <button type="button" class="btn btn-warning text-white px-3 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}"><i
                                                        class="material-icons text-sm">edit</i>
                                                    &nbsp;&nbsp;Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Team</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.team.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" style="border: 1px solid #1c1c1c; padding-left: 10px"
                                id="exampleFormControlInput1" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">About</label>
                            <textarea class="form-control" required style="border: 1px solid #1c1c1c; padding-left: 10px"
                                id="exampleFormControlTextarea1" name="about" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- modal edit --}}
    @foreach ($data as $item)
        <div class="modal fade" id="edit{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Team</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.team.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input type="text" class="form-control"
                                    style="border: 1px solid #1c1c1c; padding-left: 10px" id="exampleFormControlInput1"
                                    name="name" placeholder="Name..." value="{{ $item->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">About</label>
                                <textarea class="form-control" required style="border: 1px solid #1c1c1c; padding-left: 10px"
                                    id="exampleFormControlTextarea1" name="about" value="{{ $item->about }}" rows="5">{{ $item->about }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
