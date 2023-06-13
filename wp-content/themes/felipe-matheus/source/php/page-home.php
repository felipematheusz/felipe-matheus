<?php get_header(); ?>
<?php include("svg.php"); ?>

  <main>
    <section>
      <div class="carousel-banner-home">
        <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/banner-1.jpg)" class="img-banner-home">
          <div class="container">
            <p class="title">Lorem Ipsum is simply dummy text.</p>
            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="">Saiba mais</a>
          </div>
        </div>
        <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/banner-2.jpg)" class="img-banner-home">
          <div class="container">
            <p class="title">Lorem Ipsum is simply dummy text.</p>
            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="">Saiba mais</a>
          </div>
        </div>
        <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/banner-3.jpg)" class="img-banner-home">
          <div class="container">
            <p class="title">Lorem Ipsum is simply dummy text.</p>
            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="">Saiba mais</a>
          </div>
        </div>
      </div>
    </section>

    <section class="develop-manage">
      <div class="container">
        <div class="develop">
          <h3>Lorem Ipsum</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <div class="box-develop">
            <div class="border-center-develop"></div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-develop.png)">
                <span>01</span>
              </div> 
              <span>Lorem Ipsum</span>
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-develop.png)">
                <span>02</span>
              </div>
              <span>Lorem Ipsum</span>  
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-develop.png)">
                <span>03</span>
              </div> 
              <span>Lorem Ipsum</span> 
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-develop.png)">
                <span>04</span>
              </div>  
              <span>Lorem Ipsum</span>
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-develop.png)">
                <span>05</span>
              </div>  
              <span>Lorem Ipsum</span>
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-develop.png)">
                <span>06</span>
              </div>  
              <span>Lorem Ipsum</span>
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-develop.png)">
                <span>07</span>
              </div>  
              <span>Lorem Ipsum</span>
            </div>
          </div>
        </div>
        <div class="develop">
          <h3 class="manage">Lorem Ipsum</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <div class="box-develop">
            <div class="border-center-develop-secondary"></div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-manage.png)">
                <span class="manage">08</span>
              </div> 
              <span class="manage">Lorem Ipsum</span>
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-manage.png)">
                <span class="manage">09</span>
              </div>
              <span class="manage">Lorem Ipsum</span>  
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-manage.png)">
                <span class="manage">10</span>
              </div> 
              <span class="manage">Lorem Ipsum</span> 
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-manage.png)">
                <span class="manage">11</span>
              </div>  
              <span class="manage">Lorem Ipsum</span>
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-manage.png)">
                <span class="manage">12</span>
              </div>  
              <span class="manage">Lorem Ipsum</span>
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-manage.png)">
                <span class="manage">13</span>
              </div>  
              <span class="manage">Lorem Ipsum</span>
            </div>
            <div class="box-icon-develop">
              <div class="icon-develop" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/icon-manage.png)">
                <span class="manage">14</span>
              </div>  
              <span class="manage">Lorem Ipsum</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="video-home">
      <div class="container">
        <div class="left">
          <h2>Lorem Ipsum is simply dummy text of the.</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="">
            Saber mais
            <?php echo $arrow_right; ?>
          </a>
        </div>
        <div class="right">
          <div class="back-video" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/back-video.jpg)">
            <button><?php echo $play_video; ?></button>
          </div>
        </div>
      </div>
    </section>

    <section class="search-enterprise">
      <div class="container">
        <h3>Lorem Ipsum is simply dummy</h3>
        <form id="form-search-empreendimentos" action="" method="GET">
          <div class="fieds-form">
            <div class="custom-select">
              <?php
                // Select para a taxonomia "estados"
                wp_dropdown_categories(array(
                  'taxonomy' => 'estados',
                  'name' => 'estado',
                  'show_option_all' => 'Estado',
                  'orderby' => 'name',
                  'hierarchical' => true,
                  'value_field' => 'slug',
                  'selected' => (isset($_GET['estado']) && $_GET['estado'] !== '0') ? $_GET['estado'] : '',
                ));
              ?> 
              <div class="arrow-icon"></div>
            </div>
            <div class="custom-select">
              <?php
                // Select para a taxonomia "cidades"
                wp_dropdown_categories(array(
                  'taxonomy' => 'cidades',
                  'name' => 'cidade',
                  'show_option_all' => 'Cidade',
                  'orderby' => 'name',
                  'hierarchical' => true,
                  'value_field' => 'slug', 
                  'selected' => (isset($_GET['cidade']) && $_GET['cidade'] !== '0') ? $_GET['cidade'] : '',
                ));
              ?>
              <div class="arrow-icon"></div>
            </div>
            <div class="custom-select">
              <?php
                // Select para a taxonomia "tipos"
                wp_dropdown_categories(array(
                  'taxonomy' => 'tipos',
                  'name' => 'tipo',
                  'show_option_all' => 'Tipo',
                  'orderby' => 'name',
                  'hierarchical' => true,
                  'value_field' => 'slug',
                  'selected' => (isset($_GET['tipo']) && $_GET['tipo'] !== '0') ? $_GET['tipo'] : '',
                ));
              ?>
              <div class="arrow-icon"></div>
            </div>
          </div>
          <input class="submit" type="submit" value="Pesquisar">
        </form>
        <div class="cards-enterprise">
          <div class="top">
            <div class="box-h3">
              <h3>Lorem Ipsum is simply</h3>
              <div class="border-h3"></div>
            </div>
            <button>
              <span>Filtrar</span>
              <?php echo $icon_filter; ?>
            </button>
          </div>
          <div class="button-mobile">
            <button>
              <span>Filtrar</span>
              <?php echo $icon_filter; ?>
            </button>
          </div>
          <div class="box-cards">
            <?php
              $args = array(
                'post_type' => 'empreendimentos',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
              );
              $empreendimentos_query = new WP_Query($args);

              if ($empreendimentos_query->have_posts()) {
                while ($empreendimentos_query->have_posts()) {
                  $empreendimentos_query->the_post();
                  ?>
                  <div class="card-enterprise">
                    <div class="background-card" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                    <div class="content-card-enterprise">
                      <div class="title-enterprise">
                        <p><?php the_title(); ?></p>
                        <div class="border-enterprise"></div>
                      </div>
                      <div class="box-locale">
                        <?php echo $locale; ?>
                        <p><?php echo get_the_terms(get_the_ID(), 'cidades')[0]->name; ?> - <?php echo get_the_terms(get_the_ID(), 'estados')[0]->name; ?></p>
                      </div>
                      <ul>
                        <li>Lorem Ipsum is simply dummy</li>
                        <li>Lorem Ipsum is simply dummy</li>
                        <li>Lorem Ipsum is simply dummy</li>
                      </ul>
                    </div>
                    <a class="button-card-enterprise" href="">
                      Ver mais
                      <?php echo $arrow_right; ?>
                    </a>
                  </div>
                  <?php
                }
              }
              wp_reset_postdata();
            ?>
          </div>
          <div class="box-view-more">
            <a class="view-more" href="">
              Ver mais
              <?php echo $arrow_right; ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="posts-home">
      <div class="container">
        <div class="box-post-home">
          <div class="left">
            <h3>Lorem Ipsum is simply</h3>
            <div class="card-post-home">
              <div class="back-card-post-home" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/back-img-post.jpg)"></div>
              <div class="content-post-home">
                <p class="title-post-home">Lorem Ipsum</p>
                <p class="subtitle-post-home">Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                <p class="date-post-home">Forbes | 09 de maio 2023</p>
              </div>
            </div>
          </div>
          <div class="right">
            <h3>Últimas matérias do Blog </h3>
            <div class="box-posts-blog-home">
              <div class="img-post-blog-home">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/post-blog-home.jpg" alt="">
                <p class="title-blog-home">Lorem Ipsum is simply dummy text</p>
                <p class="text-blog-home">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p class="date-blog-home">19 de abril de 2023</p>
              </div>
              <div class="img-post-blog-home">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/post-blog-home.jpg" alt="">
                <p class="title-blog-home">Lorem Ipsum is simply dummy text</p>
                <p class="text-blog-home">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p class="date-blog-home">19 de abril de 2023</p>
              </div>
            </div>
          </div>
        </div>
        <div class="box-view-more">
          <a class="view-more" href="">
            Ver mais
            <?php echo $arrow_right; ?>
          </a>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>