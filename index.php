
<?php include('includes/header.php') ?>
<div class="container mt-3">
  <h2>Vocabulaire développement web</h2>
  <p>Vous pouvez filtrer les résultats ci-dessous. </p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>



  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="titre">Titre</th>
        <th>Description</th>
      </tr>
      </thead>

      <?php

$res = $db->query('SELECT * FROM definition');

foreach($res as $resultat){

?>
    <tbody id="myTable">
      <tr>
        <td>  <?php  echo $resultat->title; ?>
</td>
        <td><?php  echo $resultat->description; ?></td>
      </tr>
    
    </tbody>
  
</div>
<?php } ?>
</table>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<?php //include('includes/footer.php') ?>