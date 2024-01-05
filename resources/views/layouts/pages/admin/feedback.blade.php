@extends('layouts.main')

@section('title')
    Feedback User
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
                    <div id="err" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                ${errorMessage}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                `;

                $(document.body).append(errorToast);
                $('#err').toast('show');
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
                            <h6 class="text-white text-capitalize ps-3">Feedback</h6>
                        </div>
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
                                            Email</th>
                                        <th class="text-center text-uppercase text-black font-weight-bolder">
                                            Message</th>
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
                                                <p class=" font-weight-bold mb-0">{{ $item->email }}</p>
                                            </td>
                                            <td class="font-weight-bolder text-center">
                                                <p class=" text-secondary mb-0">
                                                    {{ \Illuminate\Support\Str::limit($item->message, 255) }}</p>
                                            </td>
                                            <td class="font-weight-bolder text-center">
                                                <a class="btn btn-danger text-white px-3 mb-0"
                                                    href="{{ route('admin.feedback.delete', ['id' => $item->id]) }}"><i
                                                        class="material-icons  me-2">delete</i>Delete</a>
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
@endsection
