<?php include "css.php" ;?>
<html>
      <head>  
           
           <title>+Pay_topic</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
      </head>  
      <body style="background-color:pink;">  
           <div class="container">  
                <br />  
                <br />  &emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<MARQUEE behavior=alternate direction=left scrollAmount=3 width="10%"><font face=Webdings>4</font><</MARQUEE><MARQUEE scrollAmount=1 direction=left width="2%">| | | | | | | | |</MARQUEE>กรอกข้อมูล<MARQUEE scrollAmount=1 direction=right width="2%">| | | | | | | | |</MARQUEE><MARQUEE behavior=alternate direction=right scrollAmount=3 width="10%"><font face=Webdings>3</font></MARQUEE>
                  
                <div class="form-group">  
                     <form action="expenditure.php" name="add_name" method="POST" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                         <tr><td><input type="text" name="n0" placeholder="TID" class="form-control name_list" /></td> </tr>
                                         <tr><td><input type="text" name="n1" placeholder="Topic" class="form-control name_list" /></td> </tr>
                                         <tr><td><input style="height:200px;"  type="text" name="n2" placeholder="Detel" class="form-control name_list"  /></td> </tr> 
                                         <tr><td><input  type="text" name="must_puy" placeholder="must puy" class="form-control name_listsize="1" maxlength="5" style="width:150px;" /></td> </tr>

                                         <tr><td bgcolor="#FFFFFF">
                                         <B>เริ่มเก็บ
                                           <br> วัน
                                            <select name="user_day">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            </select>
                                            เดือน
                                            <select name="user_mon">
                                            <option value="มกราคม">มกราคม</option>
                                            <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                            <option value="มีนาคม">มีนาคม</option>
                                            <option value="เมษายน">เมษายน</option>
                                            <option value="พฤษภาคม">พฤษภาคม</option>
                                            <option value="มิถุนายน">มิถุนายน</option>
                                            <option value="กรกฎาคม">กรกฎาคม</option>
                                            <option value="สิงหาคม">สิงหาคม</option>
                                            <option value="กันยายน">กันยายน</option>
                                            <option value="ตุลาคม">ตุลาคม </option>
                                            <option value="พฤศจิกายน">พฤศจิกายน </option>
                                            <option value="ธันวาคม">ธันวาคม </option>
                                            </select>
                                            ปี    <input size=4 type=text name="user_year" maxlength=4>
                                            (เช่น 2561)</td>
                                             
                                            <tr><td bgcolor="#FFFFFF">
                                         <B>สิ้นสุด
                                         
                                            <br>วัน<select name="end_day">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            </select>
                                            เดือน
                                            <select name="end_mon">
                                            <option value="มกราคม">มกราคม</option>
                                            <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                            <option value="มีนาคม">มีนาคม</option>
                                            <option value="เมษายน">เมษายน</option>
                                            <option value="พฤษภาคม">พฤษภาคม</option>
                                            <option value="มิถุนายน">มิถุนายน</option>
                                            <option value="กรกฎาคม">กรกฎาคม</option>
                                            <option value="สิงหาคม">สิงหาคม</option>
                                            <option value="กันยายน">กันยายน</option>
                                            <option value="ตุลาคม">ตุลาคม </option>
                                            <option value="พฤศจิกายน">พฤศจิกายน </option>
                                            <option value="ธันวาคม">ธันวาคม </option>
                                            </select>
                                            </select>
                                            ปี    <input size=4 type=text name="end_year" maxlength=4>
                                            (เช่น 2561)</td>
                                     
                                                   

                               <input type="hidden" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                              
                          </div>  
                      
                     
                </div>  
           </div>  
      </body>  
 </html>  
 <html>

 <?php
 require "connect.php";
 $q ="SELECT * FROM user ";
 $result = mysqli_query($Con,$q);

 ?>
 <td>
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>เลื่อกรหัสที่จะเก็บเงิน<br>
 <?php

 while ($row = mysqli_fetch_array($result)){
?>
<tr>
<td align="left" valign="top"><label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
<input  type="checkbox" name="UID[]" id="txtCheck" value="<?=$row['SID']?>"/>
  </label></td>
  <td align="left" valign="top"><?=$row['SID'];?> 
  
  </tr>
     <?
     }
     ?>
    </tr></tr>
    </table>
     <input type="hidden" name="submit[]" id="submit" class="btn btn-info" value="Submit" />
     &emsp;&emsp;&emsp;&emsp;<br><br> <input type = button value = "ย้อนกลับ" onclick='location.replace("Homeuser0.php")' class="button1"></tr>
     <tr><input type="submit" value="ตกลง"class="button1" onclick='location.replace("del+topic.php")' class="button2" ></tr>
     <tr> <input type = button value = "ดูทั้งหมด" onclick='location.replace("del+topic.php")' class="button1"></tr>
                               
     <tr> <input type="hidden" name="submit" id="submit" class="btn btn-info" value="Submit" /></tr>  
                               </form> <br><br><br>
     

     

        