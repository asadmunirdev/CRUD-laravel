@extends('layout.main')
@section('title','update.com')
@section('update')

<link
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    rel="stylesheet" />

<div class="container mt-5">
    <h2 class="text-center mb-4">Update Form</h2>
    <div class="card shadow" style="max-width: 500px; margin: auto;">
        <div class="card-body">
            <form action="/update-form/{{ $data->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="name" style="font-size: 1.2rem; font-weight: bold;">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="age" style="font-size: 1.2rem; font-weight: bold;">Age</label>
                        <input type="number" class="form-control" id="age" name="age" value="{{ $data->age }}" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="batch" style="font-size: 1.2rem; font-weight: bold;">Batch</label>
                        <select class="form-control" id="batch" name="batch" required style="font-size: 1.1rem; border-radius: 0.5rem;">
                            <option value="" disabled>Select your batch</option>
                            @for ($year = 2020; $year <= 2025; $year++)
                                <option value="{{ $year }}" {{ $data->batch == $year ? 'selected' : '' }}>{{ $year }}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email" style="font-size: 1.2rem; font-weight: bold;">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="password" style="font-size: 1.2rem; font-weight: bold;">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ $data->password }}" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contact" style="font-size: 1.2rem; font-weight: bold;">Contact Number</label>
                        <input type="text" class="form-control" id="contact" name="contact" value="{{ $data->contact }}" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="image" style="font-size: 1.2rem; font-weight: bold;">Profile Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @if($data->image)
                    <img src="{{ asset('uploads/' . $data->image) }}" alt="Profile Image" style="width: 100px; height: 100px; margin-top: 10px;">
                    @endif
                </div>

                <div class="form-group mb-4">
                    <label for="address" style="font-size: 1.2rem; font-weight: bold;">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">{{ $data->address }}</textarea>
                </div>

                <button type="submit" class="btn btn-success btn-block" style="padding: 10px; font-size: 1.2rem;">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection