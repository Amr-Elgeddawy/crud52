@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">



                <div class="panel panel-default">
                    <div class="panel-heading">{{ $task->title }}</div>

                    <div class="panel-body">

                        {{ $task->body }}

                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
