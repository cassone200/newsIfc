<?php

$array_dados = [
	'codigo'=> 0,
	'categoria'=> 0,
	'titulo'=> 0,
	'sub_titulo'=> 0,
	'noticia'=> 0,
	'autor'=> 0,
	'img'=> 0,
];

$dados = [];

$total_noticia = 30;

$categoria = 0;

for ($i = 0; $i < $total_noticia; $i++){

	if($categoria > 10) {

		$categoria = $categoria + 1;

	}

	$dados[] = [
		'codigo'=> $i,
		'categoria'=> 0,
		'titulo'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet',
		'sub_titulo'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consecteturNeque porro quisquam est qui dolorem ipsum quia dolor sit amet.',
		'noticia'=> 'Suspendisse a magna in magna gravida euismod. Sed molestie odio eget ligula rutrum, ac posuere eros sodales. Fusce non fermentum libero. Etiam vestibulum blandit tellus, a ornare diam pharetra et. Nam tincidunt arcu interdum, bibendum tortor et, vehicula quam. Nulla at ex ultrices, feugiat lectus in, imperdiet ex. Nulla ornare odio nunc, a faucibus magna mattis efficitur. Pellentesque pharetra ultricies eros. Curabitur at metus purus. Quisque rhoncus ac neque non dapibus. Nam egestas accumsan eros, eget tincidunt arcu rhoncus non. Quisque efficitur mi id massa consectetur, in finibus ipsum feugiat. Vestibulum at risus felis. Sed quis dolor a metus molestie pharetra id eget velit. Proin et sodales erat, sed accumsan tellus. Morbi id augue id erat molestie consequat.Sed vestibulum est in ipsum eleifend, nec dignissim erat tincidunt. Nulla sollicitudin accumsan ornare. Vestibulum commodo quis ligula non finibus. Fusce in nisl finibus, rhoncus velit id, fringilla diam. Nunc augue erat, mollis id feugiat eu, varius a leo. Nam eu tellus at arcu pharetra tristique nec at urna. Cras tellus quam, mollis quis malesuada eu, viverra in erat. Aliquam erat volutpat. Aenean at volutpat quam, in ornare magna. Sed nec aliquet diam. Sed ultricies purus et facilisis malesuada. Ut dui ligula, cursus placerat lorem non, gravida feugiat quam. Vestibulum suscipit urna a bibendum interdum.',
		'autor'=> 'UOL',
		'img'=> 'img/img_noticia.jpg'
	];

}




// Atribui os 3 arrays para apenas um array

// Tranforma o array $dados em JSON
$dados_json = json_encode($dados);

// Cria o arquivo cadastro.json
// O parâmetro "a" indica que o arquivo será aberto para escrita
$fp = fopen("public_html/js/dados.json", "a");

// Escreve o conteúdo JSON no arquivo
$escreve = fwrite($fp, $dados_json);

// Fecha o arquivo
fclose($fp);