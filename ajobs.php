<?php

define("BASE_FILE_PATH", "jobresources/");
define("CHILD_DELIMETER", "|");

// Category Names
define("CATEGORY_PRODUCTION", "production");
define("CATEGORY_ASSEMBLY", "assembly");
define("CATEGORY_RD", "rd");
define("CATEGORY_PAINT", "paint");
define("CATEGORY_QUALITY", "quality");

// File names
define("PRODUCTION_FILE_NAME", "production.txt");
define("ASSEMBLY_FILE_NAME", "assembly.txt");
define("RD_FILE_NAME", "rd.txt");
define("PAINT_FILE_NAME", "paint.txt");
define("QUALITY_FILE_NAME", "quality.txt");

function createJobEntity($jobCategory, $title, $redirectionUrl) {
  return $jobCategory . CHILD_DELIMETER . $title . CHILD_DELIMETER . $redirectionUrl . "\n";
}

function saveToFile($jobEntity, $category) {
  $filePath = getFilePath($category);
  // writing in file.
  $file = fopen($filePath, "a");
  fwrite($file, $jobEntity);
  fclose($file);
}

function getJobEntities($category, $count) {
  $filePath = getFilePath($category);
  $jobs = array();
  if(file_exists($filePath)) {
    $file = fopen($filePath, "r");
    $i=0;
    while($i < $count && !feof($file)) {
      $jobString = fgets($file);
      if(strlen($jobString)>0) {
        $job = createClassObjectFromString($jobString);
        $jobs[$i] = $job;
        $i++;
      }
    }
    fclose($file);
    return $jobs;
  } else {
    return [];
  }
}

function getFilePath($category) {
  $filePath = "";
  switch($category) {
    case CATEGORY_PRODUCTION:
      $filePath = BASE_FILE_PATH . PRODUCTION_FILE_NAME;
      break;
    case CATEGORY_ASSEMBLY:
      $filePath = BASE_FILE_PATH . ASSEMBLY_FILE_NAME;
      break;
    case CATEGORY_RD:
      $filePath = BASE_FILE_PATH . RD_FILE_NAME;
      break;
    case CATEGORY_PAINT:
      $filePath = BASE_FILE_PATH . PAINT_FILE_NAME;
      break;
    case CATEGORY_QUALITY:
      $filePath = BASE_FILE_PATH . QUALITY_FILE_NAME;
      break;
  }
  return $filePath;
}

function createClassObjectFromString($jobString) {
  $jobArray = explode('|', $jobString);
  return new Job($jobArray[0], $jobArray[1], $jobArray[2]);
}

class Job {
  public $category;
  public $title;
  public $url;

  function __construct($category, $title, $url) {
    $this->category = $category;
    $this->title = $title;
    $this->url = $url;
  }

  function getCategory() {
    return $this->category;
  }

  function getUrl() {
    return $this->url;
  }

  function getTitle() {
    return $this->title;
  }
}

function pre_a( $array ) {
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}

// handle file editing

// handle setting links to index.html

// handle updating jobs of every profile
?>
