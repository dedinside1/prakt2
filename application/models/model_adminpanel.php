<?php

class Model_Adminpanel extends Model
{
    public function get_data()
    {
        $sql = "SELECT * FROM `portfolio`";
        $result = mysqli_query($this->link, $sql);
        return $result;

    }

    public function add($year,$site,$description)
    {
        $sql = "INSERT INTO `portfolio` (`year`, `site`, `description`) VALUES ('$year', '$site', '$description')";
        $result = mysqli_query($this->link, $sql);
        return $result;

    }

    public function delete($id)
    {
        $sql = "DELETE FROM `portfolio` WHERE id = '$id'";
        $result = mysqli_query($this->link, $sql);
        return $result;

    }

    public function redactionInfo($id, $year ,$site ,$description)
{
 $sql = "UPDATE portfolio SET year = '$year', site = '$site', description = '$description' WHERE id='$id'";
 $result = mysqli_query($this->link, $sql);
 if (!$result) {
		 die(mysqli_error($this->link));
 }
 return $result;
}

}
