// address_to_latlng.php before trouble shooting
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
<p id="demo"></p>
<script>
  document.addEventListener('DOMContentLoaded', ()=>{
    let url = "../Tree Area 582.kml";
    fetch(url)
    .then(response=>response.text())
    .then(data=>{
      let parser = new DOMParser();
      let xml = parser.parseFromString(data, "application/xml");
      let defaultElement = xml.getElementsByTagName('coordinates')[0].innerHTML;
      var subZero = defaultElement.replace(/,0/g, ",");
      var subSpace = subZero.replace(/ /g, "");
      var split = subSpace.split(",");
      console.log(split);
      document.getElementById("demo").innerHTML = split;
      var i;
      var poly = [];
      for (i = 0; i < (split.length / 2 - 1); i++){
        poly[i] = {x: split[(i * 2)], y: split[(i * 2 + 1)]};
      }
      console.log(poly);
      alert(isPointInPoly(poly, {x: "<?php echo $decode["results"][0]["geometry"]["location"]["lng"]; ?>", y: "<?php echo $decode["results"][0]["geometry"]["location"]["lat"]; ?>"}) ? "in" : "out");
    })
  });


  function isPointInPoly(poly, pt){
      for(var c = false, i = -1, l = poly.length, j = l - 1; ++i < l; j = i)
          ((poly[i].y <= pt.y && pt.y < poly[j].y) || (poly[j].y <= pt.y && pt.y < poly[i].y))
          && (pt.x < (poly[j].x - poly[i].x) * (pt.y - poly[i].y) / (poly[j].y - poly[i].y) + poly[i].x)
          && (c = !c);
      return c;
  }

</script>
</body>
</html>


-122.256076,47.763049,0
-122.243816,47.763029,0
-122.243057,47.757704,0
-122.259657,47.757337,0
-122.256076,47.763049,0


1,1,0
122.251005,1,0
122.251005,47.760463,0
122.251005,47.760463,0
1,1,0
