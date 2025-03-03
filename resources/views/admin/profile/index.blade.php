@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Update Profile</h1>
            </div>
            <div class="section-body">
                <h2 class="section-title">Hi, {{ auth()->user()->name }}!</h2>
                <p class="section-lead">Update your personal information here.</p>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ auth()->user()->id }}">

                                <div class="card-body">
                                    <!-- Profile Picture -->
                                    <div class="form-group">
                                        <label>Profile Picture</label>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Pratinjau Gambar -->
                                                <img id="profile_picture_preview"
                                                    src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : asset('assets/img/avatar/avatar-1.png') }}"
                                                    alt="Profile Picture" class="img-fluid rounded-circle mb-3"
                                                    style="width: 100px; height: 100px; object-fit: cover;">
                                            </div>
                                            <div class="col-12">
                                                <input type="file" name="profile_picture"
                                                    class="form-control @error('profile_picture') is-invalid @enderror"
                                                    accept="image/*">
                                                @error('profile_picture')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Upload a new profile picture (JPG, PNG, max
                                            2MB).</small>
                                    </div>

                                    <!-- NIP -->
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="text" name="nip" class="form-control"
                                            value="{{ auth()->user()->nip }}" readonly>
                                    </div>

                                    <!-- Name -->
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name', auth()->user()->name) }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email', auth()->user()->email) }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                            </div>
                                            <input type="text" name="telepon"
                                                class="form-control phone-number @error('telepon') is-invalid @enderror"
                                                value="{{ old('telepon', auth()->user()->telepon) }}">
                                            @error('telepon')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Hidden Fields untuk Gender, Role, dan Umur -->
                                    <input type="hidden" name="gender" value="{{ auth()->user()->gender }}">
                                    <input type="hidden" name="role" value="{{ auth()->user()->role }}">
                                    <input type="hidden" name="umur" value="{{ auth()->user()->umur }}">

                                    <!-- Password -->
                                    <div class="form-group">
                                        <label>New Password (optional)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                            </div>
                                            <input type="password" name="password"
                                                class="form-control pwstrength @error('password') is-invalid @enderror"
                                                data-indicator="pwindicator"
                                                placeholder="Leave blank to keep current password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <a href="{{ url()->previous() }}" class="btn btn-danger mr-2">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
