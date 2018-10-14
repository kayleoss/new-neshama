<?php
$page_title = "Neshama Therapy: TCM, Traditional Chinese Medicine";
include "../layouts/head.php";
include "../layouts/nav.php";
$banner_img_src = "https://scontent.fyto1-1.fna.fbcdn.net/v/t31.0-8/11336914_10152905789036186_4013228155704226016_o.jpg?_nc_cat=111&oh=8369923bb2d95160b8b98ca5cdc7b02a&oe=5C1A6C24";
$banner_text = "A variety of different TCM treatments and techniques are available. Our most effective Traditional Chinese Medicine treatments have been a combination of various techniques. We are passionate about our patients, and we tailor every treatment to provide the best results for your condition.";
$banner_heading = "Traditional Chinese Medicine";
$services = array();

$services[0]->name = "Acupuncture";
$services[0]->text = "Acupuncture involves the insertion of sterilized, painless, fine needles to the acupuncture points of the body to achieve balanced health and pain relief. Cosmetic acupuncture is also available.";
$services[0]->image_src = "https://static1.squarespace.com/static/549e0de0e4b0504d1e9b5965/t/59f516b4e2c483f7f6dbd521/1509234357203/c700x420.jpg?format=1500w";

$services[1]->name = "Chinese Foot Reflexology";
$services[1]->text = "A form of traditional Chinese medicine, Chinese foot reflexology is the ancient art of working the meridian lines and pressure points on the feet corresponds to different parts of the body. Chinese foot reflexology is believed to stimulate elimination, improve circulation, support the immune system, restore the body’s equilibrium of Yin and Yang, encourage healing and strengthens the body.";
$services[1]->image_src = "https://img.grouponcdn.com/deal/2TMjqfB3Y5UAEs7wxBUkCXs6uQwX/2T-2048x1229/v1/c700x420.jpg";

$services[2]->name = "Cupping";
$services[2]->text = "Cupping therapy is a painless procedure to encourage blood flow to an affected body area in order to speed up the healing process. This draws up stagnant blood from the underlying tissues which promotes localized healing effect.";
$services[2]->image_src = "http://www.ohpkelowna.com/wp-content/uploads/2016/08/cupping.jpg";

$services[3]->name = "Guasha";
$services[3]->text = "Guasha involves coetaneous stimulation through repeated pressured strokes over lubricated skin with a special smooth edge instrument. Guasha treats chronic and acute conditions of respiratory and digestive disorders. The patient is expected to experience immediate relief from pain, stiffness, fever, chill, cough, nausea and other symptoms.";
$services[3]->image_src = "http://www.rockycoastacupuncture.com/wp-content/uploads/2017/03/guasha.jpg";

$services[4]->name = "Reiki Healing Energy";
$services[4]->text = "Reiki is a healing technique involving the placement of hands on the body in order to channel energy. Reiki is used for any illness and maintains general health and wellness.  After a Reiki treatment, the patient feels refreshed, relaxed, clear minded and more content in themselves. Receiving Reiki is a very relaxing and soothing experience!";
$services[4]->image_src = "https://www.alabamareiki.com/img/alabama-reiki.jpg";

$services[5]->name = "Shiatsu";
$services[5]->text = "The use of palms, thumbs, elbows or knees to apply comfortable, sustained pressure on top of the clothing. Shiatsu helps relieve tension, harmonize bodily functions, promotes relaxation and stimulates the body's own natural healing powers.";
$services[5]->image_src = "http://www.pacificwellness.ca/wp-content/uploads/2015/05/Shiatsu1.jpg";

$services[6]->name = "Tui Na";
$services[6]->text = "Tui Na uses rhythmic compression techniques and manipulations along the Meridians to stimulate acupuncture points and to harmonize the body. Tuina treats injuries, musculoskeletal problems and internal disorders.";
$services[6]->image_src = "https://cdn.shopify.com/s/files/1/1842/6435/collections/d4807bdd20b1a8d6bb326644bd901623_92eaf2d6-cbd9-4707-ad57-3d9570c57739_1400x.jpg?v=1506876744";


include "../layouts/banner.php";
include "../layouts/service-layout.php";
include "../layouts/therapist-intro.php";
include "../layouts/footer.php";
?>
