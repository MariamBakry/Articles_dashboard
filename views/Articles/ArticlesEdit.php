<?php 
 
 $handler = new MySQLHandler("articles");
 $id=intval($_GET['article']);
 $res=$handler->get_record_by_id($id);
 if(isset($_POST['update'])){
    $newdata=array("id"=>null,"title"=>$_POST['title'] , "summery"=>$_POST['summery'] ,"user_id"=>1,"full-article"=>$_POST['full-article']);
      $handler->connect();
  $handler->update($newdata,$id);
  header("Location: http://localhost/Articles_dashboard/index.php?article");
}
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="../../assets/css/style.css"/>
        <!DOCTYPE html>
        <html>
<head>
  <title>Admin</title>
</head>
<body >
    <form method="POST" action="" enctype="multipart/form-data">
    
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="<?=$res[0]['title']?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Summery</label>
            <textarea name="summery" type="text" class="form-control" id="exampleFormControlInput1" ><?=$res[0]['summery']?></textarea>
        </div>
       
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Full Article</label>
            <textarea name="full-article" type="text" class="form-control" id="exampleFormControlInput1"><?=$res[0]['full-article']?></textarea>
        </div>
     
        <!-- <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
            <select name="post_creator" class="form-control">
             
                    <option value=""></option>
             
            </select>
        </div> -->
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="exampleFormControlTextarea1" >
        </div>
        <button name="update" class="btn btn-success">Update</button>
    </form>

    <script type="text/javascript" src="../../assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
 
</html>