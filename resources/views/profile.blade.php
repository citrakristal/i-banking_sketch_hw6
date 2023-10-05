@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profil</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Profil Box -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profil</h3>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Nama: {{ $profile->nama }}</li>
                                <li>TTL: {{ $profile->ttl }}</li>
                                <li>Alamat: {{ $profile->alamat }}</li>
                                <li>Email: {{ $user->email }}</li>
                                <li>No Telp: {{ $profile->noTelp }}</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Keamanan Box -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Keamanan</h3>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Password: [Protected 🛡️]</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('edit-profile') }}" class="btn btn-primary">Edit</a>
        </div>
    </section>
</div>
@endsection
