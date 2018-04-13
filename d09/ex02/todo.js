const newTask = document.getElementsByTagName('button');
// var task[];
// newTask[0].addEventListener('click', () => 
// 	{
// 		var tmp = prompt("Write a task", "");
// 		if (tmp !== "")
// 		{
// 			// task.unshift(tmp);
// 			var div = document.createElement("div");
// 			var node = document.createTextNode(tmp);
// 			div.appendChild(node);
// 			document.getElementById('ft_list').appendChild(div);
// 		}

// 	});
var taskNbr = 0;
function addTask() {
	var tmp = prompt("Write a task", "");
	var toDo = document.getElementById('ft_list');
	if (tmp !== "" && tmp !== "null")
	{
		var li = document.createElement("li");
		// var node = document.createTextNode(tmp, {"id": "toDoTask", "name": taskNbr, "onclick": "delTask('name.value')"});
		var node = document.createTextNode(tmp);
		
		li.appendChild(node);
		toDo.insertBefore(li, toDo.firstChild);
		var addOnClick = document.getElementsByTagName("div");
		var att = document.createAttribute("onclick");
		att.value = "delTask(name.value)";
		addOnClick.setAttributeNode(att);
		var att = document.createAttribute("name");
		att.value = taskNbr;
		addOnClick.setAttributeNode(att);
		taskNbr++;
	}
};

function delTask(elem) {
	var res = confirm("After click ok you will delete this task. Are you sure?");
	if (res === TRUE)
	{
		var toDell = document.getElementsByName('elem');
    	// this.parentElement.removeChild(this);
    	toDell.remove();
	}
};
// function delTask(elem) {
// 	// var toDo = document.getElementById('ft_list');
// 	var res = confirm("After click ok you will delete this task. Are you sure?");
// 	if (res === TRUE)
// 	{
// 		elem.remove();
// 	}
// };