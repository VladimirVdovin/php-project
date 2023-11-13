
<?php if ($CurrentPage == 'bd.php'): ?>

<div class="menu">
    <ul style="list-style: none;">
        <li><a href="#1">Подготовка</a></li><br>
        <li><a href="#2">Выборка записей</a></li><br>
        <li><a href="#3">Логические операции</a></li><br>
        <li><a href="#4">Поля выборки</a></li><br>
        <li><a href="#5">Удаление записей</a></li><br>
        <li><a href="#6">Обновление записей</a></li><br>
        <li><a href="#7">Ограничение количества записей</a></li><br>
        <li><a href="#8">Подсчет количества</a></li><br>
        <li><a href="#9">Связывание таблиц</a></li><br>
        <li><a href="#10">Цепочка связанных таблиц</a></li><br>
        <li><a href="#11">Таблица связи</a></li><br>
        <li><a href="#12">Родственные связи</a></li><br>
        <li><a href="#13">Несколько потомков</a></li><br>
        <li><a href="#14">Практика на организацию БД</a></li><br>
        <li><a href="#15">Оформление вывода из БД</a></li><br>
        <li><a href="##delete">Удаление из БД</a></li><br>

    </ul>
</div>

<?php elseif ($CurrentPage == 'index.php'): ?>

<div class="menu">
    <ul style="list-style: none;">
        <li><a href="#1">Переменные </a></li><br>
        <li><a href="#2">Преобразование типов данных</a></li><br>
        <li><a href="#3">Длина массива</a></li><br>
        <li><a href="#4">Сокращенный синтаксис if-else</a></li><br>
        <li><a href="#5">Перебор массива и if</a></li><br>
        <li><a href="#6">Заполнение массивов</a></li><br>
        <li><a href="#7">Практика на циклы</a></li><br>
        <li><a href="#8">Строковые функции PHP</a></li><br>
        <li><a href="#9">Функции для времени-даты в PHP</a></li><br>
        <li><a href="#10">Пользовательские функции</a></li><br>
        <li><a href="#11">Регулярные выражения</a></li><br>
        <li><a href="#12">Рекурсия</a></li><br>
        <li><a href="#13">Цикл и вставка переменных</a></li><br>
        <li><a href="#14">Цикл и генерация таблиц</a></li><br>
        <li><a href="#15">Блок else в разрыве кода</a></li><br>
        <!-- <li><a href="##delete">Удаление из БД</a></li><br> -->

    </ul>
</div>


<?php else: ?>

<div class="menu">
    <ul style="list-style: none;">
        <li>просто</li>
        <li>пункты</li>
        <li>меню</li>
        <li>для</li>
        <li>задания</li>
        <li>с include</li>
        <li>и слайдбаром</li>
        <li><br></li>
        <li>пока</li>
        <li>не известно</li>
        <li>что тут</li>
        <li>будет</li>
        <li>и будет ли</li>
        <li>вообще</li>
    </ul>
</div>

<?php endif ?>