<?php /* Smarty version 2.6.22, created on 2013-04-03 07:21:51
         compiled from award.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<!--<?php echo '-->
<style>
.class1 {
	width: 200px;
}

.class2 {
	width: 150px;
}

.class3 {
	width: 150;
}

.class4 {
	width: 50px;
}

.class5 {
	width: 80px;
}

.class6 {
	width: 200px;
}

.classA {
	width: 100px;
}
#tab{
	font-size:13px;
}
#tab a{
	TEXT-DECORATION: none;COLOR: #000000;
}
</style>

<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>

<script>
function sendaward(url)
{
	if(window.confirm(\'你确定要发放奖品吗\'))
	{
		location.href=url;
	}
}
</script>
<!--'; ?>
-->
</head>
<body>
<div id="tab">
<form action="award.php?type=1" name='form' method="get">
<table>
	<tr>
		<td>手机号码：<input id="phone" style="width: 130px;" name="phone"> 
		</td>
		<td style="padding-left: 10px;">请选择时间: 
		<input id="begindate"onFocus="WdatePicker()" class="Wdate" type="text" name="begindate" readonly style="width: 130px;"> 
		<input id="enddate"onFocus="WdatePicker()" class="Wdate" type="text" name="enddate" readonly style="width: 130px;"> 
		<input type="submit" value="查询">
		<input type="hidden" name="type" value="1"> 
		</td>
	</tr>
</table>
</form>
<table border="1">
	<tr>
		<td class="class1" align="center">客户姓名</td>
		<td class="class1" align="center">手机</td>
		<td class="class1" align="center">发放奖品</td>
	</tr>
	<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['awardlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<td align="center" class="class1"><?php echo $this->_tpl_vars['awardlist'][$this->_sections['i']['index']]['name']; ?>
</td>
		<td align="center" class="class1"><?php echo $this->_tpl_vars['awardlist'][$this->_sections['i']['index']]['phone']; ?>
</td>
		<?php if ($this->_tpl_vars['awardlist'][$this->_sections['i']['index']]['isaward'] == 0): ?>
		<td align="center" class="class1" >
		<input type="button" value="发放" onclick="sendaward('<?php echo $this->_tpl_vars['link']; ?>
&id=<?php echo $this->_tpl_vars['awardlist'][$this->_sections['i']['index']]['id']; ?>
&isaward=0')">
		</td>
		<?php else: ?>
		<td align="center" class="class1" style="COLOR:red"><input type="button" value="发放" disabled="true"></td>
		<?php endif; ?>
	</tr>
	<!--<?php endfor; endif; ?>-->
</table>
<?php echo $this->_tpl_vars['page']; ?>

</div>
</body>
</html>