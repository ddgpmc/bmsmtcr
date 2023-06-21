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
</head>

@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="col-sm-12 text-left">
            <h1 class="border-bottom border-bot text-4xl font-bold pt-3">News</h1>
        </div>
        <br><br>
        <a href="{{ route('adminpanel.news.create') }}" class="btn btn-primary mb-3">Add New News or Announcement</a>

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
                        <td>{{ $item->description }}</td>
                        <td>
                            <form action="{{ route('adminpanel.news.destroy', $item) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-sm"
                                    onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                            </form>

                            <form action="{{ route('adminpanel.news.edit', $item) }}" method="GET"
                                style="display: inline;">
                                @csrf
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-sm">Edit</button>
                            </form>
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
