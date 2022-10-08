<?php
    include("config.php");
    //username: sanchit.jab
    //Password: jab@1950#sg
    session_start();
    $target_dir = "images/";
    $allowed =  array('png', 'jpg', 'jpeg');

    if($_POST['action']=="add product"){
        
        $img=$_FILES['gallery_img']['name'];
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            echo "invalid extension";
        }
        else{
            $file_name = uniqid('img').".".$ext;
            $file_name="".$file_name;
            $title=$_POST['title'];
            $alt=$_POST['alt'];
            //$x=" ";
            $file_loc="images/".$file_name;
            $heading=$_POST['heading'];
            $category=$_POST['categories'];
            $q1=$con->prepare("INSERT INTO gallery(image,alt,title,h1,cat) values(?,?,?,?,?)");
            $q1->bind_param("sssss",$file_loc,$alt,$title,$heading,$category);
            if($q1->execute()){
                if (move_uploaded_file($_FILES["gallery_img"]["tmp_name"], $target_dir . $file_name)) {
                    $q1->close();
                    echo 1;
                } else {
                    
                    echo 0;
                } 
            }
            else{
                echo 0;
            }
        }
    }
    
    if($_POST['action']=="add_ctgry"){
            $ctgry=$_POST['ctgry'];
            $created_time=time();
            $q21=$con->prepare("INSERT INTO category(category,created_on) values(?,?)");
            $q21->bind_param("si",$ctgry,$created_time);
            if($q21->execute()){
                echo 1;
            }
            else{
                echo("Statement failed: ". $q21->error . "<br>");
            }
            $q21->close();
    }
    if($_POST['action']=="delete_pdt"){
        $id=$_POST['id'];
        $deleted_time=strtotime("now");
        $q2=$con->prepare("UPDATE gallery SET deleted_at = ? where id=? ");
        $q2->bind_param("ii",$deleted_time,$id);
        if($q2->execute()){
            $q2->close();
            echo 1;
        }
        else{
            echo 0;
        }

    }

    if($_POST['action']=="update pdt"){
        $heading=$_POST['pdt_heading'];
        $title=$_POST['pdt_title'];
        $alt=$_POST['pdt_alt'];
        $updated_time = strtotime("now");
        $id=$_POST['id'];
        $catt=$_POST['categories'];
        if($_FILES['new_adv_file']['name']){
            $filename = $_FILES["new_adv_file"]["name"];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!in_array($ext,$allowed) ) {
                echo "invalid extension";
            } else {
                $file_name = uniqid('img').".".$ext;
                $file_loc="images/".$file_name;
                $stmt = $con->prepare("UPDATE gallery SET h1 = ?, image = ?, title = ?, alt= ?, edited_at = ?, cat=? WHERE id = ?");
                $stmt->bind_param('ssssiii',$heading, $file_loc,$title,$alt , $updated_time,$catt, $id);  
                if ($stmt->execute()) { 
                    if (move_uploaded_file($_FILES["new_adv_file"]["tmp_name"], $target_dir . $file_name)) {
                        $stmt->close();
                        echo 1;
                    } else {
                        echo 2;
                    } 
                } else {
                    echo 3;
                }
            }
        } else{
            $stmt = $con->prepare("UPDATE gallery SET h1 = ?, title = ?, alt= ?, edited_at = ?, cat=? WHERE id = ?");
            $stmt->bind_param('sssiii',$heading,$title,$alt , $updated_time,$catt, $id);  
            if ($stmt->execute()) { 
                    $stmt->close();
                    echo 1;
            } else {
                echo 4;
            }
        }

    }
?>