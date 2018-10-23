function addSelect(id)
{
    var newSelect = document.createElement('select');
    var name = id.getAttribute("name");

    newSelect.setAttribute("name", name);
    newSelect.setAttribute("type", "number");
    newSelect.setAttribute("onchange","addSelect(this);")
    newSelect.className +="custom-select custom-select-sm";

    var parent = id.parentNode.id;

    newSelect.options[newSelect.options.length] = new Option("addMark",0);
    newSelect.options[newSelect.options.length] = new Option("2",2);
    newSelect.options[newSelect.options.length] = new Option("3",3);
    newSelect.options[newSelect.options.length] = new Option("4",4);
    newSelect.options[newSelect.options.length] = new Option("5",5);

    document.getElementById(parent).appendChild(newSelect);
}