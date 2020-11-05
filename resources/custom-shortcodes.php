<?php

namespace App\Controllers;

add_shortcode('callout', [new App(), 'showCallout']);
add_shortcode('classes-repeater', [new App(), 'showClassRepeater']);
add_shortcode('webinar-posts', [new App(), 'showWebinarGrid']);

