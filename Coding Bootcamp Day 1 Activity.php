
<?php


class MyInfo{
  public $name;
  public $address;
  public $age;
  public $religion;
  public $schoolYear;
  public $school;
  
   function __construct($name,$address,$age,$religion,$schoolYear,$school)
  {
    $this->name = $name;
	$this->address = $address;
	$this->age = $age;
	$this->religion = $religion;
	$this->schoolYear = $schoolYear;
	$this->school = $school;
  }
   function set_name($name)
  {
    $this->name = $name;
  }
   function get_name(){
    return $this->name;
  }
  
   function set_address($address)
  {
    $this->address = $address;
  }
   function get_address(){
    return $this->address;
  }
  
  
    function set_age($age)
  {
    $this->age = $age;
  }
   function get_age(){
    return $this->age;
  }
  
  
    function set_religion($religion)
  {
    $this->religion = $religion;
  }
   function get_religion(){
    return $this->religion;
  }
  
    function set_schoolYear($schoolYear)
  {
    $this->schoolYear = $schoolYear;
  }
   function get_schoolYear(){
    return $this->schoolYear;
  }
  
    function set_school($school)
  {
    $this->school = $school;
  }
   function get_school(){
    return $this->school;
  }
  
   function displayMyInfo()
  {
    echo "My personal information:";
	echo "<br>Name: ". $this->get_Name();
	echo "<br>Address: ". $this->get_Address();
	echo "<br>Age: ". $this->get_Age();
	echo "<br>Religion: ". $this->get_Religion();
	echo "<br>School Year: ". $this->get_schoolYear();
	echo "<br>School: ". $this->get_School();
  }
  
  
}
$MyInfo = new MyInfo("Kenzo Lui C. Morita","Pembo, Makati City","21","Roman Catholic","4th Year","University of Makati");
$MyInfo->displayMyInfo();
?>


 