@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">現在の登録者を一覧表示します</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        @foreach($data as $d)
                        
                            @if($d->出席)
                                <li>{{$d->氏名}}：出席</li>
                            @else
                                <li>{{$d->氏名}}：欠席</li>
                            @endif
                        
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
