<?php
$page_title = "Neshama Therapy: Rates and Pricing";
include "../layouts/head.php";
include "../layouts/nav.php";
$book_now_button= true;
$banner_img_src = "https://scontent.fyto1-1.fna.fbcdn.net/v/t31.0-8/24297534_10155079541856186_3838485271812979892_o.jpg?_nc_cat=0&oh=32eb7aeb999d701d4588a8acc945294f&oe=5C6321EF";
$banner_heading = "Our Rates & Pricing";
$banner_text = "We accept a variety of payment options: debit, credit, cash, cheque, and e-transfer. We are able to <b>provide paper or electronic receipts</b> for each treatment, whether it is for massage or acupuncture! Additionally, gift cards are available for purchase. See the table below for our rates.";

include "../layouts/banner.php";
?>
<section class="container p-5">
  <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row text-info">30 Minutes</th>
      <td class="text-info">$80.00 CAD</td>
    </tr>
    <tr>
      <th scope="row text-info">45 Minutes</th>
      <td class="text-info">$95.00 CAD</td>
    </tr>
    <tr>
      <th scope="row text-info">60 Minutes</th>
      <td class="text-info">$115.00 CAD</td>
    </tr>
    <tr>
      <th scope="row">75 Minutes</th>
      <td class="text-info">$140.00 CAD</td>
    </tr>
    <tr>
      <th scope="row">90 Minutes</th>
      <td class="text-info">$155.00 CAD</td>
    </tr>
  </tbody>
</table>
<p class="text-info">*Gift Cards are available for purchase. Speak to your therapist for more information.</p>
<p class="text-info">*Paper or electronic RMT/Acupuncture receipts are available for each treatment.</p>
</section>
<?php
include "../layouts/why-neshama.php";
include "../layouts/footer.php";
?>
