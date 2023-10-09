<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>اولین درس برنامه نویسی وب</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body dir="rtl">
        <h1>برنامه ترم اول سال تحصیلی 401-402 مهندسی نرم افزار</h1>
        <div class="row col-md-6 col-sm-12" style="margin-right:auto;margin-left:auto;">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>#</th>
                    <th>8-10</th>
                    <th>10-12</th>
                    <th>13:30-15:30</th>
                    <th>15:30-17:30</th>
                </tr>
                <?php
                $week_days = [
                    'شنبه',
                    'یکشنبه',
                    'دوشنبه',
                    'سه شنبه',
                    'چهارشنبه',
                ] 
                ?>
                <?php for($cnt=0;$cnt<5;$cnt++){ ?>
                    <tr>
                        <td><?php echo($week_days[$cnt]) ?></td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>