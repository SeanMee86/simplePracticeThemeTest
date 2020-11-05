{{--
  Template Name: Webinar Bottom
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')
  @include('partials.content-page')
  @include('partials.class-slider')
  @include('partials.webinar-grid')
  @endwhile
@endsection
