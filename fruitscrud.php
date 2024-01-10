<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fruits Crud</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="modal" tabindex="-1" id="modal_frm">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">User Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" id="frm">
                <input type="hidden" name="action" id="action" value="insert">
                <input type="hidden" name="id" id="uid" value="0">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                    <select name="gender" id="gender" class="form-control" require>
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="text" name="contact" id="contact" class="form-control" require>
                </div>
                <input type="submit" value="submit" class="mt-3">
            </form>
        </div>
       
        </div>
    </div>
    </div>
    <div class="container mt-5">
        <p class="text-right"><a href="#" class="btn btn-success" id="add_record">Add Record</a></p>

            <table class="table table-bordered">
                <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody id="tbody">
                    <?php
                    $con=mysqli_connect("localhost","root","","ajax_crud");
                    $sql="select * from users";
                    $res=$con->query($sql);
                    while($row=$res->fetch_assoc())
                    {
                        echo "<tr uid='{$row["id"]}'>
                        <td>{$row["name"]}</td>
                        <td>{$row["gender"]}</td>
                        <td>{$row["contact"]}</td>
                        <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
                        <td><a href='#' class='btn btn-danger delete'>Delete</a></td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

  

    <script >
        $(document).ready(function(){
            var current_row=null;//update 
            $("#add_record").click(function()
            {
                $("#modal_frm").show();
            });
          
            $("#frm").submit(function(event){
                event.preventDefault();//page refresh stoped
                $.ajax({
                    url:"ajax_action.php",
                    type:"post",
                    data:$("#frm").serialize(),
                    beforeSend:function()
                    {
                        $("#frm").find("input[type='submit']").val("Loading...");
                    },
                    success:function(res)
                    {
                        if(res)
                        {
                            if($("#uid").val()==0) // 0 va irruntha insert pannum illa na else la update pannum
                            {
                                $("#tbody").append(res);
                            }
                            else
                            {
                                $(current_row).html(res);
                            }
                            
                        }
                        else
                        {
                            alert("Failed Try Again");
                        }
                        $("#frm").find("input[type='submit']").val("Submit");
                        clear_input();
                        $("#modal_frm").hide();
                    }
                });
            });
            //update
            $("body").on("click",".edit",function(event)
            {
                event.preventDefault();
                current_row=$(this).closest("tr");
                $("#model_frm").show();
                var id=$(this).closest("tr").attr("uid");
                var name=$(this).closest("tr").find("td:eq(0)").text();
                var gender=$(this).closest("tr").find("td.eq(1)").text();
                var contact=$(this).closest("tr").find("td.eq(2)").text();

                $("#action").val("update");
                $("#uid").val(id);
                $("#name").val(name);
                $("gender").val(gender);
                $("#contact").val(contact);
            });

            //delete

            // $("body").on("click",".delete",function(event)
            // {
            //     event.preventDefault();
            //     var id=$(this).closest("tr").attr("uid");
            //     var cls=$(this);
            //     if(confirm("Are you sure"))
            //     {
            //         $.ajax({
            //         url:"ajax_action.php",
            //         type:"post",
            //         data:(uid:id,action:'delete'),
            //         beforeSend:function()
            //         {
            //             $(cls).text("Loading...");
            //         },
            //         success:function(res)
            //         {
            //            if(res)
            //            {
            //             $(cls).closest("tr").remove();
            //            }
            //            else
            //            {
            //             alert("Failed Try Again");
            //             $(cls).text("Try Again...");
            //            }
            //         }
            //     }
            //     });

            // });
            $("body").on("click",".delete",function(event){
          event.preventDefault();
          var id=$(this).closest("tr").attr("uid");
          var cls=$(this);
          if(confirm("Are You Sure")){
            $.ajax({
              url:"apple_action.php",
              type:"post",
              data:{uid:id,action:'delete'},
              beforeSend:function(){
                $(cls).text("Loading...");
              },
              success:function(res){
                if(res){
                  $(cls).closest("tr").remove();
                }else{
                  alert("Failed TryAgain");
                  $(cls).text("Try Again");
                }
              }
            });
          }
        });

            function clear_input()
            {
                $("#frm").find(".form-control").val("");
                $("#action").val("insert");
                $("#uid").val("0");
            }
        });
    </script>
</body>
</html>