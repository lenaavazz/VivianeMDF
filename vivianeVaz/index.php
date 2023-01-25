<!DOCTYPE html>
<html lang="en">

<?php

  include 'mvc/estrutura/head.PHP';

?>

<body>

  <?php

  include 'mvc/estrutura/header.php';

  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center align-logo">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Que tal começar já um projeto?</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Nossos móveis são produzidos com todo o cuidado para o seu espaço, entre em contato conosco!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#contact" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Vamos começar</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="mvc/assets/img/helena/LOGO-VIVIANE-PRETO.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Quem somos</h3>
              <h2>Viviane Vaz MDF é uma empresa que preza em trabalhar com perfeição se preocupando sempre com os detalhes.</h2>
              <p>
                Com agilidade e excelência buscamos dar aos nossos clientes o melhor serviço e atendimento.  
              </p>
              <div class="text-center text-lg-start">
                <a href="#contact" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Vamos começar</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="mvc/assets/img/helena/marcenaria.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Portfólio</h2>
              <p>Veja alguns de nossos projetos</p>
            </header>
    
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">Todos</li>
                  <li data-filter=".filter-app">Cozinha</li>
                  <li data-filter=".filter-card">Sala</li>
                  <li data-filter=".filter-web">Escritórios</li>
                </ul>
              </div>
            </div>
    
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="mvc/assets/img/helena/cozinha-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Cozinha 1</h4>
                    <p>Cozinha</p>
                    <div class="portfolio-links">
                      <a href="mvc/assets/img/helena/cozinha-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="cozinha-1"><i class="bi bi-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="mvc/assets/img/helena/escritorio.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Escritório 1</h4>
                    <p>Escritórios</p>
                    <div class="portfolio-links">
                      <a href="mvc/assets/img/helena/escritorio.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="escritorio 1"><i class="bi bi-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="mvc/assets/img/helena/cozinha-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Cozinha 2</h4>
                    <p>Cozinha</p>
                    <div class="portfolio-links">
                      <a href="mvc/assets/img/helena/cozinha-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Cozinha 2"><i class="bi bi-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="mvc/assets/img/helena/sala-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Sala 1</h4>
                    <p>Sala</p>
                    <div class="portfolio-links">
                      <a href="mvc/assets/img/helena/sala-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sala 1"><i class="bi bi-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="mvc/assets/img/helena/escritorioo.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Escritório 2</h4>
                    <p>Escritórios</p>
                    <div class="portfolio-links">
                      <a href="mvc/assets/img/helena/escritorioo.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Escritório 2"><i class="bi bi-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="mvc/assets/img/helena/cozinha-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Cozinha 3</h4>
                    <p>Cozinha</p>
                    <div class="portfolio-links">
                      <a href="mvc/assets/img/helena/cozinha-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Cozinha 3"><i class="bi bi-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="mvc/assets/img/helena/sala-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Sala 2</h4>
                    <p>Sala</p>
                    <div class="portfolio-links">
                      <a href="mvc/assets/img/helena/sala-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sala 2"><i class="bi bi-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="mvc/assets/img/helena/sala-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Sala 3</h4>
                    <p>Sala</p>
                    <div class="portfolio-links">
                      <a href="mvc/assets/img/helena/sala-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sala 3"><i class="bi bi-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="mvc/assets/img/helena/escritorio-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Escritório 3</h4>
                    <p>Escritórios</p>
                    <div class="portfolio-links">
                      <a href="mvc/assets/img/helena/escritorio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Escritório 3"><i class="bi bi-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
    
        </section><!-- End Portfolio Section -->

        <!-- ======= Vantagens Section ======= -->
        <section id="vantagens" class="about">

          <div class="container" data-aos="fade-up">
            <div class="row gx-0">
    
              <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                  <h3>Qual é a vantagem de comprar com a gente?</h3>
                  <h2>Nossos produtos são 100% em MDF e trazemos os melhores preços do mercado.</h2>
                  <p>
                    Na fabricação de um móvel sob medida é importante que o material seja de alta qualidade por isso nossos móveis são totalmente em mdf.
                  </p>
                  <div class="text-center text-lg-start">
                    <a href="#contact" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Vamos começar</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="mvc/assets/img/helena/cozinha.jpg" class="img-fluid" alt="">
              </div>
    
            </div>
          </div>
    
        </section><!-- End Vantagens Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contato</h2>
          <p>Entre em contato conosco</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Endereço</h3>
                  <p>Rodovia dos Minérios km 23, 13888<br>Almirante Tamandaré - PR</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telefone</h3>
                  <p>+55 41 8827-4163<br>+55 41 3699-1556</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>vivianemariavaz@gmail.com<br>helemariavaz@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Horários</h3>
                  <p>Segunda - Sexta<br>9:00 - 18:00</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Seu Nome" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Seu Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Sobre" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Carregando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua mensagem foi mandada. Obrigada!</div>

                  <button type="submit">Mandar Mensagem</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="mvc/assets/img/helena/logo-horizontal-preto.png" alt="">
              <span></span>
            </a>
            <p>Realize seu sonho junto com a gente!</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/Viviane-Vaz-MDF-104005794531743" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/vivianevaz__mdf/" target="_blank" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="https://wa.me/message/M5VCQMNKWNMML1" target="_blank" class="instagram"><i class="bi bi-whatsapp bx bxl-whatsapp"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4></h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#home">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">Sobre</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Portfólio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#vantagens">Vantagens</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contato</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contato</h4>
            <p>
              Rodovia dos Minérios km 23, 13888<br>
              Almirante Tamandaré - PR<br>
              Brasil<br><br>
              <strong>Telefone:</strong> +55 41 8827-4163<br>
              <strong>Email:</strong> vivanemariavaz@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong>Viviane Vaz MDF  2021</strong> | &copy; Todos os direitos reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="mvc/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="mvc/assets/vendor/aos/aos.js"></script>
  <script src="mvc/assets/vendor/php-email-form/validate.js"></script>
  <script src="mvc/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="mvc/assets/vendor/purecounter/purecounter.js"></script>
  <script src="mvc/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="mvc/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="mvc/assets/js/main.js"></script>

</body>

</html>