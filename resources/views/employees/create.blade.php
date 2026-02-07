@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Employee Form</div>
    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="/employee/store">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control">
                </div>

                <div class="col-md-6">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control">
            </div>

            <div class="mb-3">
                <label>Gender</label><br>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </div>

            <div class="mb-3">
                <label>Address</label>
                <textarea name="address" class="form-control"></textarea>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>City</label>
                    <select name="city" class="form-control">
                        <option value="">Select</option>
                        <option>Chennai</option>
                        <option>Bangalore</option>
                        <option>Mumbai</option>
                        <option>Delhi</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label>Pincode</label>
                    <input type="text" name="pincode" class="form-control">
                </div>
            </div>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection
