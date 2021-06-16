<?php

function get_field2($key, $page_id = 0) {
	$id = $page_id !== 0 ? $page_id : get_the_ID();
	return get_post_meta($id, $key, true);
}

function the_field2($key, $page_id = 0) {
	echo get_field2($key, $page_id);
}


add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
	$cmb = new_cmb2_box([
		'id' => 'home_box',
		'title' => 'Imagem dos parceiros',
		'object_types' => ['page'],
	]);

	$pratos = $cmb->add_field([
		'name' => 'Imagens Parceiros',
		'id' => 'img_parceiros',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Parceiro {#}',
			'add_button' => 'Adicionar Parceiro',
			'sortable' => true,
		]
	]);

	$cmb->add_group_field($pratos, [
    'name' => 'Foto Parceiro',
    'id' => 'foto_rest',
		'type' => 'file',
    'options' => [
      'url' => false,
    ],
	]);
}

?>