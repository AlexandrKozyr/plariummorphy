<div id="task_result2">
    <h4>Склонения по падежам :</h4>
    {if (count($result["gramm"]) > 0)}
        {foreach from=$result["gramm"] key=k item=v}
            <p>
                <b>
                    {$result["content"]} - (Часть речи: {$v["pos"]}; Граматическая информация о слове: {implode(", ", $v["grammems"])}):
                </b>
            </p>
            {foreach from=$result["forms"][$k] key=k2lvl item=v2lvl}
                {if ($v2lvl)}
                    <p>
                        <b>
                            {$k2lvl} : 
                        </b>
                        {$v2lvl[0]}
                    </p>
                {/if}
            {/foreach}
        {/foreach}
    {else}
        <p>
           Вы ввели слово не в именительном падеже - пожалуйста проверьте правильность ввода!
        </p>
    {/if}
</div>