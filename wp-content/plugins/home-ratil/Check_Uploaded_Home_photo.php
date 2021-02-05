<?php
function home_retail_image_dir_in_plugin_check( $dirs ) {
    $dirs['subdir'] = '/home_retail_database';
    $dirs['path'] = $dirs['basedir'] . '/home_retail_database';
    $dirs['url'] = $dirs['baseurl'] . '/home_retail_database';
    return $dirs;
  }

// global $filename_change;
// function make_filename_hash($filename) {
//     $info = pathinfo($filename);
//     $ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
//     $name = basename($filename, $ext);

//     $filename_change = "upload_file_".rand(). $ext;

//     return $filename_change;
//     // if($post_id>0){
//     //     return $post_id."_".$name . $ext;
//     // }else{
//     //     return $name . $ext;
//     // }
// }

function hwolf0610_Check_Uploaded_Home_photo(){
    echo "<h1>HARRY_NARUTO_hwolf0610_Check_Uploaded_Home_photo</h1>";
    add_filter( 'upload_dir', 'home_retail_image_dir_in_plugin_check' );
    echo "<h2>View Data</h2>";
    global $wpdb;
	$table_name_home_retail_photo_upload = $wpdb->prefix . '_home_retail_photo_upload';
    $rows = $wpdb->get_results("SELECT * FROM $table_name_home_retail_photo_upload ORDER BY home_id ASC");
    echo "<table class='wp-list-table widefat fixed'>";
	echo "<tr><th>ID</th><th>File 1</th><th>File 2</th><th>File 3</th><th>&nbsp;</th></tr>";
	foreach ($rows as $row ){
		// $path_array = wp_upload_dir(); // normal format start
		// $image_src = $path_array["path"].$row->file;
		$image_src1=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_LANDSCAPING;
		$image_src2=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_HOUSE;
        $image_src3=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_POOL;
        $image_src4=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_SHED;
        $image_src5=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_OTHER;
        $image_src6=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_GARAGE;
        $image_src7=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_MUD_ROOM;
        $image_src8=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_LIVING_ROOM;
        $image_src9=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_DINING_ROOM;
        $image_src10=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_FAMILY_ROOM;
        $image_src11=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_MEDIA_ROOM;
        $image_src12=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_BASEMENT_ROOM;
        $image_src13=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_KITCHEN_ROOM;
        $image_src14=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_PANTRY_ROOM;
        $image_src15=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_HALF_BATH;
        $image_src16=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_OFFICE;
        $image_src17=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_BEDROOMS;
        $image_src18=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_BATHROOMS;
        $image_src19=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_MASTER_BEDROOM;
        $image_src20=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_MASTER_CLOSET;
        $image_src21=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_OTHER;
        $image_src22=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_PDF_DOCUMENTS_UPLOAD;
        $image_src23=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_MASTER_BATHROOM;
        ?>
        <tr><td><?php echo $row->home_id; ?></td></tr>
        <?php	
        echo "<tr>
            <td>$row->file_upload_EXTERIOR_LANDSCAPING<img src=$image_src1 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_EXTERIOR_HOUSE<img src=$image_src2 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_EXTERIOR_POOL<img src=$image_src3 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_EXTERIOR_SHED<img src=$image_src4 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_EXTERIOR_OTHER<img src=$image_src5 style='width:50px;height:50px;'></td>
        </tr>
        <tr>
            <td>$row->file_upload_INTERIOR_GARAGE<img src=$image_src6 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_MUD_ROOM<img src=$image_src7 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_LIVING_ROOM<img src=$image_src8 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_DINING_ROOM<img src=$image_src9 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_FAMILY_ROOM<img src=$image_src10 style='width:50px;height:50px;'></td>
        </tr>
        <tr>
            <td>$row->file_upload_INTERIOR_MEDIA_ROOM<img src=$image_src11 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_BASEMENT_ROOM<img src=$image_src12 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_KITCHEN_ROOM<img src=$image_src13 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_PANTRY_ROOM<img src=$image_src14 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_HALF_BATH<img src=$image_src15 style='width:50px;height:50px;'></td>
        </tr>
        <tr>
            <td>$row->file_upload_INTERIOR_OFFICE<img src=$image_src16 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_BEDROOMS<img src=$image_src17 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_BATHROOMS<img src=$image_src18 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_MASTER_BEDROOM<img src=$image_src19 style='width:50px;height:50px;'></td>
            <td>$row->file_upload_INTERIOR_MASTER_CLOSET<img src=$image_src20 style='width:50px;height:50px;'></td>
        </tr>
        <tr>
        <td>$row->file_upload_INTERIOR_OTHER<img src=$image_src21 style='width:50px;height:50px;'></td>
        <td>$row->file_upload_INTERIOR_MASTER_BATHROOM<img src=$image_src23 style='width:50px;height:50px;'></td>
        <td><a href='$image_src22' target='_blank'>PDF_Instruction</a></td>
        <td>&nbsp;</td></tr>       
        <tr><td>&nbsp;</td></tr>";        
       
		// echo "<td><a href='".admin_url('admin.php?page=UPDATE_OWN_DATA&id='.$row->home_id)."'>Update</a></td>";
		}
	echo "</table>";
}

?>