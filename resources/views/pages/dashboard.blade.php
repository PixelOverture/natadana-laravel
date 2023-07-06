@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h2>Selamat datang, {{ auth()->user()->name }}</h2>
        </div>
    </section>
@endsection
