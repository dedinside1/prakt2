<?php
class Model_Portfolio extends Model
{
    public function get_data()
    {
        $sql = "SELECT * FROM portfolio";
        $result = mysqli_querty($this->link, $sql);
        return $result;
       
    }
}


