@extends('layouts.app')

@section('title', 'Detail')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Detail Data</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $member->nama }}</h5>
                    <p class="card-text">{{ $member->email }}</p>
                    <a href="{{ $member->id }}/edit" class="btn btn-outline-primary btn-sm">Edit</a>
                <form action="/members/{{ $member->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                    <hr>
                    <a href="/members" class="card-link">Kembali</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

