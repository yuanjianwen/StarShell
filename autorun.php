<?php
 ini_set("error_log", "c:\php\php_error.log");
 error_log("a.php is execute----------",0);
 ignore_user_abort(); // 后台无阻断运行
 set_time_limit(0); // 一直给我运行
 $auto_execute_time = 30; // 运行时间seconds，这里设置成一分钟跑一次。
 do {
  // 这里想执行什么都可以写了

  sleep($auto_execute_time); // 按指定轨道时间运行
 } while (true);
?>
