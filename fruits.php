<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fruits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="form-group">
                <label>number:1</label>
                <input type="text" class="form-control" id="num1">
            </div>
            <div class="form-group">
                <label>number:2</label>
                <input type="text" class="form-control" id="num2">
            </div>
            <button type="button" id="addbtn" class="btn btn-success mt-3">Add</button>
            <p>Output</p>
            <img src="ATB3o.gif" alt="" style="display: none;" id="loader">
            <h2 id="output"></h2>
        </div>
    </div>
    <script>
        $(document).ready(function()
        {
            $('#addbtn').click(function()
            {
                $.ajax({
                    type:'POST',
                    url:'adder.php',
                    data:{
                        num1:$('#num1').val(),
                        num2:$('#num2').val(),
                    },
                    // beforeSend:function()
                    // {
                    //     $('#loader').show();
                    //     $("output").hide();
                    // },
                    success:function(data)
                    {
                        $('#output').html(data);
                        // $("#loader").hide();
                        // $("output").show();
                    }
                });
            });
        });
    </script>
</body>
</html>