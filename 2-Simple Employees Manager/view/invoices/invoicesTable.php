
<?php 

require_once "../../classes/connection.php";

      $c=new Connect();
      $connection=$c->connection();

$sql="SELECT id_invoice,
          customer_name,
          customer_telephone,
          description,
          subtotal,
          tax,
          amount,
          created_date
      FROM invoices";
$result=mysqli_query($connection,$sql);
?>

<div>
  <table class="table table-hover table-condensed table-bordered" id="dataTable">
    <thead style="background-color: #dc3545;color: white; font-weight: bold;">
      <tr>
        <td>Invoice No.</td>
        <td>Customer Name</td>
        <td>Customer Telephone</td>
        <!--<td>Description</td>-->
        <td>Date/Time</td>
        <td>Sub-Total</td>
        <td>Tax</td>
        <td>Total</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
      <tr>
        <td>Invoice No.</td>
        <td>Customer Name</td>
        <td>Customer Telephone</td>
        <!--<td>Description</td>-->
        <td>Date/Time</td>
        <td>Sub-Total</td>
        <td>Tax</td>
        <td>Total</td>
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
          <td style="text-align: center;"><?php echo $row[2] ?></td>
          <td style="text-align: center;"><?php echo $row[7] ?></td>
          <td style="text-align: center;"><?php echo $row[4] ?></td>
          <td style="text-align: center;"><?php echo $row[5] ?></td>
          <td style="text-align: center;"><?php echo $row[6] ?></td>
          <td style="text-align: center;">
            <span class="btn btn-primary btn-xs" data-toggle="modal" data-target="#invoiceModalLabel" onclick="addInvoiceData('<?php echo $row[0]; ?>')">
              <span class="fa fas fa-eye"></span>
            </span>
                <a class="btn btn-success btn-xs" href="editInvoice.php?idInvoice=<?php echo $row[0]; ?>">
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

