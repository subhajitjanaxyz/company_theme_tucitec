<?php

function nex123_customizar_register($wp_customize){
//theme color 
$wp_customize->add_section('colors', array(       
  'title' => __('THEME COLOUR ', 'myTheme'),
));

$wp_customize->add_setting('bg_color', array(      
  'default' => '#ffffff',
));

$wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'bg_color', array(
  'label' => __('Background Color', 'myTheme'),
  'section' => 'colors',
  'settings' => 'bg_color',                        
))); 
//heading color
$wp_customize->add_setting('heading_colors', array(      
  'default' => '#1F3D83',
));

$wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'heading_colors', array(
  'label' => __('all heading Color', 'myTheme'),
  'section' => 'colors',
  'settings' => 'heading_colors',                        
)));


//HOME SECTIONS =====================================================================================================
    $wp_customize->add_section('head23644', array(
      'title' => __('HOME', 'sjana'),
      'description' => 'If you interested to change or update your footer settings you can do it.'
    ));

    //company name
  
    $wp_customize->add_setting('dffdsdf454dxf', array(
      'default' => 'Software Company',
    ));
  
    $wp_customize-> add_control('dffdsdf454dxf', array(
      'label' => 'company name',
      'description' => '',
      'setting' => 'dffdsdf454dxf',
      'section' => 'head23644',
    ));

    //company description
  
    $wp_customize->add_setting('dffdsdf454dxffd', array(
        'default' => 'Software Company is a child theme of Rara Business Free WordPress theme.',
      ));
    
      $wp_customize-> add_control('dffdsdf454dxffd', array(
        'label' => 'company descriptions',
        'description' => '',
        'setting' => 'dffdsdf454dxffd',
        'section' => 'head23644',
      ));
      
    //heading name
  
    $wp_customize->add_setting('dffdsfdfdf454dxffd', array(
        'default' => 'Perfectionist at Every Level',
      ));
    
      $wp_customize-> add_control('dffdsfdfdf454dxffd', array(
        'label' => 'heading 1',
        'description' => '',
        'setting' => 'dffdsfdfdf454dxffd',
        'section' => 'head23644',
      ));
      
    //heading bottom 
  
    $wp_customize->add_setting('dffdsffds33dfdfdf454dxffd', array(
        'default' => 'Believing in the possibility of attaining perfection.',
      ));
    
      $wp_customize-> add_control('dffdsffds33dfdfdf454dxffd', array(
        'label' => 'heading 1.1',
        'description' => '',
        'setting' => 'dffdsffds33dfdfdf454dxffd',
        'section' => 'head23644',
      ));
      
    //btn1 name
  
    $wp_customize->add_setting('dffdsfdsdfds33dfdfdf454dxffd', array(
        'default' => 'PORTFOLIO',
      ));
    
      $wp_customize-> add_control('dffdsfdsdfds33dfdfdf454dxffd', array(
        'label' => 'btn1',
        'description' => 'If need you can update your copyright text from here',
        'setting' => 'dffdsfdsdfds33dfdfdf454dxffd',
        'section' => 'head23644',
      ));
      
    //btn2 name
  
    $wp_customize->add_setting('dffdsfdsdfdfds33dfdfdf454dxffd', array(
        'default' => 'OUR SERVICES',
      ));
    
      $wp_customize-> add_control('dffdsfdsdfdfds33dfdfdf454dxffd', array(
        'label' => 'btn2',
        'description' => 'If need you can update your copyright text from here',
        'setting' => 'dffdsfdsdfdfds33dfdfdf454dxffd',
        'section' => 'head23644',
      ));


      $wp_customize->add_setting('backgd435', array(
        'default' => "https://images.unsplash.com/photo-1510851896000-498520af2236?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMG9mZmljZXxlbnwwfHwwfHx8MA%3D%3D",
      ));
    
      $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'backgd435', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to change or update your logo you can do it.',
        'setting' => 'backgd435',
        'section' => 'head23644',
      ) ));

