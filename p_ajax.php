<?
// нужно подключить апишку
$prod_id = $_REQUEST["prod_id"]; // product id 
$color = $_REQUEST["color"]; // the chosen one !!!

$product = ???; 

$p_vrtn = $product -> get_available_variations(); //массив вариация

foreach ( $p_vrtn as $el ) {
	$color = $el['attributes']['attribute_pa_color'];
	$size = $el['attributes']['attribute_pa_size'];
	$p_arr[$color][] = $size;
}

$i = 0;
$len = count($p_arr[$color]); 
foreach($p_arr[$color] as $var){ //выведем размеры первого обьекта(цвета)
	echo $var;
	if( $i < $len-1 ){ echo ','; }
	$i++;
}