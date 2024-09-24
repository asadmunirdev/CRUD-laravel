@extends('layout.main')
@section('title','form.com')
@section('form')

<link
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    rel="stylesheet" />

<div class="container mt-5">
    <h2 class="text-center mb-4">Registration Form</h2>
    <div class="card shadow" style="max-width: 500px; margin: auto;">
        <div class="card-body">
            <form action="/submit-form" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="name" style="font-size: 1.2rem; font-weight: bold;">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="age" style="font-size: 1.2rem; font-weight: bold;">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="batch" style="font-size: 1.2rem; font-weight: bold;">Batch</label>
                        <select class="form-control" id="batch" name="batch" required style="font-size: 1.1rem; border-radius: 0.5rem;">
                            <option value="" selected disabled>Select your batch</option>
                            @for ($year = 2020; $year <= 2025; $year++)
                                <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email" style="font-size: 1.2rem; font-weight: bold;">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="password" style="font-size: 1.2rem; font-weight: bold;">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contact" style="font-size: 1.2rem; font-weight: bold;">Contact Number</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;">
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="image" style="font-size: 1.2rem; font-weight: bold;">Profile Image</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>

                <div class="form-group mb-4">
                    <label for="address" style="font-size: 1.2rem; font-weight: bold;">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required style="font-size: 1.1rem; padding: 10px; border-radius: 0.5rem;"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block" style="padding: 10px; font-size: 1.2rem;">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection