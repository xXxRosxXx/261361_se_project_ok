<?php
$page['title'] = "Student Dashboard";
include_once ('config.inc.php');
include_once 'database_connect.inc.php';
include_once (realpath('templates/stapped/header.php'));
?>
<body>
<div class="container">
    <small><?=$_SESSION['user']?><a href="logout.php">[logout]</a></small>
    <h1 class="mt-5">Subject 262</h1>
    <div class="row">
    <table class="table">
            <?php
            $sql = "SELECT id, name, time, checked FROM tbl_activity";
            $result = $connect->query($sql);
            
            if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>'.$row["name"].'</td>';
                    echo '<td><a href="activity.php?id='.$row["id"].'">';
                
           
                    if($row['checked'] > 0 ){
                        
                        echo '<button type="button" class="btn btn-primary btn-sm">Check OK</button>';

                    }else{

                        echo '<img src="img/tick.png" width="16" height="16">[NOT ok]';

                    }
                    echo '</a>';

                    echo '</td>';
    
                    echo '</tr>';
                }
            } else {
                echo "0 results";
            }
            
            $connect->close();
            ?>
      
    </div>
</div>
</table>
</body>
<?php
include_once (realpath('templates/stapped/footer.php'));
?>