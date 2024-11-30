<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Crud Api</title>
  </head>
  <body>
      
    <div class="modal" id="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
   </div>

    <div class="container my-3 ">
       <h1 class="text-center text-light bg-dark">CRUD API</h1>
       <div class="container ">
           <form>
               <div class="form-group">
                 <label for="uname">Name</label>
                 <input type="uname" class="form-control" id="uname" aria-describedby="emailHelp">
               </div>
               <div class="form-group">
                 <label for="email">Email</label>
                 <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
               </div>
               <div class="form-group">
                 <label for="password">Password</label>
                 <input type="password" class="form-control" id="password">
               </div>
               <button type="submit" class="btn btn-dark">Save</button>
             </form>
       </div>
    </div>
    <div class="container">
        <table class="table" id="load_table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody id="load_table">

            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="js/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            
          // Fetch All Records In Table
            function loadTable(){
                $.ajax({
                    url : "http://localhost/Apis/Crud/fetch_all_api.php",
                    type : "GET",
                    success : function(data){
                      if(data.status == false){
                        $("#load_table").append("<tr><h2>" + data.message + "</h2></tr>");
                      }
                      else{
                        $.each(data, function(key,value){
                          $("#load_table").append(
                            "<tr>" +
                              "<th>" + value.id + "</th>" +
                              "<td> " + value.name + "</td>" +
                              "<td>" + value.email + "</td>" +
                              "<td>" + value.password + "</td>" +
                              '<td><button type="submit" class="btn btn-success edit-btn" data-eid="'+data.id+'">Edit</button></td>' +
                              '<td><button type="submit" class="btn btn-danger delete" data-eid="'+data.id+'">Delete</button></td>' +
                            "</tr>"
                          );
                          console.log(data); 
                        });
                      }
                      console.log(data); 
                    }
                });
            }
            loadTable();
            
            // Edit Button
            $(document).on("click",".edit-btn",function(){
              $("#emodal").show();
            })
            
            // Hide Modal
            $(document).on("click",function(){
              $(".modal").hide();
            })


        });
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>