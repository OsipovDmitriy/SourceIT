<?php
for($i = 1; $i <= 10; $i++){
	if($i % 2 != 0){
		echo "$i <br><br><br><br>";
	}
}

$arNumbers = [1, 2, 3, 4, 5, 6, 7, 8];

var_dump($arNumbers);
echo "<br>";
var_dump($arNumbers[3]);

echo "<br>";
var_dump($arNumbers[30]);

echo "<br>";
var_dump($arNumbers[-2]);

$arNumbers[] = "Aloha";

echo "<br>";
var_dump($arNumbers);

$arNumbers[30] = "Ta-Da";

echo "<br>";
var_dump($arNumbers);

$arNumbers[] = "BAR";

echo "<br>";
var_dump($arNumbers);
echo "<br>";

foreach ($arNumbers as $key => $number) {
	echo "$key => $number <br>";
}

$arNumbers = [1, 2, 3, 4, 5, 6, 7, 8];

for ($i=0; $i < count($arNumbers); $i++) { 
	$arNumbers[$i] = pow($arNumbers[$i], 2);
}

foreach ($arNumbers as $key => $number) {
	echo "$key => $number <br>";
}

$arNumbers = [1, 2, 3, 4, 5, 6, 7, 8];

foreach ($arNumbers as $key => $number) {
	echo "before $key => $number <br>";

	$arNumbers[$key] = pow($number, 2);

	echo "after  $key => ".$arNumbers[$key]." <br>";
}

foreach ($arNumbers as &$number) {
	//&$number ---> $arNumbers[$key]
	$number = pow($number, 2);
	echo "$key => $number <br>";
}


echo "<hr>";
foreach ($arNumbers as $key => $number) {
	echo "$key => $number <br>";
}


$arAssoc = [
	"one" => 1,
	"two" => 2,
	"three" => 3
];

echo $arAssoc['two'];

$arAssoc[] = 345;
echo "<br>";
foreach ($arAssoc as $key => $val) {
	echo "$key => $val <br>";
}

$arAssoc['four'] = 34534;

$arAssoc[] = 'hello';

foreach ($arAssoc as $key => $val) {
	echo "$key => $val <br>";
}

/*$phone = [
	'name' => 'Iphone 8',
	'color' => 'black',
	'image' => 'https://i1.rozetka.ua/goods/1946772/copy_nokia_6_ds_silver_58ef706a869f6_images_1946772554.jpg',
	'price' => 1000,
	'currency' => 'USD'
];*/

print_r($phone);

echo "<br><br><br><br>";


$phones = [
	'ip8-34' => [
		'name' => 'Iphone 8',
		'color' => 'black',
		'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
		'price' => rand(100, 1000),
		'currency' => 'USD',
		'acc' => [
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			],
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			]
		]
	],
	'sa8-34' => [
		'name' => 'Samsung S8',
		'color' => 'black',
		'image' => 'https://i1.rozetka.ua/goods/1946772/copy_nokia_6_ds_silver_58ef706a869f6_images_1946772554.jpg',
		'price' => rand(100, 1000),
		'currency' => 'USD',
		'acc' => [
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			],
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			]
		]
	],
	'sa8-341' => [
		'name' => 'Samsung S8',
		'color' => 'black',
		'image' => 'https://i1.rozetka.ua/goods/1946772/copy_nokia_6_ds_silver_58ef706a869f6_images_1946772554.jpg',
		'price' => rand(100, 1000),
		'currency' => 'USD',
		'acc' => [
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			],
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			]
		]
	],
	'sa8-342' => [
		'name' => 'Samsung S8',
		'color' => 'black',
		'image' => 'https://i1.rozetka.ua/goods/1946772/copy_nokia_6_ds_silver_58ef706a869f6_images_1946772554.jpg',
		'price' => rand(100, 1000),
		'currency' => 'USD',
		'acc' => [
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			],
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			]
		]
	],
	'sa8-343' => [
		'name' => 'Samsung S8',
		'color' => 'black',
		'image' => 'https://i1.rozetka.ua/goods/1946772/copy_nokia_6_ds_silver_58ef706a869f6_images_1946772554.jpg',
		'price' => rand(100, 1000),
		'currency' => 'USD',
		'acc' => [
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			],
			[
				'name' => 'Iphone 8',
				'color' => 'black',
				'image' => 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=300&hei=300&fmt=png-alpha&qlt=95&.v=1489097365439',
				'price' => rand(100, 1000),
				'currency' => 'USD',
			]
		]
	]
];
//$phone = $phones['ip8-34'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Iphone 8</title>
</head>
<body>
	<?foreach($phones as $article => $phone):?>
		<img height="100" src="<?=$phone['image']?>">
		<h3><?=$phone['name']?></h3>
		<p>Article: <?=$article?></p>
		<p>Color: <?=$phone['color']?></p>
		<p>Price: <?=$phone['price']?> <?=$phone['currency']?></p>
		<?foreach($phone['acc'] as $key => $acc):?>
			<p><strong><?=$acc['name']?> - <?=$acc['price']?></strong></p>
		<?endforeach?>
		<hr>
	<?endforeach?>
</body>
</html>