<?php

/* Collection of Walker classes */

/*

wp_nav_menu()

<div class="menu-container">

    <ul> // start_lvl()

        <li><a><span> // start_el()
            Link
        </span></a></li> // end_el()

        <li><a>Link</a></li>
        <li><a>Link</a></li>
        <li><a>Link</a></li>
        <li><a>Link</a></li>

    </ul>  // end_lvl()

</div>

*/



class Walker_Nav_Primary extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth) { // ul
        $indent = str_repeat ("\t", $depth);
        $submenu = ($depth > 0) 'sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n>";
    }

    function start_el() { // li span

    }

/*  function end_el() { // closing li span

    }

    function end_lvl() { // closing ul

    } */

};