<?php

function nex123_customizar_register($wp_customize){

    $wp_customize->add_section('head23644', array(
      'title' => __('heading', 'sjana'),
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
// ======================================================================================
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

  //Header Area Function
  $wp_customize->add_section('backgroundimg', array(
    'title' =>__('background img', 'alihossain'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('backgd435', array(
    'default' => "https://images.unsplash.com/photo-1510851896000-498520af2236?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMG9mZmljZXxlbnwwfHwwfHx8MA%3D%3D",
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'backgd435', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'backgd435',
    'section' => 'backgroundimg',
  ) ));
  //prfile pic change
    //Header Area Function
    $wp_customize->add_section('profilechane', array(
      'title' =>__('founder', 'sjana'),
      'description' => 'change profile pic'
    ));
  
    $wp_customize->add_setting('profilechane', array(
      'default' => "https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D",
    ));
  
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'profilechane', array(
      'label' => 'change profile pic',
      'description' => 'If you interested to change or update your logo you can do it.',
      'setting' => 'profilechane',
      'section' => 'profilechane',
    ) ));

    //name 
    
$wp_customize->add_setting('dffdsddfdffdfddddf454dxf', array(
  'default' => 'Sherleen Wan',
));

$wp_customize-> add_control('dffdsddfdffdfddddf454dxf', array(
  'label' => 'name',
  'description' => '',
  'setting' => 'dffdsddfdffdfddddf454dxf',
  'section' => 'profilechane',
));

$wp_customize->add_setting('dffdsdDFFDdfdffdfddddf454dxf', array(
  'default' => 'Founder',
));

$wp_customize-> add_control('dffdsdDFFDdfdffdfddddf454dxf', array(
  'label' => 'POSITION',
  'description' => '',
  'setting' => 'dffdsdDFFDdfdffdfddddf454dxf',
  'section' => 'profilechane',
));
  // color change 



  $wp_customize->add_section('colors', array(       
    'title' => __('Colors', 'myTheme'),
    'priority' => 30
));

$wp_customize->add_setting('bg_color', array(      
    'default' => '#ffffff',
                   
));

$wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'bg_color', array(
    'label' => __('Background Color', 'myTheme'),
    'section' => 'colors',
    'settings' => 'bg_color',                        
))); 







    
  }
  
  add_action('customize_register', 'nex123_customizar_register');


