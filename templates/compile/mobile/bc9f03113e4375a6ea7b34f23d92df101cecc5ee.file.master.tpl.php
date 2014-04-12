<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:39:27
         compiled from "./templates/mobile/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3891500452dd432fcb44e5-29294218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc9f03113e4375a6ea7b34f23d92df101cecc5ee' => 
    array (
      0 => './templates/mobile/master.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3891500452dd432fcb44e5-29294218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd432fe06fa7_96563665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd432fe06fa7_96563665')) {function content_52dd432fe06fa7_96563665($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['title'];?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/jquery.mobile-1.3.2.min.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/raphael.2.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/justgage.1.0.1.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.mobile-1.3.2.min.js"></script>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
    <script>

      $( document ).on( "pageinit", "#mpos-page", function() {
        $( document ).on( "swipeleft swiperight", "#mpos-page", function( e ) {
          // We check if there is no open panel on the page because otherwise
          // a swipe to close the left panel would also open the right panel (and v.v.).
          // We do this by checking the data that the framework stores on the page element (panel: open).
          if ( $.mobile.activePage.jqmData( "panel" ) !== "open" ) {
            if ( e.type === "swipeleft" ) {
              $( "#right-sidebar" ).panel( "open" );
            } else if ( e.type === "swiperight" ) {
              $( "#left-sidebar" ).panel( "open" );
            }
          }
        });
      });

    </script>
<?php }?>
  
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['statistics']['analytics']['enabled']) {?>
      <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['statistics']['analytics']['code'];?>

    <?php }?>
    
  </head>
  <body>
    <div data-role="page" id="mpos-page" data-url="mpos-page">
<?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
<?php $_smarty_tpl->tpl_vars['payout_system'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], null, 0);?>
      <div data-role="panel" id="left-sidebar" data-theme="a">
          <?php echo $_smarty_tpl->getSubTemplate ("global/sidebar_".((string)$_smarty_tpl->tpl_vars['payout_system']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <a href="#" data-rel="close" data-role="button" data-mini="true" data-inline="true" data-icon="delete" data-iconpos="right">Close</a>
      </div><!-- /panel -->
<?php }?>
      <div data-role="header">
<?php echo $_smarty_tpl->getSubTemplate ("global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("global/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div><!-- /header -->
      <?php if (is_array((($tmp = @$_SESSION['POPUP'])===null||$tmp==='' ? '' : $tmp))) {?>
      <a href="#status" data-rel="popup"></a>
      <div data-role="popup" id="status" data-transition="pop">
        <p>Test</p>
      </div>
      <?php }?>
      <div data-role="content">
<?php if (file_exists((dirname($_smarty_tpl->source->filepath)).("/".((string)$_smarty_tpl->tpl_vars['PAGE']->value)."/".((string)$_smarty_tpl->tpl_vars['ACTION']->value)."/".((string)$_smarty_tpl->tpl_vars['CONTENT']->value)))) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PAGE']->value)."/".((string)$_smarty_tpl->tpl_vars['ACTION']->value)."/".((string)$_smarty_tpl->tpl_vars['CONTENT']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php } else { ?>Missing template for this page<?php }?>
      </div><!-- /content -->
      <div data-role="footer" data-position="fixed">
<?php echo $_smarty_tpl->getSubTemplate ("global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div><!-- /footer -->
    </div><!-- /page -->
  </body>
</html>
<?php }} ?>
