@extends('layouts.back')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Progetti') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Cover_img</th>
                        <th scope="col">Date</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->cover_img }}</td>
                        <td>{{ $project->date }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a class="btn btn-primary" href="#">VEDI</a>    
                            <a class="btn btn-warning" href="#">MODIFICA</a>    
                            <a class="btn btn-danger" href="#">ELIMINA</a>    
                        </td>

                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection