<!--
Template Name: test
-->


<?php get_header();
?>
<div id="map"></div>
<script>
  const MyLatLng = new google.maps.LatLng(35.6811673, 139.7670516);
  const Optionwos = {
  zoom: 15, //地図の縮尺値
  center: MyLatLng, //地図の中心座標
  mapTypeId: "roadmap", //地図の種類
  };
  const map = new google.maps.Map(document.getElementById("map"), Options);
</script>
<?php get_footer();