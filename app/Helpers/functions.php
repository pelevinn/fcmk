<?php
    if( !function_exists( 'active_link' ) ){
        function active_link($link){
            return request()->is( $link === "/" ? "/" : ltrim($link, "/")) ? 'active' : '';
        }
    }
