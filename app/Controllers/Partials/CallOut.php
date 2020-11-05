<?php

namespace App\Controllers\Partials;

trait CallOut
{

    /**
     * @param array $atts
     * @return string
     * returns a generic callout message if one is not supplied by Advanced Custom Fields.
     */
    public function showCallout()
    {
        $o ="<div class='container'>";
        $o .= "<div class='callout'>";
        if(get_field('callout')){
            $o .= get_field('callout');
        }else{
            $o .= "
                <p>
                    <i class=\"fas fa-info-circle\"></i>
                    <strong>Already have a SimplePractice account?</strong>
                    Find <a href='#'>in-depth training</a>, <a href='#'>guides</a>, or <a href='#'>contact our support</a> team in our Help Center.
                </p>
            ";
        }
        $o .= "</div>";
        $o .= "</div>";
        return $o;
    }
}
