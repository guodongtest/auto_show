<?php /* Smarty version 2.6.22, created on 2013-04-03 16:38:40
         compiled from car_manage.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>车助管理</title>
</head>
<body style="font-size:12px;">
<form action="#" name='form1' method="POST">
<div><b>车助管理</b></div>
<br>
<div>车助编号:<input type="text" name="text1" id="text1" > 车助姓名:<input type="text" name="text2" id="text2"><input type="submit" value="添加" name="submit" id="submit"></div>

<table border="1" id="tb1" style="width:700px">
<tr><th>ID</th><th>车助编号</th><th>姓名</th><th colspan="3" align="center">操作</th></tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
<?php if ($this->_tpl_vars['id'] == $this->_tpl_vars['arr'][$this->_sections['i']['index']]['id']): ?>
<tr><td align="center" id="id"><?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['id']; ?>
</td>
<td align="center"><input type="text" id="t1" value="<?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['code']; ?>
" id="1"></td>
<td align="center"><input type="text" id="t2" value="<?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['name']; ?>
" id="2"></td>
<td align="center"><a href="car_manage.php?id1=<?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['id']; ?>
" ">编辑</a></td>
<td align="center"><a id="que" href="#" class='update'>更新</a></td>
<td align="center"><a href="#" onclick="javascript:if(confirm('确认要删除?')) location.href='car_manage.php?id=<?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['id']; ?>
'">删除</a></td></tr>
<?php else: ?>
<tr><td align="center"><?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['id']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['code']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['name']; ?>
</td>
<td align="center"><a href="car_manage.php?id1=<?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['id']; ?>
" onclick="update()">编辑</a></td>
<td align="center"><a href="#" onclick="javascript:if(confirm('确认要删除?')) location.href='car_manage.php?id=<?php echo $this->_tpl_vars['arr'][$this->_sections['i']['index']]['id']; ?>
'">删除</a></td></tr>
<?php endif; ?>
<?php endfor; endif; ?>
</table>
<input type="button" value="导出为Excel格式" name="but" onclick="location.href='outexcel.php'">
</form>
</body>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<?php echo '
<script>
$(function(){
	$(".update").click(function(){
		var id=$(this).parent("td").siblings("td:first").html();
		var code=$(this).parent("td").siblings("td").eq(1).children("input:first").val();
		var name=$(this).parent("td").siblings("td").eq(2).children("input:first").val();
		location.href="car_manage.php?id2="+id+"&code="+code+"&name="+name+"";
	});
});
</script>
'; ?>

</html>