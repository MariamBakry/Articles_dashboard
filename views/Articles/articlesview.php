<center>
        
<?php
    require_once("../../vendor/autoload.php");
    $handler = new MySQLHandler("articles");

    $result = $handler->get_data(["id","title","summery","full-article","publishing-date","image","user_id"]);
if ($result){


    if (!$handler->connect())

    {

         die('Could not connect: ');

    }

        echo "<table align=center border=1px style=width:600px; line-height:40px;>";
        echo "<tr> 
        <th colspan=8><h2>Articles</h2></th> 
        </tr><tr>";

        foreach($result[0] as $key=>$val){
            echo "<th>".$key."</th>";
        }

    echo "<th>Action</th></thead></tr>";
    

    foreach($result as $row)

    {

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['summery'] . "</td>";
        echo "<td>" . $row['full-article'] . "</td>";
        echo "<td>" . $row['publishing-date'] . "</td>";
        echo "<td>" ."<image class='mt-2 w-25' src=".$row['image'] ." >" . "</td>";
        echo "<td>" . $row['user_id'] . "</td>";

        echo  
         "<td>
         <a  style='color:#584e46; font-weight:bold' href='". $_SERVER["PHP_SELF"]. "?article=". $row["id"]. "'> Edit </a>
         <a  style='color:#584e46; font-weight:bold'  href=" . $_SERVER["PHP_SELF"] ."?article=delete&" ."id=".  $row["id"]  ." name='delete' type='submit'
         
         > Delete </a>
         </td> ";

        

        echo "</tr>";

    }

        echo "</table>";
}
    ?>

    <?php
        echo "<a style='color:white; font-weight:bold; Background-color:#584e46' href=" . $_SERVER["PHP_SELF"] ."?article=add&" ."id=" . $row["id"] ." name='add' type='button' class='btn btn-secondary'>Add Article</a>";
    ?>
   
    



</center>