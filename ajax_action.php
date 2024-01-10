<?php

    $con=mysqli_connect("localhost","root","","ajax_crud");

    $action=$_POST["action"];
    if($action == "insert")
    {
        $name=mysqli_real_escape_string($con,$_POST["name"]);
        $gender=mysqli_real_escape_string($con,$_POST["gender"]);
        $contact=mysqli_real_escape_string($con,$_POST["contact"]);
        $sql="insert into users (name,gender,contact) values ('{$name}','{$gender}','{$contact}')";
        if($con->query($sql))
        {
            $id=$con->insert_id;
            echo "<tr uid='{$id}'>
          
                        <td>{$name}</td>
                        <td>{$gender}</td>
                        <td>{$contact}</td>
                        <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
                        <td><a href='#' class='btn btn-danger delete'>Delete</a></td>
                    </tr>";
        }
    }
    elseif($action == "update")
    {
        $id=mysqli_real_escape_string($con,$_POST["id"]);
        $name=mysqli_real_escape_string($con,$_POST["name"]);
        $gender=mysqli_real_escape_string($con,$_POST["gender"]);
        $contact=mysqli_real_escape_string($con,$_POST["contact"]);
        $sql="update users set name='{$name}',gender='{$gender}',contact='{$contact}' where id='{$id}'";
        if($con->query($sql))
        {
            echo "
                        <td>{$name}</td>
                        <td>{$gender}</td>
                        <td>{$contact}</td>
                        <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
                        <td><a href='#' class='btn btn-danger delete'>Delete</a></td>
                    ";
        }
    }
    elseif($action=="delete")
    {
        $id=$_POST["uid"];
        $sql="delete from users where id='{$id}'";
        if($con->query($sql))
        {
            echo true;
        }
        else
        {
            echo false;
        }
    }
    else
    {
        echo false;
    }

?>