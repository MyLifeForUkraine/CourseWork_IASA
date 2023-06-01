<?php
session_start();
require_once 'include/config.php';

   // $floors = mysqli_query($connection, 'SELECT * FROM `floor`');
   // while ($floor = mysqli_fetch_assoc($floors)) {
      
   // }

   // $elements = ['IOC','FIFA','IAAF','FIBA','IIHF','ITF','FIA','FINA','UWW','UCI','FIE','IGF','AIBA'
   // 'FISA'
   // 'FIG'
   // 'World Rugby'
   // 'FIBA 3x3'
   // 'FINA'
   // 'FIDE'
   // 'IHF'];
//    $elements = array(
//       "IOC",
//       "FIFA",
//       "IAAF",
//       "FIBA",
//       "IIHF",
//       "ITF",
//       "FIA",
//       "FINA",
//       "UWW",
//       "UCI",
//       "FIE",
//       "IGF",
//       "AIBA",
//       "FISA",
//       "FIG",
//       "World Rugby",
//       "FIBA 3x3",
//       "FINA",
//       "FIDE",
//       "IHF"
//   );
// $elements = array(
//    "Футбол",
//    "Баскетбол",
//    "Теніс",
//    "Гольф",
//    "Бейсбол",
//    "Хокей на льоду",
//    "Бокс",
//    "Легка атлетика",
//    "Плавання",
//    "Гімнастика",
//    "Волейбол",
//    "Боротьба",
//    "Фехтування",
//    "Бадмінтон",
//    "Стрільба",
//    "Єздовий спорт",
//    "Аеробіка",
//    "Регбі",
//    "Шахи",
//    "Бобслей"
// );
// $elements = array(
//    "Real Madrid",
//    "Los Angeles Lakers",
//    "New York Yankees",
//    "FC Barcelona",
//    "Chicago Bulls",
//    "New England Patriots",
//    "Chelsea FC",
//    "Golden State Warriors",
//    "Manchester United",
//    "Toronto Maple Leafs",
//    "Bayern Munich",
//    "Los Angeles Dodgers",
//    "Chicago Blackhawks",
//    "Boston Celtics",
//    "New York Giants",
//    "Liverpool FC",
//    "Montreal Canadiens",
//    "AC Milan",
//    "Miami Heat",
//    "Dallas Cowboys"
// );

   //    $sportsmen = array(
   //       array("Roger Federer", 39),
   //       array("Serena Williams", 40),
   //       array("Lionel Messi", 34),
   //       array("Cristiano Ronaldo", 36),
   //       array("LeBron James", 36),
   //       array("Usain Bolt", 35),
   //       array("Michael Phelps", 36),
   //       array("Simone Biles", 24),
   //       array("Tom Brady", 44),
   //       array("Lewis Hamilton", 36),
   //       array("Rafael Nadal", 35),
   //       array("Novak Djokovic", 34),
   //       array("Naomi Osaka", 23),
   //       array("Megan Rapinoe", 36),
   //       array("Virat Kohli", 33),
   //       array("Katie Ledecky", 24),
   //       array("Neeraj Chopra", 24),
   //       array("Simone Manuel", 24),
   //       array("Eliud Kipchoge", 36),
   //       array("Alex Morgan", 32),
   //       array("P.V. Sindhu", 26),
   //       array("Michael Jordan", 58),
   //       array("Usama Malik", 22),
   //       array("Serhiy Rebryk", 30),
   //       array("Martyna Zemlik", 28),
   //       array("Samantha Hill", 25),
   //       array("Dylan Patel", 21),
   //       array("Emily Chapman", 29),
   //       array("Daniel Wright", 31),
   //       array("Alicia Gray", 27),
   //       array("Igor Petrov", 26),
   //       array("Olivia Bailey", 24),
   //       array("Adrian Roberts", 29),
   //       array("Gabrielle Mills", 23),
   //       array("Alexey Ivanov", 27),
   //       array("Anastasia Kovalenko", 25),
   //       array("Erik Olsen", 32),
   //       array("Laura Fernandez", 28),
   //       array("Jakub Nowak", 24),
   //       array("Sophia Walker", 27),
   //       array("Maximilian Weber", 29),
   //       array("Anna Kowalska", 25),
   //       array("Nikita Volkov", 26),
   //       array("Lina Andersson", 23),
   //       array("Rasmus Jørgensen", 27),
   //       array("Julia Gonzalez", 24),
   //       array("Sebastian Müller", 28),
   //       array("Marta Costa", 25),
   //       array("Andrei Popov", 26),
   //       array("Sofia López", 23),
   //       array("Mariusz Nowakowski", 29),
   //       array("Emma Smith", 25),
   //       array("Ivan Petrovic", 27),
   //       array("Olga Ivanova", 24),
   //       array("Victor Garcia", 28),
   //       array("Elena Vasileva", 25),
   //       array("Oscar Andersson", 26),
   //       array("Emilia Sánchez", 23),
   //       array("Jan Novák", 29),
   //       array("Camila Rodrigues", 25),
   //       array("Daniel Schmidt", 27),
   //       array("Sophie Leclerc", 24),
   //       array("Gustav Johansson", 28),
   //       array("Maria Costa", 25),
   //       array("David Novotný", 26),
   //       array("Laura Fernández", 23),
   //       array("Javier Pérez", 29),
   //       array("Marta Silva", 25),
   //       array("Aleksandr Ivanov", 27),
   //       array("Anastasia Petrova", 24),
   //       array("Andreas Müller", 28),
   //       array("Emma Wilson", 25),
   //       array("Anton Petrov", 26),
   //       array("Katarina Ivanova", 23),
   //       array("Vladimir Smirnov", 29),
   //       array("Elena Petrova", 25),
   //       array("Tobias Lindberg", 26),
   //       array("Emma Nielsen", 23),
   //       array("Sebastian Hoffmann", 29),
   //       array("Sophia Costa", 25),
   //       array("Martin Andersen", 27),
   //       array("Olga Smirnova", 24),
   //       array("Niklas Johansson", 28),
   //       array("Lara Fernández", 25),
   //       array("Jonas Schmitt", 27),
   //       array("Julia Müller", 24),
   //       array("Nico Bauer", 28),
   //       array("Luiza Silva", 25),
   //       array("Roman Sokolov", 26),
   //       array("Sara Nilsson", 23),
   //       array("Peter Andersen", 29),
   //       array("Laura Costa", 25),
   //       array("Petr Smirnov", 26),
   //       array("Klara Nováková", 23),
   //       array
   //    );
   //   
   //   echo count($sportsmen);

   // for($i = 0; $i < count($elements); $i++){
   //       $sql = 'INSERT INTO `sportsclub` (`id`, `name`) VALUES (NULL, "' . $elements[$i] .'");';
   //       mysqli_query($connection, $sql);
   //    //    if ($connection->query($sql) === TRUE) {
   //    //       echo "Запис " . ($i + 1) . " успішно додано<br>";
   //    //   } else {
   //    //       echo "Помилка: " . $sql . "<br>" . $connection->error;
   //    //   }
   //    }
      // $sportClubs = array(
      //    "Real Madrid",
      //    "Los Angeles Lakers",
      //    "New York Yankees",
      //    "FC Barcelona",
      //    "Chicago Bulls",
      //    "New England Patriots",
      //    "Chelsea FC",
      //    "Golden State Warriors",
      //    "Manchester United",
      //    "Toronto Maple Leafs",
      //    "Bayern Munich",
      //    "Los Angeles Dodgers",
      //    "Chicago Blackhawks",
      //    "Boston Celtics",
      //    "New York Giants",
      //    "Liverpool FC",
      //    "Montreal Canadiens",
      //    "AC Milan",
      //    "Miami Heat",
      //    "Dallas Cowboys"
      // ); 
      // $sportClubs = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
      // $_SESSION['clubs'] = array();
      // for ($i = 0; $i < 50; $i++) {
      //    $randomClub = $sportClubs[array_rand($sportClubs)];
      //    $_SESSION['clubs'][] = $randomClub;
      // }
      // echo '<pre>';
      // print_r($_SESSION['clubs']);
      // echo '</pre>';
   //   $new = $_POST['clubs'];
   // print_r($new);
