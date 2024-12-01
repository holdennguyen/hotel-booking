<?php

  //frontend purpose data
  define('SITE_URL', 'http://localhost/vietchill/');
  define('ABOUT_IMG_PATH',SITE_URL.'images/about/');
  define('CAROUSEL_IMG_PATH',SITE_URL.'images/carousel/');
  define('FACILITIES_IMG_PATH',SITE_URL.'images/facilities/');
  define('ROOMS_IMG_PATH',SITE_URL.'images/rooms/');
  define('USERS_IMG_PATH',SITE_URL.'images/users/');

  //backend upload process needs this data

  define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/vietchill/images/');
  define('ABOUT_FOLDER','about/');
  define('CAROUSEL_FOLDER','carousel/');
  define('FACILITIES_FOLDER','facilities/');
  define('ROOMS_FOLDER','rooms/');
  define('USERS_FOLDER','users/');

	function adminLogin() {
		session_start();
		if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
			echo"<script>window.location.href='index.php'</script>";
			exit;
		}
	}

	function redirect($url) {
		echo "<script>window.location.href='$url'</script>";
		exit;
	}

	function alert($type, $msg) {

		$bs_class = ($type == 'success') ? 'alert-success' : 'alert-danger';

		echo <<<alert
			<div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
				<strong class="me-3">$msg</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		alert;
	}
?>