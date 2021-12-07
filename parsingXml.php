<?php
    // create XML DOM tree
    $xml = new DOMDocument();
    $xml->load("question4.xml");
    $memberList = array();
    $memberNodes = $xml->getElementsByTagName("member");
    foreach ($memberNodes as $m) {
        $category = $m->getAttribute("category");
        $mid = $m->getElementsByTagName("mid")->item(0)->nodeValue;
        $name = $m->getElementsByTagName("name")->item(0)->nodeValue;
        $memberList[] = array("member" => array(
            "category" => $category,
            "mid" => $mid,
            "name" => $name));        
    }
    echo json_encode($memberList);
?>