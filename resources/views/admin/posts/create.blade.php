@extends('admin.layouts.app')

@section('title',  'Cadastro dos Posts')
    

@section('content')
<h1>Cadastrar novo Post</h1>

<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
  @include('admin.posts._partials.form');
</form>

@endsection

