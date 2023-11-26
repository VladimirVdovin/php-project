<?php
$arr = [
    "воскресение", "понедельник", "вторник", "среда",
    "четверг", "пятница", "суббота"
];
?>

<label for="weekdays">Дни недели:</label><br>
<select id="weekdays" name="weekdays">
    <?php foreach ($arr as $elem) : ?>
        <option><?= $elem ?></option>
    <?php endforeach ?>
</select>