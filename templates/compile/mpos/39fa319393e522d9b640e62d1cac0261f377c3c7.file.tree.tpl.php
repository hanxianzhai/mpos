<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 14:25:41
         compiled from "./templates/mpos/admin/templates/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195285611852de12e5cc3735-98924979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39fa319393e522d9b640e62d1cac0261f377c3c7' => 
    array (
      0 => './templates/mpos/admin/templates/tree.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195285611852de12e5cc3735-98924979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'files' => 0,
    'file' => 0,
    'value' => 0,
    'new_prefix' => 0,
    'path' => 0,
    'ACTIVE_TEMPLATES' => 0,
    'classes' => 0,
    'CURRENT_TEMPLATE' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52de12e5e51f33_26822824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52de12e5e51f33_26822824')) {function content_52de12e5e51f33_26822824($_smarty_tpl) {?><ul>
  <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
  <?php if ($_smarty_tpl->tpl_vars['file']->value!='master.tpl') {?>
  <?php if (is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
    <li class="folder">
      <?php echo $_smarty_tpl->tpl_vars['file']->value;?>

    <?php $_smarty_tpl->tpl_vars["new_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).((string)$_smarty_tpl->tpl_vars['file']->value)."/", null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("admin/templates/tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('files'=>$_smarty_tpl->tpl_vars['value']->value,'prefix'=>$_smarty_tpl->tpl_vars['new_prefix']->value), 0);?>

    </li>
  <?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["path"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).((string)$_smarty_tpl->tpl_vars['file']->value), null, 0);?>

    <?php $_smarty_tpl->tpl_vars["classes"] = new Smarty_variable(array(), null, 0);?>
    <?php if (array_key_exists($_smarty_tpl->tpl_vars['path']->value,$_smarty_tpl->tpl_vars['ACTIVE_TEMPLATES']->value)) {?>
      <?php $_smarty_tpl->tpl_vars["tmp"] = new Smarty_variable(array_push($_smarty_tpl->tpl_vars['classes']->value,"dynatree-activated"), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['CURRENT_TEMPLATE']->value==$_smarty_tpl->tpl_vars['path']->value) {?>
      <?php $_smarty_tpl->tpl_vars["tmp"] = new Smarty_variable(array_push($_smarty_tpl->tpl_vars['classes']->value,"dynatree-active"), null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars["classes"] = new Smarty_variable(join(" ",$_smarty_tpl->tpl_vars['classes']->value), null, 0);?>
    <li<?php if ($_smarty_tpl->tpl_vars['classes']->value) {?> class="<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" data="addClass:'<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
'<?php if (strpos("dynatree-active",$_smarty_tpl->tpl_vars['classes']->value)!==false) {?>, activate: true<?php }?>"<?php }?>>
      <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&template=<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
</a>
    </li>
  <?php }?>
  <?php }?>
  <?php } ?>
</ul>
<?php }} ?>
