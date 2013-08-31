<?php /* Smarty version 2.6.22, created on 2013-08-20 21:20:20
         compiled from out3.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<table border="1px soild #000" style="width:4100px">
	<tr>
		<td style="width:100px">客户姓名</td>
		<td style="width:100px">客户性别</td>
		<td style="width:150px">手机</td>
		<td style="width:150px">邮箱</td>
		<td style="width:200px">意向车型</td>
		<td style="width:150px">期望购车时间</td>
		<td style="width:100px">常住省</td>
		<td style="width:100px">常住市</td>
		<td style="width:100px">驻场经销商</td>
		<td style="width:200px">是否愿意销售跟进</td>
		<td style="width:200px">是否愿意接收信息</td>
		<!--  <td style="width:200px">保存时间</td>-->
		<td style="width:200px">上传时间</td>
		<td style="width:100px">上传车助</td>
		<td style="width:100px">销售姓名</td>
		<td style="width:100px">问卷来源</td>
		<!--<td style="width:200px">客户来源</td>-->
	</tr>
	<!--<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['name']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['sex']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['phone']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['email']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['interest_car']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['plan_time']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['province']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['city']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['dealer']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['is_followup']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['is_receive']; ?>
</td>
		<!--<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['savetime']; ?>
</td>-->
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['created']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['code']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['sell']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['infotype']; ?>
</td>
		<!--<td><?php echo $this->_tpl_vars['list3'][$this->_sections['i']['index']]['qrcode']; ?>
</td>	-->
	</tr>
	<!--<?php endfor; endif; ?>-->
</table>
</body>
</html>