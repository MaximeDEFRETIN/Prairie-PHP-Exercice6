<?php
$langage = array("HTML","CSS","Javascript","PHP");
$Tab = TabOAlph($langage);
foreach($Tab as $element) {
  echo $element;
}
function TabOAlph($langage) {
  sort($langage);
  return $langage;
}
function string($langage) {
  implode('', $langage);
  //echo $langage;
  return ($langage);
}
?>
