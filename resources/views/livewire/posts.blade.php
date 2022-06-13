<div>
    {{-- @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif --}}
    <table class="table table-bordered mt-5">
        <thead>
            <tr >
                <th>N°</th>
                <th>Name</th>
                <th>First name</th>
                <th>Registration numbers</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts comme $value)
            <tr>
                {{-- <td>{{ $value->id }}</td> --}}
                <td>{{ $value->name }}</td>
                <td>{{ $value->first_name }}</td>
                <td>
                {{-- <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Modifier</button>
                <button wire:click="delete({ { $value->id }})" class="btn btn-danger btn-sm">Supprimer</button> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
