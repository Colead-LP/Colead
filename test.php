<?php
  if($_SERVER['REQUEST_METHOD']) {
	// フォームから"POST"で送信された情報に加える処理を記述
    $content = $_POST['namae'];
  }

  if(!empty($_POST)){
    $arrData = "hello";
  }else{
    $arrData = "no";
  }
?>