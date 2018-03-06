<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to TIANXING</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	  <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include(dbc.class.php)  ?>
</head>
<body>
  <div class="container"  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  	<div class="row clearfix">
  		<div class="col-md-12 column">
  			<nav class="navbar navbar-default" role="navigation">
  				<div class="navbar-header">
  					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">天星</a>
  				</div>

  				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  					<ul class="nav navbar-nav">
  						<li class="active">
  							 <a href="#">介绍（无效）</a>
  						</li>
  						<li>
  							 <a href="#">资金流向（无效）</a>
  						</li>
  						<li class="dropdown">
  							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown（无效）<strong class="caret"></strong></a>
  							<ul class="dropdown-menu">
  								<li>
  									 <a href="#">Action</a>
  								</li>
  								<li>
  									 <a href="#">Another action</a>
  								</li>
  								<li>
  									 <a href="#">Something else here</a>
  								</li>
  								<li class="divider">
  								</li>
  								<li>
  									 <a href="#">Separated link</a>
  								</li>
  								<li class="divider">
  								</li>
  								<li>
  									 <a href="#">One more separated link</a>
  								</li>
  							</ul>
  						</li>
  					</ul>
  					<form class="navbar-form navbar-left" role="search">
  						<div class="form-group">
  							<input type="text" class="form-control" />
  						</div>
              <button  class="btn btn-default" data-toggle="modal" data-target="#myModal">份额查询</button>

              <!-- 模态框（Modal） -->

  					</form>

  				</div>

  			</nav>
  			<div class="jumbotron">
  				<h2 class="text-center">
  					天星强债融合净值公布
  				</h2>
  				<h4 class="text-center">
            <?php
              $db = new DB();
              $sql = "SELECT * FROM `t_net_worth` ORDER BY `nw_id` DESC LIMIT 1 ";
              $result = $db->Query($sql);
              while($row = mysql_fetch_array($result))
                {
                echo "当前 ".$row['nw_datetime'] . " " . round($row['nw_value'],4);
                echo "<br />";
                }
              mysql_close($con);
              ?>
  				</h4>
          <table class="table table-striped text-center">
          	<caption class="text-center">净值表</caption>
             <thead class="text-center">
                <tr class="text-center">
                   <th>时间</th>
                   <th>净值</th>
                </tr>
             </thead>
             <tbody class="text-center">
                <?php
                $con = mysql_connect("sqld.duapp.com:4050","db840b49944b48008bee1e09b434cd71","53a60f5aa75348638f0b849b61bc0355");
                if (!$con)
                  {
                    die('Could not connect: ' . mysql_error());
                  }
                  // some code
                  mysql_select_db("ExLcEguuwvorptHphEmo", $con);
                  $result = mysql_query("SELECT * FROM `t_net_worth` ORDER BY `nw_id` DESC LIMIT 10 ");
                  while($row = mysql_fetch_array($result))
                    {
                    echo  "<tr>";
                    echo "<td>".$row['nw_datetime']."</td>";
                    echo "<td>".round($row['nw_value'],4)."</td>";
                    echo  "</tr>";
                    }
                  mysql_close($con);
                  ?>
             </tbody>
          </table>
  				<p class="text-center">
  					 <a class="btn btn-primary btn-large" class="btn btn-default" data-toggle="modal" data-target="#myModal"href="#">资金细节（无效）</a>
             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                       &times;
                     </button>
                     <h4 class="modal-title" id="myModalLabel">
                       模态框（Modal）标题
                     </h4>
                   </div>
                   <div class="modal-body">
                     在这里添加一些文本
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                     </button>
                     <button type="button" class="btn btn-primary">
                       提交更改
                     </button>
                   </div>
                 </div><!-- /.modal-content -->
               </div><!-- /.modal -->
             </div>
  				</p>
  			</div>
  		</div>
  	</div>
  	<div class="row clearfix">
  		<div class="col-md-4 column">
  			<h2>
  				申购
  			</h2>
  			<p>
  				申购规则与细节（敬请期待）
  			</p>
  			<p>
  				 <a class="btn" href="#">View details »</a>
  			</p>
  		</div>
  		<div class="col-md-4 column">
  			<h2>
  				赎回
  			</h2>
  			<p>
  				申购规则与细节（敬请期待）
  			</p>
  			<p>
  				 <a class="btn" href="#">View details »</a>
  			</p>
  		</div>
  		<div class="col-md-4 column">
  			<h2>
  				转让
  			</h2>
  			<p>
  				份额可在成员间相互转让（敬请期待）
  			</p>
  			<p>
  				 <a class="btn" href="#">View details »</a>
  			</p>
  		</div>
  	</div>
  </div>

</body>
</html>
