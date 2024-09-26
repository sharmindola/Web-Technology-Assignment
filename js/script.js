function validateForm() {

    emptyVal();
    if ( emptyVal()) {
        return true;
    } else {
        return false;
    }
}

function emptyVal() {
    var name = document.getElementById("name").value;
    var category = document.getElementById("category").value;
    var description = document.getElementById("description").value;
    var price = document.getElementById("price").value; 
    var quantity = document.getElementById("quantity").value;
    var image = document.getElementById("img").value;
    var status = document.getElementById("status").value;

    if (name === "" || category === "" || description === "" || price === "" || quantity === "" || image === "" || status === "") {
        document.getElementById("emptyout").innerHTML = "All fields are mandatory.";
        return false;
    }
    return true;
}

function searchProduct(){

    var id = document.getElementById("search").value;
    var xttp= new XMLHttpRequest();
    
    xttp.onreadystatechange = function () {
    if(this.readyState==4 && this.status==200)
        document.getElementById("show").innerHTML = this.responseText;
    
    };
    
    
    xttp.open("GET","../control/searchcontrol.php?search="+id,true);
    xttp.send();
}



