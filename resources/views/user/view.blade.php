@extends('layout.main')
@section('title', 'view.com')
@section('view')

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

<div class="container mt-5">
    <h1 class="display-4 text-center mb-5">User Data</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">IMAGE</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">AGE</th>
                    <th scope="col">BATCH</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CONTACT</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col" style="width: 180px;">ACTION</th> <!-- Increased width -->
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td class="text-center align-middle">
                        <img src="{{ asset('storage/'.$d->image) }}" alt="Profile Image" class="rounded-circle" style="width: 64px; height: 64px; object-fit: cover;">
                    </td>
                    <td class="text-center align-middle" style="font-size: 1.2rem;">{{ $d->id }}</td>
                    <td class="text-center align-middle" style="font-size: 1.2rem;">{{ $d->name }}</td>
                    <td class="text-center align-middle" style="font-size: 1.2rem;">{{ $d->age }}</td>
                    <td class="text-center align-middle" style="font-size: 1.2rem;">{{ $d->batch }}</td>
                    <td class="text-center align-middle" style="font-size: 1.2rem;">{{ $d->email }}</td>
                    <td class="text-center align-middle" style="font-size: 1.2rem;">{{ $d->contact }}</td>
                    <td class="text-center align-middle" style="font-size: 1.2rem;">{{ $d->address }}</td>
                    <td class="text-center align-middle" style="white-space: nowrap;">
                        <div class="d-flex justify-content-between">
                            <a href="/edit/{{$d->id}}" class="btn btn-success btn-sm rounded-pill" style="flex: 1; margin-right: 5px;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="/delete/{{$d->id}}" class="btn btn-danger btn-sm rounded-pill" style="flex: 1;">
                                <i class="fas fa-trash-alt"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection