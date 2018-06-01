//Call Ajax
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "data.php";
var asynchronous = true;

ajax.open(method, url, asynchronous);
//sending ajax request
ajax.send();

ajax.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    //converting JSON back to array
    var data = JSON.parse(this.responseText);
    // console.log(data); <= Debugging purpose

    //html value for <tbody>
    var html = "";

    //looping through the data
    for (var a = 0; a < data.length; a++) {
      var name = data[a].name;
      var brand = data[a].brand;
      var quality = data[a].quality;

      //appending at html
      html += "<tr>";
      html += "<td>" + name + "</td>";
      html += "<td>" + brand + "</td>";
      html += "<td>" + quality + "</td>";
      html += "</tr>";
    }

    //replacing the <tbody> of <table>
    document.getElementById('data').innerHTML = html;
  }
}
