@extends('backend.layouts.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title">All Banners</h4>
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('banners.create') }}"><i
                                class="icon-plus"></i> Add New</a>
                </div>

                <div class="table-responsive">
                    <table id="mytable" class="display expandable-table pb-3" style="width:100%">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Condition</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($banners as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <img src="{{ $item->photo }}" alt="{{ $item->title }}"
                                         style="max-height: 90px; max-width: 120px">
                                </td>
                                <td>
                                        <span
                                                class="badge {{ $item->condition == 'banner' ? 'badge-success' : 'badge-primary' }}">{{ $item->condition }}</span>
                                </td>
                                <td>
                                    <input
                                            value="{{ $item->id }}" name="toogle"
                                            {{ $item->status == 'active' ? 'checked' : '' }} type="checkbox"
                                            data-toggle="toggle" data-on="Active" data-off="Inactive"
                                            data-onstyle="success"
                                            data-offstyle="danger" data-size="sm"
                                    >
                                </td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="bottom" title="Edit"
                                       class="float-left mr-1 btn btn-sm btn-outline-success"
                                       href="{{ route('banners.show', $item->id) }}">
                                        <svg style="height: 20px; width: 20px" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </a>
                                    <a data-toggle="tooltip" data-placement="bottom" title="Edit"
                                       class="float-left mr-1 btn btn-sm btn-outline-warning"
                                       href="{{ route('banners.edit', $item->id) }}">
                                        <svg style="height: 20px; width: 20px" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    <form class="float-left" action="{{ route('banners.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a data-id="{{ $item->id }}" data-toggle="tooltip" data-placement="bottom" title="Delete"
                                           class="deleteBtn btn btn-sm btn-outline-danger" href="">
                                            <svg style="height: 20px; width: 20px" fill="none" stroke="currentColor"
                                                 viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </a>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#mytable').DataTable();
        });
    </script>
    <script>
        $('input[name=toogle]').change(function () {
            var mode = $(this).prop('checked');
            var id = $(this).val();

            $.ajax({
                url: "{{ route('banners.status') }}",
                type: "POST",
                data: {
                    _token: "{{csrf_token()}}",
                    id: id,
                    mode: mode
                },
                success: function (response) {
                    if (response.status) {
                        swal("Good job!", response.message, "success");
                    } else {
                        alert('Please try again later.')
                    }
                }
            })
        })
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.deleteBtn').click(function (e) {
            var form=$(this).closest('form');
            var dataId=$(this).data('id');
            e.preventDefault();

            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    }
                });
        });
    </script>
@endsection