//    $_SESSION['sportsmen'] = array();
//    for ($i = 0; $i < 100; $i++) {
//       $randomName = generateRandomName();
//       $randomDate = generateRandomDate();
//       $_SESSION['sportsmen'][]= array($randomName, $randomDate);
//   }
  
//   function generateRandomName() {
//       $firstNames = array("John", "Michael", "David", "Sarah", "Emma", "Olivia", "James", "Daniel", "Emily", "Sophia","Ivan","Elizabeth","Yurii","Magnus","Yan","Daria","Jack","Nancy", "Kan");
//       $lastNames = array("Smith", "Johnson", "Brown", "Lee", "Taylor", "Anderson", "Thomas", "Wilson", "Clark", "Walker","Black","Green","Carlsen","Li","Wan","Kasparov");
//       $firstName = $firstNames[array_rand($firstNames)];
//       $lastName = $lastNames[array_rand($lastNames)];
//       return $firstName . " " . $lastName;
//   }
  
//   function generateRandomDate() {
//       $startTimestamp = strtotime("1950-01-01");
//       $endTimestamp = strtotime("2005-12-31");
//       $randomTimestamp = mt_rand($startTimestamp, $endTimestamp);
//       return date("Y-m-d", $randomTimestamp);
//   }
//   echo '<pre>';
//   print_r($_SESSION['sportsmen']);
//    echo '</pre>';

   // for($i = 0; $i < 50; $i++){
   //       $sql = 'INSERT INTO `trainer` (`id`, `sport_id`, `name`, `birth_date`) VALUES (NULL, ' . $_SESSION['clubs'][$i] .', "' . $_SESSION['sportsmen'][$i][0] . '", "'. $_SESSION['sportsmen'][$i][1] .'");';
   //       // $sql = 'UPDATE `sportsman` SET `id` = ' . $i .' WHERE `sportsman`.`id` = ' . ($i + 100) ;
   //       // echo $sql;
   //       mysqli_query($connection, $sql);
   //       // echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, `{$_SESSION["sportsmen"][$i][0]}`, `{$_SESSION["sportsmen"][$i][1]}`,`{$_SESSION["clubs"][$i]}`);';
   //    //    if ($connection->query($sql) === TRUE) {
   //    //       echo "Запис " . ($i + 1) . " успішно додано<br>";
   //    //   } else {
   //    //       echo "Помилка: " . $sql . "<br>" . $connection->error;
   //    //   }
   //    // echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, "' . $_SESSION['sportsmen'][$i][0] .'", "' . $_SESSION['sportsmen'][$i][1] . '", '. $_SESSION['clubs'][1] .');';
   //    }
