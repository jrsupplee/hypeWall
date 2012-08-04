#hj-wall {
	margin:20px 0;
	padding:10px;
	border:1px dashed #e8e8e8;
	background:#f4f4f4;
}

#hj-wall form {
	background:#fff;
}

#hj-wall .elgg-tabs {
	border-bottom:0;
	margin:0 0 10px;
}

#hj-wall .elgg-tabs > li {
	border:0;

	-moz-border-radius:0;
	-webkit-border-radius:0;
	border-radius:0;

	padding:0;
	margin:0 2px 0 0;

	background:#F8F8F8;
	border:1px solid #E8E8E8;

	color:#666;
}

#hj-wall .elgg-tabs > li:hover {
	background:#E8E8E8
	color:#666;
	cursor:pointer;
}

#hj-wall .elgg-tabs > li > a,
#hj-wall .elgg-tabs > li > a:hover {
	padding:3px 7px;
	color:#666;
}


#hj-wall .elgg-tabs > li > a > span {
	width:20px;
	height:20px;
	vertical-align:middle;
	text-align:center;
}


#hj-wall form {
	border:1px solid #e8e8e8;
	padding:0;
	margin:0;
	overflow:hidden;
}

#hj-wall textarea
{
	-moz-border-radius:0;
	-webkit-border-radius:0;
	border-radius:0;
	border:0;
	height:50px;

	-moz-box-shadow:0;
	-webkit-box-shadow:0;
	box-shadow:0;

	width:98%;
	padding:1%;
}

#hj-wall input[type="text"]
{
	-moz-border-radius:0;
	-webkit-border-radius:0;
	border-radius:0;
	border:0;

	-moz-box-shadow:0;
	-webkit-box-shadow:0;
	box-shadow:0;

	width:98%;
	padding:1%;

	color:#666;
	margin:0;
	border-top:1px dashed #e8e8e8;

}

#hj-wall select.elgg-input-dropdown
{
	margin:0;
}

#hj-wall input[type="submit"]
{
	margin:0;
}
.hj-wall-form-attachment {
	border-top:1px dashed #e8e8e8;
}

.hj-wall-form-attachment img {
	width:100%;
	border:0;
	padding:0;
}

.hj-wall-form-bar {
	padding:0 5px;
	border-top:1px solid #e8e8e8;
	border-bottom:1px solid #e8e8e8;
	background:#f8f8f8;
}

.hj-wall-bar-controls
{
	float:right;
	padding:5px;
}

ul.hj-wall-bar-controls > li
{
	float:left;
	margin:2px 4px;
}

.hj-wall-tags-list {
	border:0;
	margin:0;
	padding:0;
}

.hj-wall-tags-list > li {
	border:1px solid #e8e8e8;
	background:#f4f4f4;
	float:left;
	margin:5px;
	padding:3px 6px;
	font-size:11px;

	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.hj-wall-tags-list > li:hover {
	background:#f8f8f8;
}

.hj-wall-tags-list > li a.hj-wall-tag-remove {
	margin:0 0 0 5px;
	width:16px;
	height:16px;
	background: transparent url(<?php echo elgg_get_site_url() ?>mod/hypeWall/graphics/close.png) no-repeat;
}

.hj-wall-river-extras {
	text-decoration:italic;
	color:#666;
}

.elgg-icon.elgg-icon-wall-status,
.elgg-icon.elgg-icon-wall-post {
	background: transparent url(<?php echo elgg_get_site_url() ?>mod/hypeWall/graphics/note.png) no-repeat 50% 50%;
	height:20px;
	width:20px;
}

.elgg-icon.elgg-icon-wall-photo {
	background: transparent url(<?php echo elgg_get_site_url() ?>mod/hypeWall/graphics/photo.png) no-repeat 50% 50%;
	height:20px;
	width:20px;
}

.elgg-icon.elgg-icon-wall-file {
	background: transparent url(<?php echo elgg_get_site_url() ?>mod/hypeWall/graphics/file.png) no-repeat 50% 50%;
	height:20px;
	width:20px;
}

.elgg-module-widget .hj-list-wall img,
.elgg-module-widget #hj-wall img {
	max-width:90%;
}

.elgg-river-attachments img.elgg-photo-attachment,
li.hj-wall-attachment img.elgg-photo-attachment {
	width:100%;
	border:0;
	padding:0;
	background-color:none;
}

li.hj-wall-attachment {
	border: 1px solid <?php echo $vars['hj_pallette_accessory'] ?>;
	padding:5px;
}

#hj-wall .ui-widget-header {
	border:0;
	background:none;
	color:none;
	font-weight:normal;
}