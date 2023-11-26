<?php
$file_content = file_get_contents('../../../dir1/dir2/test.txt');
echo "Это файл files_exercises/test/test/relative_paths.php<br>";
echo $file_content . '<br>';
echo "Прочитан с использованеим относительного адреса ../../../dir1/dir2/test.txt";
?>
