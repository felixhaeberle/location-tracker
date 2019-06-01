<?php
    
  if (file_exists('data/data.json')) {
      $current_data = file_get_contents('data/data.json');
      $array_data = json_decode($current_data, true);
      $formdata = array(
            'lat' => $_GET['lat'],
            'lon' => $_GET['lon'],
            'speed' => $_GET['speed'],
            'heading' => $_GET['heading'],
      );
      $array_data[] = $formdata;
      $final_data = json_encode($array_data);
      if (file_put_contents('data/data.json', $final_data)) {
          echo 'Data saved successfully';
      }
  } else {
      echo 'JSON File not exits';
  }
