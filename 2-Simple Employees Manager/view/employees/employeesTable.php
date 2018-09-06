
<?php 

require_once "../../classes/connection.php";

      $c=new Connect();
      $connection=$c->connection();

$sql="SELECT id_employee,
          fullname,
          email,
          gender,
          nationality,
          marital_status,
          image,
          department,
          employee_status,
          created_date
      FROM employees";
$result=mysqli_query($connection,$sql);
?>

<div>
  <table class="table table-hover table-condensed table-bordered" id="dataTable">
    <thead style="background-color: #dc3545;color: white; font-weight: bold;">
      <tr>
        <td>ID</td>
        <td>Image</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Nationality</td>
        <td>Marital Status</td>
        <td>Department</td>
        <td>Status</td>
        <td>Created Date</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
      <tr>
        <td>ID</td>
        <td>Image</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Nationality</td>
        <td>Marital Status</td>
        <td>Department</td>
        <td>Status</td>
        <td>Created Date</td>
        <td>Actions</td>
      </tr>
    </tfoot>
    <tbody >
      <?php 
      while ($row=mysqli_fetch_row($result)) {
        ?>
        <tr>
          <td style="text-align: center;"><?php echo $row[0] ?></td>
          <td style="text-align: center;">
            <?php 
              $showImage=explode("/", $row[6]) ; 
              $imgPath=$showImage[1]."/".$showImage[2]."/".$showImage[3]."/".$showImage[4];

            ?>
            <img class="rounded" width="45" height="45" src="<?php echo $imgPath ?>">
          </td>
          <td style="text-align: center;"><?php echo $row[1] ?></td>
          <td style="text-align: center;"><?php echo $row[2] ?></td>
          <td style="text-align: center;"><?php echo $row[3] ?></td>
          <td style="text-align: center;"><?php echo $row[4] ?></td>
          <td style="text-align: center;"><?php echo $row[5] ?></td>
          <td style="text-align: center;"><?php echo $row[7] ?></td>
          <td style="text-align: center;"><?php echo $row[8] ?></td>
          <td style="text-align: center;"><?php echo $row[9] ?></td>
          <td style="text-align: center;">
            <span class="btn btn-primary btn-xs" data-toggle="modal" data-target="#employeeModalLabel" onclick="addEmployeeData('<?php echo $row[0]; ?>')">
              <span class="fa fas fa-eye"></span>
            </span>
                <a class="btn btn-success btn-xs" href="updateEmployee.php?idEmployee=<?php echo $row[0]; ?>">
                  <span  class="fa fa-pencil-square-o"></span>
                </a>
            <span class="btn btn-danger btn-xs" onclick="deleteData('<?php echo $row[0]; ?>')">
              <span class="fa fa-trash"></span>
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

