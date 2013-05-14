<?php session_start(); include("conn/conn.php");
if($_SESSION[admin_user]==true){
if($Submit==true){

   $query=mysql_query("insert into tb_plan(pinpai,from,to,way,bilei_1,bilei_2,bilei_3,chenyusan,changzi_1,changzi_2,changzi_3,yhway,ysnumber,ystime_1,ystime_2,yscb_1,yscb_2,yscb_3,car_numbertoo)values('$pinpai','$from','$to','$way','$bilei_1','$bilei_2','$bilei_3','$chenyusan','$changzi_1','$changzi_2','$changzi_3','$yhway','$ysnumber','$ystime_1','$ystime_2','$yscb_1','$yscb_2','$yscb_3','$car_numbertoo')");
   if($query==true){
	   echo "<script>alert('整车计划决策信息添加成功!');window.location.href='indexs.php?lmbs=整车计划决策';</script>";      
	         }else{
                echo "<script>alert('整车计划决策信息添加失败!!');window.location.href='indexs.php?lmbs=整车计划决策';</script>";
                  }
} 


if($Submit2=="修改"){

   $query="update tb_plan set pinpai='$pinpai',from='$from',to='$to',way='$way',bilei_1='$bilei_1',bilei_2='$bilei_2',bilei_3='$bilei_3',chenyusan='$chenyusan',changzi_1='$changzi_1',changzi_2='$changzi_2',changzi_3='$changzi_3',yhway='$yhway',ysnumber='$ysnumber',ystime_1='$ystime_1',ystime_2='$ystime_2',yscb_1='$yscb_1',yscb_2='$yscb_2',yscb_3='$yscb_3',car_numbertoo='$car_numbertoo' where car_numbertoo='$car_numbertoo'";
   $result=mysql_query($query);
   if($result==true){
 	   echo "<script>alert('整车计划决策更新成功!!');window.location.href='indexs.php?lmbs=整车计划决策';</script>";
 }else{
                echo "<script>alert('整车计划决策更新失败!!');window.location.href='indexs.php?lmbs=整车计划决策';</script>";
       }
}

if($Submit4=="删除"){
   $query="delete  from tb_plan where car_numbertoo='$car_numbertoo'";
   $result=mysql_query($query);
   if($result==true){
 	   echo "<script>alert('整车计划决策删除成功!');window.location.href='indexs.php?lmbs=整车计划决策';</script>";
   }else{
   			echo "<script>alert('整车计划决策删除失败!!');window.location.href='indexs.php?lmbs=整车计划决策';</script>";
		}

}

?>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>