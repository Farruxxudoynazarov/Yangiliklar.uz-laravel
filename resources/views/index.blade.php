



@extends('layouts.site')


@section('title')
Bosh sahifar
@endsection

@section('content')

  @include('sections.mainPosts')
  @include('sections.latestPosts')

@endsection