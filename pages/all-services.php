<?php
$page_title = "Neshama Therapy: All Services - RMT and TCM";
include "../layouts/head.php";
include "../layouts/nav.php";
$banner_heading = "Our Services";
$banner_text = "A variety of different RMT massage services and Traditional Chinese Medicine treatments are available! Our techniques are tailored for your needs. Whether you have back pain, shoulder pain, stress or any other discomfort, our main goal is to help you in your healing process.";
$banner_img_src = "https://s3.amazonaws.com/veewme.media/CACHE/images/tour_photos/295f8fcf-24eb-41b8-b379-562060dc1049/c4fb86ba22e0a096b3b0b35aa87b9029.JPG";
$book_now_button = true;
$title = "For Your Wellness &amp; Healing";
$description ="Our therapist cares about your wellbeing and will give nutritional and after-care advice after the treatment to ensure the best possible results.";

$services = array();

$services[0]->name = "Acupuncture";
$services[0]->text = "Acupuncture involves the insertion of sterilized, painless, fine needles to the acupuncture points of the body to achieve balanced health and pain relief. Cosmetic acupuncture is also available.";
$services[0]->image_src = "https://static1.squarespace.com/static/549e0de0e4b0504d1e9b5965/t/59f516b4e2c483f7f6dbd521/1509234357203/c700x420.jpg?format=1500w";

$services[1]->name = "Cupping";
$services[1]->text = "Cupping therapy is a painless procedure to encourage blood flow to an affected body area in order to speed up the healing process. This draws up stagnant blood from the underlying tissues which promotes localized healing effect.";
$services[1]->image_src = "http://www.ohpkelowna.com/wp-content/uploads/2016/08/cupping.jpg";

$services[2]->name = "Shiatsu";
$services[2]->text = "The use of palms, thumbs, elbows or knees to apply comfortable, sustained pressure on top of the clothing. Shiatsu helps relieve tension, harmonize bodily functions, promotes relaxation and stimulates the body's own natural healing powers.";
$services[2]->image_src = "http://www.pacificwellness.ca/wp-content/uploads/2015/05/Shiatsu1.jpg";

$services[3]->name = "Tui Na";
$services[3]->text = "Tui Na uses rhythmic compression techniques and manipulations along the Meridians to stimulate acupuncture points and to harmonize the body. Tuina treats injuries, musculoskeletal problems and internal disorders.";
$services[3]->image_src = "https://cdn.shopify.com/s/files/1/1842/6435/collections/d4807bdd20b1a8d6bb326644bd901623_92eaf2d6-cbd9-4707-ad57-3d9570c57739_1400x.jpg?v=1506876744";

$services[4]->name = "Classical Massage";
$services[4]->text = "Classical Massage is a hands-on manipulation of the soft tissues of the body including muscles, connective tissue, tendons, ligaments and joints. Massage therapy helps alleviate the soft tissue discomfort associated with everyday and occupational stresses, muscular overuse and chronic pain syndromes.";
$services[4]->image_src = "/assets/rmt.jpeg";

$services[5]->name = "Sports Massage";
$services[5]->text = "Sports Massage is designed to help athletes prepare their bodies for optimal performance, recover after a big event and function well during training. Sports Massage is highly recommended to any athlete, whether they are injured or not.";
$services[5]->image_src = "/assets/swedish.jpg";

$services[6]->name = "Pregnancy Massage";
$services[6]->text = "Pregnancy Massage is specifically tailored for the expectant mother’s needs. Many women suffer from aches and pains, stiffness and tension during pregnancy. Gentle massage can help to relieve problems such as backache, sleep disorders, edema, headaches and other complaints associated with bodily changes due to pregnancy.";
$services[6]->image_src = "/assets/pregnancy.jpg";

$services[7]->name = "Chinese Foot Reflexology";
$services[7]->text = "A form of traditional Chinese medicine, Chinese foot reflexology is the ancient art of working the meridian lines and pressure points on the feet corresponds to different parts of the body. Chinese foot reflexology is believed to stimulate elimination, improve circulation, support the immune system, restore the body’s equilibrium of Yin and Yang, encourage healing and strengthens the body.";
$services[7]->image_src = "https://img.grouponcdn.com/deal/2TMjqfB3Y5UAEs7wxBUkCXs6uQwX/2T-2048x1229/v1/c700x420.jpg";

$services[8]->name = "Reiki Healing Energy";
$services[8]->text = "Reiki is a healing technique involving the placement of hands on the body in order to channel energy. Reiki is used for any illness and maintains general health and wellness.  After a Reiki treatment, the patient feels refreshed, relaxed, clear minded and more content in themselves. Receiving Reiki is a very relaxing and soothing experience!";
$services[8]->image_src = "https://www.alabamareiki.com/img/alabama-reiki.jpg";

$services[9]->name = "Guasha";
$services[9]->text = "Guasha involves coetaneous stimulation through repeated pressured strokes over lubricated skin with a special smooth edge instrument. Guasha treats chronic and acute conditions of respiratory and digestive disorders. The patient is expected to experience immediate relief from pain, stiffness, fever, chill, cough, nausea and other symptoms.";
$services[9]->image_src = "http://www.rockycoastacupuncture.com/wp-content/uploads/2017/03/guasha.jpg";

include "../layouts/banner.php";
include "../layouts/service-layout.php";
include "../layouts/therapist-intro.php";
include "../layouts/footer.php";
?>
