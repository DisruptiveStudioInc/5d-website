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
$Company_Fullname  = "5D Community";

//-------------------------//
// BONUSES
//-------------------------//

$Bonuses = array(
  'flash' => [
    'first_referal' => 700,
    'first_percentage' => 70,
    'regular_referal' => 400,
    'regular_percentage' => 40
  ],
  'speed' => [
    'people' => 3,
    'initial_days' => 30,
    'amount' => 300
  ],
  'community' => [
    'total_percentage' => 70,
    'levels' => array(
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
      ],
      [
        'level' => 7,
        'percentage' => 1
      ]
    )
  ],
  'infinity' => [
    'amount_renew' => 3000,
    'amount_cost' => 1000,
    'amount_benefit' => 2000
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
$Footer_Rights  = $Company_Fullname." © ".date("Y").". All rights reserved.";

//-------------------------//
// LINKS
//-------------------------//

$link_01 = "basic";
$link_02 = "premium";

$Register = "https://my.5dcommunity.io/register/$user_replica";
$Login    = "https://my.5dcommunity.io/login";

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
  array('#5d','',$Menu_02),
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

$Email = "hola@5dcommunity.io";
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
$letterList_02 = [$Letters_list02_01, $Letters_list02_02, $Letters_list02_03, $Letters_list02_04];
$letterList_03 = [$Letters_list03_01, $Letters_list03_02, $Letters_list03_03, $Letters_list03_04];
$letterList_04 = [$Letters_list04_01, $Letters_list04_02, $Letters_list04_03, $Letters_list04_04];
$letterList_05 = [$Letters_list05_01, $Letters_list05_02, $Letters_list05_03, $Letters_list05_04];
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
    'list' => $letterList_05,
  ]
);

$sec03 = array(
  [
    'id' => 1,
    'title' => $Vision_title_01,
    'text' => $Vision_text_01,
    'image' => 'zafiro.webp'
  ],
  [
    'id' => 2,
    'title' => $Vision_title_02,
    'text' => $Vision_text_02,
    'image' => 'rubi.webp'
  ],
  [
    'id' => 3,
    'title' => $Vision_title_03,
    'text' => $Vision_text_03,
    'image' => 'esmeralda.webp'
  ],
  [
    'id' => 4,
    'title' => $Vision_title_04,
    'text' => $Vision_text_04,
    'image' => 'diamante.webp'
  ],
  [
    'id' => 5,
    'title' => $Vision_title_05,
    'text' => $Vision_text_05,
    'image' => 'diamante_corona.webp'
  ]
);

$sec04 = array(
  [
    'title' => $Slogan_item1_title,
    'text' => $Slogan_item1_text
  ],
  [
    'title' => $Slogan_item2_title,
    'text' => $Slogan_item2_text
  ],
  [
    'title' => $Slogan_item3_title,
    'text' => $Slogan_item3_text
  ],
  [
    'title' => $Slogan_item4_title,
    'text' => $Slogan_item4_text
  ]
);

$sec07 = array(
  [
    'id' => 1,
    'title' => $Truth_title_01,
    'text' => $Truth_text_01,
    'image' => 'reward_rubi.webp'
  ],
  [
    'id' => 2,
    'title' => $Truth_title_02,
    'text' => $Truth_text_02,
    'image' => 'reward_zafiro.webp'
  ],
  [
    'id' => 3,
    'title' => $Truth_title_03,
    'text' => $Truth_text_03,
    'image' => 'reward_esmeralda.webp'
  ],
  [
    'id' => 4,
    'title' => $Truth_title_04,
    'text' => $Truth_text_04,
    'image' => 'reward_diamante.webp'
  ],
  [
    'id' => 5,
    'title' => $Truth_title_05,
    'text' => $Truth_text_05,
    'image' => 'reward_diamante_corona.webp'
  ]
);

$clubBenefits = [$Spirit_item01, $Spirit_item02, $Spirit_item03, $Spirit_item04, $Spirit_item05, $Spirit_item06];

$productBonuses = array(
  'flash' => [
    'title' => $Bonus_flash_title,
    'list' => [
      $Bonus_flash_list_01,
      $Bonus_flash_list_02
    ]
  ],
  'speed' => [
    'title' => $Bonus_speed_title,
    'text' => $Bonus_speed_text,
  ],
  'community' => [
    'title' => $Bonus_community_title,
    'text' => $Bonus_community_text01,
    'list' => $Bonuses['community']['levels'],
    'total' => $Bonus_community_total,
  ],
  'infinity' => [
    'title' => $Bonus_infinity_title,
    'text' => $Bonus_infinity_text,
  ]
);
