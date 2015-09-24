function ajx(mode)
{
    switch (mode)
    {
        case "taskOne":
            $.ajax({
                type: "POST",
                url: "/index.php?resultOne",
                data: 'text=' + $("#text").val(),
                dataType: "html",
                success: function (data) {

                    $("#result").html("");
                    $("#result").html(data);
                }
            });
            break;

        case "taskTwo":
            $.ajax({
                type: "POST",
                url: "/index.php?resultTwo",
                data: 'word=' + $("#word").val(),
                dataType: "html",
                success: function (data) {
                    $("#result").html("");
                    $("#result").html(data);
                }
            });
            break;
    }
}








