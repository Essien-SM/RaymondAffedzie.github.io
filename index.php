<?php 
include 'partials/header.php';
?>

<main>
      <!-- Displayed images -->
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-responsive" src="assets/img/construction-coming-soon-spot-light-background_1017-25511.jpg" width="100%" height="700px" alt="slide1">
            <div class="container">
              <!-- <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
              </div> -->
            </div>
          </div>
          <div class="carousel-item">
            <img class="img-responsive" src="assets/img/unsplash-photo-2.jpg" width="100%" height="700px" alt="slide2">
            <div class="container">
              <!-- <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div> -->
            </div>
          </div>
          <div class="carousel-item">
            <img class="img-responsive" src="assets/img/unsplash-photo-3.jpg" width="100%" height="700px" alt="slide3">
            <div class="container">
              <!-- <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div> -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- First set of videos -->
      <div class="album py-5 bg-light margin-top:-50rem shadow-lg">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
            
            <div class="col">
              <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Why this Organization.</h3>
              <div class="card shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    
                      <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>
                    
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Organization's Story.</h3>
              <div class="card shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>

                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                    <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>

                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Our Vision and Mission</h3>
              <div class="card shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>

                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
        Launch static backdrop modal
      </button> -->
      
      <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLiveLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- <p>I will not close if you click outside me. Don't even try to press escape key.</p> -->
              <div class="col">
                <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Why this Organization.</h3>
                <div class="card shadow-sm">
                  <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                  <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      
                        <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>
                      
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Peoples stories -->
        <div class="album py-5 bg-light margin-top:-50rem shadow-lg">
          <div class="container">
            <div class="row flex-md-row mb-4 ">
              <h1 class="text-center pb-2 border-bottom display-6 fst-italic">Inspirational Stories from People around the world</h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
              <div class="col">
                <div class="card g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Maryland, United State of America</strong>
                    <h3 class="mb-0 display-6 fst-italic">Title of story here</h3>
                    <div class="mb-1 text-muted mt-2">Nov 12, 2021</div>
                    <p class="card-text mb-auto">Mr. Isaac Lawer Martey</p>
                    <a href="#" class="stretched-link btn btn-primary btn-sm mt-3">Read Story</a>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Maryland, United State of America</strong>
                    <h3 class="mb-0 display-6 fst-italic">Title of story here</h3>
                    <div class="mb-1 text-muted mt-2">Nov 12, 2021</div>
                    <p class="card-text mb-auto">Mr. Isaac Lawer Martey</p>
                    <a href="#" class="stretched-link btn btn-primary btn-sm mt-3">Read Story</a>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Maryland, United State of America</strong>
                    <h3 class="mb-0 display-6 fst-italic">Title of story here</h3>
                    <div class="mb-1 text-muted mt-2">Nov 12, 2021</div>
                    <p class="card-text mb-auto">Mr. Isaac Lawer Martey</p>
                    <a href="#" class="stretched-link btn btn-primary btn-sm mt-3">Read Story</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- 2nd set of videos -->
      <div class="album py-5 bg-light margin-top:-50rem shadow-lg">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
            <div class="col">
              <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Building a Network</h3>
              <div class="card shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>

                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Why join our team?</h3>
              <div class="card shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>

                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Be part of our journey</h3>
              <div class="card shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>

                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Upcoming Events -->
      <div class="container-fluid shadow-lg">
        <div class="p-4 p-md-5 mb-4 rounded shadow-md row mb-2">

          <!-- News -->
          <div class="col-md-6">
            <div class="row flex-md-row mb-4 mt-3">
              <h1 class="text-center pb-2 border-bottom display-6 fst-italic">Current News</h1>
            </div>
            <div class="card shadow-sm mb-4" id="events">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225px" src="assets/img/unsplash-photo-2.jpg" role="img" aria-label="Placeholder: Thumbnail" style="object-fit: cover; width: 100%; height: 30vh;">
              <div class="card-body">
                <h1>News</h1>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>

            <div class="card shadow-sm mb-4" id="events">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="assets/img/unsplash-photo-1.jpg" role="img" aria-label="Placeholder: Thumbnail" style="object-fit: cover; width: 100%; height: 30vh;">
              <div class="card-body">
                <h1>News</h1>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>

            <div class="card shadow-sm mb-4" id="events">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="assets/img/unsplash-photo-3.jpg" role="img" aria-label="Placeholder: Thumbnail" style="object-fit: cover; width: 100%; height: 30vh;">
              <div class="card-body">
                <h1>News</h1>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Event -->
          <div class="col-md-6">
            <div class="row flex-md-row mb-4 mt-3">
              <h1 class="text-center pb-2 border-bottom display-6 fst-italic">Upcoming events</h1>
            </div>
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">GHANA, WEST AFRICA</strong>
                <h3 class="mb-0">SEKONDI-TAKORADI ZONAL 4 DAYS CAMPING</h3>
                <p class="card-text mb-auto">There is going to be a 4 days camping, for all the Junior High and Senior High schools around Sekondi-Takoradi zone.</p>
                <div class="mb-1 text-muted"><strong>DATE:</strong> Nov 12 to Nov 16, 2022</div>
                <div class="mb-1 text-muted"><strong>REPORTING TIME:</strong> 9:00am</div>
                <div class="mb-1 text-muted"><strong>VENUE:</strong> Ghana Secondary Technical School (GSTS), Western Reigion</div>
                <div class="mb-1 text-muted"><strong>FOR MORE INFO:</strong>+233 (0)247834206</div>
                <!-- <p class="text-primary fst-italic"><strong>Read more</strong></p> -->
                <!-- <a href="#" class="stretched-link fst-italic">Continue reading</a> -->
              </div>
              <!-- <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </div> -->
            </div>

            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">GHANA, WEST AFRICA</strong>
                <h3 class="mb-0">SEKONDI-TAKORADI ZONAL 4 DAYS CAMPING</h3>
                <p class="card-text mb-auto">There is going to be a 4 days camping, for all the Junior High and Senior High schools around Sekondi-Takoradi zone.</p>
                <div class="mb-1 text-muted"><strong>DATE:</strong> Nov 12 to Nov 16, 2022</div>
                <div class="mb-1 text-muted"><strong>REPORTING TIME:</strong> 9:00am</div>
                <div class="mb-1 text-muted"><strong>VENUE:</strong> Ghana Secondary Technical School (GSTS), Western Reigion</div>
                <div class="mb-1 text-muted"><strong>FOR MORE INFO:</strong>+233 (0)247834206</div>
                <!-- <p class="text-primary fst-italic"><strong>Read more</strong></p> -->
                <!-- <a href="#" class="stretched-link fst-italic">Continue reading</a> -->
              </div>
              <!-- <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </div> -->
            </div>

            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">GHANA, WEST AFRICA</strong>
                <h3 class="mb-0">SEKONDI-TAKORADI ZONAL 4 DAYS CAMPING</h3>
                <p class="card-text mb-auto">There is going to be a 4 days camping, for all the Junior High and Senior High schools around Sekondi-Takoradi zone.</p>
                <div class="mb-1 text-muted"><strong>DATE:</strong> Nov 12 to Nov 16, 2022</div>
                <div class="mb-1 text-muted"><strong>REPORTING TIME:</strong> 9:00am</div>
                <div class="mb-1 text-muted"><strong>VENUE:</strong> Ghana Secondary Technical School (GSTS), Western Reigion</div>
                <div class="mb-1 text-muted"><strong>FOR MORE INFO:</strong>+233 (0)247834206</div>
                <!-- <p class="text-primary fst-italic"><strong>Read more</strong></p> -->
                <!-- <a href="#" class="stretched-link fst-italic">Continue reading</a> -->
              </div>
              <!-- <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </div> -->
            </div>

            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">GHANA, WEST AFRICA</strong>
                <h3 class="mb-0">SEKONDI-TAKORADI ZONAL 4 DAYS CAMPING</h3>
                <p class="card-text mb-auto">There is going to be a 4 days camping, for all the Junior High and Senior High schools around Sekondi-Takoradi zone.</p>
                <div class="mb-1 text-muted"><strong>DATE:</strong> Nov 12 to Nov 16, 2022</div>
                <div class="mb-1 text-muted"><strong>REPORTING TIME:</strong> 9:00am</div>
                <div class="mb-1 text-muted"><strong>VENUE:</strong> Ghana Secondary Technical School (GSTS), Western Reigion</div>
                <div class="mb-1 text-muted"><strong>FOR MORE INFO:</strong>+233 (0)247834206</div>
                <!-- <p class="text-primary fst-italic"><strong>Read more</strong></p> -->
                <!-- <a href="#" class="stretched-link fst-italic">Continue reading</a> -->
              </div>
              <!-- <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </div> -->
            </div>
          </div>
        </div>
      </div>

<?php
include 'partials/footer.php';
?>

      