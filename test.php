<?php
function print_naeyong(){
if (isset($_GET['id'])){


echo file_get_contents("data/".$_GET['id']);
}

}
function print_title(){
if (isset($_GET['id'])){
  echo $_GET['id'];
}

}
 ?>






 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
  p {
    font-size: 16px;
    text-align: center;
  }
  h2{
    font-size: 26px;
    text-align: center;
  }
  ul{
    text-align: center;
  }
  h1{
    font-size: 40px;
    text-align: center;
  }
  h3,h4{
    text-align: center;
  }
  .depth {
  display: block;
  border: 1px solid rgba(255,255,255,0.6);
  background: linear-gradient(#eee, #fff);
  transition: all 0.3s ease-out;
  box-shadow:
      inset 0 1px 4px rgba(0,0,0,0.4);
  padding: 30px;



text-align: center;
font-size:44px;
  margin: 0 auto;
}

  </style>

  <title>
    <?php
    print_title();
?>
   </title>
</head>

<body>
<h1><a href="test.php">조용조용한 게시판</a></h1>

<h3><a href="create.php">새글 작성</a><br>

<?php
if (isset($_GET['id'])){ ?>
  <a href="update.php?id=<?= $_GET['id']; ?>"> 수정</a><br>
  <a href="delete_process.php?id=<?= $_GET['id']; ?>">삭제</a>
<?php } ?>
</h3>
<br>
<h2>


  <?php
  print_title();
  ?>
</h2>
<p>
  <?php
  print_naeyong();
   ?>
</p>

<br><br><br><br><br>
<h3>글 목록</h3>
<h4>
  <?php
  $list = scandir('./data');
  $i = 2;
  while($i<count($list)){
    echo "<li><a href=\"test.php?id=$list[$i]\">$list[$i]</a></li>\n";
    $i +=1;
  }
  ?>

</h4>

</body>
</html>
