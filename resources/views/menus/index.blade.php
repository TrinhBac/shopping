@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.comtent-header', ['name' => 'menus', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('menus.create') }}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Menu Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
{{--                            @foreach($categories as $category)--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">{{ $category->id }}</th>--}}
{{--                                    <td>{{ $category -> name }}</td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ route('categories.edit', ['id'=>$category->id]) }}" class="btn btn-default">Edit</a>--}}
{{--                                        <a href="{{ route('categories.delete', ['id'=>$category->id]) }}" class="btn btn-danger">Delete</a>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
{{--                        {{ $categories->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection