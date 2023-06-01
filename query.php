<?php
session_start();
require_once 'include/config.php';
$_SESSION['floor'] = array();
$_SESSION['coating'] = array();
$_SESSION['sport'] = array();
$_SESSION['rank'] = array();
$_SESSION['trainer'] = array();
$_SESSION['build'] = array();
$_SESSION['contest'] = array();
$_SESSION['organizator'] = array();
$_SESSION['sportsman'] = array();
if($_GET['query'] == 1){
   $_SESSION['query'] = 1;
   $sql = 'SELECT name FROM `floor`';
   $floors = mysqli_query($connection, $sql);
   while($floor = mysqli_fetch_assoc($floors)){
      $_SESSION['floor'][] = $floor['name'];
   }
}
if($_GET['query'] == 1){
   $sql = 'SELECT name FROM `coating`';
   $coatings = mysqli_query($connection, $sql);
   while($coating = mysqli_fetch_assoc($coatings)){
      $_SESSION['coating'][] = $coating['name'];
   }
}
if($_GET['query'] == 2){
   $_SESSION['query'] = 2;
   $sql = 'SELECT * FROM `sport`';
   $sports = mysqli_query($connection, $sql);
   while($sport = mysqli_fetch_assoc($sports)){
      $_SESSION['sport'][] = $sport;
   }
}
if($_GET['query'] == 2){
   $sql = 'SELECT * FROM `rank`';
   $ranks = mysqli_query($connection, $sql);
   while($rank = mysqli_fetch_assoc($ranks)){
      $_SESSION['rank'][] = $rank;
   }
}
if($_GET['query'] == 3){
   $_SESSION['query'] = 3;
   $sql = 'SELECT * FROM `trainer`';
   $trainers = mysqli_query($connection, $sql);
   while($trainer = mysqli_fetch_assoc($trainers)){
      $_SESSION['trainer'][] = $trainer;
   }
}
if($_GET['query'] == 3){
   $sql = 'SELECT * FROM `rank`';
   $ranks = mysqli_query($connection, $sql);
   while($rank = mysqli_fetch_assoc($ranks)){
      $_SESSION['rank'][] = $rank;
   }
}
if($_GET['query'] == 4){
   $_SESSION['query'] = 4;
   $sql = 'SELECT `sportsman`.`id` AS "id", `sportsman`.`name` AS "Ім\'я та Прізвище" , `sportsman`.`birth_date` AS `Дата народження` , `sport`.`name` AS `Спорт` ,`sportsclub`.`name` AS `Спортклуб`
   FROM `sportsman_activity`
   JOIN `trainer`
   ON `sportsman_activity`.`trainer_id` = `trainer`.`id`
   JOIN `sportsman`
   ON `sportsman_activity`.`sportsman_id` = `sportsman`.`id`
   JOIN `sportsclub`
   ON `sportsclub`.`id` = `sportsman`.`sportsclub_id`
   JOIN `sport`
   ON `sport`.`id` = `trainer`.`sport_id`
   WHERE `sportsman`.`id` IN (SELECT sportsman_id FROM `sportsman_activity` GROUP BY sportsman_id HAVING COUNT(sportsman_id) > 1) ORDER BY `sportsman`.`id`';
   $results = mysqli_query($connection, $sql);
   while($result = mysqli_fetch_assoc($results)){
      $_SESSION['result'][] = $result;
   }
}
if($_GET['query'] == 5){
   $_SESSION['query'] = 5;
   $sql = 'SELECT * FROM `sportsman`';
   $sportsmans = mysqli_query($connection, $sql);
   while($sportsman = mysqli_fetch_assoc($sportsmans)){
      $_SESSION['sportsman'][] = $sportsman;
   }
}
if($_GET['query'] == 6){
   $_SESSION['query'] = 6;
   $sql = 'SELECT * FROM `organizator`';
   $organizators = mysqli_query($connection, $sql);
   while($organizator = mysqli_fetch_assoc($organizators)){
      $_SESSION['organizator'][] = $organizator;
   }
}
if($_GET['query'] == 7){
   $_SESSION['query'] = 7;
   $sql = 'SELECT id, name FROM `contest`';
   $contests = mysqli_query($connection, $sql);
   while($contest = mysqli_fetch_assoc($contests)){
      $_SESSION['contest'][] = $contest;
   }
}
if($_GET['query'] == 8){
   $_SESSION['query'] = 8;
   $sql = 'SELECT id, name FROM `infrastructure`';
   $builds = mysqli_query($connection, $sql);
   while($build = mysqli_fetch_assoc($builds)){
      $_SESSION['build'][] = $build;
   }
}
if($_GET['query'] == 8){
   $sql = 'SELECT * FROM `sport`';
   $sports = mysqli_query($connection, $sql);
   while($sport = mysqli_fetch_assoc($sports)){
      $_SESSION['sport'][] = $sport;
   }
}
if($_GET['query'] == 9){
   $_SESSION['query'] = 9;
}
if($_GET['query'] == 10){
   $_SESSION['query'] = 10;
   $sql = 'SELECT * FROM `sport`';
   $sports = mysqli_query($connection, $sql);
   while($sport = mysqli_fetch_assoc($sports)){
      $_SESSION['sport'][] = $sport;
   }
}
if($_GET['query'] == 11){
   $_SESSION['query'] = 11;
}
if($_GET['query'] == 12){
   $_SESSION['query'] = 12;
}
if($_GET['query'] == 13){
   $_SESSION['query'] = 13;
}
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// echo '<pre>';
// print_r($_SESSION['floor']);
// echo '</pre>';
// echo '<pre>';
// print_r($_SESSION['coating']);
// echo '</pre>';
// echo '<pre>';
// print_r($_SESSION['result'][0]);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="index.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
   <div class="main">
      <div class="back">
         <a class="btn btn-primary menu__link" href="../menu.php">На головну</a>
      </div>
      <?php
         if($_GET['query'] == 1){
      ?>
      <div class="configuration">
         <form method="POST" action="handler.php" class="form">
            <label class="label" for="build">Виберіть тип будівлі:</label>
            <select class="form-select select" name="build" id="build">
               <option value="1">спортивні зали</option>
               <option value="2">корти</option>
               <option value="3">стадіони</option>
               <option value="4">арени</option>
            </select>
            <label class="label" for="specific">Виберіть особливості будівлі:</label>
            <select class="form-select select specific1" name="specific-gym">
               <option value="0">немає особливостей</option>
               <?php
               for($i = 0; $i < count($_SESSION['floor']); $i++){
               ?>
               <option value="<?= $i + 1?>">покриття підлоги спортивного залу: <?= $_SESSION['floor'][$i] ?></option>
               <?php
               }
               ?>
            </select>
            <select class="form-select select specific2" name="specific-court" style="display:none">
               <option value="0">немає особливостей</option>
               <?php
               for($i = 0; $i < count($_SESSION['coating']); $i++){
               ?>
               <option value="<?= $i +1 ?>">покриття даху корту: <?= $_SESSION['coating'][$i] ?></option>
               <?php
               }
               ?>
            </select>
            <div class="specific3" name="specific" style="display:none">
               <input type="radio" name="stadium" value="0">Кількість місць менше за введене</input> <br>
               <input checked type="radio" name="stadium" value="1">Кількість місць більше за введене</input> <br>
               <label class="label" for="seats">Введіть кількість місць стадіону:</label><br>
               <input class="form-control" type="number" name="seats" value = '0'>
            </div>
            <div class="specific4" name="specific" style="display:none">
               <input type="radio" name="arena" value="0">Площа менша за введену</input> <br>
               <input checked type="radio" name="arena" value="1">Площа більша за введену</input> <br>
               <label class="label" for="square">Введіть площу арени:</label><br>
               <input class="form-control" type="number" name="square" value = '0'>
            </div>
            <input class="btn btn-success submit" type="submit" value="Знайти">
         </form>
      </div>
      <?php
         }else if($_GET['query'] == 2){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="sport">Виберіть спорт:</label>
               <select class="form-select select" name="sport" id="sport">
                  <?php
                     foreach($_SESSION['sport'] as $sports){
                  ?>
                  <option value="<?=$sports['id']?>"><?= $sports['name'] ?></option>
                  <?php
                     }
                  ?>
               </select>
               <label class="label" for="rank">Виберіть мінімальний розряд</label>
               <select class="form-select select" name="rank">
                  <option value="0">будь-який розряд</option>
                  <?php
                  for($i = 0; $i < count($_SESSION['rank']); $i++){
                  ?>
                  <option value="<?= $_SESSION['rank'][$i]['id']?>"><?= $_SESSION['rank'][$i]['name'] ?></option>
                  <?php
                  }
                  ?>
               </select>
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }else if($_GET['query'] == 3){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="trainer">Оберіть тренера:</label>
               <select class="form-select select" name="trainer" id="trainer">
                  <?php
                     foreach($_SESSION['trainer'] as $trainers){
                  ?>
                  <option value="<?=$trainers['id']?>"><?= $trainers['name'] ?></option>
                  <?php
                     }
                  ?>
               </select>
               <label class="label" for="rank">Виберіть мінімальний розряд</label>
               <select class="form-select select" name="rank">
                  <option value="0">будь-який розряд</option>
                  <?php
                  for($i = 0; $i < count($_SESSION['rank']); $i++){
                  ?>
                  <option value="<?= $_SESSION['rank'][$i]['id']?>"><?= $_SESSION['rank'][$i]['name'] ?></option>
                  <?php
                  }
                  ?>
               </select>
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php 
         }else if($_GET['query'] == 4){
      ?>
      <?php
         }else  if($_GET['query'] == 5){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="sportsman">Оберіть спортсмена:</label>
               <select class="form-select select" name="sportsman" id="sportsman">
                  <?php
                     foreach($_SESSION['sportsman'] as $sportsman){
                  ?>
                  <option value="<?=$sportsman['id']?>"><?= $sportsman['name'] ?></option>
                  <?php
                     }
                  ?>
               </select>
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }else if($_GET['query'] == 6){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="begin">Введіть початкову дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="begin">
               <label class="label" for="end">Введіть кінцеву дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="end">
               <label class="label" for="organizator">Оберіть організатора:</label>
               <select class="form-select select" name="organizator" id="organizator">
               <option value="0">Організатор не важливий</option>
                  <?php
                     foreach($_SESSION['organizator'] as $organizator){
                  ?>
                  <option value="<?=$organizator['id']?>"><?= $organizator['name'] ?></option>
                  <?php
                     }
                  ?>
               </select>
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }else if($_GET['query'] == 7){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="contest">Оберіть змагання:</label>
               <select class="form-select select" name="contest" id="contest">
                  <?php
                     foreach($_SESSION['contest'] as $contest){
                  ?>
                  <option value="<?=$contest['id']?>"><?= $contest['name'] ?></option>
                  <?php
                     }
                  ?>
               </select>
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }else if($_GET['query'] == 8){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="build">Оберіть споруду:</label>
               <select class="form-select select" name="build" id="build">
                  <?php
                     foreach($_SESSION['build'] as $build){
                  ?>
                  <option value="<?=$build['id']?>"><?= $build['name'] ?></option>
                  <?php
                     }
                  ?>
               </select>
               <label class="label" for="sport">Оберіть спорт:</label>
               <select class="form-select select" name="sport">
                  <option value="0">Будь-який спорт</option>
                  <?php
                  for($i = 0; $i < count($_SESSION['sport']); $i++){
                  ?>
                  <option value="<?= $_SESSION['sport'][$i]['id']?>"><?= $_SESSION['sport'][$i]['name'] ?></option>
                  <?php
                  }
                  ?>
               </select>
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }else if($_GET['query'] == 9){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="begin">Введіть початкову дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="begin">
               <label class="label" for="end">Введіть кінцеву дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="end">
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }else if($_GET['query'] == 10){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="sport">Виберіть спорт:</label>
               <select class="form-select select" name="sport" id="sport">
                  <?php
                     foreach($_SESSION['sport'] as $sports){
                  ?>
                  <option value="<?=$sports['id']?>"><?= $sports['name'] ?></option>
                  <?php
                     }
                  ?>
               </select>
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }else if($_GET['query'] == 11){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="begin">Введіть початкову дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="begin">
               <label class="label" for="end">Введіть кінцеву дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="end">
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }else if($_GET['query'] == 12){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="begin">Введіть початкову дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="begin">
               <label class="label" for="end">Введіть кінцеву дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="end">
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }else if($_GET['query'] == 13){
      ?>
         <div class="configuration">
            <form method="POST" action="handler.php" class="form">
               <label class="label" for="begin">Введіть початкову дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="begin">
               <label class="label" for="end">Введіть кінцеву дату у форматі YYYY-MM-DD:</label>
               <input class="form-control" type="text" name="end">
               <input class="btn btn-success submit" type="submit" value="Знайти">
            </form>
         </div>
      <?php
         }
      ?>
      <?php if(count($_SESSION['result']) > 0){ ?>
      <div class="result">
         <table class="table table-striped table-dark">
            <thead>
               <tr>
                  <?php foreach($_SESSION['result'][0] as $key => $result){ ?>
                     <th scope="col"><?= $key ?></th>
                  <?php } ?>
               </tr>
            </thead>
            <tbody>
               <?php foreach($_SESSION['result'] as $result){ ?>
                  <tr>
                     <?php
                     foreach($result as $value ){
                     ?>
                     <td><?= $value ?></td>
                     <?php
                     }
                     ?>
                  </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
      <?php }else{ ?>
         <div class="non-table">Таблиця порожня</div>
         <?php } ?>
   </div>
   <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
   <script>
      let type = 1;
      console.log('type: ', type);
      $('#build').on('change', function (){
         $('.specific' + type).css('display', 'none');
         type = $('#build').val();
         $('.specific' + type).css('display', 'block');
      });
   </script>
</body>
</html>

<?php
$_SESSION['result'] = array();
?>