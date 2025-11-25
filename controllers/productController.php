<?php

$basic = array(
  'id' => 'basic',
  'image' => 'basic.webp',
  'subtitle' => $Products_title_01,
  'text1' => $Products_text_inner_01,
  'text2' => $Products_text2_inner_01,
  'price' => $Products_price_01,
  'ingredients' => $Ingredients_01,
  'ingredients_textCl' => 'tc-100',
  'ingredients_list' => [
    $Ingredients_01_01, $Ingredients_01_02, $Ingredients_01_03, $Ingredients_01_04, $Ingredients_01_05, $Ingredients_01_06
  ],
  'benefits_sub' => $Benefits_sub_01,
  'benefits_list' => [
    $Benefits_01_tit_01, $Benefits_01_01, $Benefits_01_02, $Benefits_01_03, $Benefits_01_04
  ],
  'benefits_titles' => [
    $Benefits_01_tit_01, $Benefits_01_tit_02, $Benefits_01_tit_03, $Benefits_01_tit_04
  ],
  'started_title' => $Satarted_title_01,
  'started_sub' => $Satarted_sub_01,
  'subpage' => $Satarted_subpage_01
);

$premium = array(
  'id' => 'premium',
  'image' => 'premium.webp',
  'subtitle' => $Products_title_02,
  'text1' => $Products_text_inner_02,
  'text2' => $Products_text2_inner_02,
  'price' => $Products_price_02,
  'ingredients' => $Ingredients_02,
  'ingredients_textCl' => 'tc-100',
  'ingredients_list' => [
    $Ingredients_02_01, $Ingredients_02_02, $Ingredients_02_03, $Ingredients_02_04, $Ingredients_02_05, $Ingredients_02_06
  ],
  'benefits_sub' => $Benefits_sub_02,
  'benefits_list' => [
    $Benefits_02_tit_01, $Benefits_02_01, $Benefits_02_02, $Benefits_02_03, $Benefits_02_04
  ],
  'benefits_titles' => [
    $Benefits_02_tit_01, $Benefits_02_tit_02, $Benefits_02_tit_03, $Benefits_02_tit_04
  ],
  'started_title' => $Satarted_title_02,
  'started_sub' => $Satarted_sub_02,
  'subpage' => $Satarted_subpage_02
);

$productContent = [
  'basic' => $basic,
  'premium' => $premium
];

$productNavigaton = array(
  'basic' => [
    'link' => $link_01,
    'title' => $Products_title_01,
    'slogan' => $Products_01
  ],
  'premium' => [
    'link' => $link_02,
    'title' => $Products_title_02,
    'slogan' => $Products_02
  ]
);