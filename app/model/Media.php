<?php
namespace App\Model;
use App\Model\AbstractModel;

class Media extends AbstractModel{

  private $tableName = 'media';
  public $mediaId;
  public $title;
  public $shortDescription;
  public $imageSrc;
  public $isbnCode;



  public function getAll(){
    $mediaArray = Array();
    $sql = "SELECT * FROM `media`";
    if ($result = mysqli_query($this->conn, $sql)) {
      while($row = mysqli_fetch_assoc($result)) {
        $media = new Media();
        $media->mediaId = $row['media_id'];
        $media->title = $row['title'];
        $media->shortDescription = $row['short_description'];
        $media->imageSrc = $row['image_src'];
        $media->isbnCode  = $row['isbn_code'];
        array_push($mediaArray, $media);
      }
    }
    return $mediaArray;
  }
}
 ?>
