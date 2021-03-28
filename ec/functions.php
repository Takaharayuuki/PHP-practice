<?php
  function calPriceIncludeTax($price) {
    $taxRate = 0.1;
    return $price + $price * $taxRate;
  }

  function displayPrice($price) {
    $priceIncludedTax = calPriceIncludeTax($price);
    return $priceIncludedTax."円";
  }
?>