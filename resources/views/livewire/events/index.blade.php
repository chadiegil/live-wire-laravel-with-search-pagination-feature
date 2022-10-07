<div>

    <div class="row">

        <div class="col">

            <select class="form-select" wire:model.lazy="name">
                <option value="all">All</option>
                <option selected disabled>Search weather</option>
                @foreach ($events as $event)
                    <option value="{{ $event->name }}">{{ $event->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Search hero Name" wire:model.lazy="search">
        </div>
    </div>

    <table class="table table-striped mt-4">
        <thead class="table table-striped bg-dark text-white">
            <tr>
                <th>ID</th>
                <th>Weather name</th>
                <th>Place</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->place }}</td>
                    <td>{{ $event->host }}</td>
                    <td>
                        <a href="{{ url('edit', ['event' => $event->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['event' => $event->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{$events->links()}}
    </div>
</div>

