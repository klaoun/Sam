<?php
$template->set_filenames(array('theme_admin_content' => dirname(__FILE__) . '/admin.tpl'));
$template->assign_var_from_handle('ADMIN_CONTENT', 'theme_admin_content');

include_once(PHPWG_ROOT_PATH . 'admin/include/tabsheet.class.php');
define('THEME_ID', basename(dirname(dirname(__FILE__))));
define('ADMIN_PATH',   get_root_url() . 'admin.php?page=theme&theme=' . THEME_ID);
define('TAB_SETTINGS', 'Accueil');
define('TAB_ABOUT', 'about');
$page['tab'] = isset($_GET['tab']) ? $_GET['tab'] : $page['tab'] = TAB_SETTINGS;
$tabsheet = new tabsheet();
$tabsheet->set_id('bsibu');
$tabsheet->add(TAB_SETTINGS, l10n('Settings'), ADMIN_PATH . '&tab=' . TAB_SETTINGS);
$tabsheet->add(TAB_ABOUT, l10n('About'), ADMIN_PATH . '&tab=' . TAB_ABOUT);
$tabsheet->select($page['tab']);
$tabsheet->assign();
?>
