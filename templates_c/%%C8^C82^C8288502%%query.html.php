<?php /* Smarty version 2.6.22, created on 2013-08-15 16:31:28
         compiled from query.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<!--<?php echo '-->
<style>
.class1
{
	width:300px;
}
.class2
{
	width:150px;
}
.class3
{
	width:150;
}
.class4
{
	width:50px;
}
.class5
{
	width:80px;
}
.class6
{
	width:400px;
}
.classA
{
	width:100px;
}
td
{
	vertical-align:bottom;
}
</style>

<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>

<script>
	function dateValid(a,b)
	{
	    var beginDate =  new Date(a.replace(/-/g,"/"));
	    var endDate = new Date(b.replace(/-/g,"/"));
	    if(beginDate > endDate)
	    {
	        return 0;
	    }
	    else if(beginDate < endDate)
	    {
	    	return 2;
	    }
	    else
	    {
			return 1;
	    }
	}
    function relocation1()
    {
    	var begindate=document.getElementById("begindate").value;
    	var enddate=document.getElementById("enddate").value;
    	if(begindate=="" || enddate=="" )
    	{
    		alert(\'请选择开始时间和结束时间\');
    	}
    	else
    	{
    		/*var beginhour=document.getElementById("beginhour").value;*/
    		/*var endhour=document.getElementById("endhour").value;*/
    		a=dateValid(begindate,enddate);
    		if(a==0)
    		{
    			alert(\'开始时间不能小于结束时间\');
    		}
    		else
    		{
    			/*if(a==1&&beginhour>endhour)*/
    			/*{*/
    			/*alert(\'开始时间不能小于结束时间\');*/
    			/*}*/
    			/*else*/
    			/*{*/
    			/*var begintime=begindate+" "+beginhour+":00:00";*/
    			/*var endtime=enddate+" "+endhour+":00:00";*/
    			/*location.href=\'query.php?begintime=\'+begintime+\'&endtime=\'+endtime+\'\';*/
    			/*}*/
    			var begintime=begindate;
    			var endtime=enddate;
    			location.href=\'query.php?begintime=\'+begintime+\'&endtime=\'+endtime+\'\';
    		}
    	}
    }
    function relocation2()
    {
    	var begindate2=document.getElementById("begindate2").value;
    	var enddate2=document.getElementById("enddate2").value;
    	if(begindate2=="" || enddate2=="" )
    	{
    		alert(\'请选择开始时间和结束时间\');
    	}
    	else
    	{
    		/*var beginhour2=document.getElementById("beginhour2").value;*/
    		/*var endhour2=document.getElementById("endhour2").value;*/
    		a=dateValid(begindate2,enddate2);
    		if(a==0)
    		{
    			alert(\'开始时间不能小于结束时间\');
    		}
    		else
    		{
    			/*if(a==1&&beginhour2>endhour2)*/
    			/*{*/
    			/*alert(\'开始时间不能小于结束时间\');*/
    			/*}*/
    			/*else*/
    			/*{*/
    			/*var begintime2=begindate2+" "+beginhour2+":00:00";*/
    			/*var endtime2=enddate2+" "+endhour2+":00:00";*/
    			/*location.href=\'query.php?begintime2=\'+begintime2+\'&endtime2=\'+endtime2+\'\';*/
    			/*}*/
    			var begintime2=begindate2;
    			var endtime2=enddate2;
    			location.href=\'query.php?begintime2=\'+begintime2+\'&endtime2=\'+endtime2+\'\';
    		}
    	}
    }
    function relocation3()
    {
    	var begindate3=document.getElementById("begindate3").value;
    	var enddate3=document.getElementById("enddate3").value;

    	if(begindate3=="" || enddate3=="" )
    	{
    		alert(\'请选择开始时间和结束时间\');
    	}
    	else
    	{
    		/*var beginhour3=document.getElementById("beginhour3").value;*/
    		/*var endhour3=document.getElementById("endhour3").value;*/
    		a=dateValid(begindate3,enddate3);
    		if(a==0)
    		{
    			alert(\'开始时间不能小于结束时间\');
    		}
    		else
    		{
	    		/*if(a==1&&beginhour3>endhour3)*/
	    		/*{*/
	    		/*alert(\'开始时间不能小于结束时间\');*/
	    		/*}*/
	    		/*else*/
	    		/*{*/
	    		/*var begintime3=begindate3+" "+beginhour3+":00:00";*/
	    		/*var endtime3=enddate3+" "+endhour3+":00:00";*/
	    		/*location.href=\'query.php?begintime3=\'+begintime3+\'&endtime3=\'+endtime3+\'\';*/
	    		/*}*/
    			var begintime3=begindate3;
    			var endtime3=enddate3;
    			location.href=\'query.php?begintime3=\'+begintime3+\'&endtime3=\'+endtime3+\'\';
    		}
    	}
    }
    function relocation4(is_repeat)
    {
    	var begindate4=document.getElementById("begindate4").value;
    	var enddate4=document.getElementById("enddate4").value;

    	if(begindate4=="" || enddate4=="" )
    	{
    		alert(\'请选择开始时间和结束时间\');
    	}
    	else
    	{
    		/*var beginhour4=document.getElementById("beginhour4").value;*/
    		/*var endhour4=document.getElementById("endhour4").value;*/
    		a=dateValid(begindate4,enddate4);
    		if(a==0)
    		{
    			alert(\'开始时间不能小于结束时间\');
    		}
    		else
    		{
	    		/*if(a==1&&beginhour4>endhour4)*/
	    		/*{*/
	    		/*alert(\'开始时间不能小于结束时间\');*/
	    		/*}*/
	    		/*else*/
	    		/*{*/
	    		/*var begintime4=begindate4+" "+beginhour4+":00:00";*/
	    		/*var endtime4=enddate4+" "+endhour4+":00:00";*/
	    		/*location.href=\'out3.php?begintime4=\'+begintime4+\'&endtime4=\'+endtime4+\'&is_repeat=\'+is_repeat+\'\';*/
	    		/*}*/
    			var begintime4=begindate4;
    			var endtime4=enddate4;
    			location.href=\'out3.php?begintime4=\'+begintime4+\'&endtime4=\'+endtime4+\'&is_repeat=\'+is_repeat+\'\';
    		}
    	}
    }
</script> 
<!--'; ?>
-->
</head>
<body style="font-size:12px;">
<div><b>统计报表</b></div>
<form action="#" name='form1' method="POST">
<table>
	<tr>
		<td>车助上传数据量报表</td>
		<td style="padding-left:10px;">请选择时间:
			<input id="begindate"   onFocus="WdatePicker()" class="Wdate" type="text" name="begindate" readonly style="width:130px;">
			<!-- <select name="下拉框" id="beginhour">
				<option value="0">0:00</option>
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
			</select>----->
			<input id="enddate"   onFocus="WdatePicker()" class="Wdate" type="text" name="enddate" readonly style="width:130px;">
			<!--<select name="下拉框" id="endhour">
				<option value="0">0:00</option>
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23" selected="selected">23:00</option>
			</select>-->
			<input type="button" value="搜索" onclick="relocation1()" >
		</td>
	</tr>
<tr>
	<td>By Model报表</td>
	<td style="padding-left:10px;"> 请选择时间:
		<input id="begindate2"   onFocus="WdatePicker()" class="Wdate" type="text" name="begindate2" readonly style="width:130px;">
		<!--<select name="下拉框" id="beginhour2">
				<option value="0">0:00</option>
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
			</select>---->
			<input id="enddate2"   onFocus="WdatePicker()" class="Wdate" type="text" name="enddate2" readonly style="width:130px;">
			<!--<select name="下拉框" id="endhour2">
				<option value="0">0:00</option>
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23" selected="selected">23:00</option>
			</select>-->
			<input type="button" value="搜索" onclick="relocation2()" >
		</td>
	</tr>
	<tr>
		<td>车助KPI报表</td>
		<td style="padding-left:10px;">请选择时间:
		<input id="begindate3"   onFocus="WdatePicker()" class="Wdate" type="text" name="begindate3" readonly style="width:130px;">
		<!--<select name="下拉框" id="beginhour3">
				<option value="0">0:00</option>
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
			</select>----->
			<input id="enddate3"   onFocus="WdatePicker()" class="Wdate" type="text" name="enddate3" readonly style="width:130px;">
			<!--<select name="下拉框" id="endhour3">
				<option value="0">0:00</option>
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23" selected="selected">23:00</option>
			</select>-->
			<input type="button" value="搜索" onclick="relocation3()" >
		</td>
	</tr>
	<tr>
		<td>车展问卷导出</td>
		<td style="padding-left:10px;">请选择时间:
			<input id="begindate4"   onFocus="WdatePicker()" class="Wdate" type="text" name="begindate" readonly style="width:130px;">
			<!--<select name="下拉框" id="beginhour4">
				<option value="0">0:00</option>
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
			</select>----->
			<input id="enddate4"   onFocus="WdatePicker()" class="Wdate" type="text" name="enddate" readonly style="width:130px;">
			<!--<select name="下拉框" id="endhour4">
				<option value="0">0:00</option>
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23" selected="selected">23:00</option>
			</select>-->
			<input type="button" value="导出" onclick="relocation4(0)" >
			<input type="button" value="重复问卷导出" onclick="relocation4(1)" >
		</td>
	</tr>
</table>
<!-- ---------------------第一个表------------------------------------- -->
<div id="tab" style="display:<?php echo $this->_tpl_vars['show']; ?>
;">
	<table border="1" style="width:<?php echo $this->_tpl_vars['width1']; ?>
">
		<tr>
			<td class="classA">&nbsp;</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['date'][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td  align="center" class="classA">Total</td>
		</tr>
		<!--<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['helper']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>-->
		<tr>
			<td align="center"><?php echo $this->_tpl_vars['helper'][$this->_sections['j']['index']]['code']; ?>
</td>
			<!--<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>-->
			<td  align="center"><?php echo $this->_tpl_vars['list'][$this->_sections['j']['index']][$this->_sections['k']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td  align="center">&nbsp;</td>
		</tr>
		<!--<?php endfor; endif; ?>-->
		<tr>
			<td align="center">Total</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"></td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td>
		</tr>
	</table>
	<input type="hidden" value="<?php echo $this->_tpl_vars['begintime']; ?>
" id="hbegin">
	<input type="hidden" value="<?php echo $this->_tpl_vars['endtime']; ?>
" id="hend">
	<input type="button" value="导出为Excel格式" id="out">
</div>
<!----------------------------------第二个表----------------------------------------------------->
<div id="tab1" style="display:<?php echo $this->_tpl_vars['show1']; ?>
;">
	<table border="1px soild #000" style="width:<?php echo $this->_tpl_vars['width']; ?>
">
		<tr align="center" style="background-color:#0099FF;">
		    <td colspan="3">Auto Show Sales Leads By Model (data.2012)</td>
		    <!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td colspan="3" class='class3'><?php echo $this->_tpl_vars['date'][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td colspan="3">Total</td>
		</tr>
		<tr align="center">
		    <td colspan="3" style="vertical-align:middle;">Brand&amp;Model</td>
		    <!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td class="class4">Sales leads</td><td class="class4">H/W Sales leads</td><td class="class4">Cold Sales Leads</td>
			<!--<?php endfor; endif; ?>-->
			<td class="class4">Sales leads</td><td class="class4">H/W Sales leads</td><td class="class4">Cold Sales Leads</td>
		</tr>
		<tr>
			<td class='class2' rowspan="15" align="center" style="vertical-align:middle;">
				Jeep
			</td>
			<td class='class2' rowspan="4" align="center" style="vertical-align:middle;">
				Cherokee
			</td>
			<td class="class1">
				2014大切诺基3.0L
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][0]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][0][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				2014大切诺基3.6L
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][1]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][1][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				2014大切诺基5.7L
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][2]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][2][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				2014大切诺基SRT8
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][3]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][3][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>		
		<tr>
			<td rowspan="3" align="center" style="vertical-align:middle;">
				Compass
			</td>
			<td>
				2014指南者2.0L
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][4]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][4][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				2014指南者2.4L
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][5]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][5][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				2014指南者2.4L蛇行珍藏版
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][6]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][6][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>		
		<tr>
			<td rowspan="5" align="center" style="vertical-align:middle;">
				Wrangler
			</td>
			<td>
				牧马人Sahara两门款
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][7]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][7][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				牧马人Sahara四门款
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][8]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][8][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				牧马人Rubicon两门款
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][9]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][9][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				牧马人Rubicon四门款
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][10]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][10][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				牧马人Rubicon十周年纪念款
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][11]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][11][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td align="center" style="vertical-align:middle;" rowspan="3">
				Patriot
			</td>
			<td>
				2014自由客2.0L
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][12]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][12][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				2014自由客2.4L
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][13]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][13][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td>
				2014自由客2.4L蛇行珍藏版
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][14]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][14][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td align="center" style="vertical-align:middle;">
				D-SUV
			</td>
			<td align="center" style="vertical-align:middle;">
				D-SUV
			</td>
			<td>
				2014自由光
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][15]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][15][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td align="center" style="vertical-align:middle;" rowspan="3">
				Chrysler
			</td>
			<td align="center">
				300C
			</td>
			<td>
				300C
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][16]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][16][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td align="center">
				300S
			</td>
			<td>
				300S
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][17]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][17][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td align="center">
				RT
			</td>
			<td>
				大捷龙
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][18]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][18][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td align="center" style="vertical-align:middle;">
				Dodge
			</td>
			<td align="center" style="vertical-align:middle;">
				JCUV
			</td>
			<td>
				酷威
			</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][19]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"><?php echo $this->_tpl_vars['list1'][19][$this->_sections['i']['index']]; ?>
