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

		// var addOnClick = document.getElementsByTagName("li");
		// var att = document.createAttribute("onclick");
		// att.value = "delTask(name.value)";
		// addOnClick.setAttributeNode(att);
		// var att = document.createAttribute("name");
		// att.value = taskNbr;
		// addOnClick.setAttributeNode(att);
		// taskNbr++;

		document.getElementById("ft_list").appendChild(li);
	    li.setAttribute("name", taskNbr++);
	    li.setAttribute("onclick", "delTask(3)");
	}
};

function delTask(elem) {
	confirm("After click ok you will delete this task. Are you sure?");
	var container = document.getElementById("ft_list");
	var del = container.getElementsByTagName("li");
	var myArr = [];
	for (var i = 0; i < del.length; i++)
	{
		var self = del[i];
		myArr.push(self);
	}
	console.log(myArr);
	// del.forEach(function(elem) {
	// 	if (strpos(del['outerHTML'], "elem") != NULL)
	// 	{
	// 		del.remove();
	// 		break ;
	// 	}
	// });
	for (var i = 0; i < myArr.length; i++) {
		console.log(myArr[i]['outerHTML'].indexOf('name="' + elem));
    	if (myArr[i]['outerHTML'].indexOf(elem) + 1 !== 0)
		{
			del[i].remove();
			break ;
		}
	}
	// del[0].remove();
	console.log(del);
    	// container.parentElement.removeChild(del[0]);
    	// toDell.remove();
	
};
// function delTask(elem) {
// 	// var toDo = document.getElementById('ft_list');
// 	var res = confirm("After click ok you will delete this task. Are you sure?");
// 	if (res === TRUE)
// 	{
// 		elem.remove();
// 	}
// };