<?php
require_once('./functions.php');
$number_of_hours = 4; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>اولین درس برنامه نویسی وب</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <?php
    require('./lessons.php');
    require('./profs.php');
    require('./relations.php');
    // dd($profs_lessons);
    foreach($profs_lessons as $prof_id=>$lesson_ids)
    {
        echo($profs[$prof_id]['name']);
        foreach($lesson_ids as $lesson_id)
        {
            echo($lessons[$lesson_id]['title']);
        }
        echo('<br>');
    }
     
    ?>
    <body dir="rtl">
        <h1>برنامه ترم اول سال تحصیلی 401-402 مهندسی نرم افزار</h1>
        <div class="row col-md-6 col-sm-12" style="margin-right:auto;margin-left:auto;">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>#</th>
                    <th>8-10</th>
                    <th>10-12</th>
                    <th>13:30-15:30</th>
                    <th>15:30-17:30</th>
                </thead>
                <?php
                $week_days = [
                    'شنبه',
                    'یکشنبه',
                    'دوشنبه',
                    'سه شنبه',
                    'چهارشنبه',
                ] 
                ?>
                <tbody>
                <?php for($cnt=0;$cnt<5;$cnt++){ ?>
                    <tr>
                        <td><?php echo($week_days[$cnt]) ?></td>
                        <?php for($tcount = 0; $tcount<$number_of_hours;$tcount++) {
                            $k = $cnt*$number_of_hours+$tcount;
                            foreach($profs_lessons as $prof_id => $lesson_ids):
                                foreach($lesson_ids as $lesson_id):
                                    $program = $lessons[$lesson_id]['program'];
                                    if(in_array($k,$program)){
                            ?>
                                        <td><?php echo($lessons[$lesson_id]['title'].' ('.$profs[$prof_id]['name'].')'); ?></td>
                                    <?php } ?>
                                <?php endforeach ?>
                            <?php endforeach ?>
                        <?php  } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>