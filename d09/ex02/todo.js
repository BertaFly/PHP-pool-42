var taskNbr = 0;

function splitCookie() {
    var str = document.cookie;
    if (str == "")
        return ;
    str = str.replace("; ", ";");
    var arr = str.split(";");
    return (arr);
}

function delNode(node, nbr, text) {
    node.parentNode.removeChild(node);
    var search = nbr + "=" + btoa(text);
    document.cookie = search + ";expires=Thu, 26 Mar 2015 15:26:23 GMT;";
}

function insertTask (nbr, text) {
    var task = document.createElement('div');
    task.setAttribute("id", nbr);
    task.setAttribute("class", "TODO");
    task.innerHTML = text;
    task.addEventListener('click', function(event) {
        if (event.target.tagName.toLowerCase() === 'div') {
            if (confirm("This action will delete this task. Are you sure?")) {
                var node = document.getElementById(event.target.id);
                var search = event.target.id;
                if (node.parentNode) {
                	delNode(node, search, node.nodeValue);
                }
            }
        }
    })
    return task;
}

window.onload = function(){
	var arr = splitCookie();
    var holder = document.getElementById("ft_list");
    for (i = 0; i < arr.length; i++)
	{
		var id = parseInt(arr[i], 10);
        var tmp = arr[i].substr(arr[i].indexOf("=") + 1);
        var str = atob(tmp);
        if (str !== "null")
        {
            var task = insertTask(id, str);
            holder.insertBefore(task, holder.firstChild);
            taskNbr = id;
        }
    }
};

function addTask() {
    taskNbr++;
	var holder = document.getElementById("ft_list");
	var tmp = prompt("Write task");
	tmp = tmp.trim();
	if (tmp != "null" && tmp != "")
	{
		var task = insertTask(taskNbr, tmp);
        document.cookie = taskNbr + "=" + btoa(tmp) + ";expires=Mon, 30 Apr 2018 12:00:00 UTC;";
        holder.insertBefore(task, holder.firstChild);
    }
}