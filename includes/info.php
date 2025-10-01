<?php

//-------------------------------------------//
// OBTENER PÁGINA ACTUAL Y PARÁMETROS
//-------------------------------------------//

$Actual_Page = !empty($_GET['p']) ? $_GET['p'] : '';
$Actual_Page_Lan = $Actual_Page ? '&p=' . $Actual_Page : '';
$Client_Page_Id = (empty($_GET['id'])) ? '' : '&id=' . $_GET['id'];
$Hide = ($Actual_Page === 'home' || $Actual_Page === '') ? '' : 'none';

//-------------------------//
// CLIENT
//-------------------------//

$Company_Name  = "5D";

//-------------------------//
// BONUSES
//-------------------------//

$Bonuses = array(
  'flash' => [
    'first_referal' => 70,
    'regular_referal' => 40
  ],
  'speed' => [
    'people' => 3,
    'initial_days' => 7,
    'amount' => 30
  ],
  'level' => array(
    [
      'level' => 1,
      'percentage' => 40
    ],
    [
      'level' => 2,
      'percentage' => 20
    ],
    [
      'level' => 3,
      'percentage' => 5
    ],
    [
      'level' => 4,
      'percentage' => 2
    ],
    [
      'level' => 5,
      'percentage' => 1
    ],
    [
      'level' => 6,
      'percentage' => 1
    ]
  ),
  'infinity' => [
    'people' => 300
  ]
);

//-------------------------//
// LANGUAGES
//-------------------------//

include("idiomas/idiomas.php");
$idioma = $_SESSION["language"];

//-------------------------//
// META
//-------------------------//

$Description_Site  = $Description;
$Keywords_Site     = $Keywords;

//-------------------------//
// GENERAL
//-------------------------//

$Host_Site      = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];
$Footer_Rights  = $Company_Name."© ".date("Y").". All rights reserved";

//-------------------------//
// LINKS
//-------------------------//

$link_01 = "basic";
$link_02 = "premium";

$link_web_us = "https://usa.myevoglobal.com";
$link_web_mx = "https://mex.myevoglobal.com";
$link_web_in = "https://int.myevoglobal.com";
$link_web_co = "https://col.myevoglobal.com";
$link_web_eu = "https://eur.myevoglobal.com";

$Register = "https://my.stellumglobal.com/register/$user_replica";
$Login    = "https://my.stellumglobal.com/login";

$Shop_us = "$link_web_us/?ref=$user_replica";
$Shop_mx = "$link_web_mx/?ref=$user_replica";
$Shop_in = "$link_web_in/?ref=$user_replica";
$Shop_co = "$link_web_co/?ref=$user_replica";
$Shop_eu = "$link_web_eu/?ref=$user_replica";

// ---------------------------
// Array product
// ---------------------------
$links_product = [
  [
    'url'   => $link_web_us . "/product/",
    'class' => 'eng',
    'label' => 'Buy in USA',
    'text'  => 'United Statess'
  ],
  [
    'url'   => $link_web_mx . "/product/",
    'class' => 'esp',
    'label' => 'Buy in Mexico',
    'text'  => 'México'
  ],
  [
    'url'   => $link_web_in . "/product/",
    'class' => 'int',
    'label' => 'Buy International',
    'text'  => 'International'
  ],
  [
    'url'   => $link_web_co . "/product/",
    'class' => 'col',
    'label' => 'Buy Colombia',
    'text'  => 'Colombia'
  ],
  [
    'url'   => $link_web_eu . "/product/",
    'class' => 'eur',
    'label' => 'Buy Europe',
    'text'  => 'Europe'
  ]
];

// ---------------------------
// Array product category
// ---------------------------
$links = [
  [
    'url'   => $link_web_us . "/product-category/starter-plans/",
    'class' => 'eng',
    'label' => 'Buy in USA',
    'text'  => 'United States'
  ],
  [
    'url'   => $link_web_mx . "/product-category/starter-plans/",
    'class' => 'esp',
    'label' => 'Buy in Mexico',
    'text'  => 'México'
  ],
  [
    'url'   => $link_web_in . "/product-category/starter-plans/",
    'class' => 'int',
    'label' => 'Buy International',
    'text'  => 'International'
  ],
  [
    'url'   => $link_web_co . "/product-category/starter-plans/",
    'class' => 'col',
    'label' => 'Buy Colombia',
    'text'  => 'Colombia'
  ],
  [
    'url'   => $link_web_eu . "/product-category/starter-plans/",
    'class' => 'eur',
    'label' => 'Buy Europe',
    'text'  => 'Europe'
  ]
];

// ---------------------------
// Armar bloque HTML dinámico
// ---------------------------
$ref = isset($user_replica) ? "?ref=$user_replica" : '';

//-------------------------//
// VIDEO VIMEO
//-------------------------//

$Video_vimeo = "1112334525";

//-------------------------//
// MENU
//-------------------------//

$Menu = array(
  array('#home','active',$Menu_01),
  array('#stellum','',$Menu_02),
  array('#suscriptions','',$Menu_03),
  array('?p=product&id=basic','',$Products_title_01)
  // array('','', $Menu_05)
);

//-------------------------//
// SUBMENU
//-------------------------//

$Sub = array(
  array($Menu_03, array(
    array($link_01, $Products_title_01, $Products_01),
    array($link_02, $Products_title_02, $Products_02)
  ))
);

