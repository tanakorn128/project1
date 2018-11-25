<?php include "css.php" ;?>
<html>
      <head>  
           
           <title>Pay_topic</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
      </head>  
      <body style="background-color:pink;">  
           <div class="container">  
                <br />  
                <br />  
                <h2 align="center">กรอกข้อมูล</h2>  
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
                                     
                               </table>  
                               <!-- <tr><td><button type="button" name="add" id="add" class="btn btn-success">เพิ่ม</button></td>   -->
                               <input type = button value = "ย้อนกลับ" onclick='location.replace("Homeuser0.php")' class="button1">
                               <input type="submit" value="ตกลง"class="button1" class="button2/> 
                               
                               <input type="hidden" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="n1[]" placeholder="Topic" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        //    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="n2[]" placeholder="Detel" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        //    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="n3[]" placeholder="must puy" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        //    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="n4[]" placeholder="start" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        //    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="n5[]" placeholder="end" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        //    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="n6[]" placeholder="before" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        //    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="n7[]" placeholder="beforehand" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
//       });  
    //   $(document).on('click', '.btn_remove', function(){  
    //        var button_id = $(this).attr("id");   
    //        $('#row'+button_id+'3').remove();  
    //   });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"expenditure.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 
 <html>