// PORTFOLIO  =======================================================================================================
$wp_customize->add_section('portfolio_fs4sf4sd32sf', array(
  'title' => __('PORTFOLIO', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

$wp_customize->add_setting('slideheading', array(
  'default' => 'PORTFOLIO',
));

$wp_customize-> add_control('slideheading', array(
  'label' => 'TITLE',
  'description' => '',
  'setting' => 'slideheading',
  'section' => 'portfolio_fs4sf4sd32sf',
));

//add components
$wp_customize->add_setting('slide_count', array(
  'default' => 3,
  'sanitize_callback' => 'absint',
));

$wp_customize->add_control('slide_count', array(
  'label' => __('Number of Slides'),
  'section' => 'portfolio_fs4sf4sd32sf',
  'type' => 'number',
  'input_attrs' => array(
      'min' => 1,
      'max' => 10,
  ),
));


$slide_count = get_theme_mod('slide_count', 3);

for ($i = 1; $i <= $slide_count; $i++) {
    // Heading
    $wp_customize->add_setting("slide{$i}-heading", array(
        'default' => "Slide {$i} Heading",
    ));

    $wp_customize->add_control("slide{$i}-heading", array(
        'label' => "Slide {$i} Heading",
        'section' => 'portfolio_fs4sf4sd32sf',
    ));

    // Text
    $wp_customize->add_setting("slide{$i}-text", array(
        'default' => "This is slide {$i} text",
    ));

    $wp_customize->add_control("slide{$i}-text", array(
        'label' => "Slide {$i} Text",
        'section' => 'portfolio_fs4sf4sd32sf',
    ));

    // Image
    $wp_customize->add_setting("slide{$i}-image", array(
        'default' => "https://images.unsplash.com/photo-1510851896000-498520af2236?fm=jpg&q=60&w=3000",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "slide{$i}-image", array(
        'label' => "Slide {$i} Background Image",
        'section' => 'portfolio_fs4sf4sd32sf',
        'setting' => "slide{$i}-image",
    )));
}




//OUR SERVICE==================================================================================================================
$wp_customize->add_section('ourservice_safefs', array(
  'title' => __('OUR SERVICE', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

$wp_customize->add_setting('ourservice_card_count', array(
  'default' => 4,
  'sanitize_callback' => 'absint',
));

$wp_customize->add_control('ourservice_card_count', array(
  'label' => 'Number of Service Cards',
  'type' => 'number',
  'section' => 'ourservice_safefs',
  'input_attrs' => array(
    'min' => 1,
    'max' => 12,
  ),
));
$card_count = get_theme_mod('ourservice_card_count', 4);

//heading title
$wp_customize->add_setting('headingfirsfor_service', array(
  'default' => 'OUR SERVICE',
));

$wp_customize-> add_control('headingfirsfor_service', array(
  'label' => 'company name',
  'description' => '',
  'setting' => 'headingfirsfor_service',
  'section' => 'ourservice_safefs',
));
//heading title 2
$wp_customize->add_setting('hey78ourservice_safefs343', array(
  'default' => 'What We Offer',
));

$wp_customize-> add_control('hey78ourservice_safefs343', array(
  'label' => 'company name',
  'description' => '',
  'setting' => 'hey78ourservice_safefs343',
  'section' => 'ourservice_safefs',
));
//heading title 3
$wp_customize->add_setting('ourservice_safefs343he8fde', array(
  'default' => 'Comprehensive solutions designed for your success',
));

$wp_customize-> add_control('ourservice_safefs343he8fde', array(
  'label' => 'company name',
  'description' => '',
  'setting' => 'ourservice_safefs343he8fde',
  'section' => 'ourservice_safefs',
));



// ===== OUR SERVICES CARDS - START =====


for ($i = 1; $i <= $card_count; $i++) {
  // Card Title
  $wp_customize->add_setting("card_service_title$i", array(
      'default' => 'Card Title ' . $i,
  ));

  $wp_customize->add_control("card_service_title$i", array(
      'label' => "Card Title $i",
      'section' => 'ourservice_safefs',
      'setting' => "card_service_title$i",
  ));

  // Card Description
  $wp_customize->add_setting("card_service_desc$i", array(
      'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
  ));

  $wp_customize->add_control("card_service_desc$i", array(
      'label' => "Card Description $i",
      'section' => 'ourservice_safefs',
      'setting' => "card_service_desc$i",
  ));

  // Card Image
  $wp_customize->add_setting("card_service_img$i", array(
      'default' => "https://images.unsplash.com/photo-1510851896000-498520af2236?fm=jpg&q=60&w=3000",
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "card_service_img$i", array(
      'label' => "Card Image $i",
      'section' => 'ourservice_safefs',
      'setting' => "card_service_img$i",
  )));
}












//CLIENT REVIEW=====================================================================================
$wp_customize->add_section('client_area', array(
  'title' => __('CLIENT REVIEW', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

$wp_customize->add_setting('client_area3434', array(
  'default' => 'Software Company',
));

$wp_customize-> add_control('client_area3434', array(
  'label' => 'company name',
  'description' => '',
  'setting' => 'client_area3434',
  'section' => 'client_area',
));
//ABout
$wp_customize->add_section('About_sf3dsff', array(
  'title' => __('ABOUT', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

$wp_customize->add_setting('about_fd88esfd', array(
  'default' => 'Software Company',
));

$wp_customize-> add_control('about_fd88esfd', array(
  'label' => 'company name',
  'description' => '',
  'setting' => 'about_fd88esfd',
  'section' => 'About_sf3dsff',
));
//client
$wp_customize->add_section('client_sfd6sdfe', array(
  'title' => __('CLIENT', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

$wp_customize->add_setting('client_sfd6sdfe22', array(
  'default' => 'Software Company',
));

$wp_customize-> add_control('client_sfd6sdfe22', array(
  'label' => 'company name',
  'description' => '',
  'setting' => 'client_sfd6sdfe22',
  'section' => 'client_sfd6sdfe',
));
//carrer
$wp_customize->add_section('carrer_option', array(
  'title' => __('CARRER', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

$wp_customize->add_setting('carrer_optionefsd', array(
  'default' => 'Software Company',
));

$wp_customize-> add_control('carrer_optionefsd', array(
  'label' => 'company name',
  'description' => '',
  'setting' => 'carrer_optionefsd',
  'section' => 'carrer_option',
));
//contact
$wp_customize->add_section('contact_area4d', array(
  'title' => __('CONTACT', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

$wp_customize->add_setting('contact_ardfdfea4d', array(
  'default' => 'Software Company',
));

$wp_customize-> add_control('contact_ardfdfea4d', array(
  'label' => 'company name',
  'description' => '',
  'setting' => 'contact_ardfdfea4d',
  'section' => 'contact_area4d',
));
//footer
$wp_customize->add_section('footer_areae', array(
  'title' => __('FOOTER', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

$wp_customize->add_setting('footer_areffddae', array(
  'default' => 'Software Company',
));

$wp_customize-> add_control('footer_areffddae', array(
  'label' => 'company name',
  'description' => '',
  'setting' => 'footer_areffddae',
  'section' => 'footer_areae',
));
$wp_customize->add_section('headdfdf23644', array(
  'title' => __('hero area', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

//hero area 1

$wp_customize->add_setting('dffdsdfdfdf454dxf', array(
  'default' => 'Our Case Studies',
));

$wp_customize-> add_control('dffdsdfdfdf454dxf', array(
  'label' => 'hero area 1',
  'description' => '',
  'setting' => 'dffdsdfdfdf454dxf',
  'section' => 'headdfdf23644',
));

//hero area 1.1

$wp_customize->add_setting('dffdsdfddfdfdf454dxf', array(
  'default' => 'It looks perfect on all major browsers, tablets and phones. The kind of product you are looking for.',
));

$wp_customize-> add_control('dffdsdfddfdfdf454dxf', array(
  'label' => 'hero area 1.1',
  'description' => '',
  'setting' => 'dffdsdfddfdfdf454dxf',
  'section' => 'headdfdf23644',
));
//hero area 2

$wp_customize->add_setting('dffdsdfdfddfdf454dxf', array(
  'default' => 'Our Blog',
));

$wp_customize-> add_control('dffdsdfdfddfdf454dxf', array(
  'label' => 'hero area 2',
  'description' => '',
  'setting' => 'dffdsdfdfddfdf454dxf',
  'section' => 'headdfdf23644',
));

//hero area 2.1

$wp_customize->add_setting('dffdsfdfdfddfdfdf454dxf', array(
  'default' => 'It looks perfect on all major browsers, tablets and phones. The kind of product you are looking for.',
));

$wp_customize-> add_control('dffdsfdfdfddfdfdf454dxf', array(
  'label' => 'hero area 2.1',
  'description' => '',
  'setting' => 'dffdsfdfdfddfdfdf454dxf',
  'section' => 'headdfdf23644',
));
//===============================================================
$wp_customize->add_section('headdfddfdf23644', array(
  'title' => __('footer', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

//footer

$wp_customize->add_setting('dffdsddfdffdfdf454dxf', array(
  'default' => 'Copyright © 2025 Software Company. Software Company | Developed By Rara Theme. Powered by WordPress.',
));

$wp_customize-> add_control('dffdsddfdffdfdf454dxf', array(
  'label' => 'footer',
  'description' => '',
  'setting' => 'dffdsddfdffdfdf454dxf',
  'section' => 'headdfddfdf23644',
));

//===================================================================

//section create 
$wp_customize->add_section('profilechane', array(
  'title' =>__('founder', 'sjana'),
  'description' => 'change profile pic'
));
$wp_customize->add_setting("profilechane33ddd", array(
  'default' => 'Who We Are',
));

$wp_customize-> add_control("profilechane33ddd", array(
  'label' => 'name',
  'description' => '',
  'setting' => "profilechane33ddd",
  'section' => 'profilechane',
));

$wp_customize->add_setting("profilechane3dd3ddd", array(
  'default' => 'A team of passionate professionals committed to delivering excellence.',
));

$wp_customize-> add_control("profilechane3dd3ddd", array(
  'label' => 'name',
  'description' => '',
  'setting' => "profilechane3dd3ddd",
  'section' => 'profilechane',
));








//count 
$wp_customize->add_setting('slidde_count', array(
  'default' => 3,
  'sanitize_callback' => 'absint',
));

$wp_customize->add_control('slidde_count', array(
  'label' => __('Number of profile'),
  'section' => 'profilechane',
  'setting' => "slidde_count",
  'type' => 'number',
  'input_attrs' => array(
      'min' => 1,
      'max' => 10,
  ),
));


$slide_count2 = get_theme_mod('slidde_count', 3);
 
for($i=1; $i<=$slide_count2; $i++){
// img
  $wp_customize->add_setting("profilechane{$i}", array(
    'default' => "https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D",
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, "profilechane{$i}", array(
    'label' => 'change profile pic',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => "profilechane{$i}",
    'section' => 'profilechane',
  ) ));
//name
  $wp_customize->add_setting("profilechane33{$i}", array(
    'default' => 'Sherleen Wan',
  ));
  
  $wp_customize-> add_control("profilechane33{$i}", array(
    'label' => 'name',
    'description' => '',
    'setting' => "profilechane33{$i}",
    'section' => 'profilechane',
  ));
  //position
  $wp_customize->add_setting("profilechadne{$i}", array(
    'default' => 'Founder',
  ));
  
  $wp_customize-> add_control("profilechadne{$i}", array(
    'label' => 'POSITION',
    'description' => '',
    'setting' => "profilechadne{$i}",
    'section' => 'profilechane',
  ));
// description
$wp_customize->add_setting("profilecffhadne{$i}", array(
  'default' => 'Registered Trademark Agent​​
As a registered trademark agent, she advises clients on procedures and strategy of IP prosecution in Malaysia and overseas. She actively shares her IP knowledge through publishing journals and organizing seminars and webinars on patents, trademarks, copyrights, and other areas of IP',
));

$wp_customize-> add_control("profilecffhadne{$i}", array(
  'label' => 'POSITION',
  'description' => '',
  'setting' => "profilecffhadne{$i}",
  'section' => 'profilechane',
)); }
































    



}
  
add_action('customize_register', 'nex123_customizar_register');


