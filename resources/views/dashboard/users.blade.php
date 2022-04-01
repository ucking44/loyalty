@extends('layouts.backend.app')

@section('title', 'Users')

@section('content')

<div class="main-content">

    <section class="section">
        <div class="section-header">
            <h1>USERS</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Modules</a></div>
                <div class="breadcrumb-item">Loyalty</div>
            </div>
        </div>
    </section>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>USERS</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped v_center" id="table-2">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">S/N</th>
                                            <th class="column-title"> Name </th>
                                            <th class="column-title"> Email </th>
                                            <th class="column-title">Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $key => $user)
                                            <tr>
                                                <td>{{ $key +1 }}.</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{!! htmlspecialchars_decode(date('D j<\s\up>S</\s\up> F Y', strtotime($user->created_at))) !!}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection


