<?php 
include 'partials/header.php';
?>
        <main class="container text-white" style="margin-top: 120px;">
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
              <form action="" method="post">
                <h3 class="text-white">Be part of our journey:</h3>
                <h5 class="mb-5 text-white">Let bring Children to our Lord Jesus Christ</h5>
                <div class="row">
                  <div class="form-group mb-3 col-md-6">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Isaac">
                  </div>
                  <div class="form-group mb-3 col-md-6">
                    <label for="surname">Surname</label>
                    <input type="text" name="surnname" id="surname" class="form-control" placeholder="Lawer Martey">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group mb-3 col-md-6">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="example@email.com">
                  </div>
                  <div class="form-group mb-3 col-md-6">
                      <label for="phone_number">Phone Number</label>
                      <input type="phone_number" name="phone_number" id="phone_number" class="form-control" placeholder="+1234567890">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group mb-3 col-md-6">
                      <label for="category">Select means of contact</label>
                      <select name="category" id="category" class="form-control" aria-placeholder="Select means of contact:By Email">
                          <option value=""></option>
                          <option value="email">Email</option>
                          <option value="phone_number">Phone Number</option>
                          <option value="email phone_number">Both</option>
                      </select>
                  </div>
                  <div class="form-group mb-3 col-md-6">
                      <label for="category">Select category for joining us</label>
                      <select name="category" id="category" class="form-control" aria-placeholder="How do you want to join us- Example: Prayer Partner">
                          <option value=""></option>
                          <option value="donor">Donor</option>
                          <option value="prayer partner">Prayer Partner</option>
                          <option value="volunteer">Volunteer</option>
                          <option value="subscribed">Subscribe to Our Resources</option>
                      </select>
                  </div>
                </div>
                <button type="submit" name="bePartOfUs" class="btn btn-primary col-md-12 mt-3">Join Us: Let impact into our generation and beyond</button>
            </form>
            </div>
            <div class="col-md-3">
            </div>
          </div>
        </main>

        <?php 
include 'partials/footer.php';
?>