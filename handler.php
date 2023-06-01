<?php
session_start();
require_once 'include/config.php';
$_SESSION['result'] = array();
echo '<pre>';
print_r($_POST);
echo '</pre>';
// echo 'session';
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

if($_SESSION['query'] == 1){
   if($_POST['build'] == 1){
      if($_POST['specific-gym'] == 0){
      $sql = 'SELECT `infrastructure`.`id`, `build_type`.`name` AS "Тип будівлі", `infrastructure`.`name` AS "Назва", `floor`.`name` AS "Тип підлоги" FROM `infrastructure` 
      JOIN `build_type`
      ON `build_type`.`id` = `infrastructure`.`type`
      JOIN `floor`
      ON `floor`.`id` = `infrastructure`.`floor_type`';
      }else{
      $sql = 'SELECT `infrastructure`.`id`, `build_type`.`name` AS "Тип будівлі", `infrastructure`.`name` AS "Назва", `floor`.`name` AS "Тип підлоги" FROM `infrastructure` 
      JOIN `build_type`
      ON `build_type`.`id` = `infrastructure`.`type`
      JOIN `floor`
      ON `floor`.`id` = `infrastructure`.`floor_type`
      WHERE `infrastructure`.`floor_type` = ' . $_POST['specific-gym'];
      }
      echo $sql;
      $results = mysqli_query($connection, $sql);
      while($result = mysqli_fetch_assoc($results)){
         $_SESSION['result'][] = $result;
      }
   }else if($_POST['build'] == 2){
      if($_POST['specific-court'] == 0){
         $sql = 'SELECT `infrastructure`.`id`, `build_type`.`name` AS "Тип будівлі", `infrastructure`.`name` AS "Назва", `coating`.`name` AS "Тип покриття даху"
         FROM `infrastructure` 
         JOIN `build_type`
         ON `build_type`.`id` = `infrastructure`.`type`
         JOIN `coating`
         ON `coating`.`id` = `infrastructure`.`coating_type`';
      }else{
      $sql = 'SELECT `infrastructure`.`id`, `build_type`.`name` AS "Тип будівлі", `infrastructure`.`name` AS "Назва", `coating`.`name` AS "Тип покриття даху"
      FROM `infrastructure` 
      JOIN `build_type`
      ON `build_type`.`id` = `infrastructure`.`type`
      JOIN `coating`
      ON `coating`.`id` = `infrastructure`.`coating_type`
      WHERE `infrastructure`.`coating_type` = ' . $_POST['specific-court'];
      }
      echo $sql;
      $results = mysqli_query($connection, $sql);
      while($result = mysqli_fetch_assoc($results)){
         $_SESSION['result'][] = $result;
      }
   }else if($_POST['build'] == 3){
      if($_POST['stadium'] == 0){
         $sql = 'SELECT `infrastructure`.`id`, `build_type`.`name` AS "Тип будівлі", `infrastructure`.`name` AS "Назва", `infrastructure`.`seats` AS "Кількість місць"
         FROM `infrastructure` 
         JOIN `build_type`
         ON `build_type`.`id` = `infrastructure`.`type`
         WHERE `infrastructure`.`seats` < ' . $_POST['seats'];
      }else{
         $sql = 'SELECT `infrastructure`.`id`, `build_type`.`name` AS "Тип будівлі", `infrastructure`.`name` AS "Назва", `infrastructure`.`seats` AS "Кількість місць"
         FROM `infrastructure` 
         JOIN `build_type`
         ON `build_type`.`id` = `infrastructure`.`type`
         WHERE `infrastructure`.`seats` > ' . $_POST['seats'];
      }
      echo $sql;
      $results = mysqli_query($connection, $sql);
      while($result = mysqli_fetch_assoc($results)){
         $_SESSION['result'][] = $result;
      }
   }else if($_POST['build'] == 4){
      if($_POST['arena'] == 0){
         $sql = 'SELECT `infrastructure`.`id`, `build_type`.`name` AS "Тип будівлі", `infrastructure`.`name` AS "Назва", `infrastructure`.`square` AS "Площа"
         FROM `infrastructure` 
         JOIN `build_type`
         ON `build_type`.`id` = `infrastructure`.`type`
         WHERE `infrastructure`.`square` < ' . $_POST['square'];
      }else{
         $sql = 'SELECT `infrastructure`.`id`, `build_type`.`name` AS "Тип будівлі", `infrastructure`.`name` AS "Назва", `infrastructure`.`square` AS "Площа"
         FROM `infrastructure` 
         JOIN `build_type`
         ON `build_type`.`id` = `infrastructure`.`type`
         WHERE `infrastructure`.`square` > ' . $_POST['square'];
      }
      echo $sql;
      $results = mysqli_query($connection, $sql);
      while($result = mysqli_fetch_assoc($results)){
         $_SESSION['result'][] = $result;
      }
   }
   header('Location: query.php?query=1');
}else if($_SESSION['query'] == 2){
   $sql = 'SELECT `sportsman`.`id` AS "id", `sportsman`.`name` AS "Ім\'я та Прізвище спортсмена" , `sportsman`.`birth_date` AS `Дата народження` ,`sportsclub`.`name` AS `Спортклуб` FROM `sportsman_activity` 
      JOIN `trainer`
      ON `sportsman_activity`.`trainer_id` = `trainer`.`id`
      JOIN `sportsman`
      ON `sportsman_activity`.`sportsman_id` = `sportsman`.`id`
      JOIN `sportsclub`
      ON `sportsclub`.`id` = `sportsman`.`sportsclub_id`
      WHERE `trainer`.`sport_id` = ' .  $_POST['sport'] . ' AND `sportsman_activity`.`rank_id` >= ' . $_POST['rank'];
      $results = mysqli_query($connection, $sql);
      while($result = mysqli_fetch_assoc($results)){
         $_SESSION['result'][] = $result;
      }
   header('Location: query.php?query=2');
}else if($_SESSION['query'] == 3){
   $sql = 'SELECT `sportsman`.`id` AS "id", `sportsman`.`name` AS "Ім\'я та Прізвище спортсмена" , `sportsman`.`birth_date` AS `Дата народження` ,`sportsclub`.`name` AS `Спортклуб`
   FROM `sportsman_activity`
   JOIN `sportsman`
   ON `sportsman`.`id` = `sportsman_activity`.`sportsman_id`
   JOIN `trainer`
   ON `trainer`.`id` = `sportsman_activity`.`trainer_id`
   JOIN `sportsclub`
   ON `sportsclub`.`id` = `sportsman`.`sportsclub_id`
   WHERE `trainer`.`id` = ' . $_POST['trainer'] . ' AND `sportsman_activity`.`rank_id` >= ' . $_POST['rank'];
   $results = mysqli_query($connection, $sql);
   while($result = mysqli_fetch_assoc($results)){
      $_SESSION['result'][] = $result;
   }
   header('Location: query.php?query=3');
}else if($_SESSION['query'] == 5){
   $sql = 'SELECT `trainer`.`id` AS "id", `sport`.`name` AS "Спорт", `trainer`.`name` AS "Ім\'я та Прізвище тренера", `trainer`.`birth_date` AS `Дата народження`
   FROM `trainer`
   JOIN `sport`
   ON `sport`.`id` = `trainer`.`sport_id` 
   WHERE `trainer`.`id` IN(SELECT trainer_id FROM `sportsman_activity` WHERE sportsman_id = ' . $_POST['sportsman'] .')' ;
   $results = mysqli_query($connection, $sql);
   while($result = mysqli_fetch_assoc($results)){
      $_SESSION['result'][] = $result;
   }
   header('Location: query.php?query=5');
}else if($_SESSION['query'] == 6){
   if($_POST['organizator'] == 0){
      $sql = 'SELECT `id`, `name` AS "Назва змагання"  
      FROM `contest`
      WHERE data BETWEEN "' . $_POST['begin'] .'" AND  "' . $_POST['end'] .'"';
   }else{
      $sql = 'SELECT `id`, `name` AS "Назва змагання"  
      FROM `contest`
      WHERE data BETWEEN "' . $_POST['begin'] .'" AND  "' . $_POST['end'] .'" AND organizator_id = ' . $_POST['organizator'];
   }
   $results = mysqli_query($connection, $sql);
      while($result = mysqli_fetch_assoc($results)){
         $_SESSION['result'][] = $result;
      }
   header('Location: query.php?query=6');
}else if($_SESSION['query'] == 7){
   $sql = 'SELECT `golden_id`, `silver_id`, `bronze_id` 
   FROM `contest`
   WHERE `id` = ' . $_POST['contest'];
   $results = mysqli_fetch_assoc(mysqli_query($connection, $sql));

   $sql = 'SELECT `sportsman`.`id` AS "id", `sportsman`.`name` AS "Ім\'я та Прізвище спортсмена" , `sportsman`.`birth_date` AS `Дата народження` ,`sportsclub`.`name` AS `Спортклуб`, CONCAT(1) AS `Місце` 
   FROM `sportsman` 
   JOIN `sportsclub`
   ON `sportsman`.`sportsclub_id` = `sportsclub`.`id`
   WHERE `sportsman`.`id` = ' . $results['golden_id'];
   $result = mysqli_fetch_assoc(mysqli_query($connection, $sql));
   $_SESSION['result'][] = $result;

   $sql = 'SELECT `sportsman`.`id` AS "id", `sportsman`.`name` AS "Ім\'я та Прізвище спортсмена" , `sportsman`.`birth_date` AS `Дата народження` ,`sportsclub`.`name` AS `Спортклуб`, CONCAT(2) AS `Місце` 
   FROM `sportsman` 
   JOIN `sportsclub`
   ON `sportsman`.`sportsclub_id` = `sportsclub`.`id`
   WHERE `sportsman`.`id` = ' . $results['silver_id'];
   $result = mysqli_fetch_assoc(mysqli_query($connection, $sql));
   $_SESSION['result'][] = $result;

   $sql = 'SELECT `sportsman`.`id` AS "id", `sportsman`.`name` AS "Ім\'я та Прізвище спортсмена" , `sportsman`.`birth_date` AS `Дата народження` ,`sportsclub`.`name` AS `Спортклуб`, CONCAT(3) AS `Місце` 
   FROM `sportsman` 
   JOIN `sportsclub`
   ON `sportsman`.`sportsclub_id` = `sportsclub`.`id`
   WHERE `sportsman`.`id` = ' . $results['bronze_id'];
   $result = mysqli_fetch_assoc(mysqli_query($connection, $sql));
   $_SESSION['result'][] = $result;
   header('Location: query.php?query=7');
}else if($_SESSION['query'] == 8){
   if($_POST['sport'] == 0){
      $sql = 'SELECT `contest`.`id` AS "id", `contest`.`name` AS "Назва змагання", `infrastructure`.`name` AS "Назва будівлі", `sport`.`name` AS "Назва спорту"
      FROM `contest`
      JOIN `infrastructure`
      ON `infrastructure`.`id` = `contest`.`build_id`
      JOIN `sport`
      ON `sport`.`id` = `contest`.`sport_id`
      WHERE `contest`.`build_id` = ' . $_POST['build'];
   }else{
      $sql = 'SELECT `contest`.`id` AS "id", `contest`.`name` AS "Назва змагання", `infrastructure`.`name` AS "Назва будівлі", `sport`.`name` AS "Назва спорту"
      FROM `contest`
      JOIN `infrastructure`
      ON `infrastructure`.`id` = `contest`.`build_id`
      JOIN `sport`
      ON `sport`.`id` = `contest`.`sport_id`
      WHERE `contest`.`build_id` = ' . $_POST['build'] . ' AND `contest`.`sport_id` = ' . $_POST['sport'];
   }
   $results = mysqli_query($connection, $sql);
   while($result = mysqli_fetch_assoc($results)){
      $_SESSION['result'][] = $result;
   }
   header('Location: query.php?query=8');
}else if($_SESSION['query'] == 9){
   $sql = 'SELECT id
   FROM `contest`
   WHERE `contest`.`data` BETWEEN "' . $_POST['begin'] . '" AND "' . $_POST['end'] . '"';
   $sqls = 'SELECT DISTINCT sportsman_id
   FROM `contest_composition`
   WHERE contest_id IN('.  $sql.') 
   ORDER BY sportsman_id';
   $sqlss = 'SELECT `sportsclub`.`name` AS "Назва спортклубу", COUNT(`sportsclub`.`name`) AS "Кількість спортсменів"
   FROM `sportsman`
   JOIN `sportsclub`
   ON `sportsclub`.`id` = `sportsman`.`sportsclub_id`
   WHERE `sportsman`.`id` IN (' . $sqls .')
   GROUP BY `sportsclub`.`name`
   ORDER BY COUNT(`sportsclub`.`name`) ';
   echo $sqlss;
   $results = mysqli_query($connection, $sqlss);
      while($result = mysqli_fetch_assoc($results)){
         $_SESSION['result'][] = $result;
      }
   header('Location: query.php?query=9');
}else if($_SESSION['query'] == 10){
      $sql = 'SELECT `trainer`.`id` AS "id", `trainer`.`name` AS "Ім\'я та Прізвище тренера", `trainer`.`birth_date` AS `Дата народження тренера`, `sport`.`name` AS `Назва спорту`
      FROM `trainer`
      JOIN `sport`
      ON `sport`.`id` = `trainer`.`sport_id`
      WHERE `trainer`.`sport_id` = ' . $_POST['sport'];
      $results = mysqli_query($connection, $sql);
      while($result = mysqli_fetch_assoc($results)){
         $_SESSION['result'][] = $result;
      }
   header('Location: query.php?query=10');
}else if($_SESSION['query'] == 11){
   $sql = 'SELECT id
   FROM `contest`
   WHERE data BETWEEN "' . $_POST['begin'] . '" AND "' . $_POST['end'] . '"';

   $sqls = 'SELECT DISTINCT sportsman_id
   FROM `contest_composition`
   WHERE contest_id IN (' . $sql . ')';
   
   $sqlss = 'SELECT `sportsman`.`id` AS "id", `sportsman`.`name` AS "Ім\'я та Прізвище спортсмена" , `sportsman`.`birth_date` AS `Дата народження` ,`sportsclub`.`name` AS `Спортклуб`
   FROM `sportsman`
   JOIN `sportsclub`
   ON `sportsclub`.`id` = `sportsman`.`sportsclub_id`
   WHERE `sportsman`.`id` NOT IN (' . $sqls . ')';
   $results = mysqli_query($connection, $sqlss);
      while($result = mysqli_fetch_assoc($results)){
         $_SESSION['result'][] = $result;
      }
   header('Location: query.php?query=11');
}else if($_SESSION['query'] == 12){
   $sql = 'SELECT `organizator`.`id` AS "id", `organizator`.`name` "Назва організатора", COUNT(`organizator`.`id`) AS "кількість проведених змагань"
   FROM `contest`
   JOIN `organizator`
   ON `organizator`.`id` = `contest`.`organizator_id`
   WHERE `contest`.`data` BETWEEN "' . $_POST['begin'] . '" AND "' . $_POST['end'] . '"
   GROUP BY `organizator`.`id`
   ORDER BY COUNT(`organizator`.`id`)';
   // echo $sql;
   $results = mysqli_query($connection, $sql);
   while($result = mysqli_fetch_assoc($results)){
      $_SESSION['result'][] = $result;
   }
   header('Location: query.php?query=12');
}else if($_SESSION['query'] == 13){
   $sql = 'SELECT  `infrastructure`.`id` AS "id",  `infrastructure`.`name` AS "Назва будівлі",  `contest`.`data` "Дата проведення змагання"
   FROM `contest`
   JOIN `infrastructure`
   ON `infrastructure`.`id` = `contest`.`build_id`
   WHERE data BETWEEN "' . $_POST['begin'] . '" AND "' .$_POST['end'] . '"
   ORDER BY `contest`.`data`';
   $results = mysqli_query($connection, $sql);
   while($result = mysqli_fetch_assoc($results)){
      $_SESSION['result'][] = $result;
   }
   header('Location: query.php?query=13');
}
echo '<pre>';
print_r($_SESSION['result']);
echo '</pre>';

?>