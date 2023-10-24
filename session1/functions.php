<?php 
function dd($a)
{
  echo '<pre>';
  var_dump($a);
  die;
}
function connect_to_mysql()
{
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $connection = new mysqli($servername, $username, $password);

  // Check connection
  if ($connection->connect_error) {
    return false;
  }
  return $connection;

}
function get_lessons_in_this_time($profs_lessons, $lessons, $profs ,$k)
{
  $cell = "";
  foreach($profs_lessons as $prof_id => $lesson_ids){
    foreach($lesson_ids as $lesson_id){
        $program = $lessons[$lesson_id]['program'];
        if(in_array($k,$program)){
            $cell .= $lessons[$lesson_id]['title'].' ('.$profs[$prof_id]['name'].')';
        } 
    }
  }
  return $cell;
}