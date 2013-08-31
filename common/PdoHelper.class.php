<?php
class PdoHelper
{
	private static $db;
	function __construct()
	{
		try
		{
			require(ROOT.'/configs/config.php');
			self::$db=new PDO("mysql:host=$server;dbname=$database","$username","$userpass");
			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$db->query("set names $encode");
		}
		catch (PDOException $ex)
		{
			die("连接数据库失败：".$ex->getMessage());
		}
	}
	
	public static function start()
	{
		if(self::$db == null)
		{
			return new PdoHelper();
		}
		else
		{
			return self::$db;
		}
	}
	
	//查询
	function query($sql)
	{
		$result=self::$db->query($sql);
		return $result->fetchAll(PDO::FETCH_NAMED);
	}
	
	//查询：带参
	function queryPara($sql,$obj)
	{
		$pst=self::$db->prepare($sql);
		$pst->execute($obj);
		$arr=$pst->fetchAll(PDO::FETCH_NAMED);
		return $arr;
	}
	
	function insert($sql)
	{
		$c=self::$db->exec($sql);
		return self::$db->lastInsertId();
	}
	
	//增删改
	function execute($sql)
	{
		//得到受影响的行数
		$c=self::$db->exec($sql);
		return $c;
	}
	
	//增删改：带参
	function executePara($sql,$obj)
	{
		$pst=self::$db->prepare($sql);
		$num=$pst->execute($obj);
		return $num;
	}
	
	//析构函数
	function __destruct()
	{
		self::$db=null;
	}
}


?>