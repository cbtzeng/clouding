<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	//��Ʈw�]�w
	//��Ʈw��m
	$db_server = "140.119.164.193";
	//��Ʈw�W��
	$db_name = "Foodbook";
	//��Ʈw�޲z�̱b��
	$db_user = "root";
	//��Ʈw�޲z�̱K�X
	$db_passwd = "root";

	//���Ʈw�s�u
	if(!@mysql_connect($db_server, $db_user, $db_passwd))
	        die("�L�k���Ʈw�s�u");

	//��Ʈw�s�u��UTF8
	mysql_query("SET NAMES utf8");

	//��ܸ�Ʈw
	if(!@mysql_select_db($db_name))
	        die("�L�k�ϥθ�Ʈw");
?>  