
<?php 

require_once "../../classes/connection.php";

      $c=new Connect();
      $connection=$c->connection();

$sql="SELECT id_department,
          name_department
      FROM departments";
$result=mysqli_query($connection,$sql);
?>

<div>
  <table class="table table-hover table-condensed table-bordered" id="dataTable">
    <thead style="background-color: #dc3545;color: white; font-weight: bold;">
      <tr>
        <td>ID</td>
        <td>Departments</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
      <tr>
        <td>ID</td>
        <td>Departments</td>
        <td>Actions</td>
      </tr>
    </tfoot>
    <tbody >
      <?php 
      while ($row=mysqli_fetch_row($result)) {
        ?>
        <tr>
          <td style="text-align: center;"><?php echo $row[0] ?></td>
          <td style="text-align: center;"><?php echo $row[1] ?></td>
          <td style="text-align: center;"> 
          <span class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editDepartmentModal" onclick="addDepartmentData('<?php echo $row[0]; ?>')">
              <span class="fa fa-pencil-square-o"></span>
          </span>
          </td>
        </tr>
        <?php 
      }
      ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#dataTable').DataTable();
  } );
</script>

