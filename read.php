<html>
<div class="wrapper"></div>
</html>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script>
function makeHttpObject() {
  try {return new XMLHttpRequest();}
  catch (error) {}
  try {return new ActiveXObject("Msxml2.XMLHTTP");}
  catch (error) {}
  try {return new ActiveXObject("Microsoft.XMLHTTP");}
  catch (error) {}

  throw new Error("Could not create HTTP request object.");
}
var request = makeHttpObject();
request.open("GET", "https://www.jetsadabet.com/login", true);
request.send(null);
request.onreadystatechange = function() {
  if (request.readyState == 4)
    console.log(request.responseText);
    $(".wrapper").html(request.responseText);
    //$("#references").append(html);  
    var round = "จับยี่กี รอบที่ 37"
    var three = $("th:contains("+round+")").next()[0].innerHTML;
    var two = $("th:contains("+round+")").next().next()[0].innerHTML;
    var array = [];
    array.push(round);
    array.push(three.trim());
    array.push(two.trim());
    var message = array;
    //console.log(message)
    if(three.trim().length == 3)
    {
    window.location= "send.php?message="+message;
    }
};
</script>

