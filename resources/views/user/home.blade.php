@extends('layout.main')
@section('title','home.com')
@section('home')
<div class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg border-4 border-blue-600 transform transition-transform duration-300 hover:scale-105 animate__animated animate__fadeIn">
        <div class="text-center mb-4">
            <div class="animate__animated animate__bounce mb-2">
                <i class="fas fa-laptop-code text-6xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-blue-600"><a href="{{'/welcome'}}">Welcome!</a></h1>
            <p class="mt-2 text-lg text-gray-700">Explore endless possibilities and elevate your experience.</p>
            <div class="mt-4">
                <a href="{{ '/form' }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-500 transition duration-300 mr-2">
                    <i class="fas fa-arrow-left"></i> Form
                </a>
                <a href="/view" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-500 transition duration-300">
                    View <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>


    </div>

</div>

@endsection