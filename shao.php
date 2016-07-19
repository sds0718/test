<?php
header("Content-type:text/html;charset=utf-8");
if($_POST){
  if($_POST['username']==""){
    echo"用户名不能为空";
    exit;
  }
  if($_POST['password']==""){
    echo"密码不能为空";
    exit;
  }

}


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
</head>
<body>
 <form action="#" method="post">
 用户名<input type="text" name="username"/><br/>
 密码  <input type="text" name="password"/><br/>
       <input type="submit" value="提交">
 </form>
 老板好厉害  
</body>
</html>