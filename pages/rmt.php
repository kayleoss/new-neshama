<?php
$page_title = "Neshama Therapy: Registered Massage Therapy - RMT";
include "../layouts/head.php";
include "../layouts/nav.php";
$banner_heading = "Registered Massage Therapy";
$banner_text = "A variety of different massage services and techniques are available! Our Massage treatments are tailored for your needs after a clinical assessment. Whether you have back pain, shoulder pain, stress or any other discomfort, our main goal is to help you in your healing process.";
$banner_img_src = "/assets/rmt.jpeg";
$title = "RMT Services";
$description ="After your treatment, the therapist will consult with you regarding <span class='blue-border-bottom'>after-care and nutritional advice</span> for the best results.";

$services = array();
$services[0]->name = "Classical Massage";
$services[0]->text = "Classical Massage is a hands-on manipulation of the soft tissues of the body including muscles, connective tissue, tendons, ligaments and joints. Massage therapy helps alleviate the soft tissue discomfort associated with everyday and occupational stresses, muscular overuse and chronic pain syndromes.";
$services[0]->image_src = "/assets/rmt.jpeg";
$services[1]->name = "Sports Massage";
$services[1]->text = "Sports Massage is designed to help athletes prepare their bodies for optimal performance, recover after a big event and function well during training. Sports Massage is highly recommended to any athlete, whether they are injured or not.";
$services[1]->image_src = "/assets/swedish.jpg";
$services[2]->name = "Pregnancy Massage";
$services[2]->text = "Pregnancy Massage is specifically tailored for the expectant mother’s needs. Many women suffer from aches and pains, stiffness and tension during pregnancy. Gentle massage can help to relieve problems such as backache, sleep disorders, edema, headaches and other complaints associated with bodily changes due to pregnancy.";
$services[2]->image_src = "/assets/pregnancy.jpg";

include "../layouts/banner.php";
include "../layouts/service-layout.php";
include "../layouts/therapist-intro.php";
include "../layouts/footer.php";
?>
