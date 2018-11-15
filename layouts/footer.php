      </main>
      <footer class="w-100" id="contact">
        <div class="overlay w-100 pt-5 pb-5">
        <div class="container">
          <div class="hide-on-mobile">
            <h3 class="text-center text-light weight-bold large-text text-shadow wow pulse">Consult With Us</h3>
            <p class="text-center text-light med-text text-shadow">To find the perfect treatment for you</p>
          </div>
          <div class="row mt-5 mobile-no-margin">
            <div class="col-sm-4 text-light">
              <p class="weight-bold underline">Contact Us:</p>
              <p><span class="weight-med">By Phone</span>: (416)-999-8640</p>
              <p><span class="weight-med">By Email</span>: <a class="text-warning underline" href="mailto:chenweinberg@gmail.com">chenweinberg@gmail.com</a></p>
              <p>On Social Media: </p>
              <div class="row text-shadow pr-5 mb-3">
                <div class="col-2">
                  <a class="text-light" href="https://facebook.com/neshamatherapy" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                </div>
                <div class="col-2">
                  <a class="text-light" href="https://twitter.com/neshamatherapy" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                </div>
                <div class="col-2">
                  <a class="text-light" href="https://instagram.com/chenweinberg" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                </div>
                <div class="col-2">
                  <a class="text-light" href="#" target="_blank"><i class="fa fa-yelp fa-2x"></i></a>
                </div>
              </div>
              <p><a class="text-primary text-light btn btn-custom" href="https://www.massagebook.com/profiles/publicBooking/1676236">Book Now</a></p>
            </div>
            <div class="col-sm-4 text-light">
              <p class="weight-bold underline">Send An Inquiry</p>
              <form action="/layouts/contact-form.php" method="POST" class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" placeholder="Barbara Smith" required name="name"/>
                <label for="phone" class="mt-2">Your Phone Number</label>
                <input type="tel" class="form-control mt-2" placeholder="416-222-2222" required name="phone"/>
                <label for="email" class="mt-2">Your Email Address</label>
                <input type="email" class="form-control mt-2" placeholder="b.smith@gmail.com" required name="email"/>
                <label for="time-to-call" class="mt-2">Best Time For Us To Call You</label>
                <select name="time-to-call" class="form-control mt-2">
                  <option value="8:00AM">8AM</option>
                  <option value="9:00AM">9AM</option>
                  <option value="10:00AM">10AM</option>
                  <option value="11:00AM">11AM</option>
                  <option value="12:00PM">12PM</option>
                  <option value="1:00PM">1PM</option>
                  <option value="2:00PM">2PM</option>
                  <option value="3:00PM">3PM</option>
                  <option value="4:00PM">4PM</option>
                  <option value="5:00PM">5PM</option>
                  <option value="6:00PM">6PM</option>
                  <option value="7:00PM">7PM</option>
                </select>
                <label for="message" class="mt-2">Enter A Message (optional)</label>
                <textarea class="mt-2 form-control" placeholder="Interested in learning more..." name="message"></textarea>
                <?php
                  $path = $_SERVER['REQUEST_URI'];
                  if (strpos ( $path, "failed-recaptcha") !== false ) {
                    echo "<div class='g-recaptcha mt-3' data-sitekey='6LcdKnAUAAAAAC78djquqSf42DyrKnSlbqjAWckA'></div>" . "<p class='mt-2 mb-2 text-warning'>ReCaptcha Attempt was unsuccessful.</p>";
                  } else {
                    echo "<div class='g-recaptcha mt-3 mb-3' data-sitekey='6LcdKnAUAAAAAC78djquqSf42DyrKnSlbqjAWckA'></div>";
                  };
                ?>
                <button type="submit" name="submit" class="btn btn-custom mt-4 text-light m-auto block">Send</button>
              </form>
            </div>
            <div class="col-sm-4 text-light">
              <p class="weight-bold underline">Our Hours Of Operation: </p>
              <p class="weight-med mt-3">2 Carlton St, Suite 720<br>Toronto, ON<br>M5B 1J3</p>
              <p class="weight-thin">
                Monday	8a.m.–7p.m.<br />
                Tuesday	8a.m.–7p.m.<br />
                Wednesday	8a.m.–7p.m.<br />
                Thursday	8a.m.–7p.m.<br />
                Sunday	8a.m.–7p.m.<br />
              </p>
              <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d721.5876410469014!2d-79.38329847074728!3d43.66167846888923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34b456ca3707%3A0xce7cbe25a7798a0c!2s2+Carlton+St+%23720%2C+Toronto%2C+ON+M5B+1J3!5e0!3m2!1sen!2sca!4v1536805991303' width='400' height='300' frameborder='0' style='border:0' id='googlemap'></iframe>
            </div>
          </div>
        </div>
        </div>
        <p class="text-light text-center small-text p-2 bg-main mb-0"><?php echo "&copy; Neshama Therapy " . date("Y")?> | <a href="../assets/privacy.pdf" target="_blank" class="text-light">Privacy Policy</a></p>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="/scripts/wow.min.js"></script>
      <script src="/scripts/script.js"></script>
      </body>
    </html>
