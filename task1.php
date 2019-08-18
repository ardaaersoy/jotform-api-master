 <?php

require 'db.php';


$html = file_get_contents('https://www.jotform.com/paypal/standard/');
$doc = new DOMDocument();
$doc->loadHTML($html);

$xpath = new DOMXPath($doc);
$nodeList = $xpath->query("//*[contains(@class, 'locale')]");

foreach ($nodeList as $node) {
   echo "<p>" . $node->nodeValue . "</p>";


   try {
      $sql = "insert into task1 (content) values (?)";
      $stmt = $db->prepare($sql);
      $stmt->execute([$node->nodeValue]);
   } catch (Exception $ex) {
      echo $ex->getMessage();
   }
}
