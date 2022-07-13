<?php 
include 'partials/header.php';
?>
    <main> 
      <div class="container" style="margin-top: 100px;">
        <div class="row">
          <div class="col-lg-6 mb-4 text-white d-flex align-items-center">
            <div class="row">
              <h1 class="mb-3">Visit our social media pages</h1>
              <div class="col-md-4">
                <button class="mb-3 btn btn-primary" style="width: 120px;"><a href="https://www.facebook.com/paultimothyleadershipnetworkinc/" target="_blank" class="text-white text-decoration-none">facebook <i class="fa fa-facebook"></i></a></button>
                <button class="mb-3 btn btn-warning" style="width: 120px;"><a href="https://www.instagram.com/paultimothyleadershipnetwork/" target="_blank" class="text-white text-decoration-none">instagram <i class="fa fa-instagram"></i></a></button>
              </div>
              <div class="col-md-4">
                <button class="mb-3 btn btn-secondary" style="width: 120px;"><a href="https://twitter.com/paultimothy_net" target="_blank" class="text-white text-decoration-none">twitter <i class="fa fa-twitter"></i></a></button>
                <button class="mb-3 btn btn-danger" style="width: 120px;"><a href="https://youtube.com/channel/UCfezsKtVEl6z2_gL7WteBYg" target="_blank" class="text-white text-decoration-none">youtube <i class="fa fa-youtube"></i></a></button>
              </div>
              <!-- <div class="col-sm-4"></div> -->
            </div>
          </div>

          <div class="col-lg-6" style="margin-bottom: 50px;">
            <div class="card text-white bg-transparent">
              <div class="card-body">
                <p class="mt-1 h4">Get in touch with us</p>
                <div class="container">
                  <form action="" method="POST">
                    <div class="form-group mb-3">
                      <label for="fullname">Full name</label>
                      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full name" required>
                    </div>
                    <div class="form-group mb-3">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group mb-3">
                      <label for="phone_number">Phone Number</label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                    </div>
                    <div class="text-start mb-3 p">
                      <div class="form-group">Preferred method of communication</div>
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="emailopt" id="emailopt" value="emailopt">
                        <label for="emailopt">Email</label>
                      </div>
                      <div class="form-group form-check form-check-inline text-end">
                        <input class="form-check-input" type="radio" name="phoneopt" id="phoneopt" value="phoneopt">
                        <label for="phoneopt">Phone</label>
                      </div>                    
                    </div>                            
                    <div class="form-group mb-3">
                      <textarea class="form-control" id="message" name="message" placeholder="Message" tabindex="5"></textarea>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php 
include 'partials/footer.php';
?>