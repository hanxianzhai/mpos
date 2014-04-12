<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 04:13:34
         compiled from "./templates/mpos/admin/news_edit/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2810361052dd836ea9bb48-68997883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c383952fb357dca2261af3074a3d17bf26733e' => 
    array (
      0 => './templates/mpos/admin/news_edit/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2810361052dd836ea9bb48-68997883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'NEWS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd836eb9e127_81752529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd836eb9e127_81752529')) {function content_52dd836eb9e127_81752529($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/cleditor/jquery.cleditor.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/cleditor/jquery.cleditor.css">
<script type="text/javascript">
  $(document).ready(function () { $(".cleditor").cleditor(); });
</script>
<article class="module width_full">
  <header><h3>Edit news entry #<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['id'];?>
</h3></header>
<form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['id'];?>
">
  <input type="hidden" name="do" value="save">
  <table class="tablesorter" cellspacing="0">
    <tr>
      <th>Active</th>
      <td>
        <input type="hidden" name="active" value="0" />
        <input type="checkbox" name="active" value="1" id="active" <?php if ($_smarty_tpl->tpl_vars['NEWS']->value['active']) {?>checked<?php }?> />
        <label for="active"></label>
      </td>
    </tr>
    <tr>
      <th>Header</th>
      <td><input name="header" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['header'];?>
" required /></td>
    </tr>
    <tr>
      <th>Content</th>
      <td><textarea class="cleditor" name="content" rows="15" cols="150" type="text" required><?php echo $_smarty_tpl->tpl_vars['NEWS']->value['content'];?>
</textarea></td>
    </tr>
  </table>
   <footer>
    <div class="submit_link">
      <input type="submit" value="Save" class="alt_btn">
    </div>
  </footer> 
</form>
</article>
<?php }} ?>
