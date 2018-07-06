<?php $count=$_POST['count'];
$counts=sprintf("%08.2f",$count);
$GetStr=$_POST['appcontent'];
$GetStr=str_replace(PHP_EOL, '<br>', $GetStr);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>无标题文档</title>
<style>
#content{
    width:max-content;
    margin:auto;
}
</style>

</head>

<body>
    <!--startprint--> 
<div id="form" style="width: 100%">
<h4 align="center">付款申请单</h4>
<div id="content">
<span style="float: left;">公司名称：<?php echo $_POST['company'];?></span><span style="margin-left:10vw;"><?php echo $_POST['time'];?></span>
<table border="1px" align="center" cellpadding="0" cellspacing="0" id="myTab">
  <col width="72" span="6" />
  <col width="83" />
  <col width="24" span="8" />

  <tr align="center">
    <td width="59" height="40">部门</td>
    <td width="58"><?php echo $_POST['department'];?>
</td>
    <td width="60">申请人</td>
    <td width="64"><?php echo $_POST['proposer'];?></td>
    <td width="75">付款时间</td>
    <td width="85"><?php echo $_POST['paytime'];?></td>
    <td width="93">支付方式</td>
    <td colspan="8"><?php echo $_POST['payway'];?></td>
  </tr>
  <tr>
    <td colspan="7" rowspan="3" valign="top"><div style="float: left;">申请内容：</div><div style="float: left;"><?php echo $GetStr;?></div></td>
    <td colspan="8" align="center">金额</td>
  </tr>
  <tr align="center">
    <td width="16">十</td>
    <td width="16">万</td>
    <td width="16">千</td>
    <td width="16">百</td>
    <td width="16">十</td>
    <td width="16">元</td>
    <td width="16">角</td>
    <td width="17">分</td>
  </tr>
  <tr align="center">
    <td>¥</td>
    <td class="low"><?php echo $counts[0];?></td>
    <td class="low"><?php echo $counts[1];?></td>
    <td class="low"><?php echo $counts[2];?></td>
    <td class="low"><?php echo $counts[3];?></td>
    <td class="low"><?php echo $counts[4];?></td>
    <td class="low"><?php echo $counts[6];?></td>
    <td class="low"><?php echo $counts[7];?></td>
  </tr>
  <tr>
    <td height="30" colspan="15">金额： （大写）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $_POST['shiwan'];?>拾</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $_POST['wan'];?>万</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $_POST['qian'];?>仟</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $_POST['bai'];?>佰</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $_POST['shi'];?>拾</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $_POST['yuan'];?>元</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $_POST['jiao'];?>角</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $_POST['fen'];?>分</span></td>
  </tr>
  <tr>
    <td height="34" colspan="15">收款单位名称：<?php echo $_POST['organname'];?></td>
  </tr>
  <tr>
    <td height="34" colspan="4">开户行：<?php echo $_POST['accountbank'];?></td>
    <td colspan="11">账号：<?php echo $_POST['account'];?></td>
  </tr>
  <tr align="center">
    <td height="36">联系人</td>
    <td colspan="2"><?php echo $_POST['linkman'];?></td>
    <td>联系电话</td>
    <td colspan="2"><?php echo $_POST['phone'];?></td>
    <td>地区</td>
    <td colspan="8"><?php echo $_POST['address'];?></td>
  </tr>
  <tr align="center">
    <td height="95" colspan="3" align="center" valign="top">部门经理</td>
    <td colspan="3" align="center" valign="top">财务经理</td>
    <td colspan="9" align="center" valign="top">总经理</td>
  </tr>

</table>
<br>
<span style="float: left;">财务审核人：</span><span style="margin-left:25vw;">出纳：</span>
</div>
</div>
<!--endprint--> 
<div align="center" style="margin-top: 10vh">
<input type="button" onclick="doPrint()" value="打印申请单" align="center"> 
</div>
<script>    
function doPrint() {  
bdhtml = window.document.body.innerHTML;  
sprnstr = "<!--startprint-->";  
eprnstr = "<!--endprint-->";  
prnhtml = bdhtml.substr(bdhtml.indexOf(sprnstr) + 17);  
prnhtml = prnhtml.substring(0, prnhtml.indexOf(eprnstr));  
window.document.body.innerHTML = prnhtml;  
window.print();  
};
</script>

</body>
</html>