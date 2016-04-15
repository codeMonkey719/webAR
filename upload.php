<?php
/***************
 * index.php
 * Uploading and managing client submitted files. 
 * 
 * Jaime Ruiz 		initial		March 2, 2015
 * Ross Beveridge             March 20, 2016
 */
require_once "inc/page_setup.php";

$title = "Handling Files";
$page_name = "home";
include 'inc/header.php';
$max_file_size = 1000000; // small
$db = new Database ();

if ($_FILES && isset ( $_FILES ["image"] )) { // See http://php.net/manual/en/features.file-upload.errors.php
	if ($_FILES ["image"] ["error"] == UPLOAD_ERR_OK) {
		if ($_FILES ["image"] ["size"] > $max_file_size) {
			$error_msg = "File is too large.";
		} else {
			$ext = parseFileSuffix ( $_FILES ['image'] ['type'] );
			if ($ext == '') {
				$error_msg = "Unknown file type";
			} else {
				// Let database save assign unique integer id.
				$fid = $db->saveImage ( $_FILES ["image"], $ext );
				if ($fid == - 1) {
					$error_msg = "Unable to store image in DB";
				} else {
					if (! file_exists ( $config->upload_dir )) {
						if (! mkdir ( $config->upload_dir )) {
							$error_msg = "Attempt to make folder: \"" . $config->upload_dir . "\" failed";
						}
					}
					$filename = str_pad ( $fid, $config->pad_length, "0", STR_PAD_LEFT ) . "." . $ext;
					move_uploaded_file ( $_FILES ["image"] ["tmp_name"], $config->upload_dir . $filename );
				}
			}
		}
	} else if ($_FILES ["image"] ["error"] == UPLOAD_ERR_INI_SIZE || $_FILES ["image"] ["error"] == UPLOAD_ERR_FORM_SIZE) {
		$error_msg = "File is too large.";
	} else {
		$error_msg = "An error occured. Please try again. <!-- " . $_FILES ["image"] ["error"] . " -->";
	}
}
/*
 * Note below that the MAX_FILE_SIZE hidden field (measured in bytes)
 * must precede the file input field, and its value
 * is the maximum filesize accepted by PHP.
 * This form element should always be used as it saves
 * users the trouble of waiting for a big file being
 * transferred only to find that it was too large and
 * the transfer failed. Keep in mind: fooling this
 * setting on the browser side is quite easy,
 * so never rely on files with a greater size being
 * blocked by this feature. It is merely a convenience
 * feature for users on the client side of the application.
 * The PHP settings (on the server side) for maximum-size,
 * however, cannot be fooled.
 */
?>
<main>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php include "inc/sidenav.php"; ?>
			</div>
		<div class="col-sm-9">
			This example walks through file handleing with PHP.
			<?php
			if (isset ( $error_msg )) {
				echo "<div class=\"bg-danger\"> $error_msg </div>";
			}
			?>
			<form method="post" enctype="multipart/form-data" class="form-inline">
				<div class="form-group">
					<label class="sr-only" for="image">Upload Image</label> 
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" /> 
					<input type="file" class="form-control" name="image" id="image" />
				</div>
				<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-upload" aria-label="Upload"></span>
				</button>
			</form>
			<div>
				<h3>Uploaded Files</h3>
			</div>
			<?php
			$images = $db->getImages ();
			foreach ( $images as $img ) {
			?>
			<div class="row">
				<div class="col-xs-4 col-md-2">
					<img class="thumbnail"
						src="getImage.php?id=<?php echo $img["id"];?>" alt="" />
				</div>
			</div>
         <?php }; // End forloop ?>
		</div>
	</div>
</div>
</main>
<?php
/* Support functions for handling image upload above. */
function parseFileSuffix($iType) {
	if ($iType == 'image/jpeg') {
		return 'jpg';
	}
	if ($iType == 'image/gif') {
		return 'gif';
	}
	if ($iType == 'image/png') {
		return 'png';
	}
	if ($iType == 'image/tif') {
		return 'tif';
	}
	return '';
}

?>
<?php include 'inc/footer.php'; ?>
