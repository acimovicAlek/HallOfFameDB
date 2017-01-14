<?php
    include 'Partials/header.php';
if(isset($_SESSION["admin"])){
?>
<div class = "container">
            <div class = "row">
                <div class = "heading">Admin Panel!</div>
            </div>
<?php
$connection = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=halloffamedb', 'root', '');    $connection -> exec("set names utf8");
    $query = $connection -> query("select * from celeb");

    if($query)
    {
        $celebs = $query;
        echo("<table style='width:100%; border: 1px solid black; padding:10px 10px;'>");
        echo("<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Picture Path</th>
        <th></th>
        <th></th>
        </tr>");
        foreach ($celebs as $i)
        {
            echo("
                <tr>
                <th>".$i['id']."</th>
                <th><a href='celeb.php?id=".$i['id']."'>".$i['name']."</a></th>
                <th>".$i['file']."</th>
                <th><a href='editCeleb.php?id=".$i['id']."'>Edit</a></th>
                <th><a href='Partials/delete.php?id=".$i['id']."'>Delete</a></th>
                </tr>"
            );
        }
        echo("</table>");
        echo("<form action='Partials/csvDownload.php' method='get'>
        <input type='submit' value='CSV DOWNLOAD'>
        </form>");
        echo("<form action='Partials/pdfDownload.php' method='get'>
        <input type='submit' value='PDF DOWNLOAD'>
        </form>");
    }
    ?>
<?php
}else{
    echo("Access denied!");
}
    include 'Partials/footer.php';
?>
