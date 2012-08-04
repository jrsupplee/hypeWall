<?php

elgg_load_js('hj.wall.base');

elgg_load_css('hj.wall.base');
elgg_load_css('jquery.oembed');
elgg_load_css('hj.framework.jquitheme');

$num = $vars['entity']->num_display;
$owner = get_entity($vars['entity']->owner_guid);

$db_prefix = elgg_get_config('dbprefix');

// @todo this causes slow mysql queries
$data_options = array(
	'type' => 'object',
	'subtype' => 'hjwall',
	'relationships' => array('wall_owner', 'tagged_in'),
	'relationship_guid' => $owner->guid,
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
	'pagination' => false,
	'offset' => 0,
	'limit' => $num,
	'count' => $count,
	'base_url' => 'hj/sync/relationship',
	'data-options' => $data_options
);

elgg_push_breadcrumb($owner->name);

$title = elgg_echo('hj:wall:owner', array($owner->name));

$content = elgg_view('hj/wall/container');
$content .= elgg_view_entity_list($posts, $view_params);

echo $content;

$wall_url = "wall/user/" . elgg_get_page_owner_entity()->username;
$wall_link = elgg_view('output/url', array(
	'href' => $wall_url,
	'text' => elgg_echo('hj:wall:moreposts'),
	'is_trusted' => true,
		));
echo "<span class=\"elgg-widget-more\">$wall_link</span>";
