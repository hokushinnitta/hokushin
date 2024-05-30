@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Special Menu</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <a href="{{ route('color-settings') }}" class="btn btn-secondary">カラー設定</a>
</div>
@endsection
