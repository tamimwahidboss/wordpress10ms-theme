<?php
// Create a v2 project section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Project Section', 'wp10ms' ),
    'fields' => array(

        // Section Name
        array(
            'id'      => 'v2-project-span',
            'type'    => 'text',
            'title'   => esc_html__( 'Section Name', 'wp10ms' ),
            'default' => esc_html__( 'Project', 'wp10ms' ),
        ),

        // Short Title
        array(
            'id'      => 'v2-project-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Short Title', 'wp10ms' ),
            'default' => esc_html__( 'Our Recent Project', 'wp10ms' ),
        ),

        // Section Title
        array(
            'id'      => 'v2-project-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Section Title', 'wp10ms' ),
            'default' => esc_html__( 'Latest Case Studies', 'wp10ms' ),
        ),
    ),
) );

// // this is just copy code
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Project Section',
//     'fields' => array(
//         array(
//             'id' => 'v2-project-span',
//             'type' => 'text',
//             'title' => 'Section Name',
//             'default' => 'project',
//         ),
//         array(
//             'id' => 'v2-project-p',
//             'type' => 'text',
//             'title' => 'Short Title',
//             'default' => 'our Recent project',
//         ),
//         array(
//             'id' => 'v2-project-h1',
//             'type' => 'text',
//             'title' => 'Section Title',
//             'default' => 'Latest Case Studies',
//         ),
//     ),
// ) );