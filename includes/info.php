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
