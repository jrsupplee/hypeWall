<?php

$guid = get_input('guid');
$post = get_entity($guid);
$owner = $post->getOwnerEntity();

$post = array($post);

elgg_push_breadcrumb($owner->name, $owner->getURL());
elgg_push_breadcrumb(elgg_echo('item:object:hjwall'));

$content = elgg_view_entity_list($post, array(
	'full_view' => true
));

$title = elgg_echo('item:object:hjwall');

$page = elgg_view_layout('one_sidebar', array(
	'title' => false,
	'content' => $content
));

echo elgg_view_page($title, $page);