// $rareNames = array(
//    "Amara",
//    "Cassian",
//    "Elara",
//    "Finnian",
//    "Galadriel",
//    "Hadrian",
//    "Ione",
//    "Jareth",
//    "Kael",
//    "Liora",
//    "Maelis",
//    "Neriah",
//    "Ophelia",
//    "Peregrine",
//    "Quinlan",
//    "Ravenna",
//    "Soren",
//    "Thalia",
//    "Uriah",
//    "Vesper",
//    "Wren",
//    "Xanthe",
//    "Yara",
//    "Zephyr",
//    "Astraea",
//    "Bastian",
//    "Coralie",
//    "Dorian",
//    "Elysia",
//    "Freyja"
// );
// $rareSurnames = array(
//    "Ambrose",
//    "Bellamy",
//    "Calloway",
//    "Davenport",
//    "Everly",
//    "Fairchild",
//    "Graves",
//    "Hawthorne",
//    "Ingram",
//    "Jennings",
//    "Kensington",
//    "Lancaster",
//    "Montgomery",
//    "Nightingale",
//    "Pendleton",
//    "Quill",
//    "Rutherford",
//    "Stirling",
//    "Tremaine",
//    "Upton",
//    "Vale",
//    "Waverly",
//    "Xavier",
//    "York",
//    "Zephyr",
//    "Archer",
//    "Blair",
//    "Callow",
//    "Darcy",
//    "Emerson"
// );
//    $_SESSION['sportsmen'] = array();
//    for ($i = 0; $i < 50; $i++) {
//       $randomName = generateRandomName();
//       $randomDate = generateRandomDate();
//       $_SESSION['sportsmen'][]= array($randomName, $randomDate);
//   }
  
