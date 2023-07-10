
<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ordinances</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Contact-Form-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>
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
  <h1 class="border-bottom border-bot text-4xl font-bold pt-3">Ordinances</h1>
</div>
    <br><br>
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('adminpanel.ordinances.create') }}" class="btn btn-primary">Add New Ordinance</a>
        <a href="#" onclick="downloadTableData()" class="btn btn-success">Download as CSV</a>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table id="ordinancesTable" class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($ordinances as $ordinance)
        <tr>
            <td>{{ $ordinance->title }}</td>
            <td>
                <div class="d-flex">
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal{{ $ordinance->id }}">
                        View Full Story
                    </button>
                    <a href="{{ route('adminpanel.ordinances.edit', $ordinance) }}" class="btn btn-link">Edit</a>
                    <form action="{{ route('adminpanel.ordinances.destroy', $ordinance) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link">Delete</button>
                    </form>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $ordinance->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $ordinance->title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $ordinance->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">No ordinances found</td>
        </tr>
        @endforelse
    </tbody>
</table>

</div>
@endsection
<script>
    function downloadTableData() {
        let tableData = [];
        const table = document.getElementById('ordinancesTable');
        const rows = table.rows;
        for (let i = 1; i < rows.length; i++) {
            const rowData = [];
            for (let j = 0; j < rows[i].cells.length; j++) {
                rowData.push(rows[i].cells[j].textContent.trim());
            }
            tableData.push(rowData.join(','));
        }
        const csvContent = 'data:text/csv;charset=utf-8,' + tableData.join('\n');
        const encodedUri = encodeURI(csvContent);
        const link = document.createElement('a');
        link.setAttribute('href', encodedUri);
        link.setAttribute('download', 'ordinances.csv');
        document.body.appendChild(link);
        link.click();
    }
</script>