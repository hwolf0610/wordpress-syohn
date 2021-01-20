<?php
 



// define('ROOTDIR', plugin_dir_path(__FILE__));
// require_once(ROOTDIR . 'get_data.php');

//add Main menu and sub menu
add_action('admin_menu', 'addMenuHooks');

function addMenuHooks(){
	add_menu_page('HOME RETAIL DASHBOARD', 'HOME RETAIL DASHBOARD', 'manage_options', 'home_retail_dashboard', 'hwolf0610_database_controller','dashicons-calendar-alt');
	add_submenu_page('home_retail_dashboard', 'SHOW_DATA_LIST', 'SHOW_DATA_LIST', 'manage_options', 'SHOW_DATA_LIST', 'hwolf0610_Data_show_list'); 
	add_submenu_page('home_retail_dashboard', 'ADD_NEW_DATA', 'ADD_NEW_DATA', 'manage_options', 'ADD_NEW_DATA', 'hwolf0610_Data_create'); 
	add_submenu_page(null, 'UPDATE_DATA', 'update_data', 'manage_options', 'UPDATE_OWN_DATA', 'hwolf0610_Data_update'); 
	add_submenu_page(null, 'Test_get_data', 'Test_get_data', 'manage_options', 'Test_get_data', 'hwolf0610_Test_get_data'); 
  }

  //DATABASE CONTROLLER
  function hwolf0610_database_controller(){
	echo "<h1 style='text-align:center'>HOME RETAIL DASHBOARD</h1>
	<img src='https://www.dreamhomeconsultants.com/wp-content/uploads/2020/07/1645-rivershyre-pky-small-e1594484416487.jpg' style='width: 100%;height: 450px;'>";
            
	// $targetpath =   get_home_url()."/wp-content/uploads/2021/01/win8.jpg";
	// echo "uploader url:".$targetpath."<img src=$targetpath>";


	// global $wpdb;
	// $table_name = $wpdb->prefix . 'participants_database';
	// $rows = $wpdb->get_results("SELECT * FROM $table_name");
	// foreach ($rows as $row ){
	// 	$image_src = get_home_url()."/wp-content/uploads/participants-database/".$row->photo;
	// 	echo "<img src='$image_src'>";
  	// }	
  
 // Upload file
if(isset($_POST['but_submit'])){
	if($_FILES['file']['name'] != ''){
	  $uploadedfile = $_FILES['file'];
	  $upload_overrides = array( 'test_form' => false );
  
	  $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	  $imageurl = "";
	  if ( $movefile && ! isset( $movefile['error'] ) ) {
		 $imageurl = $movefile['url'];
		 echo "url : ".$imageurl;
	  } else {
		 echo $movefile['error'];
	  }
	}   
  }
 
 ?>


<h1>Upload File</h1>

<!-- Form -->
<form method='post' action='' name='myform' enctype='multipart/form-data'>
    <table>
        <tr>
            <td>Upload file</td>
            <td><input type='file' name='file'></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type='submit' name='but_submit' value='Submit'></td>
        </tr>
    </table>
</form>


<?php

 
}

  //Data list
  function hwolf0610_Data_show_list () {
	?>
<!-- <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/sinetiks-schools/style-admin.css" rel="stylesheet" /> -->
<div class="wrap">
    <h2>DATA</h2>
    <a href="<?php echo admin_url('admin.php?page=ADD_NEW_DATA'); ?>">Add New</a>
    <?php
	global $wpdb;
	$table_name = $wpdb->prefix . 'userstable';
	$rows = $wpdb->get_results("SELECT user_id, name, email,file FROM $table_name ORDER BY user_id ASC");
	echo "<table class='wp-list-table widefat fixed'>";
	echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>File</th><th>&nbsp;</th></tr>";
	foreach ($rows as $row ){
		// $path_array = wp_upload_dir(); // normal format start
		// $image_src = $path_array["path"].$row->file;
		$image_src=get_home_url()."/wp-content/uploads/2021/01/".$row->file;
		echo "<tr>";
		echo "<td>$row->user_id</td>";
		echo "<td>$row->name</td>";	
		echo "<td>$row->email</td>";	
		echo "<td>$row->file<img src=$image_src width='30%'></td>";	
		echo "<td><a href='".admin_url('admin.php?page=UPDATE_OWN_DATA&id='.$row->user_id)."'>Update</a></td>";
		echo "</tr>";}
	echo "</table>";
	?>
</div>
<?php
	}

	//Data add
	function hwolf0610_Data_create () {	
		$create_id = $_POST['create_id']?$_POST['create_id']:"";
		$create_name = $_POST['create_name'] ?$_POST['create_name']:"";
		$create_email =$_POST['create_email'] ?$_POST['create_email']:"";
		// $create_file =$_POST['create_file'] ?$_POST['create_file']:"";
		$tmp_name = $_FILES['photo']['name'];

		$message = null;
		//insert
		if(isset($_POST['insert'])){	
			global $wpdb;		
			$table_name = $wpdb->prefix . 'userstable';
			
			if($_FILES['photo']['name'] != ''){
				$uploadedfile = $_FILES['photo'];
				$upload_overrides = array( 'test_form' => false );
			
				$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
				$imageurl = "";
				if ( $movefile && ! isset( $movefile['error'] ) ) {
				   $imageurl = $movefile['url'];
				//    echo "url : ".$imageurl;
				} else {
				//    echo $movefile['error'];
				}
			  }   

			$wpdb->insert(
				$table_name, //table
				array('user_id' => $create_id,'name' => $create_name,'email' => $create_email,'file' => $tmp_name), //data
				array('%s','%s') //data format			
			);
			$message.="Data inserted";

			
		}
		?>
<!-- <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/sinetiks-schools/style-admin.css" rel="stylesheet" /> -->
<div class="wrap">
    <h2>Add New Data</h2>
    <?php if (isset($message)): ?><div class="updated">
        <p><?php echo $message;?></p>
    </div><?php endif;?>
    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype='multipart/form-data'>
        <p>Three capital letters for the ID</p>
        <table class='wp-list-table widefat fixed'>
            <tr>
                <th>ID</th>
                <td><input type="text" name="create_id" value="<?php echo $create_id;?>" /></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="create_name" value="<?php echo $create_name;?>" /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="create_email" value="<?php echo $create_email;?>" /></td>
            </tr>
            <tr>
                <th>File</th>
                <td><input type="file" name="photo" value="<?php echo $tmp_name;?>" /></td>
            </tr>
        </table>
        <input type='submit' name="insert" value='Save' class='button'>
    </form>
</div>
<?php
		}

		//Data update
		function hwolf0610_Data_update () {
			global $wpdb;
			$table_name = $wpdb->prefix . 'userstable';		
		$id = $_GET['id'];
		$name = $_POST['name']? $_POST['name']:"";
		$email = $_POST['email']? $_POST['email']:"";
		$photo = $_POST['photo']? $_POST['photo']:"";

			//update
			if(isset($_POST['update'])){	
				$wpdb->update(
					 // database table name
					 $table_name,
					 // data input
					 array('name' => $name,	 'email' => $email, 'file' => $photo),
					 // where 
					 array('user_id' => $id),
					 // data format 
					 array('%s' ,'%s' ,	'%s'),
					 // where format 
					 array('%d') 
				);	
			}
			//delete
			else if(isset($_POST['delete'])){	
				$wpdb->query($wpdb->prepare("DELETE FROM wp_hwolfuserstable WHERE user_id = %s",$id));
			}
			else{//selecting value to update	
				$schools = $wpdb->get_results($wpdb->prepare("SELECT user_id,name from wp_hwolfuserstable where user_id=%s",$id));
				foreach ($schools as $s ){
					$name=$s->name;
				}
			}
			?>
<!-- <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/sinetiks-schools/style-admin.css" rel="stylesheet" /> -->
<div class="wrap">
    <h2>Data Update</h2>

    <?php if($_POST['delete']){?>
    <div class="updated">
        <p>School deleted</p>
    </div>
    <a href="<?php echo admin_url('admin.php?page=SHOW_DATA_LIST')?>">&laquo; Back to schools list</a>

    <?php } else if($_POST['update']) {?>
    <div class="updated">
        <p>School updated</p>
    </div>
    <a href="<?php echo admin_url('admin.php?page=SHOW_DATA_LIST')?>">&laquo; Back to schools list</a>

    <?php } else {?>
    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <table class='wp-list-table widefat fixed'>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" value="<?php echo $name;?>" /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" value="<?php echo $email;?>" /></td>
            </tr>
            <tr>
                <th>Photo</th>
                <td><input type="text" name="photo" value="<?php echo $photo;?>" /></td>
            </tr>
        </table>
        <input type='submit' name="update" value='Save' class='button'> &nbsp;&nbsp;
        <input type='submit' name="delete" value='Delete' class='button'
            onclick="return confirm('&iquest;Est&aacute;s seguro de borrar este elemento?')">
    </form>
    <?php }?>

</div>
<?php
			}
	

//add dashboard widget
  add_action('wp_dashboard_setup', 'registerDashboardWidget');
function registerDashboardWidget() { 
  wp_add_dashboard_widget('HOME RETAIL OVERVIEW', 'HOME RETAIL OVERVIEW', 'myPluginDashboardWidget');
}
 
function myPluginDashboardWidget() {
//   $plugin_url = get_home_url()."/wp-admin/admin.php?page=home_retail_dashboard";
  $plugin_url = "/admin.php?page=home_retail_dashboard";
//   <a href=$plugin_url target='_blank' >Go to Plugin</a> 
	echo "<h1 style='text-align:center'>HOME RETAIL</h1>
  <img src='https://www.dreamhomeconsultants.com/wp-content/uploads/2020/07/1645-rivershyre-pky-small-e1594484416487.jpg' width='100%' style='border-radius: 50px;border: 25px' />
  <p style='text-align:center'>This is my Home retail data manager plugin's dashboard widget.</p>";
}
 