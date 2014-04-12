<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 14:25:41
         compiled from "./templates/mpos/admin/templates/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150880273252de12e5b2e5e7-68568572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8820d17ebc2323b51afd594f7dd1ddedc77071d9' => 
    array (
      0 => './templates/mpos/admin/templates/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150880273252de12e5b2e5e7-68568572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TEMPLATES' => 0,
    'PATH' => 0,
    'CURRENT_TEMPLATE' => 0,
    'DATABASE_TEMPLATE' => 0,
    'ORIGINAL_TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52de12e5cb97b3_49049031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52de12e5cb97b3_49049031')) {function content_52de12e5cb97b3_49049031($_smarty_tpl) {?><article class="module width_quarter">
  <header><h3>Select Page</h3></header>
  <div class="templates-tree" id="templates-tree">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/templates/tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('files'=>$_smarty_tpl->tpl_vars['TEMPLATES']->value,'prefix'=>''), 0);?>

  </div>
  <link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/dynatree/skin/ui.dynatree.css'>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.cookie.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery-ui.custom.min.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/dynatree/jquery.dynatree.min.js"></script>
  <script>
    $(function() {
      $("#templates-tree").each(function() {
        $(this).find("li").each(function() {
          if($(this).find("li.dynatree-activated").length) {
            $(this).attr("data", "addClass:'dynatree-has-activated'");
          }
        });
      }).dynatree({
        minExpandLevel: 2,
        clickFolderMode: 2,
        selectMode: 1,
        persist: true,
        //To show the active template onLoad
        onPostInit: function(isReloading, isError) {
          this.reactivate();
        },
        onActivate: function(node) {
          if( node.tree.isUserEvent() && node.data.href )
            location.href = node.data.href;
        }
      });
    });
  </script>
  <style>
    .templates-tree .dynatree-container { border: none; }
    .templates-tree span.dynatree-folder a { font-weight: normal; }
    .templates-tree span.dynatree-active a,
    .templates-tree span.dynatree-has-activated a,
    .templates-tree span.dynatree-activated a { font-weight: bold; }
  </style>
  <footer>
  <ul><li>Bold templates are activated</li></ul>
  </footer>
</article>

<article class="module width_3_quarter">
  <header><h3> Edit template '<?php echo $_smarty_tpl->tpl_vars['CURRENT_TEMPLATE']->value;?>
' </h3></header>
  <form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
    <input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
">
    <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
">
    <input type="hidden" name="template" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_TEMPLATE']->value;?>
">
    <input type="hidden" name="do" value="save">
    <div class="module_content">
      <fieldset>
        <label>Active</label>
        <input type="hidden" name="active" value="0" />
        <input type="checkbox" name="active" value="1" id="active" <?php if ($_smarty_tpl->tpl_vars['DATABASE_TEMPLATE']->value['active']) {?>checked<?php }?> />
        <label for="active"></label>
      </fieldset>
      <fieldset>
        <label>Content</label>
        <textarea name="content" rows="15" type="text" required><?php echo $_smarty_tpl->tpl_vars['DATABASE_TEMPLATE']->value['content'];?>
</textarea>
      </fieldset>
      <fieldset>
        <label>Original Template Content</label>
        <textarea readonly rows="15" type="text" required><?php echo $_smarty_tpl->tpl_vars['ORIGINAL_TEMPLATE']->value;?>
</textarea>
      </fieldset>
    </div>
     <footer>
      <div class="submit_link">
        <input type="submit" value="Save" class="alt_btn">
      </div>
    </footer>
  </form>
</article>
<?php }} ?>
