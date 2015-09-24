{include file='view/header.tpl'}
<div id="main_info">
    <div class="task">
        <h4>Задание 1.</h4>
        <p>
            Есть набор строк. Необходимо: 
            1.  Найти все совпадающие слова.
            2.  Найти количество строк, в 
            которых присутствуют все найденные 
            совпадающие слова.
        </p>
    </div>
    <div class="solution">
        <h4>Решение</h4>
        <p>
            Для тестирования приложения введите в поле ниже текст и выбирите вариант поиска.
            После чего нажмите на кнопку найти
        </p>
        <form class="form-signin">
            <textarea id ="text" class="form-control" rows="6"></textarea>
        </form>
        <button class="btn btn-large btn-info" id="search" style="margin-right: 20px; clear: left" onclick="ajx('taskOne');">Найти</button>
    </div>
    <div id="result">
    </div>
</div>

