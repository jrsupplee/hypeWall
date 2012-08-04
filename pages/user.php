<?php

$username = get_input('username');
$owner = get_user_by_username($username);
if (!$owner) {
	forward();
}
$limit = get_input('limit', 3);
$offset = get_input('offset', 0);

$db_prefix = elgg_get_config('dbprefix');
$data_options = array(
	'type' => 'object',
	'subtype' => 'hjwall',
	'relationships' => array('wall_owner', 'tagged_in'),
	'relationship_guid' => $owner->guid,
	'limit' => $limit,
	'offset' => $offset,
	'count' => true
);

$count = elgg_get_entities_from_relationship($data_options);
$data_options['count'] = false;

$posts = elgg_get_entities_from_relationship($data_options);

$target = "hj-list-wall";
$view_params = array(
    'full_view' => true,
    'list_id' => $target,
    'list_class' => 'hj-list-wall',
    'item_class' => 'hj-list-wall-post',
    'pagination' => true,
    'offset' => $offset,
    'limit' => $limit,
    'count' => $count,
	'base_url' => 'hj/sync',
	'data-options' => $data_options
);

elgg_push_breadcrumb($owner->name);

$title = elgg_echo('hj:wall:owner', array($owner->name));

$content = elgg_view('hj/wall/container');
$content .= elgg_view_entity_list($posts, $view_params);

$page = elgg_view_layout('one_sidebar', array(
	'title' => $title,
	'content' => $content
));

echo elgg_view_page($title, $page);
