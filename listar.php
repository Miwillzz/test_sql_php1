<?php
include('php/connect.php');
$a_query = "SELECT * FROM clientes_2";
?>
<?php include('php/head.php'); ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Ciudad</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php $res = mysqli_query($conn, $a_query);
    while ($row = mysqli_fetch_assoc($res)) { ?>
      <tr>
        <td><?php echo $row["id_cliente"]; ?></td>
        <td><?php echo $row["nombre_cliente"]; ?></td>
        <td><?php echo $row["correo_cliente"]; ?></td>
        <td><?php echo $row["ciudad_cliente"]; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php include('php/end.php'); ?>