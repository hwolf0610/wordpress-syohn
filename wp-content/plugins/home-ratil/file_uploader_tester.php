<?php
function home_retail_image_dir_in_plugin( $dirs ) {
    $dirs['subdir'] = '/home_retail_database';
    $dirs['path'] = $dirs['basedir'] . '/home_retail_database';
    $dirs['url'] = $dirs['baseurl'] . '/home_retail_database';
    return $dirs;
  }

function hwolf0610_FILE_UPLOAD_TESTER(){
    echo "<h1>HARRY_NARUTO_hwolf0610_FILE_UPLOADER</h1>";

    echo "<h2>ADD Data</h2>";    
    add_filter( 'upload_dir', 'home_retail_image_dir_in_plugin' );

            // Upload file
            if(isset($_POST['but_submit'])){
                global $wpdb;		
                $table_name = $wpdb->prefix . '_home_retail_Multi_File_uploader';
                $wpdb->insert(
                $table_name, //table
                array('file1' => $_FILES['file1']['name'],'file2' => $_FILES['file2']['name'],'file3' => $_FILES['file3']['name'],'file4' => $_FILES['file4']['name'],'file5' => $_FILES['file5']['name'],'file6' => $_FILES['file6']['name'],'file7' => $_FILES['file7']['name'],'file8' => $_FILES['file8']['name'],'file9' => $_FILES['file9']['name'],'file10' => $_FILES['file10']['name'],'file11' => $_FILES['file11']['name'],'file12' => $_FILES['file12']['name'],'file13' => $_FILES['file13']['name'],'file14' => $_FILES['file14']['name'],'file15' => $_FILES['file15']['name'],'file16' => $_FILES['file16']['name'],'file17' => $_FILES['file17']['name'],'file18' => $_FILES['file18']['name'],'file19' => $_FILES['file19']['name'],'file20' => $_FILES['file20']['name'],'file21' => $_FILES['file21']['name'],'file22' => $_FILES['file22']['name'],'file23' => $_FILES['file23']['name']), //data
                array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s') //data format			
                );

            if($_FILES['file1']['name'] != ''){
                $uploadedfile = $_FILES['file1'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }            

            if($_FILES['file2']['name'] != ''){
                $uploadedfile = $_FILES['file2'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file3']['name'] != ''){
                $uploadedfile = $_FILES['file3'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file4']['name'] != ''){
                $uploadedfile = $_FILES['file4'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file5']['name'] != ''){
                $uploadedfile = $_FILES['file5'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file6']['name'] != ''){
                $uploadedfile = $_FILES['file6'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file7']['name'] != ''){
                $uploadedfile = $_FILES['file7'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file8']['name'] != ''){
                $uploadedfile = $_FILES['file8'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file9']['name'] != ''){
                $uploadedfile = $_FILES['file9'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file10']['name'] != ''){
                $uploadedfile = $_FILES['file10'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file11']['name'] != ''){
                $uploadedfile = $_FILES['file11'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file12']['name'] != ''){
                $uploadedfile = $_FILES['file12'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file13']['name'] != ''){
                $uploadedfile = $_FILES['file13'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file14']['name'] != ''){
                $uploadedfile = $_FILES['file14'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file15']['name'] != ''){
                $uploadedfile = $_FILES['file15'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file16']['name'] != ''){
                $uploadedfile = $_FILES['file16'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file17']['name'] != ''){
                $uploadedfile = $_FILES['file17'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file18']['name'] != ''){
                $uploadedfile = $_FILES['file18'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file19']['name'] != ''){
                $uploadedfile = $_FILES['file19'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file20']['name'] != ''){
                $uploadedfile = $_FILES['file20'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file21']['name'] != ''){
                $uploadedfile = $_FILES['file21'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file22']['name'] != ''){
                $uploadedfile = $_FILES['file22'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
            if($_FILES['file23']['name'] != ''){
                $uploadedfile = $_FILES['file23'];
                $upload_overrides = array( 'test_form' => false );
                wp_handle_upload( $uploadedfile, $upload_overrides );
            }
           
            
            }

            ?>
        <!-- Form -->
        <form method='post' action='' name='myform' enctype='multipart/form-data'>
        <table>           
            <tr> <td>Upload file</td></tr>
            <tr>
            <td><input type='file' name='file1'></td>
            <td><input type='file' name='file2'></td>
            <td><input type='file' name='file3'></td>
            <td><input type='file' name='file4'></td>
            <td><input type='file' name='file5'></td>
            </tr>
           
            <tr>
            <td><input type='file' name='file6'></td>
            <td><input type='file' name='file7'></td>
            <td><input type='file' name='file8'></td>
            <td><input type='file' name='file9'></td>
            <td><input type='file' name='file10'></td>
            </tr>
            <tr>
            <td><input type='file' name='file11'></td>
            <td><input type='file' name='file12'></td>
            <td><input type='file' name='file13'></td>
            <td><input type='file' name='file14'></td>
            <td><input type='file' name='file15'></td>
            </tr>
            <tr>
            <td><input type='file' name='file16'></td>
            <td><input type='file' name='file17'></td>
            <td><input type='file' name='file18'></td>
            <td><input type='file' name='file19'></td>
            <td><input type='file' name='file20'></td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td><input type='file' name='file21'></td>
            <td><input type='file' name='file22'></td>
            <td><input type='file' name='file23'></td>
            <td ><input type='submit' name='but_submit' value='Submit'></td>
            </tr>
        </table>
        </form>
<?php
    echo "<h2>View Data</h2>";
    global $wpdb;
	$table_name = $wpdb->prefix . '_home_retail_Multi_File_uploader';
    $rows = $wpdb->get_results("SELECT * FROM $table_name ORDER BY home_id ASC");
    echo "<table class='wp-list-table widefat fixed'>";
	echo "<tr><th>ID</th><th>File 1</th><th>File 2</th><th>File 3</th><th>&nbsp;</th></tr>";
	foreach ($rows as $row ){
		// $path_array = wp_upload_dir(); // normal format start
		// $image_src = $path_array["path"].$row->file;
		$image_src1=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file1;
		$image_src2=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file2;
        $image_src3=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file3;
        $image_src4=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file4;
        $image_src5=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file5;
        $image_src6=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file6;
        $image_src7=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file7;
        $image_src8=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file8;
        $image_src9=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file9;
        $image_src10=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file10;
        $image_src11=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file11;
        $image_src12=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file12;
        $image_src13=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file13;
        $image_src14=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file14;
        $image_src15=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file15;
        $image_src16=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file16;
        $image_src17=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file17;
        $image_src18=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file18;
        $image_src19=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file19;
        $image_src20=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file20;
        $image_src21=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file21;
        $image_src22=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file22;
        $image_src23=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file23;
        ?>
        <tr><td><?php echo $row->home_id; ?></td></tr>
        <?php	
        echo "<tr>
            <td>$row->file1<img src=$image_src1 style='width:50px;height:50px;'></td>
            <td>$row->file2<img src=$image_src2 style='width:50px;height:50px;'></td>
            <td>$row->file3<img src=$image_src3 style='width:50px;height:50px;'></td>
            <td>$row->file4<img src=$image_src4 style='width:50px;height:50px;'></td>
            <td>$row->file5<img src=$image_src5 style='width:50px;height:50px;'></td>
        </tr>
        <tr>
            <td>$row->file6<img src=$image_src6 style='width:50px;height:50px;'></td>
            <td>$row->file7<img src=$image_src7 style='width:50px;height:50px;'></td>
            <td>$row->file8<img src=$image_src8 style='width:50px;height:50px;'></td>
            <td>$row->file9<img src=$image_src9 style='width:50px;height:50px;'></td>
            <td>$row->file10<img src=$image_src10 style='width:50px;height:50px;'></td>
        </tr>
        <tr>
            <td>$row->file11<img src=$image_src11 style='width:50px;height:50px;'></td>
            <td>$row->file12<img src=$image_src12 style='width:50px;height:50px;'></td>
            <td>$row->file13<img src=$image_src13 style='width:50px;height:50px;'></td>
            <td>$row->file14<img src=$image_src14 style='width:50px;height:50px;'></td>
            <td>$row->file15<img src=$image_src15 style='width:50px;height:50px;'></td>
        </tr>
        <tr>
            <td>$row->file16<img src=$image_src16 style='width:50px;height:50px;'></td>
            <td>$row->file17<img src=$image_src17 style='width:50px;height:50px;'></td>
            <td>$row->file18<img src=$image_src18 style='width:50px;height:50px;'></td>
            <td>$row->file19<img src=$image_src19 style='width:50px;height:50px;'></td>
            <td>$row->file20<img src=$image_src20 style='width:50px;height:50px;'></td>
        </tr>
        <tr>
        <td>$row->file21<img src=$image_src21 style='width:50px;height:50px;'></td>
        <td>$row->file22<img src=$image_src22 style='width:50px;height:50px;'></td>
        <td>$row->file23<img src=$image_src23 style='width:50px;height:50px;'></td>
        <td>&nbsp;</td></tr>       
        <tr><td>&nbsp;</td></tr>";        
       
		// echo "<td><a href='".admin_url('admin.php?page=UPDATE_OWN_DATA&id='.$row->home_id)."'>Update</a></td>";
		}
	echo "</table>";
}

?>