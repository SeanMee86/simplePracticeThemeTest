{{--{!! $show_webinar_grid !!}--}}
@php
  $args = array(
    'post_type' => 'webinars',
    'orderby' => 'title',
    'order' => 'ASC'
  );

  $the_query = new WP_Query($args);
@endphp;
<div id='webinar-grid'>
<h2>Upcoming and on-demand webinars</h2>
<p>Learn from our expert partners and even our own customers</p>
<div class='container'>
  <div class='webinar-repeater-container'>
  @if($the_query->have_posts())
    @while($the_query->have_posts())
      @php($the_query->the_post())
      @php($image1 = get_field('image_1'))
      @php($image2 = get_field('image_2'))
      @php($image3 = get_field('image_3'))
      @php($status = get_field('status'))
      <div class='webinar'>
        <div class='webinar-banner'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        <div class='webinar-top'>
          <div class='webinar-top-left'>
            {!! get_field('top_section') !!}
          </div>
          <div class='webinar-top-right'>
            @if($image1)
              <img src='{{$image1['sizes']['thumbnail']}}'/>
            @endif
            @if($image2)
              <img src='{{$image2['sizes']['thumbnail']}}'/>
            @endif
            @if($image3)
              <img src='{{$image3['sizes']['thumbnail']}}'/>
            @endif
            </div>
          </div>
        <div class='webinar-bottom'>
          <p class='eyebrow'>{!! $status !!}</p>
            {!! get_field('bottom_section') !!}
          @if($status === 'upcoming')
            <a href="#"><button class="btn btn-primary">Register Now</button></a>
          @endif
          @if($status === 'on-demand')
            <a href="#">Watch it now <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
          @endif
          </div>
        </div>
    @endwhile
    @endif
    </div>
  </div>
</div>
