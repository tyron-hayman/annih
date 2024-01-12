<?php
/**
 * Carousel Block template.
 *
 * @param array $block The block settings and attributes.
 */

 $annih_carousel = get_field( 'annih_carousel' );
 $annih_carousel_int = 0;

 $hmlt = '<div class="annih_carousel">';
    $hmlt .= '<div class="annih_carousel_inner">';
        foreach($annih_carousel as $carousel_item) {

            $image = $carousel_item["image"];
            $title = $carousel_item["title"];
            $content = $carousel_item["content"];
            $link = $carousel_item["link"];
            $activeClass = "";
            $activeClassTabs = "";

            if ( $annih_carousel_int == 0 ) {
                $activeClass = "active";
            }

            $bg = 'style="background: url(' . $image . ') center center no-repeat"';

            $hmlt .= '<div class="annih_carousel_item ' . $activeClass . '">';
                $hmlt .= '<div class="annih_carousel_left">';
                    $hmlt .= '<div class="annih_carousel_content">';
                        $hmlt .= '<h2>' . $title . '</h2>';
                        $hmlt .= '<p>' . $content . '</p>';
                        $hmlt .= '<a href="' . $link . '" class="annih_carousel_link">Shop Now</a>';
                    $hmlt .= '</div>';
                $hmlt .= '</div>';
                $hmlt .= '<div class="annih_carousel_right" ' . $bg . '>';
                $hmlt .= '</div>';
            $hmlt .= '</div>';
            $annih_carousel_int++;
        }
            $hmlt .= '<div class="annih_carousel_tabs_container">';
                $tabIndex = 1;
                $tabTotal = count($annih_carousel);
                $hmlt .= '<div class="annih_carousel_tabs tabNums"><span>' . $tabIndex . '</span></div>';
                foreach($annih_carousel as $carousel_item) {

                    if ( $tabIndex == 1 ) {
                        $activeClassTabs = "active";
                    } else {
                        $activeClassTabs = "";
                    }

                    $hmlt .= '<div class="annih_carousel_tabs tabItems ' . $activeClassTabs . '"></div>';
                    $tabIndex++;
                }
                $hmlt .= '<div class="annih_carousel_tabs tabNums"><span>' . $tabTotal . '</span></div>';
            $hmlt .= '</div>';

    $hmlt .= '</div>';
 $hmlt .= '</div>';

 echo $hmlt;
 ?>