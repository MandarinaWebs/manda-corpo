<?php
  /*******************************************************
   * Only these origins will be allowed to upload images *
   ******************************************************/
  $accepted_origins = array("http://localhost", "http://192.168.1.1", "http://example.com");

  /*********************************************
   * Change this line to set the upload folder *
   *********************************************/
  $imageFolder = "images/imagesTextArea/";

  reset ($_FILES);
  $temp = current($_FILES);
  
  //Limpiamos nombre
  $temp['name'] = str_replace("ñ", "n", $temp['name']);
  $temp['name'] = str_replace("Ñ", "N", $temp['name']);
  $temp['name'] = str_replace("á", "a", $temp['name']);
  $temp['name'] = str_replace("é", "e", $temp['name']);
  $temp['name'] = str_replace("í", "i", $temp['name']);
  $temp['name'] = str_replace("ó", "o", $temp['name']);
  $temp['name'] = str_replace("ú", "u", $temp['name']);
  $temp['name'] = str_replace("Á", "A", $temp['name']);
  $temp['name'] = str_replace("É", "E", $temp['name']);
  $temp['name'] = str_replace("Í", "I", $temp['name']);
  $temp['name'] = str_replace("Ó", "O", $temp['name']);
  $temp['name'] = str_replace("Ú", "U", $temp['name']);
  $temp['name'] = str_replace("à", "a", $temp['name']);
  $temp['name'] = str_replace("è", "e", $temp['name']);
  $temp['name'] = str_replace("ì", "i", $temp['name']);
  $temp['name'] = str_replace("ò", "o", $temp['name']);
  $temp['name'] = str_replace("ù", "u", $temp['name']);
  $temp['name'] = str_replace("À", "A", $temp['name']);
  $temp['name'] = str_replace("È", "E", $temp['name']);
  $temp['name'] = str_replace("Ì", "I", $temp['name']);
  $temp['name'] = str_replace("Ò", "O", $temp['name']);
  $temp['name'] = str_replace("Ù", "U", $temp['name']);
  
  if (is_uploaded_file($temp['tmp_name'])){
    if (isset($_SERVER['HTTP_ORIGIN'])) {
      // same-origin requests won't set an origin. If the origin is set, it must be valid.
      //if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
      header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
  
    }

    /*
      If your script needs to receive cookies, set images_upload_credentials : true in
      the configuration and enable the following two headers.
    */
    // header('Access-Control-Allow-Credentials: true');
    // header('P3P: CP="There is no P3P policy."');

    // Sanitize input
	
    if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
        header("HTTP/1.1 400 Invalid file name. HOla");
        return;
    }

    // Verify extension
    if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
        header("HTTP/1.1 400 Invalid extension.");
        return;
    }

    // Accept upload if there was no origin, or if it is an accepted origin
    $filetowrite = $imageFolder . time() . "-" . $temp['name'];
    move_uploaded_file($temp['tmp_name'], $filetowrite);

    // Respond to the successful upload with JSON.
    // Use a location key to specify the path to the saved image resource.
    // { location : '/your/uploaded/image/file'}
    echo json_encode(array('location' => $filetowrite));
  } else {
    // Notify editor that the upload failed
    header("HTTP/1.1 500 Server Error");
  }
?>