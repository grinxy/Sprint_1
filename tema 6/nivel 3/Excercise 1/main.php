<?php declare(strict_types=1);
require_once "DidacticResource.php";
require_once "enums.php";



$didacticResource1 = new DidacticResource("excercise", Topic::PHP, "www.url.com", Type::WebArticle);
$didacticResource2 = new DidacticResource("excercise", Topic::HTML, "www.url.com", Type::Video);

echo "The resource " . $didacticResource1->getName() . " about " . $didacticResource1->getTopic() . " can be found in " . $didacticResource1->getUrl() . " in form of " . $didacticResource1->getType() . "<br/>";
echo "The resource " . $didacticResource2->getName() . " about " . $didacticResource2->getTopic() . " can be found in " . $didacticResource2->getUrl() . " in form of " . $didacticResource2->getType() . "<br/>";

