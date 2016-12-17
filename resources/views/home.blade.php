@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    @can('edit_forum')
                    You can edit the forum!<br>
                    @endcan

                    @can('delete_users')
                    You can delete users!
                    @endcan

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
