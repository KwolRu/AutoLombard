<?php 
 if(isset($_FILES['image'])){ 
    $errors = array(); 
    $file_name = $_FILES['image']['name']; 
    $file_size = $_FILES['image']['size']; 
    $file_tmp = $_FILES['image']['tmp_name']; 
    $file_type = $_FILES['image']['type']; 
    $file_ext = strtolower(end(explode('.', $_FILES['image']['name']))); 
     $extensions = array("jpeg", "jpg", "png"); 
     if(!in_array($file_ext, $extensions)){ 
        $errors[] = "Расширение файла запрещено. Выберите JPEG или PNG файл."; 
    } 
     if($file_size > 1048576){ 
        $errors[] = 'Размер файла должен быть не более 1 МБ'; 
    } 
     // Get image dimensions 
    $image_info = getimagesize($file_tmp); 
    $image_width = $image_info[0]; 
    $image_height = $image_info[1]; 
    //  if($image_width > 300 || $image_height > 900){ 
    //     $errors[] = 'Максимальные размеры изображения должны быть 300x900'; 
    // } 
     if(empty($errors)){ 
        $naming = "image_" . time() . "." . $file_ext; 
        move_uploaded_file($file_tmp, "../assets/upload/" . $naming); 
        echo "Файл успешно загружен."; 
    } else { 
        print_r($errors); 
    } 
} 
?>