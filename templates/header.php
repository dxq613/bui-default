<!DOCTYPE HTML>
<html>
 <head>
  <title> <?php if(isset($title) && $title) echo $title; ?></title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <?php include("../templates/css.php"); ?>
   <!-- 下面的样式，仅是为了显示代码，而不应该在项目中使用-->
   <link href="../assets/css/prettify.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
    code {
      padding: 0px 4px;
      color: #d14;
      background-color: #f7f7f9;
      border: 1px solid #e1e1e8;
    }
   </style>
 </head>
 <body>
