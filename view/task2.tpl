{include file='view/header.tpl'}
<div id="main_info">
    <div class="task">
        <h4>Задание 2.</h4>
        <p>
            Пользователь вводит слово в текстовое 
            поле. Необходимо найти и вывести все 
            доступные склонения данного слова.
        </p>
    </div>
    <div class="solution">
        <h4>Решение</h4>
        <p>
            Для решения даного задания было использовано библиотеку phpmorphy.
            Детальную информацию по сокращениям можете найти по ссылке: </br>
            <a href="http://phpmorphy.sourceforge.net/dokuwiki/manual-graminfo" target="_blank">http://phpmorphy.sourceforge.net/dokuwiki/manual-graminfo</a>
        </p>
        <p>
            Для тестирования приложения введите в поле ниже слово в именительном падеже.
            После чего нажмите на кнопку найти.
        </p>
        <form class="form-signin" id="formtosend">
            <div class="form-group">
                <label for="word"></label>
                <input type="text" class="form-control" id="word">
            </div>
        </form>
        <button class="btn" id="search" style="margin-right: 20px; clear: left" onclick="ajx('taskTwo')">Склонять</button>
    </div>
    <div id="result">
    </div>
</div>


