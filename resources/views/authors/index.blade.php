

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
                    {!! Form::text('search_key', '', array('class'=>'col-md-2 col-md-offset-10','id'=>'search_key', 'onkeyup'=>'retrieve()','placeholder'=>'Enter Keyword')) !!}
                    @include('authors.tables')               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection