<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to BAE</title>
</head>
<body>
  <?php
  require_once 'GoogleAuthenticator.php';

  $ga = new PHPGangsta_GoogleAuthenticator();

  //创建一个新的"安全密匙SecretKey"
  //把本次的"安全密匙SecretKey" 入库,和账户关系绑定,客户端也是绑定这同一个"安全密匙SecretKey"
  $secret = $ga->createSecret();
  echo "安全密匙SecretKey: ".$secret."\n\n";


  $qrCodeUrl = $ga->getQRCodeGoogleUrl('www.tianxingziben.vip', $secret); //第一个参数是"标识",第二个参数为"安全密匙SecretKey" 生成二维码信息
  echo "Google Charts URL for the QR-Code: ".$qrCodeUrl."\n\n"; //Google Charts接口 生成的二维码图片,方便手机端扫描绑定安全密匙SecretKey


  $oneCode = $ga->getCode($secret); //服务端计算"一次性验证码"
  echo "服务端计算的验证码是:".$oneCode."\n\n";


  //把提交的验证码和服务端上生成的验证码做对比
  // $secret 服务端的 "安全密匙SecretKey"
  // $oneCode 手机上看到的 "一次性验证码"
  // 最后一个参数 为容差时间,这里是2 那么就是 2* 30 sec 一分钟.
  // 这里改成自己的业务逻辑
  $checkResult = $ga->verifyCode($secret, $oneCode, 2);
  if ($checkResult) {
      echo '匹配! OK';
  } else {
      echo '不匹配! FAILED';
  }
?>
</body>
