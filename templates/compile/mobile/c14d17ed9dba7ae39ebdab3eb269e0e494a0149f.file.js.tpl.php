<?php /* Smarty version Smarty-3.1.16, created on 2014-02-01 20:01:10
         compiled from "./templates/mobile/dashboard/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91134548452ece206eefd37-03157292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c14d17ed9dba7ae39ebdab3eb269e0e494a0149f' => 
    array (
      0 => './templates/mobile/dashboard/js.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91134548452ece206eefd37-03157292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ece207022ee8_28703798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ece207022ee8_28703798')) {function content_52ece207022ee8_28703798($_smarty_tpl) {?><script>

$(document).ready(function(){
  var g1, g2, g3, g4, g5;

  // Ajax API URL
  var url = "<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getdashboarddata&api_key=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
";

  // Store our data globally
  var storedPersonalHashrate=[];
  var storedPoolHashrate=[];
  var storedPersonalSharerate=[];

  // Helper to initilize gauges
  function initGauges(data) {
    g1 = new JustGage({id: "nethashrate", value: parseFloat(data.getdashboarddata.data.network.hashrate).toFixed(2), min: 0, max: Math.round(data.getdashboarddata.data.network.hashrate * 2), title: "Net Hashrate", label: "<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['network'];?>
"});
    g2 = new JustGage({id: "poolhashrate", value: parseFloat(data.getdashboarddata.data.pool.hashrate).toFixed(2), min: 0, max: Math.round(data.getdashboarddata.data.pool.hashrate * 2), title: "Pool Hashrate", label: "<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
"});
    g3 = new JustGage({id: "hashrate", value: parseFloat(data.getdashboarddata.data.personal.hashrate).toFixed(2), min: 0, max: Math.round(data.getdashboarddata.data.personal.hashrate * 2), title: "Hashrate", label: "<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['personal'];?>
"});
    g4 = new JustGage({id: "sharerate", value: parseFloat(data.getdashboarddata.data.personal.sharerate).toFixed(2), min: 0, max: Math.round(data.getdashboarddata.data.personal.sharerate * 2), title: "Sharerate", label: "shares/s"});
    g5 = new JustGage({id: "querytime", value: parseFloat(data.getdashboarddata.runtime).toFixed(2), min: 0, max: Math.round(data.getdashboarddata.runtime * 3), title: "Querytime", label: "ms"});
  }

  // Helper to refresh graphs
  function refreshInformation(data) {
    g1.refresh(parseFloat(data.getdashboarddata.data.network.hashrate).toFixed(2));
    g2.refresh(parseFloat(data.getdashboarddata.data.pool.hashrate).toFixed(2));
    g3.refresh(parseFloat(data.getdashboarddata.data.personal.hashrate).toFixed(2));
    g4.refresh(parseFloat(data.getdashboarddata.data.personal.sharerate).toFixed(2));
    g5.refresh(parseFloat(data.getdashboarddata.runtime).toFixed(2));
  }

  // Fetch initial data via Ajax, starts proper gauges to display
  $.ajax({
    url: url,
    async: false,           // Run all others requests after this only if it's done
    dataType: 'json',
    success: function (data) { initGauges(data); }
  });

  // Our worker process to keep gauges and graph updated
  (function worker() {
    $.ajax({
      url: url,
      dataType: 'json',
      success: function(data) {
        refreshInformation(data);
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
