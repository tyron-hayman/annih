<?php
/**
 * Carousel Block template.
 *
 * @param array $block The block settings and attributes.
 */

 $columnNum = get_field('textblock_columns');
 $single_column_textblock = get_field('single_column_textblock');
 $two_column_textblock = get_field('two_column_textblock');
 $three_column_textblock = get_field('three_column_textblock');

 if ( $columnNum == 1 ) {
    $html = '<div class="textBlockContainer">';
        $html .= '<div class="textBlockRow">';
            $html .= '<div class="textBlockCol">';
                $html .= $single_column_textblock["content"];
            $html .= '</div>';
        $html .= '</div>';
    $html .= '</div>';

    echo $html;
  } else if ( $columnNum == 2 ) {
    $html = '<div class="textBlockContainer">';
        $html .= '<div class="textBlockRow">';
            $html .= '<div class="textBlockCol-2">';
                $html .= $two_column_textblock["column_1_content"];
            $html .= '</div>';
            $html .= '<div class="textBlockCol-2">';
                $html .= $two_column_textblock["column_2_content"];
            $html .= '</div>';
        $html .= '</div>';
    $html .= '</div>';

    echo $html;
  } else if ( $columnNum == 3 ) {
    $html = '<div class="textBlockContainer">';
        $html .= '<div class="textBlockRow">';
            $html .= '<div class="textBlockCol-3">';
                $html .= $three_column_textblock["column_1_content"];
            $html .= '</div>';
            $html .= '<div class="textBlockCol-3">';
                $html .= $three_column_textblock["column_2_content"];
            $html .= '</div>';
            $html .= '<div class="textBlockCol-3">';
                $html .= $three_column_textblock["column_3_content"];
            $html .= '</div>';
        $html .= '</div>';
    $html .= '</div>';

    echo $html;
  }