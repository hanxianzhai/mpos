<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:55:01
         compiled from "./templates/mpos/statistics/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80772114552dd46d5c80538-14068366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9a3a5134b5228cd83a526fe1f01133da494b6a4' => 
    array (
      0 => './templates/mpos/statistics/js.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80772114552dd46d5c80538-14068366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd46d5ca3038_19710013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd46d5ca3038_19710013')) {function content_52dd46d5ca3038_19710013($_smarty_tpl) {?><script>

$(document).ready(function(){

  // Ajax API URL
  var url = "<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getnavbardata";

  function refreshStaticData(data) {
     $('#b-workers').html((parseFloat(data.getnavbardata.data.pool.workers).toFixed(0)));
     $('#b-hashrate').html((parseFloat(data.getnavbardata.data.pool.hashrate).toFixed(3)));
     $('#b-target').html(data.getnavbardata.data.pool.estimated + " (done: " + data.getnavbardata.data.pool.progress + "%)");
     $('#b-diff').html(data.getnavbardata.data.network.difficulty);
  }

  // Our worker process to keep gauges and graph updated
  (function worker() {
    $.ajax({
      url: url,
      dataType: 'json',
      success: function(data) {
        refreshStaticData(data);
      },
      complete: function() {
        setTimeout(worker, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval']*1000))===null||$tmp==='' ? "10000" : $tmp);?>
)
     }
   });
 })();
});

</script>
<?php }} ?>
