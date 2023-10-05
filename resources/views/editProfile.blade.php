@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Profile</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('update-profile') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{ $profile->nama }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ttl">TTL</label>
                            <input type="text" id="ttl" name="ttl" value="{{ $profile->ttl }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat" value="{{ $profile->alamat }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noTelp">No Telp</label>
                            <input type="text" id="noTelp" name="noTelp" value="{{ $profile->noTelp }}" class="form-control">
                        </div>
                        <!-- Add other fields you want to edit here -->
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
