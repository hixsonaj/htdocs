<?php
  if(isset($_POST['address_input'])){
    $address = str_replace(" ","+",$_POST['address_input']) . "+WA" ."+USA";
    $combine = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&key=AIzaSyBWiyy7525I_u0SUjvYj_rWnVXjWHxXn-8";
    $request = file_get_contents($combine);
    $decode = json_decode($request, true);
    echo $decode["results"][0]["geometry"]["location"]["lat"] . "<br/>";
    echo $decode["results"][0]["geometry"]["location"]["lng"] . "<br/>";
  }
?>

<html>
<body>
<p id="lat"></p>
<p id="lng"></p>
<p id="demo"></p>

<script>
  document.addEventListener('DOMContentLoaded', ()=>{
    let url = "../582 Tree Area.kml";
    fetch(url)
    .then(response=>response.text())
    .then(data=>{
      let parser = new DOMParser();
      let xml = parser.parseFromString(data, "application/xml");
      let defaultElement = xml.getElementsByTagName('coordinates')[0].innerHTML;
      var subZero = defaultElement.replace(/,0/g, ",");
      var subPar = subZero.replace(/"/g, "");
      var split = subPar.split(",");
      document.getElementById("demo").innerHTML = split;
      var i;
      var poly = [];
      for (i = 0; i < (split.length / 2 - 1); i++){
        poly[i] = {x:parseFloat(split[(i * 2)]), y:parseFloat(split[(i * 2 + 1)])};
      }

      console.log(poly);

      function pointInPolygon(point, polygon){
        var crossCount = 0;
        for (var i = 0; i < polygon.length; i++) {
          if(polygon[i+1]){
            var nextPoint = polygon[i+1];
          } else {
            var nextPoint = polygon[0];
          }
          if ((polygon[i].y > point[1] && nextPoint.y < point[1]) || (polygon[i].y < point[1] && nextPoint.y > point[1])) {
            console.log("checking");
            var changeY = polygon[i].y - nextPoint.y;
            var changeX = polygon[i].x - nextPoint.x;
            var m = changeY / changeX;
            if ((m == "Infinity") || (m == "-Infinity")) {
              if (polygon[i].x < point[0]) {
                crossCount++;
              }
            } else {
              var b = -1 * m * polygon[i].x + polygon[i].y
              var lineX = (point[1] - b) / m;
              if (lineX < point[0]) {
                crossCount++;
              }
            }
          }
        }
        console.log(crossCount);
        if (1 == crossCount % 2) {
          console.log("INSIDE");
          return true;
        } else {
          console.log("OUTSIDE");
          return false
        }
      }

      var point = [<?php echo $decode["results"][0]["geometry"]["location"]["lng"] ?>, <?php echo $decode["results"][0]["geometry"]["location"]["lat"] ?>];

      pointInPolygon(point, poly);
      if (true) {
        
      }

    })
  });


</script>
</body>
</html>