</td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
		<tr>
			<td colspan="3" align="center">2013Total</td>
			<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list1'][0]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
			<td align="center"></td>
			<!--<?php endfor; endif; ?>-->
			<td align="center"></td><td align="center"></td><td align="center"></td>
		</tr>
	</table>
	<input type="hidden" value="<?php echo $this->_tpl_vars['begintime']; ?>
" id="hbegin1">
	<input type="hidden" value="<?php echo $this->_tpl_vars['endtime']; ?>
" id="hend1">
	<input type="button" value="导出为Excel格式" id="out1">
</div>
<!-- -----------------------第三个表---------------------------- -->
<div id="tab2" style="display:<?php echo $this->_tpl_vars['show2']; ?>
;">
	<table border="1" style="width:<?php echo $this->_tpl_vars['width2']; ?>
">
	<tr align="center" style="background-color:#FFFF00;">
	    <td colspan="3">车助KPI</td>
	    <!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
		<td colspan="3"><?php echo $this->_tpl_vars['date'][$this->_sections['i']['index']]; ?>
</td>
		<!--<?php endfor; endif; ?>-->
		<td colspan="3">Total</td>
	</tr>
	<tr align="center" style="background-color:#0066FF;">
	    <td class="class5">Assistant<br>code</td><td class="class5">Assistant<br>name</td><td class="class6">Respond<br>Model</td>
	    <!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['date']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
		<td class="class5">Sales<br>Leads</td><td class="class5">H/W<br>Sales Leads</td><td class="class5">Conversion<br>Rate</td>
		<!--<?php endfor; endif; ?>-->
		<td class="class5">Sales<br>Leads</td><td class="class5">H/W<br>Sales Leads</td><td class="class5">Conversion<br>Rate</td>
	</tr>
	<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['helper']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>-->
	<tr>
		<td align="center"><?php echo $this->_tpl_vars['helper'][$this->_sections['i']['index']]['code']; ?>
