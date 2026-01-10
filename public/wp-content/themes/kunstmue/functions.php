<?php

function enqueue_styles_and_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/main.js', array( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_scripts' );

add_theme_support( 'post-thumbnails' );


// enable SVG support
function cc_mime_types($mimes) { 
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Registering a menu in functions.php
function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

function stripHTags($text)
{
    $text = preg_replace(
    '/^<h[1-6][^>]*>|<\/h[1-6]>$/i',
    '',
    trim( $text )
);

$text = wp_kses(
    $text,
    [
        'br'     => [],
        'em'     => [],
        'strong' => [],
    ]
);
return $text;
}



function getHeadersFromBlocks($postID){
    $post   = get_post( $postID );
    $blocks = parse_blocks( $post->post_content );

    $headings = [];

    $walker = function( $blocks ) use ( &$headings, &$walker ) {
        foreach ( $blocks as $block ) {

            if ( $block['blockName'] === 'core/heading' ) {
                $level = isset( $block['attrs']['level'] ) ? (int) $block['attrs']['level'] : 2;

                $text  = '';
                if ( ! empty( $block['innerHTML'] ) ) {
                    $text = stripHTags($block['innerHTML']);
                } elseif ( ! empty( $block['innerContent'][0] ) ) {
                    $text = stripHTags( $block['innerContent'][0] );
                }

                if ( $text !== '' ) {
                    $headings[] = [
                        'level' => $level,
                        'text'  => $text,
                    ];
                }
            }

            if ( ! empty( $block['innerBlocks'] ) ) {
                $walker( $block['innerBlocks'] );
            }
        }
    };

    $walker( $blocks );

    return $headings;
}

function getParagraphsFromBlocks( $postID ) {
    $post   = get_post( $postID );
    if ( ! $post ) return [];

    $blocks = parse_blocks( $post->post_content );
    $paras  = [];

    $walker = function( $blocks ) use ( &$paras, &$walker ) {
        foreach ( $blocks as $block ) {

            if ( ($block['blockName'] ?? null) === 'core/paragraph' ) {
                // Prefer innerHTML; fallback to joining ALL innerContent parts (not only [0])
                $html = $block['innerHTML'] ?? '';

                if ( $html === '' && ! empty( $block['innerContent'] ) ) {
                    $html = implode( '', $block['innerContent'] );
                }

                $html = trim( $html );

                if ( $html !== '' ) {
                    // Keep formatting safely (includes <strong>)
                    $paras[] = wp_kses_post( $html );
                }
            }

            if ( ! empty( $block['innerBlocks'] ) ) {
                $walker( $block['innerBlocks'] );
            }
        }
    };

    $walker( $blocks );

    return $paras;
}



function getImageFromBlocks( $postID ) {
    $post = get_post( $postID );
    if ( ! $post ) {
        return [];
    }

    $blocks = parse_blocks( $post->post_content );
    $images = [];

    $walker = function( $blocks ) use ( &$images, &$walker ) {
        foreach ( $blocks as $block ) {

            if ( $block['blockName'] === 'core/image' ) {
                $attrs = isset( $block['attrs'] ) ? $block['attrs'] : [];

                $id      = isset( $attrs['id'] ) ? (int) $attrs['id'] : 0;
                $alt     = isset( $attrs['alt'] ) ? $attrs['alt'] : '';
                $caption = '';

                // Caption aus den Attributen
                if ( ! empty( $attrs['caption'] ) ) {
                    $caption = wp_strip_all_tags( $attrs['caption'] );
                }

                // URL bestimmen
                $url = '';
                if ( $id ) {
                    $src = wp_get_attachment_image_src( $id, 'full' );
                    if ( $src ) {
                        $url = $src[0];
                    }
                } elseif ( ! empty( $attrs['url'] ) ) {
                    $url = $attrs['url'];
                }

                $size = isset( $attrs['sizeSlug'] ) ? $attrs['sizeSlug'] : '';

                $images[] = [
                    'id'      => $id,
                    'url'     => $url,
                    'alt'     => $alt,
                    'caption' => $caption,
                    'size'    => $size,
                ];
            }

            // Rekursiv durch verschachtelte Blöcke gehen
            if ( ! empty( $block['innerBlocks'] ) ) {
                $walker( $block['innerBlocks'] );
            }
        }
    };

    $walker( $blocks );

    return $images;
}