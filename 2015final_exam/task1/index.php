<?php
include "php/onload.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
</style>
<body>
    <h1>网址大全</h1>
<?php
    while($row = mysqli_fetch_array($result1)) {
        $id=$row['id'];
        $url_{$id}=new network($row['name'],$row['url']);
        $transfer=$url_{$id}->url;
    echo "<a  href='http://$transfer'>";
    echo "<form id='delete'  action='php/delete.php'  method='POST'>
         <input style='display:none;' type='text' value=\"$id\" name='id'/>
         <input style='display:inline-block;' type='submit' value='x' name='delete'/>
         </form>";
    echo "<span>";
    echo $url_{$id}->content();
    echo "</span></a>";

    /*
    echo "<script>
        function delete($url{$id}){
        </script>
        }";
        $result2 = mysqli_query($link, "DELETE FROM network WHERE id=$id;");
    echo "<script>
        }
        </script>";
        if($result2){
        echo "删除成功";
        }
        else{
        echo "删除失败";
        }
    */
 }
   ?>
    <a id="add">+添加
              <form style="text-align:center;"  action="php/add.php"  method="POST" class="add">
                    <span>名字</span><input type="text" name="name" /></br>
                    <span>网址</span><input type="text"  name="url" /></br></br>
                    &nbsp;<input type="submit"   value="提交" name="submit"/>
                    &nbsp;&nbsp;<input type="reset" value="重置" name="reset"/>
              </form>
    </a>
</body>
</html>
