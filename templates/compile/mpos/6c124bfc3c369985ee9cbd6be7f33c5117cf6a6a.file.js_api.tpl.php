<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:26:58
         compiled from "./templates/mpos/dashboard/js_api.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17392955452dd4042b2fec6-08030697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c124bfc3c369985ee9cbd6be7f33c5117cf6a6a' => 
    array (
      0 => './templates/mpos/dashboard/js_api.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17392955452dd4042b2fec6-08030697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd4042d021b1_72734206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd4042d021b1_72734206')) {function content_52dd4042d021b1_72734206($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.json2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.dateAxisRenderer.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.highlighter.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.canvasTextRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.trendline.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.enhancedLegendRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.canvasTextRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.pointLabels.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/jqplot.donutRenderer.js"></script>

<script>

$(document).ready(function(){
  var g1, g2, g3, g4, g5;

  // Ajax API URL
  var url_dashboard = "<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getdashboarddata&api_key=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
";
  var url_worker = "<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getuserworkers&api_key=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
";
  var url_balance = "<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getuserbalance&api_key=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
";

  // Enable all included plugins
  //  $.jqplot.config.enablePlugins = true;

  // Store our data globally
  var storedPersonalHashrate=[];
  var storedPoolHashrate=[];
  var storedPersonalSharerate=[];

  // jqPlit defaults
  var jqPlotOverviewOptions = {
    highlighter: { show: true },
    grid: { drawBorder: false, background: '#fbfbfb', shadow: false },
    stackSeries: false,
    seriesColors: [ '#26a4ed', '#ee8310', '#e9e744' ],
    seriesDefaults:{
      lineWidth: 4, shadow: false,
      fill: false, fillAndStroke: true, fillAlpha: 0.3,
      trendline: { show: true, color: '#be1e2d', lineWidth: 1.0, label: 'Your Average', shadow: true },
      markerOptions: { show: true, size: 6 },
      rendererOptions: { smooth: true }
    },
    series: [
      { yaxis: 'yaxis', label: 'Own',    fill: true                                            },
      { yaxis: 'yaxis', label: 'Pool',   fill: false, trendline: { show: false }, lineWidth: 2, markerOptions: { show: true, size: 4 }},
      { yaxis: 'y3axis', label: 'Sharerate', fill: false, trendline: { show: false }              },
    ],
    legend: { show: true, location: 'sw', renderer: $.jqplot.EnhancedLegendRenderer, rendererOptions: { seriesToggleReplot: { resetAxes: true } } },
    axes: {
      yaxis:  { min: 0, pad: 1.25, label: 'Hashrate' , labelRenderer: $.jqplot.CanvasAxisLabelRenderer },
      y3axis: { min: 0, pad: 1.25, label: 'Sharerate', labelRenderer: $.jqplot.CanvasAxisLabelRenderer },
      xaxis:  { showTicks: false, tickInterval: <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval'];?>
, labelRenderer: $.jqplot.CanvasAxisLabelRenderer, renderer: $.jqplot.DateAxisRenderer, angle: 30, tickOptions: { formatString: '%T' } },
    },
  };

  var jqPlotShareinfoOptions = {
    title: 'Shares',
    highlighter: { show: false },
    grid: { drawBorder: false, background: '#fbfbfb', shadow: false },
    seriesColors: [ '#26a4ed', '#ee8310', '#e9e744' ],
    seriesDefaults: {
      renderer: $.jqplot.DonutRenderer,
      rendererOptions:{
        ringMargin: 10,
        sliceMargin: 10,
        startAngle: -90,
        showDataLabels: true,
        dataLabels: 'value',
        dataLabelThreshold: 0
      }
    },
    legend: { show: false }
  };

  // Initilize gauges and graph
  var plot1 = $.jqplot('hashrategraph', [[storedPersonalHashrate], [storedPoolHashrate], [[0, 0.0]]], jqPlotOverviewOptions);
  var plot2 = $.jqplot('shareinfograph', [
      [['your valid', <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid'];?>
], ['pool valid', <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid'];?>
]],
      [['your invalid', <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid'];?>
], ['pool invalid', <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'];?>
]]
    ], jqPlotShareinfoOptions);

  g1 = new JustGage({id: "nethashrate", value: parseFloat(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate'];?>
).toFixed(2), min: 0, max: Math.round(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate'];?>
 * 2), title: "Net Hashrate", gaugeColor: '#6f7a8a', valueFontColor: '#555', shadowOpacity : 0.8, shadowSize : 0, shadowVerticalOffset : 10, label: "<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['network'];?>
"});
  g2 = new JustGage({id: "poolhashrate", value: parseFloat(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'];?>
).toFixed(2), min: 0, max: Math.round(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'];?>
* 2), title: "Pool Hashrate", gaugeColor: '#6f7a8a', valueFontColor: '#555', shadowOpacity : 0.8, shadowSize : 0, shadowVerticalOffset : 10, label: "<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
"});
  g3 = new JustGage({id: "hashrate", value: parseFloat(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate'];?>
).toFixed(2), min: 0, max: Math.round(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate'];?>
 * 2), title: "Hashrate", gaugeColor: '#6f7a8a', valueFontColor: '#555', shadowOpacity : 0.8, shadowSize : 0, shadowVerticalOffset : 10, label: "<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['personal'];?>
"});
  if (<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['sharerate'];?>
 > 1) {
    initSharerate = <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['sharerate'];?>
 * 2
  } else {
    initSharerate = 1
  }
  g4 = new JustGage({id: "sharerate", value: parseFloat(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['sharerate'];?>
).toFixed(2), min: 0, max: Math.round(initSharerate), gaugeColor: '#6f7a8a', valueFontColor: '#555', shadowOpacity : 0.8, shadowSize : 0, shadowVerticalOffset : 10, title: "Sharerate", label: "shares/s"});
  g5 = new JustGage({id: "querytime", value: parseFloat(0).toFixed(0), min: 0, max: Math.round(5 * 100), gaugeColor: '#6f7a8a', valueFontColor: '#555', shadowOpacity : 0.8, shadowSize : 0, shadowVerticalOffset : 10, title: "Querytime", label: "ms"});

  // Helper to refresh graphs
  function refreshInformation(data) {
    g1.refresh(parseFloat(data.getdashboarddata.data.network.hashrate).toFixed(2));
    g2.refresh(parseFloat(data.getdashboarddata.data.pool.hashrate).toFixed(2));
    g3.refresh(parseFloat(data.getdashboarddata.data.personal.hashrate).toFixed(2));
    g4.refresh(parseFloat(data.getdashboarddata.data.personal.sharerate).toFixed(2));
    g5.refresh(parseFloat(data.getdashboarddata.runtime).toFixed(0));
    if (storedPersonalHashrate.length > 20) { storedPersonalHashrate.shift(); }
    if (storedPoolHashrate.length > 20) { storedPoolHashrate.shift(); }
    if (storedPersonalSharerate.length > 20) { storedPersonalSharerate.shift(); }
    timeNow = new Date().getTime();
    storedPersonalHashrate[storedPersonalHashrate.length] = [timeNow, data.getdashboarddata.data.raw.personal.hashrate];
    storedPersonalSharerate[storedPersonalSharerate.length] = [timeNow, parseFloat(data.getdashboarddata.data.personal.sharerate)];
    storedPoolHashrate[storedPoolHashrate.length] = [timeNow, data.getdashboarddata.data.raw.pool.hashrate];
    tempShareinfoData = [
        [['your valid', parseInt(data.getdashboarddata.data.personal.shares.valid)], ['pool valid', parseInt(data.getdashboarddata.data.pool.shares.valid)]],
        [['your invalid', parseInt(data.getdashboarddata.data.personal.shares.invalid)], ['pool invalid', parseInt(data.getdashboarddata.data.pool.shares.invalid)]]
    ];
    replotOverviewOptions = {
      data: [storedPersonalHashrate, storedPoolHashrate, storedPersonalSharerate],
      series: [ {show: plot1.series[0].show}, {show: plot1.series[1].show}, {show: plot1.series[2].show} ]
    };
    replotShareinfoOptions= {
      data: tempShareinfoData
    };
    if (typeof(plot1) != "undefined") plot1.replot(replotOverviewOptions);
    if (typeof(plot2) != "undefined") plot2.replot(replotShareinfoOptions);
  }

  // Refresh balance information
  function refreshBalanceData(data) {
    balance = data.getuserbalance.data
    $('#b-confirmed').html(number_format(balance.confirmed, 6));
    $('#b-unconfirmed').html(number_format(balance.unconfirmed, 6));
  }

  // Refresh other static numbers on the template
  function refreshStaticData(data) {
    $('#b-price').html((parseFloat(data.getdashboarddata.data.pool.price).toFixed(8)));
    $('#b-dworkers').html(data.getdashboarddata.data.pool.workers);
    $('#b-hashrate').html((parseFloat(data.getdashboarddata.data.personal.hashrate).toFixed(2)));
    $('#b-sharerate').html((parseFloat(data.getdashboarddata.data.personal.sharerate).toFixed(2)));
    $('#b-yvalid').html(number_format(data.getdashboarddata.data.personal.shares.valid));
    $('#b-yivalid').html(number_format(data.getdashboarddata.data.personal.shares.invalid) + " (" + number_format(data.getdashboarddata.data.personal.shares.invalid_percent, 2) + "%)" );
    $('#b-pvalid').html(number_format(data.getdashboarddata.data.pool.shares.valid));
    $('#b-pivalid').html(number_format(data.getdashboarddata.data.pool.shares.invalid) + " (" + number_format(data.getdashboarddata.data.pool.shares.invalid_percent, 2) + "%)" );
    $('#b-diff').html(number_format(data.getdashboarddata.data.network.difficulty, 8));
    $('#b-nextdiff').html(number_format(data.getdashboarddata.data.network.nextdifficulty, 8) + " (Change in " + data.getdashboarddata.data.network.blocksuntildiffchange + " Blocks)");
    var minutes = Math.floor(data.getdashboarddata.data.network.esttimeperblock / 60);
    var seconds = Math.floor(data.getdashboarddata.data.network.esttimeperblock - minutes * 60);
    $('#b-esttimeperblock').html(minutes + " minutes " + seconds + " seconds"); // <- this needs some nicer format
    $('#b-nblock').html(data.getdashboarddata.data.network.block);
    $('#b-target').html(number_format(data.getdashboarddata.data.pool.shares.estimated) + " (done: " + data.getdashboarddata.data.pool.shares.progress + "%)" );
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>
    $('#b-payout').html(number_format(data.getdashboarddata.data.personal.estimates.payout, 8));
    $('#b-block').html(number_format(data.getdashboarddata.data.personal.estimates.block, 8));
    $('#b-fee').html(number_format(data.getdashboarddata.data.personal.estimates.fee,8 ));
    $('#b-donation').html(number_format(data.getdashboarddata.data.personal.estimates.donation, 8));
<?php } else { ?>
    $('#b-ppsunpaid').html(number_format(data.getdashboarddata.data.personal.shares.unpaid));
    $('#b-ppsdiff').html(number_format(data.getdashboarddata.data.personal.sharedifficulty, 2));
    $('#b-est1').html(number_format(data.getdashboarddata.data.personal.estimates.hours1, 8));
    $('#b-est24hours').html(number_format(data.getdashboarddata.data.personal.estimates.hours24, 8));
    $('#b-est7days').html(number_format(data.getdashboarddata.data.personal.estimates.days7, 8));
    $('#b-est14days').html(number_format(data.getdashboarddata.data.personal.estimates.days14, 8));
    $('#b-est30days').html(number_format(data.getdashboarddata.data.personal.estimates.days30, 8));
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
    $('#b-pplns').html(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['pplns']['target'];?>
);
<?php }?>
  }

  // Refresh worker information
  function refreshWorkerData(data) {
    workers = data.getuserworkers.data;
    length = workers.length;
    $('#b-workers').html('');
    for (var i = j = 0; i < length; i++) {
      if (workers[i].hashrate > 0) {
        j++;
        $('#b-workers').append('<tr><td>' + workers[i].username + '</td><td align="right">' + workers[i].hashrate + '</td><td align="right">' + workers[i].difficulty + '</td></tr>');
      }
    }
    if (j == 0) { $('#b-workers').html('<tr><td colspan="3" align="center">No active workers</td></tr>'); }
  }

  // Our worker process to keep gauges and graph updated
  (function worker1() {
    $.ajax({
      url: url_dashboard,
      dataType: 'json',
      success: function(data) {
        refreshInformation(data);
        refreshStaticData(data);
      },
      complete: function() {
        setTimeout(worker1, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval']*1000))===null||$tmp==='' ? "10000" : $tmp);?>
)
      }
    });
  })();

  // Our worker process to keep worker information updated
  (function worker3() {
    $.ajax({
      url: url_balance,
      dataType: 'json',
      success: function(data) {
        refreshBalanceData(data);
      },
      complete: function() {
        setTimeout(worker3, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_long_refresh_interval']*1000))===null||$tmp==='' ? "10000" : $tmp);?>
)
      }
    });
  })();

  // Our worker process to keep gauges and graph updated
  (function worker2() {
    $.ajax({
      url: url_worker,
      dataType: 'json',
      success: function(data) {
        refreshWorkerData(data);
      },
      complete: function() {
        setTimeout(worker2, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_long_refresh_interval']*1000))===null||$tmp==='' ? "10000" : $tmp);?>
)
      }
    });
  })();
});

</script>
<?php }} ?>
