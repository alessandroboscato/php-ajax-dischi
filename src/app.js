const $ = require("jquery");
const Handlebars = require("handlebars");

$(document).ready(function(){

$.ajax(
  {
    "url": "http://localhost:8888/php-ajax-dischi/api.php",
    "method": "GET",
    "success": function(data) {
      printResult(data);
    },
    "error": function() {
      alert("Error");
    }
  }
)

});


// ------------------------
// FUNCTIONS
// ------------------------

function printResult(data){
  var source = document.getElementById("entry-template").innerHTML;
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {

    var context = {
      "poster": data[i]["poster"],
      "title": data[i]["title"],
      "author": data[i]["author"],
      "year": data[i]["year"]
    }
    var html = template(context);
    $("#cds").append(html);
  }

}
