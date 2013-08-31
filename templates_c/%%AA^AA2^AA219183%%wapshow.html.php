<?php /* Smarty version 2.6.22, created on 2013-03-28 14:53:54
         compiled from wapshow.html */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--STATUS OK-->
<head>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/>
<meta http-equiv="Cache-control" content="no-cache" />

<title></title>
</head>
<body>
<div>
  <form action="qrcode.php" method="post">
    <div>
      <input type="text" name="phone" maxlength="11" size="20" value="<?php echo $this->_tpl_vars['phone']; ?>
"/>
      <input name="qrcode" type="hidden" value="<?php echo $this->_tpl_vars['qrcode']; ?>
"/>
      <input type="submit" value="提交" />
    </div>
  </form>
  <br/>
</div>
</body>
</html>