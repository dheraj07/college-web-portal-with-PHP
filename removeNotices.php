<?php 
require 'w3sidebar.php';

    require 'connection.php';
    $sql = "SELECT id, notice FROM notice";

    
    $result= $conn->query($sql);
    

    
    if($result->num_rows > 0){
        
        

        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['id']. "</td>";
            echo "<td>" . $row['notice']. "</td>";
            
            echo "<td>";
            
            echo "<a onclick='return confirm(\"Are you sure?\")' href='deletes.php?id=" . $row['id'] . "'>Delete</a> |";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else{
        echo "Notices Are Empty.";
    }
    $conn->close();
?>