<?php
    if( !function_exists( 'active_link' ) ){
        function active_link(string $link) : string{
            return request()->is( $link === "/" ? "/" : ltrim($link, "/")) ? 'active' : '';
        }
    }

    if( !function_exists( 'view_tags' ) ){
        function view_tags(string $tags) : string{
            $tags = preg_replace("/[\s\n\t]+/", " ", $tags);
            $tags = explode( " ", $tags );
            $elements = [];
            foreach( $tags as $tag ){
                $param = str_replace(["#", "?"],"", $tag);
                $elements[] = "<a href='/articles/tag/{$param}' class='btn btn-secondary btn-lg active mb-2 me-2' role='button' aria-pressed='true'>#{$param}</a>";
            }
            return implode("", $elements);
        }
    }
