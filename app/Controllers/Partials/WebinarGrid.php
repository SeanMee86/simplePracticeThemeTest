<?php

namespace App\Controllers\Partials;

use WP_Query;

trait WebinarGrid
{
    public function showWebinarGrid()
    {
        $args = array(
            'post_type' => 'webinars',
            'orderby' => 'title',
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        $o = "<div id='webinar-grid'>";
        $o .= "<h2>Upcoming and on-demand webinars</h2>";
        $o .= "<p>Learn from our expert partners and even our own customers</p>";
        $o .= "<div class='container'>";
        $o .= "<div class='webinar-repeater-container'>";

        if($the_query->have_posts()){
            while($the_query->have_posts()):
                $the_query->the_post();
                $image1 = get_field('image_1');
                $image2 = get_field('image_2');
                $image3 = get_field('image_3');
                $status = get_field('status');
                $o .= "<div class='webinar'>";
                $o .="<div class='webinar-banner'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>";
                $o .= "<div class='webinar-top'>";
                $o .= "<div class='webinar-top-left'>";
                $o .= get_field('top_section');
                $o .= "</div>";
                $o .= "<div class='webinar-top-right'>";
                if($image1)
                    $o .= "<img src='".$image1['sizes']['thumbnail']."'/>";
                if($image2)
                    $o .= "<img src='".$image2['sizes']['thumbnail']."'/>";
                if($image3)
                    $o .= "<img src='".$image3['sizes']['thumbnail']."'/>";
                $o .= "</div>";
                $o .= "</div>";
                $o .= "<div class='webinar-bottom'>";
                $o .= "<p class='eyebrow'>".$status."</p>";
                $o .= get_field('bottom_section');
                if($status === 'upcoming')
                    $o .= "<a href=\"#\"><button class=\"btn btn-primary\">Register Now</button></a>";
                if($status === 'on-demand')
                    $o .= "<a href=\"#\">Watch it now <i class=\"fas fa-arrow-right\" aria-hidden=\"true\"></i></a>";
                $o .= "</div>";
                $o .= "</div>";
            endwhile;
        }
        $o .= "</div>";
        $o .= "</div>";
        $o .= "</div>";
        return $o;
    }
}
