<?php

namespace App\Http\Library;

class ConvertToWareki
{
  //引用元：http://2960.jp/blog/php/35.html
  function convertForSeirekiToWareki($year = null){
  		//半角数値以外をカットする
  		$year = intval($year);
  		//半角数値だったら処理続行
  		if($year){
  			switch ($year) {
  				case $year > 1988:
  					$yearNumber = $year - 1988;
  					$yearValue = "平成";
  					break;
  				case $year > 1925:
  					$yearNumber = $year - 1925;
  					$yearValue = "昭和";
  					break;
  				case $year > 1911:
  					$yearNumber = $year - 1911;
  					$yearValue = "大正";
  					break;
  				case $year > 1867:
  					$yearNumber = $year - 1867;
  					$yearValue = "明治";
  					break;
  				default:
  					$yearNumber = $year;
  					$yearValue = null;
  					break;
  			}
  			//初年度なら元年と返す
  			if($yearNumber == 1){$yearNumber = "元";}
  			$returnValue = $yearValue . $yearNumber . "年";
  			return $returnValue;
  		}
  	}
}
