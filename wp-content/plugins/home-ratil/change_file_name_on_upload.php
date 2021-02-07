<?php
function hwolf0610_upload_file_name_change(){
    add_filter( 'upload_dir', 'home_retail_image_dir_in_plugin' );

    global $wpdb;
    $table_name_home_retail_file_name_changer = $wpdb->prefix . '_home_retail_file_name_changer';

    if (isset($_POST['submit'])) {
        
        // echo $date->getTimestamp();
        // $my_custom_filename = "add_".$date->getTimestamp().$_FILES['fileToUpload']['name'];
        
        $date = new DateTime();
        $name = $_FILES["fileToUpload"]["name"];
        $ext = end((explode(".", $name))); # extra () to prevent notice
        echo $ext;
        $my_custom_filename = "added_".uniqid().$date->getTimestamp().".".$ext;      
        
        		
        $wpdb->insert(
        $table_name_home_retail_file_name_changer, //table
        array('file1' => $my_custom_filename), //data
        array('%s') //data format			
        );

        wp_upload_bits($my_custom_filename , null, file_get_contents($_FILES['fileToUpload']['tmp_name']));

        // wp_upload_bits($_FILES['fileToUpload']['name'], null, file_get_contents($_FILES['fileToUpload']['tmp_name']));
      }
      echo '<h2>ADD Data</h2>
        <form action="" method="post" enctype="multipart/form-data">
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">
        </form><br/>
        <h2>View Data</h2>
      ';

    $rows = $wpdb->get_results("SELECT * FROM `$table_name_home_retail_file_name_changer` ORDER BY home_id ASC");
    foreach ($rows as $row ){
        $image_src1=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file1;
        echo "<h3>".$row->home_id."</h3>";
        echo "$row->file1<img src=$image_src1 style='width:50px;height:50px;'>";
    }
    
} 
//   function myFileUploaderRenderer() {
//     ob_start();
//     hwolf0610_upload_file_name_change();
//     return ob_get_clean();
//   }
//   add_shortcode('custom_file_uploader', 'myFileUploaderRenderer');
?>