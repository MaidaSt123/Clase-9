<?php include('header.php');?>
<div class="inner cover">
<h2 class="cover-heading">Donald Trump</h2>

<?php for($n=0; $n<51; $n++){?>
  <?php echo $csv[$n]["state"] ;?>, <?php echo $csv[$n]["trump"] ;?><br>
<?php };?>

</div>
<?php include('footer.php');?>
