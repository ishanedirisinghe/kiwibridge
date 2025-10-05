<?php
add_theme_support( 'post-thumbnails' );

add_filter( 'pre_set_site_transient_update_themes', function( $transient ) {
    $theme   = wp_get_theme();
    $slug    = $theme->get_stylesheet();
    $api_url = 'https://api.github.com/repos/ishanedirisinghe/kiwibridge/releases/latest';

    $response = wp_remote_get( $api_url );
    if ( is_wp_error( $response ) ) return $transient;

    $release = json_decode( wp_remote_retrieve_body( $response ), true );
    $latest_version = ltrim( $release['tag_name'], 'v' );
    $zip_url        = $release['zipball_url'];

    if ( version_compare( $theme->get( 'Version' ), $latest_version, '<' ) ) {
        $transient->response[$slug] = [
            'new_version' => $latest_version,
            'package'     => $zip_url,
            'url'         => $theme->get( 'ThemeURI' ),
        ];
    }

    return $transient;
});
