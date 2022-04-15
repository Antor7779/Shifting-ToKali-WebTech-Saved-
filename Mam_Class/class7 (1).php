<?php
//how to read an XML data
/*
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
echo "<br>".$xml->to;
*/
//how to read a JSON data
class Student{
  public $name;
  public $id;
  public $city;
  /*
  function assign($name,$id,$city)
  {
	  $this->name=$name;
	  $this->id=$id;
	  $this->city=$city;
  }
  */
}
$obj=new Student();
//$obj->assign("Shayoni",123,"Dhaka");
$obj->name="Shayoni";
$obj->age=20;
$obj->city="Dhaka";
//$jsondata=json_encode($obj);
//echo $jsondata;
	
$jsondata=file_get_contents("books.json");
$json=json_decode($jsondata,true);
//echo $json['books'][0]['author'];
foreach($json['books'] as $b)
{
	echo "Book name is:".$b['name']."<br>";
	echo "Book's author name is:".$b['author']."<br>";
}	

?>