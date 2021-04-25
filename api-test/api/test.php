<?php

function get_time()
{
  $today = date("Y-m-d H:i:s");

  return $today;
}

header("Access-Control-Allow-Origin: *");

$data = get_time();
echo json_encode($data);
