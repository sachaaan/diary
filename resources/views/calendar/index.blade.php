@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href='/calendar/plan'>plan登録画面リンク</a>
                    <a href='/calendar/diary'>diary登録画面リンク</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

