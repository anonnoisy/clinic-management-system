@extends('layouts.app')

@section('breadcrumb')
<h4 class="page-title mb-1">Department</h4>
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item active">
        <a href="{{ route('admin::department::index') }}">Manage departments</a>
    </li>
    <li class="breadcrumb-item active">Add new department</li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    @include('layouts.components.alert')
                    <h5 class="mb-10">Add New Department</h5>
                    <form action="{{ route('admin::department::store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-6 form-group">
                                <label for="first_name">First name</label>
                                <input class="form-control form-control-sm mt-15 @error('first_name') is-invalid @enderror" id="first_name" type="text" name="first_name" value="{{ old('first_name', $doctor->first_name) }}" placeholder="Enter first name">
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-6 form-group">
                                <label for="last_name">Last name</label>
                                <input class="form-control form-control-sm mt-15 @error('last_name') is-invalid @enderror" id="last_name" type="text" name="last_name" value="{{ old('last_name', $doctor->last_name) }}" placeholder="Enter last name">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-6 form-group">
                                <label for="email">Email</label>
                                <input class="form-control form-control-sm mt-15 @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email', $doctor->email) }}" placeholder="Enter email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-6 form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" placeholder="Enter password" name="password" class="form-control form-control-sm mt-15 @error('password') is-invalid @enderror"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-6 form-group">
                                <label for="mobile_phone">Mobile phone</label>
                                <input type="mobile_phone" id="mobile_phone" placeholder="Enter mobile phone" name="mobile_phone" value="{{ old('mobile_phone', $doctor->mobile_phone) }}" class="form-control form-control-sm mt-15 @error('mobile_phone') is-invalid @enderror"/>
                                @error('mobile_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-6 form-group">
                                <label for="home_phone">Home phone</label>
                                <input type="home_phone" id="home_phone" placeholder="Enter home phone" name="home_phone" value="{{ old('home_phone', $doctor->home_phone) }}" class="form-control form-control-sm mt-15 @error('home_phone') is-invalid @enderror"/>
                                @error('home_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-12 form-group">
                                <label for="address">Address</label>
                                <textarea id="address" placeholder="Enter address" name="address" class="form-control form-control-sm mt-15 @error('address') is-invalid @enderror" rows="3">{{ old('address', $doctor->address) }}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-12 form-group">
                                <label for="department">Department</label>
                                <select name="department_id" id="department" class="form-control form-control-sm mt-15 @error('department_id') is-invalid @enderror">
                                    <option>Select department</option>
                                    @forelse ($departments as $department)
                                        <option value="{{ $department->id }}" @if($doctor->department_id == $department->id) selected @endif>{{ $department->name }}</option>
                                    @empty
                                        <option>Please create new department, on Department menu</option>
                                    @endforelse
                                </select>
                                @error('department_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-12 form-group">
                                <label for="image">image</label>
                                <input class="form-control form-control-sm mt-15 @error('image') is-invalid @enderror" type="file" id="image" name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-md-12 form-group">
                                <label for="department">Profile</label>
                                <textarea id="elm1" name="profile">{{ old('profile', $doctor->profile) }}</textarea>
                                @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-primary" type="submit">Save doctor</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
