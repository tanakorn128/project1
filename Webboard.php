<?php
session_start();
require('connect.php');
$show_board = '';
$chk_rows_board = 0;
$rs_board = '';
if (!empty($_GET['id'])) {
    $rs_cg = mysql_query('SELECT cg_name FROM tbl_category WHERE cg_id=' . $_GET['id']); //นั
    $show_board = mysql_fetch_assoc($rs_cg); //นับจำนวนแถวของหมวดกระทู้
    if (!empty($show_board['cg_name'])) {//ถ้าชื่อหมวดไม่เป็นค่าว่างแสดงว่ามีหมวดนี้อยู่ในฐานข้อมูลจริงๆ
        // Join 2 เทเบิล tbl_board และ tbl_member  เพื่อดึงค่าของกระทู้,ข้อมูลของสมาชิกมาแสดง 
        //โดยเรียงตามข้อมูลของกระทู้ที่อัพเดทล่าสุด (board_time_update)
        $rs_board = mysql_query("SELECT b.board_id,b.board_topic,b.board_views,b.board_replies,m.mem_name
 FROM tbl_board As b LEFT JOIN tbl_member As m ON b.mem_id=m.mem_id
  WHERE b.cg_id='" . $_GET['id'] . "' AND b.board_parent_id=0 
 ORDER BY b.board_time_update DESC");
        $chk_rows_board = mysql_num_rows($rs_board); //นับจำนวนแถวของกระทู้
    } else {//ถ้าเป็นค่าว่าง แสดงว่าไม่มีหมวดนี้อยู่ในฐานข้อมูล ให้Redirectไปหน้า index.php
        header('Location:index.php');
    }
} else {//ไม่พบพารามิเตอร์ $_GET['id'] .ให้กลับไปหน้าแรก
    //header('Location:index.php');
    exit();
}
?>
<html>
    <head>
        <?php require('head.php'); ?>
        <title><?php echo $show_board['cg_name']; ?></title>
    </head>
    <body>
        <?php require('menu.php'); ?>
        <div class="container">
            <?php require('header.php'); ?>
            <div class="row ws-content">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><?php echo $show_board['cg_name']; ?></li>
                </ol>
                <h1><?php echo $show_board['cg_name']; ?></h1>
                <table class="table table-bordered table-hover">
                    <thead>
                        <?php if (!empty($_SESSION['mem_id'])) { ?>
                            <tr>
                                <th colspan="3"><span class="btn btn-default" ><a href="board_add.php?id=<?php echo $_GET['id'] ?>">ตั้งกระทู้</a></span></th>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th>หัวข้อกระทู้</th><th class="hidden-xs">ความคิดเห็น</th><th class="hidden-xs">เข้าชม</th></tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($chk_rows_board > 0) {//จำนวนแถวมากกว่า 0 แสดงว่ามีข้อมูล
                            while ($show_board = mysql_fetch_assoc($rs_board)) {
                                $board_id = $show_board['board_id'];
                                $mem_name = $show_board['mem_name'];
                                $board_topic = $show_board['board_topic'];
                                $board_views = $show_board['board_views'];
                                $board_replies = $show_board['board_replies'];
                                ?>
                                <tr>
                                    <td style="width:80%">
                                        <a href="viewboard.php?id=<?php echo $board_id; ?>"><?php echo $board_topic; ?></a>
                                        <br />โพสโดย : <?php echo $mem_name; ?>
                                    </td>
                                    <td style="width:10%" class="hidden-xs"><?php echo $board_replies; ?></td>
                                    <td style="width:10%" class="hidden-xs"><?php echo $board_views; ?></td>
                                </tr>
                                <?php
                            }
                        } else { //ไม่มีข้อมูลหมวดกระทู้
                            ?>
                            <tr>
                                <td colspan="3" align="center"><strong>ไม่พบกระทู้</strong></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php require('footer.php'); ?>
        </div>      
    </body>
</html>