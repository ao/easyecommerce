<?php

function arrIncludes() {
	global $_THEME;

	return array(
		"find"=>array(
			"{include:header}",
			"{include:footer}",
			"{include:themepath}"
		),
		"replace"=>array(
			parseThemeFileInc("themes/$_THEME/include/header.tpl", false),
			parseThemeFileInc("themes/$_THEME/include/footer.tpl", false),
			"themes/".$_THEME."/"
		)
	);
}

function parseThemeFile($file, $echo=true) {
	global $_arr_include;

	$_file = file_get_contents($file);
	$_file = str_replace($_arr_include["find"], $_arr_include["replace"], $_file);

	if ($echo) echo $_file;
	else return $_file;
}

function parseThemeFileInc($file, $echo=true) {
	global $_arr_include;

	$_file = file_get_contents($file);
	$_file = str_replace($_arr_include["find"], $_arr_include["replace"], $_file);

	if ($echo) echo $_file;
	else return $_file;
}
