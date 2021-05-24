@extends('layouts.master')

@section('title')
 Register Roles| Mokadderul islam
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Register Roles </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>name</td>
                                <td>888888</td>
                                <td>email@gmail.com</td>
                                <td>
                                    <a href="a" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="a" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@ebdsection