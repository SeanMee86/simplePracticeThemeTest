{{--{!! $show_class_repeater !!}--}}
<div class='container'>
  <h2>Explore our other classes</h2>
  <p>See why SimplePractice is the best rated EHR for private practice.</p>
  <div class='classes-repeater-container'>
  @if(get_field('classes_repeater', 41))
    <ul class='list-group'>
    @while(have_rows('classes_repeater', 41)) @php(the_row())
      <li class='list-group-item' style='background-color: #bbbbbb'>
        <h4>{{ get_sub_field('class_title') }}</h4>
        <p>{{ get_sub_field('class_description') }}</p>
      </li>
    @endwhile;
    </ul>
  @else
    <p>Repeater Goes Here</p>
  @endif
  </div>
  <div class='arrow-repeater-container'>
    <button id='repeater-left' class='repeater-arrow'><i class="fas fa-arrow-left"></i></button>
    <button id='repeater-right' class='repeater-arrow'><i class="fas fa-arrow-right"></i></button>
  </div>
</div>
