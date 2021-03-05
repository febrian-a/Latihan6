@extends('layouts.app')

@section('title', 'Members')

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-8">
            <h3>Data Anggota</h3>
            <a href="/members/create" class="btn btn-outline-primary my-3">Tambah Data</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="list-group">
                @foreach($members as $member)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $member->nama }}
                <a href="/members/{{ $member->id }}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
          </div>
      </div>
  </div>
@endsection

