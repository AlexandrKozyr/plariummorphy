<div id="task_result1">

    <h4>Совпадения :</h4>
    {if count($result["task_1_1"]) > 0}
        <p>
            <b>
                1 слово:
            </b></br>
            {foreach  from=$result["task_1_1"] key=k item=v}
                {$k} ( к-во - {$v} )</br>
            {/foreach}

        </p>
        <p>
            <b>
                {$result["task_1_2"]["how_much_words"]} слова:
            </b></br>
            {foreach  from=$result["task_1_1"] key=k item=v}
                {$k}
            {/foreach}
            ( к-во - {$result["task_1_2"]["repeats"]} )
        </p>
    {else}
        <p>
            К сожалению, нет совпадений!
        </p>
    {/if}
</div>