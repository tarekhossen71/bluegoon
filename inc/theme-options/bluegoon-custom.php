<?php
    // Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Theme Panel',
      'menu_slug'  => 'theme-panel',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Header Navigation',
      'fields' => array(
        array(
          'id'      => 'header_social_icon',
          'type'    => 'repeater',
          'title'   => 'Header Socail',
          'fields'  => array(
            array(
                'id'        => 'social_icon',
                'title'     => 'Icon Class',
                'type'      => 'text',
                'desc'      => 'Get Icon Class From: https://fontawesome.com/',
                'default'   => 'fa fa-facebook',
            ),
          ),
        ),
        array(
            'id'        => 'copyright_text',
            'title'     => 'Copyright Text',
            'type'      => 'text',
            'default'   => 'Copyright All Right Reserved'
        ),
      )
    ) );
  
    //
    // Header section
    CSF::createSection( $prefix, array(
      'title'  => 'Header Section',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'header_image',
          'type'  => 'media',
          'title' => 'Header Image',
        ),
      )
    ) );
    // Intro Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Intro Section',
        'fields'    => array(
            array(
                'id'        => 'header_intro_title',
                'type'      => 'text',
                'title'     => 'Header Intro Title',
                'default'   => 'Introducing Blugoon',
            ),
            array(
                'id'        => 'header_intro_description',
                'type'      => 'textarea',
                'title'     => 'Header Intro Description',
                'default'   => 'Blugoon is free HTML template for everyone. This is a Bootstrap v4.3.1 layout which you can fully customize for your websites. Please tell your friends about Tooplate. Thank you.',
            ),
            array(
                'id'        => 'intro_title',
                'type'      => 'text',
                'title'     => 'Intro Title',
                'default'   => 'Modern Web Design',
            ),
            array(
                'id'        => 'intro_description',
                'type'      => 'textarea',
                'title'     => 'Intro Description',
                'default'   => 'You are allowed to use this template for commercial or personal websites. You are NOT allowed to redistribute this on template collection website. You can feature this template on your blog post.<br> All photos in this template are from Pexels website. Blugoon HTML Template is provided by Tooplate. Class aptent taciti sociosqu ad litora torquent per conubia nostra.',
            ),
            array(
                'id'        => 'intro_button',
                'type'      => 'text',
                'title'     => 'Intro Button',
                'default'   => 'Read More',
            ),
            array(
                'id'        => 'intro_button_url',
                'type'      => 'text',
                'title'     => 'Intro Button URL',
                'default'   => '#',
            ),
            array(
                'id'        => 'intro_image',
                'type'      => 'media',
                'title'     => 'Intro Image',
            ),
            array(
                'id'        => 'intro_another_image',
                'type'      => 'media',
                'title'     => 'Intro Another Image',
            ),
            array(
                'id'        => 'intro_another_title',
                'type'      => 'text',
                'title'     => 'Intro Another Title',
                'default'   => 'Best Template for you!',
            ),
            array(
                'id'        => 'intro_another_description',
                'type'      => 'textarea',
                'title'     => 'Intro Another Description',
                'default'   => 'Quisque feugiat nisl at lacus condimentum, eu suscipit odio fringilla. Mauris eu est vitae erat condimentum pellentesque. Fusce vehicula nunc at augue sagittis tristique. <br> Ut imperdiet massa at enim tempus volutpat. Nullam gravida augue quis facilisis commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
            ),
            array(
                'id'        => 'intro_another_button',
                'type'      => 'text',
                'title'     => 'Intro Another Button',
                'default'   => 'Read More',
            ),
            array(
                'id'        => 'intro_another_button_url',
                'type'      => 'text',
                'title'     => 'Intro Another Button URL',
                'default'   => '#',
            ),
        ),
    ));
    // Features Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Features Section',
        'fields'    => array(
            array(
                'id'        => 'features_section_title',
                'type'      => 'text',
                'title'     => 'Features Title',
                'default'   => 'Greatest Features',
            ),
            array(
                'id'        => 'features_section_description',
                'type'      => 'textarea',
                'title'     => 'Features Description',
                'default'   => 'Praesent posuere fringilla elit, non maximus tellus posuere nec. Nunc eu sapien nec est elementum sodales.',
            ),
            
        ),
    ) );
    // Gallery Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Gallery Section',
        'fields'    => array(
            array(
                'id'        => 'gallery_title',
                'title'     => 'Gallery Title',
                'type'      => 'text',
                'default'   => 'Gallery',
            ),
            array(
                'id'        => 'gallery_description',
                'title'     => 'Gallery Description',
                'type'      => 'text',
                'default'   => 'Donec sit amet enim tempor nisl fermentum aliquam. In consectetur sapien eu nisi venenatis lobortis. Sed ullamcorper tristique elit nec facilisis.',
            ),
        ),
    ) );
    // Contact Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Contact Section',
        'fields'    => array(
            array(
                'id'        => 'contact_title',
                'title'     => 'Contact Title',
                'type'      => 'text',
                'default'   => 'Contact',
            ),
            array(
                'id'        => 'contact_description',
                'title'     => 'Contact Description',
                'type'      => 'text',
                'default'   => 'Aenean a consectetur mi, sit amet consequat velit. Mauris vitae nunc viverra, mattis arcu quis, vestibulum eros. ',
            ),
        ),
    ) );
  
  }