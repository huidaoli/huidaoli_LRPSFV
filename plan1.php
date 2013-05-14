<?php session_start(); 
if($_SESSION[admin_user]==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>整车物流资源计划系统</title>
</head>
<script language="javascript" src="js/car_js.js"></script>
<body>

<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  <form name="form4" method="post" action="indexs.php?lmbs=整车计划决策">
  <tr>   
    <td width="360" height="30" align="right" bgcolor="#FFFFFF">商品车品牌
	
      <select name="select1">
	  <option selected="selected">请选择商品车品牌</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[pinpai]; ?></option>
	  <?php } ?>
      </select>      </td>
	  
	  <td width="360" height="30" align="right" bgcolor="#FFFFFF">运输方式
	
      <select name="select2">
	  <option selected="selected">请选择水路运输</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[way]; ?></option>
	  <?php } ?>
      </select>      </td>
	  <td width="360" bgcolor="#FFFFFF">&nbsp; </td>
	  </tr>
	  <tr>
	  <td width="360" height="30" align="right" bgcolor="#FFFFFF">优化方式
	
      <select name="select3">
	  <option selected="selected">请选择优化方式</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[yhway]; ?></option>
	  <?php } ?>
      </select>      </td>
	  
	  <td width="360" height="30" align="right" bgcolor="#FFFFFF">运输量
	
      <select name="select4">
	  <option selected="selected">请选择数量上限</option>
        <?php 
	  $query="select * from tb_plan";
	  $result=mysql_query($query);
	  while($myrow=mysql_fetch_array($result)){
	  ?>
	   <option><?php echo $myrow[ysnumber]; ?></option>
	  <?php } ?>
      </select>      </td>
	  
    <td width="360" bgcolor="#FFFFFF">&nbsp; <input type="submit" name="Submit3" value="提交"> </td>    
  </tr>
 </form>
</table>
<?php 
	  $querys="select * from tb_plan where pinpai='$select1' or way='$select2' or yhway='$select3' or ysnumber='$select4'";
	  $results=mysql_query($querys);
	 $myrows=mysql_fetch_array($results);
	  ?>
<form name="form3" method="post" action="plan_insert_ok.php" onSubmit="javascript:return check_plan(form3);">  
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">商品车品牌：</td>
    <td width="235" bgcolor="#FFFFFF"><input name="pinpai" type="text" id="pinpai" size="20" value="<?php echo $myrows[pinpai];?>" /></td>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">决策编号：</td>
    <td width="235" bgcolor="#FFFFFF"><input name="panhao" type="text" id="panhao" size="20" value="<?php echo $myrows[panhao];?>" /></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">发运地：</td>
    <td width="235" bgcolor="#FFFFFF"><input name="from" type="text" id="from" size="20" value="<?php echo $myrows[from];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">目的地：</td>
    <td width="255" bgcolor="#FFFFFF"><input name="to" type="text" id="to" size="20" value="<?php echo $myrows[to];?>" /></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">运输方式：</td>
    <td width="235" bgcolor="#FFFFFF"><input name="way" type="text" id="way" size="20" value="<?php echo $myrows[way];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">运输比例：</td>
    <td width="255" bgcolor="#FFFFFF">水路：
      <input name="bilei_1" type="text" id="bilei_1" size="15" value="<?php echo $myrows[bilei_1];?>" /><font color="#FF0000">(%)</font>
      <br/>
      公路：
      <input name="bilei_2" type="text" id="bilei_2" size="15" value="<?php echo $myrows[bilei_2];?>" /><font color="#FF0000">(%)</font>
      <br/>
      铁路：
      <input name="bilei_3" type="text" id="bilei_3" size="15" value="<?php echo $myrows[bilei_3];?>" /><font color="#FF0000">(%)</font></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF"> 承运商：</td>
    <td width="235" bgcolor="#FFFFFF"><input name="chenyusan" type="text" id="chenyusan" size="20" value="<?php echo $myrows[chenyusan];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">产值：</td>
    <td width="255" bgcolor="#FFFFFF">水路：
      <input name="changzi_1" type="text" id="changzi_1" size="15" value="<?php echo $myrows[changzi_1];?>" /><font color="#FF0000">(元)</font>
	  <br/>
	  公路：
	  <input name="changzi_2" type="text" id="changzi_2" size="15" value="<?php echo $myrows[changzi_2];?>" /><font color="#FF0000">(元)</font>
	  <br/>
	  铁路：
	  <input name="changzi_3" type="text" id="changzi_3" size="15" value="<?php echo $myrows[changzi_3];?>" /><font color="#FF0000">(元)</font></td>
  </tr>
   <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF">优化方式：</td>
    <td width="235" bgcolor="#FFFFFF"><input name="yhway" type="text" id="yhway" size="20" value="<?php echo $myrows[yhway];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">运输量：</td>
    <td width="255" bgcolor="#FFFFFF"><input name="ysnumber" type="text" id="ysnumber" size="20" value="<?php echo $myrows[ysnumber];?>" /><font color="#FF0000">(辆)</font></td>
  </tr>
  <tr>
    <td width="103" height="26" align="center" bgcolor="#FFFFFF"> 运输时间：</td>
    <td width="235" bgcolor="#FFFFFF"><font color="#FF0000">从:</font>
      <input name="ystime_1" type="text" id="ystime_1" size="20" value="<?php echo $myrows[ystime_1];?>" /><br/>
      <font color="#FF0000">到:</font>
      <input name="ystime_2" type="text" id="ystime_2" size="20" value="<?php echo $myrows[ystime_2];?>" /></td>
    <td width="69" height="22" align="center" bgcolor="#FFFFFF">运输成本：</td>
    <td width="255" bgcolor="#FFFFFF">水路：
      <input name="yscb_1" type="text" id="yscb_1" size="20" value="<?php echo $myrows[yscb_1];?>" /><font color="#FF0000">(元)</font><br/>
      公路：
	  <input name="yscb_2" type="text" id="yscb_2" size="15" value="<?php echo $myrows[yscb_2];?>" /><font color="#FF0000">(元)</font><br/>
	  铁路：
	  <input name="yscb_3" type="text" id="yscb_3" size="15" value="<?php echo $myrows[yscb_3];?>" /><font color="#FF0000">(元)</font></td>
  </tr>
   <tr>
    <td height="26" align="right" bgcolor="#FFFFFF" colspan="2">运输车车牌号码：</td>
    <td bgcolor="#FFFFFF" colspan="2"><input name="car_numbertoo" type="text" id="car_numbertoo" size="25" value="<?php echo $myrows[car_numbertoo];?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td align="right" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="修改"></td>
    <td bgcolor="#FFFFFF"><input type="submit" name="Submit4" value="删除"></td>
  </tr>
</table>
</form>
</body>
</html>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>