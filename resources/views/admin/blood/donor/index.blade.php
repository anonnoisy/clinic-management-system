@extends('layouts.app')

@section('breadcrumb')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Clinic</a></li>
        <li class="breadcrumb-item active" aria-current="page">Manage blood donors</li>
    </ol>
</nav>
<!-- /Breadcrumb -->
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="mb-10">Manage blood donors</h5>
                    <p class="mb-25"></p>
                    <a class="btn btn-primary btn-sm mb-2" href="{{ route('admin::blood::donor::create') }}" class="btn btn-gradient-primary mb-3">Add Blood Donor</a>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive-md">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Sex</th>
                                                <th>Blood group</th>
                                                <th>Last donation date</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Setyo Wirawan</td>
                                                <td>21</td>
                                                <td>Male</td>
                                                <td>A+</td>
                                                <td>18 May. 2020</td>
                                                <td>
                                                    <a href="{{ route('admin::blood::donor::show', ['donor' => 1]) }}" class="btn btn-primary btn-sm mr-25">Show</a>
                                                    <a href="{{ route('admin::blood::donor::edit', ['donor' => 1]) }}" class="btn btn-info btn-sm mr-25">Edit</a>
                                                    <form action="" method="post" style="display: inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm mr-25">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
