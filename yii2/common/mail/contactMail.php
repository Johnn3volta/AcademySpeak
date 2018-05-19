<?php
/**
 *@var $content array frontend\models\ContactForm
 */
?>
<table border="1" width="90%" align="center" style="border-spacing: 0;border-collapse:collapse;text-align: center;">
  <tr>
    <th width="33%" style="padding: 15px 0;">Имя</th>
    <th width="33%">E-mail</th>
    <th width="33%">Тема сообщения</th>
  </tr>
  <tr>
    <td style="padding: 15px 0;"> <?= $content['name'] ?></td>
    <td>  <?= $content['email'] ?></td>
    <td>  <?= $content['subject'] ?></td>
  </tr>
  <tr>
    <td style="padding: 10px;"> <strong>Сообщение</strong></td>
    <td colspan="2" style="padding: 30px 10px;"> <?= $content['message'] ?></td>
  </tr>
</table>