//   function generateRandomName() {
//    $rareNames = array(
//       "Amara",
//       "Cassian",
//       "Elara",
//       "Finnian",
//       "Galadriel",
//       "Hadrian",
//       "Ione",
//       "Jareth",
//       "Kael",
//       "Liora",
//       "Maelis",
//       "Neriah",
//       "Ophelia",
//       "Peregrine",
//       "Quinlan",
//       "Ravenna",
//       "Soren",
//       "Thalia",
//       "Uriah",
//       "Vesper",
//       "Wren",
//       "Xanthe",
//       "Yara",
//       "Zephyr",
//       "Astraea",
//       "Bastian",
//       "Coralie",
//       "Dorian",
//       "Elysia",
//       "Freyja"
//    );
//    $rareSurnames = array(
//       "Ambrose",
//       "Bellamy",
//       "Calloway",
//       "Davenport",
//       "Everly",
//       "Fairchild",
//       "Graves",
//       "Hawthorne",
//       "Ingram",
//       "Jennings",
//       "Kensington",
//       "Lancaster",
//       "Montgomery",
//       "Nightingale",
//       "Pendleton",
//       "Quill",
//       "Rutherford",
//       "Stirling",
//       "Tremaine",
//       "Upton",
//       "Vale",
//       "Waverly",
//       "Xavier",
//       "York",
//       "Zephyr",
//       "Archer",
//       "Blair",
//       "Callow",
//       "Darcy",
//       "Emerson"
//    );
//    $rareName = $rareNames[array_rand($rareNames)];
//    $rareSurname = $rareSurnames[array_rand($rareSurnames)];
//       return $rareName . " " . $rareSurname;
//   }
  
  function generateRandomDate() {
      // $startTimestamp = strtotime("1950-01-01");
      // $endTimestamp = strtotime("2005-12-31");
      $startTimestamp = strtotime("2010-01-01");
      $endTimestamp = strtotime("2022-12-31");
      $randomTimestamp = mt_rand($startTimestamp, $endTimestamp);
      return date("Y-m-d", $randomTimestamp);
  }
//   echo '<pre>';
//   print_r($_SESSION['sportsmen']);
//    echo '</pre>';
//   echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, "' . $_SESSION['sportsmen'][1][0] .'", "' . $_SESSION['sportsmen'][1][1] . '", '. $_SESSION['clubs'][1] .');';
// echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, `{$_SESSION["sportsmen"][$i][0]}`, `{$_SESSION["sportsmen"][$i][1]}`,`{$_SESSION["clubs"][$i]}`);';
// $_SESSION['spotsman'] = array();
// for($i = 1; $i < 201; $i++){
//    $_SESSION['spotsman'][] = $i;
// }
// $_SESSION['contest'] = array();
// for($i = 0; $i < 500; $i++){
//    $_SESSION['trainerRAND'][] = $_SESSION['trainer'][array_rand($_SESSION['trainer'])];
//    // $randomClub = $sportClubs[array_rand($sportClubs)];
//    // $_SESSION['clubs'][] = $randomClub;
// }

// echo '<pre>';
// print_r($_SESSION['spotsman']);
// echo '</pre>';

