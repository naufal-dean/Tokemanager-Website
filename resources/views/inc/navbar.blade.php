<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button type="button" id="sidebarCollapse" class="btn btn-info">
    <i class="fa fa-align-justify text-white"></i><span class="text-white pl-2">Menu</span>
  </button>
    <body onload="startTime()">
    <div id="clock"></div>
  <div class="navseparator"></div>

  <h3 class="title">{{$title}}</h3>
</nav>
<script>
  function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
  }
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }
</script>

<style>
#clock{
  margin-left: 500px;
  font-size: 15px;
}
</style>