<?php if ($currentPage == 'bd.php') : ?>

    <div class="menu">
        <ul style="list-style: none;">
            <li><a href="#1">Подготовка</a></li>
            <li><a href="#2">Выборка записей</a></li>
            <li><a href="#3">Логические операции</a></li>
            <li><a href="#4">Поля выборки</a></li>
            <li><a href="#5">Удаление записей</a></li>
            <li><a href="#6">Обновление записей</a></li>
            <li><a href="#7">Ограничение количества записей</a></li>
            <li><a href="#8">Подсчет количества</a></li>
            <li><a href="#9">Связывание таблиц</a></li>
            <li><a href="#10">Цепочка связанных таблиц</a></li>
            <li><a href="#11">Таблица связи</a></li>
            <li><a href="#12">Родственные связи</a></li>
            <li><a href="#13">Несколько потомков</a></li>
            <li><a href="#14">Практика на организацию БД</a></li>
            <li><a href="#15">Оформление вывода из БД</a></li>
            <li><a href="##delete">Удаление из БД</a></li>

        </ul>
    </div>

<?php elseif ($currentPage == 'index.php') : ?>

    <div class="menu">
        <ul style="list-style: none;">
            <li><a href="#1">Переменные </a></li>
            <li><a href="#2">Преобразование типов данных</a></li>
            <li><a href="#3">Длина массива</a></li>
            <li><a href="#4">Сокращенный синтаксис if-else</a></li>
            <li><a href="#5">Перебор массива и if</a></li>
            <li><a href="#6">Заполнение массивов</a></li>
            <li><a href="#7">Практика на циклы</a></li>
            <li><a href="#8">Строковые функции PHP</a></li>
            <li><a href="#9">Функции для времени-даты в PHP</a></li>
            <li><a href="#10">Пользовательские функции</a></li>
            <li><a href="#11">Регулярные выражения</a></li>
            <li><a href="#12">Рекурсия</a></li>
            <li><a href="#13">Цикл и вставка переменных</a></li>
            <li><a href="#14">Цикл и генерация таблиц</a></li>
            <li><a href="#15">Блок else в разрыве кода</a></li>
            <!-- <li><a href="##delete">Удаление из БД</a></li> -->

        </ul>
    </div>


<?php else : ?>

    <div class="menu">
        <ul style="list-style: none;">
            <li>просто</li>
            <li>пункты</li>
            <li>меню</li>
            <li>для</li>
            <li>задания</li>
            <li>с include</li>
            <li>и сайдбаром</li>
            <li></li>
            <li>пока</li>
            <li>не известно</li>
            <li>что тут</li>
            <li>будет</li>
            <li>и будет ли</li>
            <li>вообще</li>
        </ul>
    </div>

<?php endif ?>