// echo '<pre>';
// print_r($_SESSION['trainer']);
// echo '</pre>';
// echo '<pre>';
// print_r($_SESSION['rozrad']);
// echo '</pre>';
// echo '<pre>';
// print_r($_SESSION['rozradRAND']);
// echo '</pre>';
// echo '<pre>';
// print_r($_SESSION['spotsmanRAND']);
// echo '</pre>';
// echo '<pre>';
// print_r($_SESSION['trainerRAND']);
// echo '</pre>';


// for($i = 1; $i < 484; $i++){
//    // $sql = 'INSERT INTO `sportsman_activity` (`sportsman_id`, `trainer_id`, `rank_id`) VALUES ( ' . $_SESSION['spotsmanRAND'][$i]. ', ' . $_SESSION['trainerRAND'][$i] . ', '. $_SESSION['rozradRAND'][$i] .');';
//    $sql = 'UPDATE `sportsman_activity` SET `id` = ' . $i .' WHERE `sportsman_activity`.`id` = ' . ($i + 1497) ;
//    // echo $sql;
//    // $sqls = 'SELECT * FROM `sportsman_activity` WHERE sportsman_id = ' . $_SESSION['spotsmanRAND'][$i] . ' AND `trainer_id` = ' . $_SESSION['trainerRAND'][$i] ;
//    // if(mysqli_num_rows(mysqli_query($connection, $sqls)) === 0){
//    //    mysqli_query($connection, $sql);
//    // }
//    // echo $sqls;
//    mysqli_query($connection, $sql);
//    // echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, `{$_SESSION["sportsmen"][$i][0]}`, `{$_SESSION["sportsmen"][$i][1]}`,`{$_SESSION["clubs"][$i]}`);';
// //    if ($connection->query($sql) === TRUE) {
// //       echo "Запис " . ($i + 1) . " успішно додано<br>";
// //   } else {
// //       echo "Помилка: " . $sql . "<br>" . $connection->error;
// //   }
// // echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, "' . $_SESSION['sportsmen'][$i][0] .'", "' . $_SESSION['sportsmen'][$i][1] . '", '. $_SESSION['clubs'][1] .');';
// }







$competitionNames = array(
   "Кубок Чемпіонів",
   "Ліга Майстрів",
   "Чемпіонат України",
   "Кубок України",
   "Суперкубок України",
   "Кубок Президента",
   "Кубок Ліги",
   "Міжнародний турнір",
   "Чемпіонат світу",
   "Олімпійські ігри",
   "Кубок націй",
   "Кубок Європи",
   "Міжнародний кубок",
   "Суперліга",
   "Кубок Львова",
   "Кубок Києва",
   "Кубок Одеси",
   "Кубок Харкова",
   "Кубок Дніпра",
   "Кубок Закарпаття",
   "Кубок Прикарпаття",
   "Кубок Полтави",
   "Кубок Волині",
   "Кубок Черкас",
   "Кубок Чернігова",
   "Кубок Запоріжжя",
   "Кубок Кривого Рогу",
   "Кубок Миколаєва",
   "Кубок Сум",
   "Кубок Тернополя",
   "Кубок Херсона",
   "Кубок Чернівців",
   "Кубок Рівного",
   "Кубок Хмельницького",
   "Кубок Житомира",
   "Кубок Івано-Франківська",
   "Кубок Севастополя",
   "Кубок Маріуполя",
   "Кубок Краматорська",
   "Кубок Слов'янська"
);


// $stadiumNames = array(
//    "Олімпійський",
//    "Динамо",
//    "Арена Львів",
//    "Металіст",
//    "Донбас Арена",
//    "НСК Олімпійський",
//    "Арена Харків",
//    "Дніпро-Арена",
//    "Лобановський",
//    "Маріуполь",
//    "Арена Львов",
//    "Оболонь Арена",
//    "Металург",
//    "Миколаїв",
//    "Республіканський",
//    "Центральний",
//    "Авангард",
//    "Юність",
//    "Віктор Банніков",
//    "Володимир Бойко"
// );

