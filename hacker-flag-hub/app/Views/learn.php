<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hacker Flag Hub</title>

        <!-- css -->
        <link href="<?= base_url('css/index.css'); ?>" rel="stylesheet">
        

        <!-- icon -->
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('images/logo.png'); ?>" />

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">

              <!-- logo -->
              <a class="navbar-brand" href="#"><img width='50px' height='50px' src="<?= base_url('images/logo.png'); ?>"><span id="logo-text" class="align-baseline">Hacker Flag Hub</span></a>

              <!-- menu icon -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>



              <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">

                       <!-- tab content -->
                       <div class="col">
                        <li class="nav-item navbar-tab-text">
                          <a class="nav-link " aria-current="page" href="<?= base_url('/home'); ?>">Home</a>
                        </li>
                      </div>
                      <div class="col">
                        <li class="nav-item navbar-tab-text">
                          <a class="nav-link active" href="<?= base_url('/learn'); ?>">Learn</a>
                        </li>
                      </div>
                      <div class="col">
                        <li class="nav-item navbar-tab-text">
                          <a class="nav-link" href="<?= base_url('/problems'); ?>">Problems</a>
                        </li>
                      </div>
                      <div class="col">
                        <li class="nav-item navbar-tab-text">
                          <a class="nav-link" href="<?= base_url('/scoreboard'); ?>">Scoreboard</a>
                        </li>
                      </div>
                </ul>
                
              </div>
              <button class="btn btn-outline-primary navbar-tab-text " type="button" style="margin: 3px; justify-content: end;" onclick="logout()">Logout</button>
              <script>
                function logout(){
                  window.location.href = "/";
                }
              </script>
            </div>
        </nav>

        <div class="page-top-margin">
          <div class="container-fluid">
            <div class="row">
              <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="position-sticky">
                  <ul class="nav flex-column">
                    <div style="margin: 5px; font-size: 30px; font-weight: 700; margin-bottom: 10px;">Category</div>


                    <!-- Basic Program Language -->
                    <div class="accordion" id="navAccordion1">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                          <button id="b_pl" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseOne">
                            Program Language
                          </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#navAccordion1">
                          <div class="accordion-body">
                            <ul class="nav flex-column">
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_cpp">C ++</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_c">C</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_python">Python</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_java">Java</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_js">JavaScript</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_mysql">MySQL</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_html">HTML</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_php">PHP</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_perl">Pearl 5</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Basic Programing Language -->

                    <!-- Penetration Testing -->
                    <div class="accordion" id="navAccordion2" style="margin-bottom: 30px; margin-top: 20px;">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseOne">
                            Penetration Testing
                          </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#navAccordion2">
                          <div class="accordion-body">
                            <ul class="nav flex-column">
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_pt">Penetration Testing Full Course</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_kali">Kali Linux</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_netcat">Netcat</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" id="page_ida">IDA Pro</a>
                              </li>
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Basic Programing Language -->
                    
                  </ul>
                </div>
              </nav>
              <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="tutorial-page">
                
              </div>
            </div>
          </div>
        </div>
        
        
      <script src="<?= base_url('js/add_content.js'); ?>"></script>
    </body>
</html>

