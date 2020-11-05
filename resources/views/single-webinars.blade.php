@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.content-single-'.get_post_type())
  @include('partials.class-slider')
  @include('partials.webinar-grid')
  @endwhile
@endsection
