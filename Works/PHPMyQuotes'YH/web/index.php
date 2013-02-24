<?php //index.php
/*网站主页，包含以下内容
-最新名人名言
-或随机名人名言
-或随机受欢迎名人名言*/

//包含头文件
include('templates/header.html');

//包含数据库连接
include('../mysql_connect.php');

//定义查询
//根据URL传递过来的值更改查询方式
if (isset($_GET['random'])) {
$query = 'SELECT quote_id,quote, source,favorite FROM quotes ORDER BY RAND() DESC LIMIT 1';
	}elseif (isset($_GET['favorite'])) {
	$query = 'SELECT quote_id,quote,source,favorite FROM quotes WHERE favorite=1 ORDER BY RAND() DESC LIMIT 1';
	}else{
	$query ='SELECT quote_id,quote,source,favorite FROM quotes ORDER BY quote_id DESC LIMIT 1';
	}

	//运作查询
	if ($r = mysql_query($query,$dbc)) {

	//返回查询结果
	$row = mysql_fetch_array($r);

	//打印查询结果
	print "<div><blockquote>{$row['quote']}</blockquote>-{$row['source']}";

	//判断是否为受欢迎的
	if ($row['favorite'] ==1){
	print'<strong>Favorite!</strong>';
	}

	//完成div标签
	print '</div>';

	//如果管理员登陆，显示管理员连接
	if (is_administrator()) {
	print "<p><b>Quote Admin:</b><a href=\"edit_quote.php?id={$row['quote_id']}\">Edit</a> <->
	<a href=\"delete_quote.php?id={$row['quote_id']}\">Delete</a>
	</p>\n";
	}

	}else{//没有运作查询
	print '<p class="error">Could not retrieve the data because:<br/>'.mysql_error($dbc).'.</p><p>The query being run was:'.$query.'</p>';
	}//End of query IF

	mysql_close($dbc);//关闭连接

	print '<p><a href="index.php">Latst</a><-><a href="index.php?random=true">Random</a> <-> <a href="index.php?favorite=true"<Favorite</a></p>';

	include('templates/footer.html');//包含页脚文件
	?>