// $sportsman1 = [18,31,60,61,68,70,71,75,85,93,119,122,131,137,150,155,157,176,194];
// $sportsman2 = [124,126,186];
// $sportsman3 = [9,13,20,31,35,41,42,42,46,49,51,56,62,62,74,82,97,102,109,112,143,143,153,172,172,182,187,188,191,192,196,200];
// $sportsman4 = [11,17,39,79,130,132,134,143,147,159,167,170];
// $sportsman5 = [9,16,17,23,28,29,41,47,48,56,58,63,93,103,121,121,124,129,131,132,135,137,137,138,147,154,155,156,158,162,166,169,170,181,189,192,193];
// $sportsman6 = [1,8,10,10,11,17,20,49,56,68,70,73,92,99,108,109,117,122,131,132,138,140,164,165,176,191,195];
// $sportsman7 = [5,13,14,14,24,30,31,35,50,52,53,61,81,81,85,85,87,91,91,102,114,116,118,126,127,136,137,140,143,148,151,152,153,155,157,161,163,164,165,171,171,178,186,187,189,190,195,195,198];
// $sportsman8 = [];
// $sportsman9 = [];
// $sportsman10 = [];
// $sportsman11 = [];
// $sportsman12 = [];
// $sportsman13 = [];
// $sportsman14 = [];
// $sportsman15 = [];
// $sportsman16 = [];
// $sportsman17 = [];
// $sportsman18 = [];
// $sportsman19 = [];
// $sportsman20 = [];

