<html>
 <head>
  <title>Invoices</title>
  <?php require_once "menu.php"; ?>
 </head>
 
 <body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="init.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Invoices</li>
      </ol>
      <a href="addInvoice.php" class="btn btn-success" role="button" aria-pressed="true"><span class="fa fa-plus"></span> Add New Invoices</a>
      <a href="http://192.168.0.106:8080/invoices/1-Simple Invoice/view/invoices/allInvoices.php" target="_blank" class="btn btn-primary" role="button" aria-pressed="true"><span class="fa fa-print"></span> Print Invoices</a>
      <br>
      <br>
      <!-- DataUsers Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Invoices
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="loadInvoicesTable"></div>
          </div>
        </div>
        <div class="card-footer"> </div>
      </div>
    </div>
  </div>
      <!-- DataUsers Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Users
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="loadUsersTable"></div>
          </div>
        </div>
        <div class="card-footer"> </div>
      </div>
    </div>
  </div>
  <!-- User Detail Modal -->
  <div class="modal fade" id="invoiceModalLabel" tabindex="-1" role="dialog" aria-labelledby="invoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="usersModalLabel">Invoice Details</h4>
          <span style="padding-left:150px;"></span>
            <form action="http://192.168.0.106:8080/invoices/1-Simple Invoice/view/editInvoice.php" method="get">
              <input type="text"  hidden="" id="idInvoice" name="idInvoice">
              <button class="btn btn-secondary btn-xs" type="submit"><i class="fa fa-pencil-square-o"></i> Edit</button>        
            </form>
            <form action="http://192.168.0.106:8080/invoices/1-Simple Invoice/view/invoices/printInvoice.php" target="_blank" method="get">
              <input  type="text"  hidden="" id="idPrintInvoice" name="idPrintInvoice">
              <button class="btn btn-secondary btn-xs" type="submit"><i class="fa fa-print"></i> Print</button>
            </form>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <div class="panel panel-default">
                      <div class="col-xs-6">            
                        <strong>Billed To:</strong> <div id="viewCustomerName"></div>
                        <strong>Telephone Number:</strong> <div id="viewCustomerTelephone"></div>
                        <strong>Description:</strong> <div id="viewDescription"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <br>    
                <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table table-condensed">
                            <thead>
                              <tr>
                                  <td><strong>Invoice No.</strong></td>
                                  <td class="text-center"><strong>Date/Time</strong></td>
                                  <td class="text-center"><strong>Subtotal</strong></td>
                                  <td class="text-center"><strong>Tax</strong></td>
                                  <td class="text-right"><strong>Total</strong></td>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- foreach ($order->lineItems as $line) or some such thing here -->
                              <tr>
                                <td class="text-center"><div id="viewInvoiceId"></div></td>
                                <td class="text-center"><div id="viewLastUpdate"></div></td>
                                <td class="text-center"><div id="viewSubTotal"></div></td>
                                <td class="text-center"><div id="viewTax"></div></td>
                                <td class="text-right"><div id="viewTotal"></div></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>                   
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End User Detail Modal -->
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
      $('#loadInvoicesTable').load('invoices/invoicesTable.php');
    });

function addInvoiceData(idInvoice){
      $.ajax({
        type:"POST",
        data:"idInvoice=" + idInvoice,
        url:"../process/invoice/getInvoiceData.php",
        success:function(r){
          data=jQuery.parseJSON(r); 
          alert(r);
          $('#idInvoice').val(data['id_invoice']);
          $('#idPrintInvoice').val(data['id_invoice']);
          $('#viewInvoiceId').text(data['id_invoice']);

          $('#viewCustomerName').text(data['customer_name']);
          $('#viewCustomerTelephone').text(data['customer_telephone']);

          $('#viewDescription').text(data['description']);

          $('#viewSubTotal').text(data['subtotal']);
          $('#viewTax').text(data['tax']);
          $('#viewTotal').text(data['total']);

          $('#viewLastUpdate').text(data['last_update']);    
        }
      });
    }

function deleteData(idInvoice){
      alertify.confirm('Delete Registered Invoice','Do you want to delete the Invoice?', function(){ 
        $.ajax({
          type:"POST",
          data:"idInvoice=" + idInvoice,
          url:"../process/invoice/deleteInvoice.php",
          success:function(r){
            if(r==1){
              $('#loadInvoicesTable').load('invoices/invoicesTable.php');
              alertify.success("Invoice successfuly deleted!");
            }else{
              alertify.error("Invoice could not be deleled.");
            }
          }
        });
      }, function(){ 
        alertify.error('Canceled!')
      });
    }

  </script>


<script type="text/javascript">
  $(document).ready(function(){


    $('#modalView').on('hidden.bs.modal', function () {

     
     $("#viewImage").empty();
});

    
  });
</script>

