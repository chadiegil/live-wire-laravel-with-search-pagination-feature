@extends("base")
@section('content')

<div class="container w-75">
    <div class="h1 text-center ">
        Logs
    </div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>Created At</th>
                <th>Log Entry</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->created_at }}</td>
                    <td>{{ $log->log_entry }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
