</script> 
 
<? 
$id = $_POST['id']; 
$action = $_POST['action']; 
 
if ($action == "up") { 
    $sql = "UPDATE banks SET position = position - 1 WHERE ID = $id"; 
} elseif ($action == "down") { 
    $sql = "UPDATE banks SET position = position + 1 WHERE ID = $id"; 
} 
 
$result = $conn->query($sql); 
?>