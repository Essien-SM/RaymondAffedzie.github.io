<?php 
include 'partials/header.php';

// fetch news from database
$news_query = "SELECT * FROM news ORDER BY date DESC LIMIT 10";
$news = mysqli_query($connection, $news_query);

?>

    <main class="container mt-5">      
      <div class="row g-5 mt-3">
        <div class="col-md-12">
          <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark" 
                style="background-image: linear-gradient(15deg, #2f3f9b 0%, #1ac7be 100%);">
            <div class="col-md-12 px-0">
              <h1 class="display-3 fw-bold">Find more of our news below</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card shadow-sm mb-4" id="events">
            <img src="assets/img/Picture1.png" width="100%" height="300px" alt="...">
            <div class="card-body">
              <h1>News</h1>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read more</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

          <div class="row">
            <?php while($new = mysqli_fetch_assoc($news)): ?>
            <div class="col-md-3">
              <div class="card m-2">
                <img src="assets/img/Picture1.png" width="100%" height="auto" alt="...">  
                <div class="card-body">
                  <h3><?= $new['tittle'] ?></h3>
                  <p class="card-text">
                    <?= substr($new['content'], 0, 29)  ?>
                  </p>
                  <p class="card-text">Read more</p>
                  <small class="text-muted">
                    <?= $new['date'] ?>
                  </small>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
              </div>
            </div>
            <?php endwhile ?>
          </div>


          <div id="news">
            <article class="blog-post mt-5">
              <h2 class="blog-post-title mb-1">More News</h2>
              <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>
              
              <p>This is some additional paragraph placeholder content. 
                It has been written to fill the available space and show 
                how a longer snippet of text affects the surrounding content. 
              </p>
              <blockquote>
                <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
              </blockquote>
            </article>
            
            <article class="blog-post mt-5">
              <h2 class="blog-post-title mb-1">More News</h2>
              <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>
              
              <p>This is some additional paragraph placeholder content. 
                It has been written to fill the available space and show 
                how a longer snippet of text affects the surrounding content. 
              </p>
              <blockquote>
                <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
              </blockquote>
            </article>
            
            <article class="blog-post mt-5">
              <h2 class="blog-post-title mb-1">More News</h2>
              <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>
              
              <p>This is some additional paragraph placeholder content. 
                It has been written to fill the available space and show 
                how a longer snippet of text affects the surrounding content. 
              </p>
              <blockquote>
                <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
              </blockquote>
            </article>
          </div>
        </div>
      </div>     


<?php 
include 'partials/footer.php';
?>