var taskNbr = 0;

function splitCookie() {
    var str = document.cookie;
    if (str == "")
        return ;
    str = str.replace("; ", ";");
    var arr = str.split(";");
    return (arr);
}

function insertTask (nbr, text) {
    if (text !== "" && text !== "null")
    {
        var newTask = $("<div id='" + nbr + "'class='TODO'>" + text + "</div>");
        newTask.click(dellTask);
        $("#ft_list").prepend(newTask);
        document.cookie = nbr + "=" + btoa(text) + ";expires=Mon, 30 Apr 2018 12:00:00 UTC;";
    }
}

$("button.add_item").click(function(){
    taskNbr++;
    var tmp = prompt("Write task");
    tmp = tmp.trim();
    if (tmp != "null" && tmp != "")
    {
        insertTask(taskNbr, tmp);
    }
});

function dellTask() {
    if (confirm("This action will delete this task. Are you sure?")) {
        var cName = $(this).attr("id");
        var cValue = $(this).text();
        document.cookie = cName + "=" + btoa(cValue) + ";expires=Thu, 26 Mar 2015 15:26:23 GMT;";
        $(this).remove();
    }
};

$(window).on('load', function(){
    var arr = splitCookie();
    for (i = 0; i < arr.length; i++)
    {
        var id = parseInt(arr[i], 10);
        var tmp = arr[i].substr(arr[i].indexOf("=") + 1);
        var str = atob(tmp);
        if (str !== "null")
        {
            insertTask(id, str);
            taskNbr = id;
        }
    }
});