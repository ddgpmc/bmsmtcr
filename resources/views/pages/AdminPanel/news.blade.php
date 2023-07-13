<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/ClientCSS/Contact-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ClientCSS/Footer-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ClientCSS/Header-Blue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ClientCSS/styles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="col-sm-12 text-left">
            <h1 class="border-bottom border-bot text-4xl font-bold pt-3">News</h1>
        </div>
        <br><br>
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('adminpanel.news.create') }}" class="btn btn-primary mb-3">Add New News or Announcement</a>
            <a href="#" onclick="downloadTableData()" class="btn btn-success">Download as CSV</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($news as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ Str::limit($item->description, 100) }}</td>
                <td>
                    <!-- View Full Story button --> 
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                        View Full Story
                    </button>
                    
                    <!-- Edit button -->
                    <a href="{{ route('adminpanel.news.edit', $item) }}" class="btn btn-primary">Edit</a>
                    
                    <!-- Delete button -->
                    <form action="{{ route('adminpanel.news.destroy', $item) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn bg-red-200">Delete</button>
                    </form>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $item->title }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No news found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
