<?php

namespace App\Controllers\Partials;

trait ClassesRepeater
{
    public function showClassRepeater()
    {
        $o = "<div class='container'>";
        $o .= "<h2>Explore our other classes</h2>";
        $o .= "<p>See why SimplePractice is the best rated EHR for private practice.</p>";
        $o .= "<div class='classes-repeater-container'>";
        if(get_field('classes_repeater', 41)){
            $o .= "<ul class='list-group'>";
            while(have_rows('classes_repeater', 41)): the_row();
                $o .= "<li class='list-group-item' style='background-color: #bbbbbb'>";
                $o .= "<h4>".get_sub_field('class_title')."</h4>";
                $o .= "<p>".get_sub_field('class_description')."</p>";
                $o .= "</li>";
            endwhile;
            $o .= "</ul>";
        }
        else
            $o .= "Repeater Goes Here";
        $o .= "</div>";
        $o .= "<div class='arrow-repeater-container'>
                <button id='repeater-left' class='repeater-arrow'><i class=\"fas fa-arrow-left\"></i></button>
                <button id='repeater-right' class='repeater-arrow'><i class=\"fas fa-arrow-right\"></i></button>
               </div>";
        $o .= "</div>";
        return $o;
    }
}
