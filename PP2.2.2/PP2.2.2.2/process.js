function processPHP(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var response = JSON.parse(this.responseText);
        // xử lý dữ liệu trả về ở đây
    }   
    };
    xhttp.open("GET", "form.php", true);
    xhttp.send();
}
