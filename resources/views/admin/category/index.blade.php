@extends('layout.master')
@section('title', 'Category')
@section('page-title', 'Create Category')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('category.create') }}">
                    <button class="btn btn-outline-primary mt-2 w-25">
                        create
                    </button>
                </a>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">category1</td>
                            <td><img src="{{ asset('assets/img/messages-2.jpg') }}" alt="category"></td>
                            <td>description category1</td>
                        </tr>
                        <tr>
                            <td scope="row">category2</td>
                            <td><img src="{{ asset('assets/img/messages-1.jpg') }}" alt="category"></td>
                            <td>description category2</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


@endsection
