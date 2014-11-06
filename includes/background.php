<?php
  $bg = array('landscape.jpg', 'landscape2.jpg', 'landscape3.jpg', 'landscape4.jpg', 'landscape5.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<style type="text/css">
<!--
html,body {
    height:100%;
   background:center no-repeat fixed url(/coachtech/images/<?php echo $selectedBg; ?>);
    background-size: cover;
}
-->
</style>