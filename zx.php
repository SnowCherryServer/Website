
<?php
// 原作者为MCNewsTools，由GamerNoTitle二次修改，由守护星空腐竹烧饼修改对接官网，模板套用的HTML5UP的HTML模板，请在使用该程序的时候不要删除版权信息，Thanks♪(･ω･)ﾉ！
$host = "n17.yxsjmc.cn"; //设置服务器域名或 IP
$port = "20310"; //设置服务器端口，可以直接用服务器的链接端口，也可以使用query端口（UDP协议）
$name = '守护星空'; // 服务器名字，会显示在标签页的标题和网站打头的大标题处
$iconlink = 'http://mc.xmbxkj.cn/images/logo.jpg'; // 网站图标链接，可以使图片格式（.png/.jpg/etc.）或者是ico图标，用绝对路径或相对路径均可
$description = '守护星空'; // 描述，会显示在大标题的下方，用html语法写就可以了，换行请用<br>
$imagelink = 'http://mc.xmbxkj.cn/images/logo.jpg'; // 图片链接，会显示在服务器信息右边的圈圈里
/*
$host = $_GET["host"];
$port = $_GET["port"];
以下html的内容请自己酌情更改，请不要删除版权信息
*/

require_once __DIR__.'/data.php';
?>
<html>
	<head>
		<title><?php echo $name; ?></title>
		<link rel="shortcut icon" href=<?php echo $iconlink; ?>>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets1/css/main.css" />
		<noscript><link rel="stylesheet" href="assets1/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="assets1/css/bootstrap.min.css" >
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
			

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Minecraft服务器状态</h2>
										</header>
										<hr>
										<p>状态：<font color="#2a6c0f"><?php echo $status; ?></font></p>
										<p>IP 或域名：<font color="#2a6c0f"><?php echo $host; ?></font>
											<br>主机 IP：<font color="#2a6c0f"><?php echo $hostip; ?></font>
											<br>端口：<font color="#2a6c0f"><?php echo $port; ?></font></p>
										<p>平台：<font color="#2a6c0f"><?php echo $platform; ?></font>
											<br>游戏类型：<font color="#2a6c0f"><?php echo $gametype; ?></font></p>
										<p>兼容游戏版本：<font color="#2a6c0f"><?php echo $version; ?></font>
											<br>服务器使用的软件或核心：<font color="#2a6c0f"><?php echo $software; ?></font></p>
										<p>可容纳最大玩家数：<font color="#2a6c0f"><?php echo $players_max; ?></font>
											<br>在线玩家数：<font color="#2a6c0f"><?php echo $players_online; ?></font></p>
										<p>使用的查询方式：<font color="#2a6c0f"><?php echo $agreement; ?></font>
											<br>查询用时：<font color="#2a6c0f"><?php echo $processed; ?></font></p>
										<!-- <hr> -->
										<h3>目前在线玩家 <font color="#2a6c0f"><?php echo $players_online; ?></font>/<font color="#2a6c0f"><?php echo $players_max; ?></font></h3>
										<?php if (is_array($Players)) : ?>
										<?php foreach($Players as $Player) : ?>
											<?php if ($platform == "MINECRAFT") : ?>
												<?php echo '<img src="https://cravatar.eu/helmhead/'.htmlspecialchars($Player).'/15.png"> '.htmlspecialchars($Player); ?><br>
											<?php else: ?>
												<?php echo '<img src="https://cravatar.eu/helmhead/steve/15.png"> '.htmlspecialchars($Player); ?><br>
											<?php endif; ?>
										<?php endforeach; ?>
										<?php else: ?>
											无玩家在线。
										<?php endif; ?>										<hr>
										<ul class="actions">
										    <!-- 修改下方链接为自己的官网对应链接 -->
										<li><a href="http://mc.xmbxkj.cn/#services" class="button">主页</a></li>
										<li><a href="http://mc.xmbxkj.cn/gonggao.html" class="button">公告</a></li>
										<li><a href="http://mc.xmbxkj.cn/gl.html" class="button">管理组</a></li>
										</ul>
									</div>
									<span class="image"><img src=<?php echo $imagelink; ?> alt="" /></span>
								</div>
							</section>
			</div>

		<!-- Scripts -->
			<script src="assets1/js/jquery.min.js"></script>
			<script src="assets1/js/jquery.scrollex.min.js"></script>
			<script src="assets1/js/jquery.scrolly.min.js"></script>
			<script src="assets1/js/browser.min.js"></script>
			<script src="assets1/js/breakpoints.min.js"></script>
			<script src="assets1/js/util.js"></script>
			<script src="assets1/js/main.js"></script>
	</body>
</html>
