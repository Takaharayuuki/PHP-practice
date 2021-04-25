<?php 

$array = [
  'tokyo' => [
      '品川',
      '五反田',
      '三軒茶屋',
      '四谷'
  ],
  'kanagawa' => [
      '横浜',
      '相模原',
      '湘南',
      '鎌倉'
  ],
  'saitama' => [
      '所沢',
      '狭山',
      '川口',
      '浦和',
      '小手指',
      '飯能'
  ]
  ];

  header("Access-Control-Allow-Origin: *");

  echo json_encode($array);
