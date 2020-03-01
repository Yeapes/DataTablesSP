
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Datatables</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Datatables Jquery Plugin with Php Query Builder and Bootstrap</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="users" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>Email</td>  
                                    <td>Phone</td>  
                                    <td>City</td>    
                               </tr>  
                          </thead>  
                          <tfoot>
                              <tr>
                                   <td>Name</td>  
                                   <td>Email</td>  
                                   <td>Phone</td>  
                                   <td>City</td>   
                              </tr>
                         </tfoot> 
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#users').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "getData.php"
    });  
 });  
 </script>  