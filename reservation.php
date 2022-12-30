<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>예약하기</title>
  </head>
  <body>
    <h3>예약이 완료 되었습니다.</h3>
      <?php
      $name = $_GET["u_name"];
      $tel = $_GET["u_tel"];
      $people = $_GET["people_num"];
      $date = $_GET["u_date"];
      $time = $_GET["u_time"];
      $menu = $_GET["u_menu"];
      $memo = $_GET["memo"];
      ?>
      <br>
      이름 : <?php print $name;?> <br>
      연락처 : <?php print $tel;?> <br>
      예약 인원 : <?php print $people;?> <br>
      예약 날짜 : <?php print $date;?> <br>
      예약 시간 : <?php print $time;?> <br>
      메뉴 선택 : <?php print $menu;?> <br>
      요청사항 : <?php print $memo;?>
    </body>
</html>