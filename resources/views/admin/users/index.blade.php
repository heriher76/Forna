@extends('layouts.admin')

@section('content')
<h1>Daftar User</h1>
<br>
<div class="table-responsive">
<table id="table_id" class="display table table-condensed table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key => $user)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <td>
                    <form action="{{ url('/admin/users/'.$user->id) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('delete') }}
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Yakin Akan Dihapus?');">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
@endsection

@section('script')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                {
                    extend: 'excel',
                    title: 'Users BERANI',
                    exportOptions: {
                        columns: [0,1,2,3,4,5,6,7,8,9,10]
                    }
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'A1',
                    title: 'Users BERANI',
                    exportOptions: {
                        columns: [0,1,2,3,4,5,6,7,8,9,10]
                    }
                }]
            } );
        } );
    </script>
@endsection
