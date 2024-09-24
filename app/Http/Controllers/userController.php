<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class userController extends Controller
{
    //* Display the user form view
    public function user()
    {
        return view("user.form");
    }

    //* Store a new user in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'batch' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif'
        ]);

        $data = $request->all();

        // Store the uploaded image file if provided
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->store('uploads', 'public');
            $data['image'] = $filename;
        }

        // Create a new user record
        UserModel::create($data);
        return redirect('view')->with('success', 'User created successfully.');
    }

    //* Retrieve all user data and display it in the view
    public function get_data()
    {
        $data = UserModel::all();
        return view("user.view", compact('data'));
    }

    //* Delete a specific user record by ID
    public function delete($id)
    {
        UserModel::find($id)->delete();
        return redirect('view');
    }

    //* Display the edit form for a specific user by ID
    public function edit($id)
    {
        $data = UserModel::find($id);
        return view('user.update', compact('data'));
    }

    //* Update a specific user record by ID
    public function update(Request $req, $id)
    {
        // Validate the input but make the password optional
        $req->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'batch' => 'required',
            'email' => 'required|email',
            'password' => 'nullable', // Password is now nullable
            'address' => 'required',
            'contact' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif'
        ]);

        // Find the user record by ID
        $user = UserModel::find($id);

        // Update the data from the request
        $user->name = $req->name;
        $user->age = $req->age;
        $user->batch = $req->batch;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->contact = $req->contact;

        // Check if a new password was entered
        if ($req->filled('password')) {
            $user->password = $req->password; // You might want to hash the password, e.g., bcrypt($req->password)
        }

        // Handle the image upload if provided
        if ($req->hasFile('image')) {
            $filename = $req->file('image')->store('uploads', 'public');
            $user->image = $filename;
        }

        // Save the updated user data
        $user->save();

        return redirect('view')->with('success', 'User updated successfully.');
    }
}