</td>
		<td  align="center"><?php echo $this->_tpl_vars['helper'][$this->_sections['i']['index']]['name']; ?>
</td>
		<td  align="center"><?php echo $this->_tpl_vars['helper'][$this->_sections['i']['index']]['duty']; ?>
</td>
		<!--<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['list2'][$this->_sections['i']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>-->
		<td align="center"><?php echo $this->_tpl_vars['list2'][$this->_sections['i']['index']][$this->_sections['j']['index']]; ?>
</td>
		<!--<?php endfor; endif; ?>-->
		<td align="center"></td>
		<td  align="center"></td>
		<td  align="center"></td>
	</tr>
	<!--<?php endfor; endif; ?>-->
	</table>
	<input type="hidden" value="<?php echo $this->_tpl_vars['begintime']; ?>
" id="hbegin2">
	<input type="hidden" value="<?php echo $this->_tpl_vars['endtime']; ?>
" id="hend2">
	<input type="button" value="导出为Excel格式" id="out2">
</div>
</form>
<script type="text/javascript" src="../jquery-1.4.2.min.js"></script>
<?php echo '
<script><!--
$(document).ready(function(){
	//第一张表的计算
	var tr=$("#tab").find("tr");
	tr.each(function(i){
		if(i!=0&&i!=(tr.length-1))
		{
			var td=$(this).children("td");
			var sum=0;
			td.each(function(j){
				if(j!=0 &&j!=(td.length-1))
				{
					sum+=parseInt($(this).html(),10); 
				}
				else if(j==(td.length-1))
				{
					$(this).html(sum);
				}
			});
		}
	});
	
	var sum=0;
	var trlength=$("#tab").find("tr:first").children("td").length;
	for(var z=1;z<=trlength-1;z++)
	{
		tr.each(function(i){
			if(i!=0&&i!=(tr.length-1))
			{
				var s=$(this).children("td").eq(z).html();
				sum+=parseInt(s,10);
			}
			else if(i==(tr.length-1))
			{
				$(this).children("td").eq(z).html(sum);
				sum=0;
			}
		});
	}
	
	
	
	//第二张表的计算
	var sum1=0;
	var sum2=0;
	var sum3=0;
	var sum4=0;
	var sum5=0;
	var sum6=0;
	var sum7=0;
	trlength=$("#tab1").find("tr").eq(2).children("td").length;
	tr=$("#tab1").find("tr");
	for(var z=1;z<=trlength-6;z++)
	{
		tr.each(function(i){
			if(i==2)
			{
				sum1+=parseInt($(this).children("td").eq(z+2).html(),10);
			}
			else if(i==3||i==4||i==5)
			{
				sum1+=parseInt($(this).children("td").eq(z).html(),10);
			}
			if(i==6)
			{
				sum2+=parseInt($(this).children("td").eq(z+1).html(),10);
			}
			else if(i==7||i==8)
			{
				sum2+=parseInt($(this).children("td").eq(z).html(),10);
			}
			if(i==9)
			{
				sum3+=parseInt($(this).children("td").eq(z+1).html(),10);
			}
			else if(i==10||i==11||i==12||i==13)
			{
				sum3+=parseInt($(this).children("td").eq(z).html(),10);
			}
			if(i==14)
			{
				sum4+=parseInt($(this).children("td").eq(z+1).html(),10);
			}
			else if(i==15||i==16)
			{
				sum4+=parseInt($(this).children("td").eq(z).html(),10);
			}
			if(i==17)
			{
				sum5+=parseInt($(this).children("td").eq(z+2).html(),10);
			}
			if(i==18)
			{
				sum6+=parseInt($(this).children("td").eq(z+2).html(),10);
			}
			else if(i==19||i==20)
			{
				sum6+=parseInt($(this).children("td").eq(z+1).html(),10);
			}
			if(i==21)
			{
				sum7+=parseInt($(this).children("td").eq(z+2).html(),10);
			}
			if(i==22)
			{
				$(this).children("td").eq(z).html(sum1+sum2+sum3+sum4+sum5+sum6+sum7);
				/*$("#tab1").find("tr").eq(8).children("td").eq(2).html("111");*/
			}
		});
		sum1=0;
		sum2=0;
		sum3=0;
		sum4=0;
		sum5=0;
		sum6=0;
		sum7=0;
	}
	
	
	tr.each(function(i){
		if(i!=0&&i!=1)
		{
			tdlength=$(this).children("td").length;
			sales=0;
			hw=0;
			cold=0;
			if(i==2||i==17||i==18||i==21)
			{
				for(var j=3;j<tdlength-3;j++)
				{
					if((j-3)%3==0)
					{
						sales+=parseInt($(this).children().eq(j).html(),10);
					}
					else if((j-4)%3==0)
					{
						hw+=parseInt($(this).children().eq(j).html(),10);
					}
					else if((j-5)%3==0)
					{
						cold+=parseInt($(this).children().eq(j).html(),10);
					}
				}
			}
			else if(i==6||i==9||i==14||i==19||i==20)
			{
				for(var j=2;j<tdlength-3;j++)
				{
					if((j-2)%3==0)
					{
						sales+=parseInt($(this).children().eq(j).html(),10);
					}
					else if((j-3)%3==0)
					{
						hw+=parseInt($(this).children().eq(j).html(),10);
					}
					else if((j-4)%3==0)
					{
						cold+=parseInt($(this).children().eq(j).html(),10);
					}
				}
			}
			else
			{
				for(var j=1;j<tdlength-3;j++)
				{
					if((j-1)%3==0)
					{
						sales+=parseInt($(this).children().eq(j).html(),10);
					}
					else if((j-2)%3==0)
					{
						hw+=parseInt($(this).children().eq(j).html(),10);
					}
					else if((j-3)%3==0)
					{
						cold+=parseInt($(this).children().eq(j).html(),10);
					}
				}
			}
			$(this).children("td").eq(tdlength-3).html(sales);
			$(this).children("td").eq(tdlength-2).html(hw);
			$(this).children("td").eq(tdlength-1).html(cold);
		}
	});
	
	
	//第三张表计算
	tr=$("#tab2").find("tr");
	tdlength=$("#tab2").find("tr:last").children("td").length;
	tr.each(function(i){
		if(i!=0&&i!=1)
		{
			sales=0;
			hw=0;
			for(var j=3;j<tdlength-3;j++)
			{
				if((j-3)%3==0)
				{
					sales+=parseInt($(this).children().eq(j).html(),10);
				}
				else if((j-4)%3==0)
				{
					hw+=parseInt($(this).children().eq(j).html(),10);
				}
			}
			$(this).children("td").eq(tdlength-3).html(sales);
			$(this).children("td").eq(tdlength-2).html(hw);
			if(sales==0)
			{
				$(this).children("td").eq(tdlength-1).html(0+\'%\');
			}
			else
			{
				$(this).children("td").eq(tdlength-1).html(Math.round(hw/sales*100)+\'%\');
			}
		}
	});
	$("#out").click(function(){
		location.href=\'out.php?begintime=\'+$("#hbegin").val()+\'&endtime=\'+$("#hend").val()+\'\';
	});
	$("#out1").click(function(){
		location.href=\'out1.php?begintime1=\'+$("#hbegin1").val()+\'&endtime1=\'+$("#hend1").val()+\'\';

		//location.href=\'out1.php?out1=\'+$("#tab1").html()+\'\';
			//+$("#tab1").html();
		//alert($("#tab1").html());
		/*$.post("out1.php",{out1:$("#tab1").html()},
				function(result){
				alert(result);
			  	});*/
	});
	$("#out2").click(function(){
		location.href=\'out2.php?begintime2=\'+$("#hbegin2").val()+\'&endtime2=\'+$("#hend2").val()+\'\';
	});

	$("#begindate").val(getNowFormatDate());
	$("#begindate2").val(getNowFormatDate());
	$("#begindate3").val(getNowFormatDate());
	$("#begindate4").val(getNowFormatDate());	
	$("#enddate").val(getNowFormatDate());
	$("#enddate2").val(getNowFormatDate());
	$("#enddate3").val(getNowFormatDate());
	$("#enddate4").val(getNowFormatDate());
	
	
});

function getNowFormatDate() 
{ 
var day = new Date(); 
var Year = 0; 
var Month = 0; 
var Day = 0; 
var CurrentDate = ""; 
//初始化时间 
//Year= day.getYear();//有火狐下2008年显示108的bug 
Year= day.getFullYear();//ie火狐下都可以 
Month= day.getMonth()+1; 
Day = day.getDate(); 
//Hour = day.getHours(); 
// Minute = day.getMinutes(); 
// Second = day.getSeconds(); 
CurrentDate += Year + "-"; 
if (Month >= 10 ) 
{ 
CurrentDate += Month + "-"; 
} 
else 
{ 
CurrentDate += "0" + Month + "-"; 
} 
if (Day >= 10 ) 
{ 
CurrentDate += Day ; 
} 
else 
{ 
CurrentDate += "0" + Day ; 
} 
return CurrentDate; 
} 
</script>
'; ?>

</body>
</html>