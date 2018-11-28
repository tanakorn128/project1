<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>รับทำเว็บ ออกแบบเว็บ เว็บไซต์ราคาถูก Web SEO Web Marketing</title>
<?php require("dbconnect.php");?>
<link href="global.css" rel="stylesheet" type="text/css" />
<link href="jquery-ui.min.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<script language="javascript" type="text/javascript" src="jquery-ui.js"></script>
<script language="javascript" type="text/javascript">
function frmmode1(){
	document.frm1.action='index.php';
	document.frm1.submit();
}
function frmmode2(){
	document.frm2.action='index.php';
	document.frm2.submit();
}
</script>
</head>

<body>


        <?php
        			$pass_date=$_GET["pass_date"];
					$mode = $_GET["mode"];
					$datepicker = $_GET["datepicker"];
					$datepicker2 = $_GET["datepicker2"];
					
					if($pass_date==""){$pass_date=0;}
					$cur_date = date('Y-m-d', strtotime($Date. ' - ' . $pass_date .' day'));

		?>
        
<?php
	$records_per_page = 10;
	$config_sort = "DESC";
	$filename="index.php?mode=" . $mode;
?>
        
        <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="150" bgcolor="#DAE9FE"><strong>เลือกตามเวลาที่ผ่านมา</strong></td>
    <td bgcolor="#F7F7F7">      
         <form name="frm1" method="get" id="frm1">
      <select name="pass_date" id="pass_date"  onChange="frmmode1();" style="width:100px;">
                    <option value="1" <?php if($pass_date==1){?>selected<?php }?>>วันนี้</option>
                    <option value="7" <?php if($pass_date==7){?>selected<?php }?>>7 วันที่แล้ว</option>
                    <option value="30" <?php if($pass_date==30){?>selected<?php }?>>1 เดือนที่แล้ว</option>
                    <option value="60" <?php if($pass_date==60){?>selected<?php }?>>3 เดือนที่แล้ว</option>
                    <option value="180" <?php if($pass_date==180){?>selected<?php }?>>6 เดือนที่แล้ว</option>
                    <option value="0" <?php if($pass_date==0){?>selected<?php }?>>ตลอดเวลา</option>
                  </select>
                  <input name="mode" type="hidden" value="1" />
    </form></td>
  </tr>
  
  <tr>
    <td bgcolor="#DAE9FE"><strong>เลือกตามเวลาที่ผ่านมา</strong></td>
    <td bgcolor="#F7F7F7">
    <form name="frm2" method="get" id="frm2">
    <input type="text" id="datepicker" name="datepicker" placeholder="yyyy-mm-dd"  style="width:80px;" value="<?php print $datepicker;?>" />
    -
    <input type="text" id="datepicker2" name="datepicker2" placeholder="yyyy-mm-dd"  style="width:80px;" value="<?php print $datepicker2;?>" />
    <input name="btnSearch" type="button" onclick="frmmode2();" value="ค้นหา" />
    <input name="mode" type="hidden" value="2" />
    </form>
    </td>
  </tr>
</table>

        

<?php
		global 	$sort;
		//รับค่าจาก QueryString
		$page = $_GET['page'];
		if($page==''){$page=1;}
		
		$sort = $_GET['sort'];
		if($sort==''){$sort=$config_sort;}
		
		$orderby =$_GET['orderby'];
		if($orderby==''){$orderby='sample_datetime';}

		$offset = ($page-1) * $records_per_page;
	
			$sSql = "SELECT sample_data,sample_datetime";
			$sSql .= " FROM sample_search";
			
			if($mode==1 and $pass_date >0){
					$sSql .= " WHERE sample_datetime >='" . $cur_date . "' and sample_datetime < '" . date("Y-m-d") . "'";
			}elseif($mode==2 and $datepicker <>"" and $datepicker2 <>""){
					$datepicker_final = date('Y-m-d', strtotime($datepicker2. ' + 1 day'));
					$sSql .= " WHERE sample_datetime >='" . $datepicker ."'";
					$sSql .= " AND sample_datetime <='" . $datepicker_final ."'";
			}
		$sSql .= " ORDER BY " .  $orderby . " " . $sort;	
		$sSql .= " LIMIT ". $offset ."," . $records_per_page;
		$conn = new connectDB;
		$arrData = $conn->return_sql($sSql);
		$recCount = $conn->record_count($sSql);
			
		//ทำ multipages 
		$sSql = "SELECT COUNT(*)";
		$sSql .= " FROM sample_search";
			if($mode==1 and $pass_date >0){
					$sSql .= " WHERE sample_datetime >='" . $cur_date . "' and sample_datetime < '" . date("Y-m-d") . "'";
			}else if($mode==2 and $datepicker <>"" and $datepicker2 <>""){
					$datepicker_final = date('Y-m-d', strtotime($datepicker2. ' + 1 day'));
					$sSql .= " WHERE sample_datetime >='" . $datepicker ."'";
					$sSql .= " AND sample_datetime <='" . $datepicker_final ."'";
			}
		$rData = $conn->return_sql($sSql);
		$all_rows = $rData[0][0];//ทำ multipages
	?>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
         
                   <tr >
                     <td class="td_head">หัวข้อ</td>

                     <td class="td_head"><span>วันที่<span class="table-header-options line-left center"></span></span></td>

                   </tr>

                 <?php
				$Counts=0;
                if($recCount>0){
					for($iLoop=0;$iLoop<$recCount;$iLoop++){
				?>
                 <tr class="<?php print $class_row;?>"  id="_<?php print $Counts; ?>x"  >
                   <td class="td_row">
                   <?php print $arrData[$iLoop][0];?>
                   </td>

                   <td class="td_row">
                   
                  <?php print $arrData[$iLoop][1];?>
                   </td>



</tr>
                 <?php
		}
	}
	
				?>



  <tr>
    <th colspan="2"><?php require("multipages.php");?></th>           
                 </tr>
               </table>
    
<br /><br />
<script language="javascript">
	$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	$( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
	</script>
</body>
</html>