// for($i = 1; $i < 21; $i++){
//    // $sql = 'INSERT INTO `sportsman_activity` (`sportsman_id`, `trainer_id`, `rank_id`) VALUES ( ' . $_SESSION['spotsmanRAND'][$i]. ', ' . $_SESSION['trainerRAND'][$i] . ', '. $_SESSION['rozradRAND'][$i] .');';
//    // $sql = 'UPDATE `sportsman_activity` SET `id` = ' . $i .' WHERE `sportsman_activity`.`id` = ' . ($i + 1497) ;
//    // echo $sql;
//    $sql = 'SELECT DISTINCT `sportsman_activity`.`sportsman_id` FROM `trainer` JOIN `sportsman_activity` ON `trainer`.`id` = `sportsman_activity`.`trainer_id` WHERE `trainer`.`sport_id` =' . $i . ' ORDER BY `sportsman_activity`.`sportsman_id`;';
//    // $sqls = 'SELECT * FROM `sportsman_activity` WHERE sportsman_id = ' . $_SESSION['spotsmanRAND'][$i] . ' AND `trainer_id` = ' . $_SESSION['trainerRAND'][$i] ;
//    // if(mysqli_num_rows(mysqli_query($connection, $sqls)) === 0){
//    //    mysqli_query($connection, $sql);
//    // }
//    // echo $sql;
//    // echo $sqls;
//    $results = mysqli_query($connection, $sql);
//    $_SESSION['sportsman' . $i] = array();
//    while($result = mysqli_fetch_assoc($results)){
//       // echo '<pre>';
//       // print_r($result);
//       // echo '</pre>';
//       // echo $result['sportsman_id'];
//       $_SESSION['sportsman' . $i][] = $result['sportsman_id'];
//    }
//    echo $i . '<br>';
//    echo '<pre>';
//    print_r($_SESSION['sportsman' . $i]);
//    echo '</pre>';
//    // echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, `{$_SESSION["sportsmen"][$i][0]}`, `{$_SESSION["sportsmen"][$i][1]}`,`{$_SESSION["clubs"][$i]}`);';
// //    if ($connection->query($sql) === TRUE) {
// //       echo "Запис " . ($i + 1) . " успішно додано<br>";
// //   } else {
// //       echo "Помилка: " . $sql . "<br>" . $connection->error;
// //   }
// // echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, "' . $_SESSION['sportsmen'][$i][0] .'", "' . $_SESSION['sportsmen'][$i][1] . '", '. $_SESSION['clubs'][1] .');';
// }
// $type = array(1,2,3,4,5);
// $twelve = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
// for($i = 1; $i < 40; $i++){
//    // $sql = 'INSERT INTO `sportsman_activity` (`sportsman_id`, `trainer_id`, `rank_id`) VALUES ( ' . $_SESSION['spotsmanRAND'][$i]. ', ' . $_SESSION['trainerRAND'][$i] . ', '. $_SESSION['rozradRAND'][$i] .');';
//    // $sql = 'UPDATE `sportsman_activity` SET `id` = ' . $i .' WHERE `sportsman_activity`.`id` = ' . ($i + 1497) ;
//    // echo $sql;
//    // $sql = 'SELECT DISTINCT `sportsman_activity`.`sportsman_id` FROM `trainer` JOIN `sportsman_activity` ON `trainer`.`id` = `sportsman_activity`.`trainer_id` WHERE `trainer`.`sport_id` =' . $i . ' ORDER BY `sportsman_activity`.`sportsman_id`;';
//    // $sqls = 'SELECT * FROM `sportsman_activity` WHERE sportsman_id = ' . $_SESSION['spotsmanRAND'][$i] . ' AND `trainer_id` = ' . $_SESSION['trainerRAND'][$i] ;
//    // if(mysqli_num_rows(mysqli_query($connection, $sqls)) === 0){
//    //    mysqli_query($connection, $sql);
//    // }
//    $sql = 'INSERT INTO `contest` (`name`, `type_id`, `sport_id`,`golden_id`,`silver_id`,`bronze_id`,`build_id`, `data`,`organizator_id`) 
//    VALUES ("' . $competitionNames[$i] . '", ' . $type[array_rand($type)] . ',' . (floor($i/2) +1) .',' . $_SESSION['sportsman' . (floor($i/2) +1)][array_rand($_SESSION['sportsman' . (floor($i/2) +1)])] . ',' . $_SESSION['sportsman' . (floor($i/2) +1)][array_rand($_SESSION['sportsman' . (floor($i/2) +1)])] . ','. $_SESSION['sportsman' . (floor($i/2) +1)][array_rand($_SESSION['sportsman' . (floor($i/2) +1)])] . ','. $twelve[array_rand($twelve)] . ',"' .generateRandomDate() . '", ' . $twelve[array_rand($twelve)] . ')';
//    // echo $sql . '<br>';
//    // mysqli_query($connection, $sql);
//    // echo $sqls;
//    // $results = mysqli_query($connection, $sql);
//    // $_SESSION['sportsman' . $i] = array();
//    // while($result = mysqli_fetch_assoc($results)){
//    //    // echo '<pre>';
//    //    // print_r($result);
//    //    // echo '</pre>';
//    //    // echo $result['sportsman_id'];
//    //    $_SESSION['sportsman' . $i][] = $result['sportsman_id'];
//    // }
//    // echo $i . '<br>';
//    echo '<pre>';
//    print_r($_SESSION['sportsman' . $i]);
//    echo '</pre>';
//    // echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, `{$_SESSION["sportsmen"][$i][0]}`, `{$_SESSION["sportsmen"][$i][1]}`,`{$_SESSION["clubs"][$i]}`);';
// //    if ($connection->query($sql) === TRUE) {
// //       echo "Запис " . ($i + 1) . " успішно додано<br>";
// //   } else {
// //       echo "Помилка: " . $sql . "<br>" . $connection->error;
// //   }
// // echo 'INSERT INTO `sportsman` (`id`, `name`, `birth_date`, `sportsclub_id`) VALUES (NULL, "' . $_SESSION['sportsmen'][$i][0] .'", "' . $_SESSION['sportsmen'][$i][1] . '", '. $_SESSION['clubs'][1] .');';
// }

// for($i = 1; $i <= 40; $i++){
//    foreach($_SESSION['sportsman' . ceil($i/2)] as $sportsman_id){
//       $sql = 'INSERT INTO `contest_composition` (`contest_id`,	`sportsman_id`) VALUES (' . $i . ', ' . $sportsman_id .')';
//       // echo $sql . '<br>';
//       mysqli_query($connection, $sql);
//    }
   
// }
?>

