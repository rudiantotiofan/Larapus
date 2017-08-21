

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>
                <li class="active">Penulis</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Penulis</h2>
                </div>

                <div class="panel-body">
                    {{--  {!! $html->table(['class'=>'table-striped']) !!}  --}}
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($author as $temp)
                            <tr>
                                <td>{{ $temp->id }}</td>
                                <td>{{ $temp->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-2 col-md-offset-5">
                        {{ $author->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection