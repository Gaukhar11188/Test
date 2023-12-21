var ao = createAjaxObject();

function createAjaxObject() {
    var ao = null;
    try {
        ao = new XMLHttpRequest();
    } catch (e) {
        try {
            ao = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ao = new
                ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                alert("AJAX is not supported by your browser!")
                return false;
            }
        }
    }
    return ao;
}

function ButtonClick(){
    if(ao.readyState == 4 || ao.readyState == 0){
        ao.open("GET", "handler.php?name=" + name, true);
        ao.onreadystatechange = getData;                              // GET
        ao.send(null);
    }
}

function Process() {
    if (ao.readyState == 4 || ao.readyState == 0) {
        // name = document.getElementById("usertext").value;
        // ao.open("GET", "handler.php?name=" + name, true);
        // ao.onreadystatechange = getData;                              // GET
        // ao.send(null);

        let name = document.getElementById("usertext").value;
        ao.open("POST", "handler.php", true);
        ao.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ao.onreadystatechange = getData;
        ao.send("name="+name);
    }
}

function getData() {
    if (ao.readyState == 4 && ao.status == 200) {
        resp = ao.responseText;
        document.getElementById("resultButton").innerHTML = resp;
    }
}