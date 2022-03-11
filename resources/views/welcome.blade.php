@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forelse ($news as $item)
            <div class="card mt-2">
                <div class="card-header">{{$item->title}}</div>
                <div class="card-body">{{$item->content}}</div>
            </div>
            @empty
            <div class="card mt-2">
                <div class="card-header">Belum ada data</div>
                <div class="card-body">Belum ada content</div>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