$Sub_reg = array(
  array($Shop_us,'USA'),
  array($Shop_mx,'MEX'),
  array($Shop_in,'INT'),
  array($Shop_co,'COL'),
  array($Shop_eu,'EUR')
);

//-------------------------//
// CONDITIONS
//-------------------------//

$idiomas = [
  'eng' => 'Eng',
  'esp' => 'Esp'
];

$Condicion_lan = isset($idiomas[$idioma]) ? $idiomas[$idioma] : 'Desconocido';

//-------------------------//
// CONTACT
//-------------------------//

$Email = "stellumglobal@gmail.com";
// $Schedule = "Mon-Fri: 9 am– 6 pm<br>Saturday: 9 am – 2pm<br>Sunday: Closed";
// $Phone = "(888) 456 7890";
// $Address = "Blvd. Kukulcan 1,<br>Puerto Juarez,<br>Zona Hotelera,<br>77500 Cancún, Q.R. México";

//-------------------------//
// LOOPS
//-------------------------//

$sec01 = array(
  [
    'title' => $Journey_button_1,
    'text' => $Journey_text_1
  ],
  [
    'title' => $Journey_button_2,
    'text' => $Journey_text_2
  ],
  [
    'title' => $Journey_button_3,
    'text' => $Journey_text_3
  ],
  [
    'title' => $Journey_button_4,
    'text' => $Journey_text_4
  ],
  [
    'title' => $Journey_button_5,
    'text' => $Journey_text_5
  ]
);

$letterList_01 = [$Letters_list01_01, $Letters_list01_02, $Letters_list01_03, $Letters_list01_04];
$letterList_02 = [$Letters_list02_01, $Letters_list02_02, $Letters_list02_03];
$letterList_03 = [$Letters_list03_01, $Letters_list03_02, $Letters_list03_03];
$letterList_04 = [$Letters_list04_01, $Letters_list04_02, $Letters_list04_03];
$letterList_05 = [
  $Letters_list05_01,
  $Letters_list05_02,
  $Letters_list05_03,
  $Letters_list05_04,
  $Letters_list05_05,
  $Letters_list05_06
];
$verticalSlides = array(
  [
    'id' => 1,
    'title' => $Letters_title_01,
    'text' => $Letters_text_01,
    'list' => $letterList_01,
  ],
  [
    'id' => 2,
    'title' => $Letters_title_02,
    'text' => $Letters_text_02,
    'list' => $letterList_02,
  ],
  [
    'id' => 3,
    'title' => $Letters_title_03,
    'text' => $Letters_text_03,
    'list' => $letterList_03,
  ],
  [
    'id' => 4,
    'title' => $Letters_title_04,
    'text' => $Letters_text_04,
    'list' => $letterList_04,
  ],
  [
    'id' => 5,
    'title' => $Letters_title_05,
    'text' => $Letters_text_05,
    'text_inner' => $Letters_inner_05_01,
    'list' => $letterList_05,
  ]
);

$sec03 = array(
  [
    'id' => 1,
    'title' => $Vision_title_01,
    'text' => $Vision_text_01
  ],
  [
    'id' => 2,
    'title' => $Vision_title_02,
    'text' => $Vision_text_02
  ],
  [
    'id' => 3,
    'title' => $Vision_title_03,
    'text' => $Vision_text_03
  ],
  [
    'id' => 4,
    'title' => $Vision_title_04,
    'text' => $Vision_text_04
  ],
  [
    'id' => 5,
    'title' => $Vision_title_05,
    'text' => $Vision_text_05
  ]
);

$sec04 = array(
  [
    'text' => $Slogan_plans[0],
    'image' => 'basic'
  ],
  $Slogan_plans[1],
  $Slogan_plans[2]
);

$sec07 = array(
  [
    'id' => 1,
    'title' => $Truth_title_01,
    'text' => $Truth_text_01
  ],
  [
    'id' => 2,
    'title' => $Truth_title_02,
    'text' => $Truth_text_02
  ],
  [
    'id' => 3,
    'title' => $Truth_title_03,
    'text' => $Truth_text_03
  ],
  [
    'id' => 4,
    'title' => $Truth_title_04,
    'text' => $Truth_text_04
  ],
  [
    'id' => 5,
    'title' => $Truth_title_05,
    'text' => $Truth_text_05
  ]
);

$productBonuses = array(
  'flash' => [
    'title' => $Bonus_flash_title,
    'text_01' => $Bonus_flash_text01,
    'text_02' => $Bonus_flash_text02,
    'list' => [
      $Bonus_flash_list_01,
      $Bonus_flash_list_02
    ]
  ],
  'speed' => [
    'title' => $Bonus_speed_title,
    'text_01' => $Bonus_speed_text01,
    'text_02' => $Bonus_speed_text02,
    'list' => [
      $Bonus_speed_list_01,
      $Bonus_speed_list_02
    ]
  ],
  'level' => [
    'title' => $Bonus_level_title,
    'text_01' => $Bonus_level_text01,
    'text_02' => $Bonus_level_text02,
    'list' => $Bonuses['level'],
  ],
  'infinity' => [
    'title' => $Bonus_infinity_title,
    'text_01' => $Bonus_infinity_text01,
    'text_02' => $Bonus_infinity_text02,
    'list' => [
      $Bonus_infinity_list_01
    ]
  ],
  'rewards' => [
    'title' => $Bonus_rewards_title,
    'text_01' => $Bonus_rewards_text01,
    'text_02' => $Bonus_rewards_text02,
    'list' => [
      $Bonus_rewards_list_01
    ]
  ]
);
