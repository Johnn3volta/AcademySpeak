<?php
/**
* @var $content array
*/
?>

<table border="1" width="80%" align="center" style="border-spacing: 0;border-collapse:collapse;text-align: center;">
    <tr>
        <th width="33%" style="padding: 15px 0;">Имя</th>
        <th width="33%">Телефон</th>
        <th width="33%">Во сколько перезвонить</th>
    </tr>
    <tr>
        <td style="padding: 15px 0;"> <?= $content['name'] ?></td>
        <td>  <?= $content['phone'] ?></td>
        <td>С <?= $content['time_from'] ?>:00 <br>
            До <?= $content['time_to'] ?>:00</td>
    </tr>

</table>
