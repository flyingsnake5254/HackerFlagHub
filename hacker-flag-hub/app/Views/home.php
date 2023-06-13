<!DOCTYPE html>
<html>
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
    <body >
        <div id="vanta_bg"></div>
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
                          <a class="nav-link active" aria-current="page" href="<?= base_url('/home'); ?>">Home</a>
                        </li>
                      </div>
                      <div class="col">
                        <li class="nav-item navbar-tab-text">
                          <a class="nav-link" href="<?= base_url('/learn'); ?>">Learn</a>
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
              <!-- <button class="btn btn-outline-primary navbar-tab-text " type="button" style="margin: 3px; justify-content: end;" onclick="logout()">Logout</button> -->
              <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#logout_modal">Logout</button>
              
              <script>
                function logout(){
                  window.location.href = "/";
                }
              </script>
            </div>
        </nav>

        

        <div style="display: flex; justify-content: center;">
          <div class="page-top-margin" style=" justify-content: center; display: flex; max-width: 900px; width: 90%; max-height: 700px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

              <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
              </ol>
  
  
              <div class="carousel-inner">
  
                <div class="carousel-item active">
                  <img src="<?= base_url('images/carousel_images/cryptography_tutorial.png'); ?>" class="d-block w-100 carousel-img" alt="..."height="100%">
                </div>
  
  
                <div class="carousel-item">
                  <img src="<?= base_url('images/carousel_images/kalinux_tutorial.jpg'); ?>" class="d-block w-100 carousel-img" alt="..."height="auto">
                </div>

                <div class="carousel-item">
                  <img src="<?= base_url('images/carousel_images/Netcat_Command.png'); ?>" class="d-block w-100 carousel-img" alt="..."height="auto">
                </div>

                <div class="carousel-item">
                  <img src="<?= base_url('images/carousel_images/nmap_tutorial.jpg'); ?>" class="d-block w-100 carousel-img" alt="..."height="auto">
                </div>

                <div class="carousel-item">
                  <img src="<?= base_url('images/carousel_images/web_application_exploitation.jpg'); ?>" class="d-block w-100 carousel-img" alt="..."height="auto">
                </div>

                <div class="carousel-item">
                  <img src="<?= base_url('images/carousel_images/what_is_exploit.jpg'); ?>" class="d-block w-100 carousel-img" alt="..."height="auto">
                </div>

                <div class="carousel-item">
                  <img src="<?= base_url('images/carousel_images/whatisactf.jpg'); ?>" class="d-block w-100 carousel-img" alt="..."height="auto">
                </div>
  
  
          
  
  
              </div>
              
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
            
          </div>
        </div>

        <div class="container-fluid">
          <!-- challenges -->
          <div class="row">
            <div class="col" style="margin: 100px;  display: flex; justify-content: center;">
              <img src="<?= base_url('images/home_learn_skill/challenges.png'); ?>" />
            </div>
          </div>

          <div class="row">

            <!-- general sklls -->
            <div class="col" style="display: flex; justify-content: center; margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <img src="<?= base_url('images/home_learn_skill/geleral_skill.png'); ?>" class="card-img-top" alt="..." style="padding: 10px; height: 50%; width: auto;">
                <div class="card-body">
                    <div>
                      <h5 class="card-title">General Skills</h5>
                      <p class="card-text">Proficiency in one or more programming languages (such as Python, C, C++, Java, or JavaScript) and common scripting languages (such as Bash, PowerShell).</p>
                    </div>
                    
                </div>
                <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                  <a href="#" class="btn btn-primary">Go &raquo;</a>
                </div>
              </div>
            </div>

            <!-- Web Exploitation-->
            <div class="col" style="display: flex; justify-content: center;margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <img src="<?= base_url('images/home_learn_skill/web_exp.png'); ?>" class="card-img-top" alt="..." style="padding: 10px; height: 50%; width: auto;">
                <div class="card-body">
                    <h5 class="card-title">Web Exploitation</h5>
                    <p class="card-text"> Understanding of TCP/IP protocols, network topologies, routing, switching, and usage of networking tools (such as Wireshark, Nmap).</p>
                    
                </div>
                <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                  <a href="#" class="btn btn-primary">Go &raquo;</a>
                </div>
              </div>
            </div>

            <!-- Cryptography-->
            <div class="col" style="display: flex; justify-content: center; margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <img src="<?= base_url('images/home_learn_skill/cryptography.png'); ?>" class="card-img-top" alt="..." style="padding: 10px; height: 50%; width: auto;">
                <div class="card-body">
                    <h5 class="card-title">Cryptography</h5>
                    <p class="card-text"> Familiarity with basic encryption algorithms (such as AES, RSA, DES) and common cryptographic attack methods (such as brute force, password guessing, and replay attacks).</p>
                    
                </div>
                <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                  <a href="#" class="btn btn-primary">Go &raquo;</a>
                </div>
              </div>
            </div>

            <div class="w-100"></div>

            <!-- Forensics-->
            <div class="col" style="display: flex; justify-content: center; margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <img src="<?= base_url('images/home_learn_skill/Forensics.png'); ?>" class="card-img-top" alt="..." style="padding: 10px; height: 50%; width: auto;">
                <div class="card-body">
                    <h5 class="card-title">Forensics</h5>
                    <p class="card-text">Knowledge of digital forensics, including file system analysis, memory forensics, network forensics, and various forensic tools (such as Autopsy, Volatility, tcpdump).</p>
                    
                </div>
                <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                  <a href="#" class="btn btn-primary">Go &raquo;</a>
                </div>
              </div>
            </div>

            <!-- Reverse Engineering-->
            <div class="col" style="display: flex; justify-content: center; margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <img src="<?= base_url('images/home_learn_skill/reverse.png'); ?>" class="card-img-top" alt="..." style="padding: 10px; height: 50%; width: auto;">
                <div class="card-body">
                    <h5 class="card-title">Reverse Engineering</h5>
                    <p class="card-text">Knowledge of binary analysis, assembly language, usage of reverse engineering tools (such as IDA Pro, Ghidra), and common software protection and cracking techniques.</p>
                    
                </div>
                <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                  <a href="#" class="btn btn-primary">Go &raquo;</a>
                </div>
              </div>
            </div>

            <!-- Binary Exploitation-->
            <div class="col" style="display: flex; justify-content: center; margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <img src="<?= base_url('images/home_learn_skill/bin.png'); ?>" class="card-img-top" alt="..." style="padding: 10px; height: 50%; width: auto;">
                <div class="card-body">
                    <h5 class="card-title">Binary Exploitation</h5>
                    <p class="card-text">Focuses on finding and exploiting vulnerabilities in binary programs, typically to execute arbitrary code or gain unauthorized access.</p>
                    
                </div>
                <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                  <a href="#" class="btn btn-primary">Go &raquo;</a>
                </div>
              </div>
            </div>
            
          <!-- learning  -->
          <div class="row">
            <div class="col" style="margin-top: 100px;  display: flex; justify-content: center;">
              <img src="<?= base_url('images/home_learn_skill/learning_skills.png'); ?>" />
            </div>
          </div>
          <div class="row">
            <div class="col" style="margin: 30px;  display: flex; justify-content: center;">
              <img src="<?= base_url('images/home_learn_skill/basic_pl.png'); ?>" />
            </div>
          </div>
          
          
          <div class="row">
            <!-- c++ video  -->
            <div class="col" style="display: flex; justify-content: center; margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <iframe src="https://www.youtube.com/embed/8jLOx1hD3_o" title="C++ Programming Course - Beginner to Advanced" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">C++ Full Course</h5>
                </div>
              </div>
            </div>

            <!-- c video  -->
            <div class="col" style="display: flex; justify-content: center; margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <iframe  src="https://www.youtube.com/embed/KJgsSFOSQv0?list=PLWKjhJtqVAbmUE5IqyfGYEYjrZBYzaT4m" title="C Programming Tutorial for Beginners" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">C Full Course</h5>
                </div>
              </div>
            </div>

            
            <!-- python video  -->
            <div class="col" style="display: flex; justify-content: center; margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <iframe src="https://www.youtube.com/embed/rfscVS0vtbw" title="學習Python  - 初學者全教程" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">Python Full Course</h5>
                </div>
              </div>
            </div>

      

            <!-- Java video  -->
            <div class="col" style="display: flex; justify-content: center; margin: 10px;">
              <div class="card" style=" width: 18rem;">
                <iframe  src="https://www.youtube.com/embed/grEKMHGYyns" title="Learn Java 8 - Full Tutorial for Beginners" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">Java Full Course</h5>
                </div>
              </div>
            </div>

          </div>

          <div class="row" style="display: flex; justify-content: center; margin-top: 50px;">
            <div class="col text-center" style="font-size: 30px;">
              <a href="#">Learn More &raquo;</a>
            </div>
          </div>


          <div class="row">
            <div class="col" style="margin-top: 200px;  display: flex; justify-content: center;">
              <img src="<?= base_url('images/home_learn_skill/pskill.png'); ?>" />
            </div>
          </div>

          <!-- Penetration test video  -->
          <div class="col" style="display: flex; justify-content: center; margin: 10px;">
            <div class="card" style=" width: 18rem;">
              <iframe src="https://www.youtube.com/embed/3Kq1MIfTWCE" title="Full Ethical Hacking Course - Network Penetration Testing for Beginners (2019)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <div class="card-body">
                  <h5 class="card-title">Penetration Testing Full Course</h5>
              </div>
            </div>
          </div>

          <!-- Kali Linux video  -->
          <div class="col" style="display: flex; justify-content: center; margin: 10px;">
            <div class="card" style=" width: 18rem;">
              <iframe src="https://www.youtube.com/embed/lZAoFs75_cs" title="Linux for Ethical Hackers (Kali Linux Tutorial)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <div class="card-body">
                  <h5 class="card-title">Kali Linux Full Course</h5>
              </div>
            </div>
          </div>

          <!-- Netcat video  -->
          <div class="col" style="display: flex; justify-content: center; margin: 10px;">
            <div class="card" style=" width: 18rem;">
              <iframe src="https://www.youtube.com/embed/KlzSBk7VMss" title="Netcat Tutorial - The Swiss Army Knife Of Networking - Reverse Shell" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <div class="card-body">
                  <h5 class="card-title">Netcat Full Course</h5>
              </div>
            </div>
          </div>

          <!-- IDA Pro video  -->
          <div class="col" style="display: flex; justify-content: center; margin: 10px;">
            <div class="card" style=" width: 18rem;">
              <iframe src="https://www.youtube.com/embed/fgMl0Uqiey8?list=PLt9cUwGw6CYG2kmL5n6dFgi4wKMhgLNd7" title="How to Reverse Engineer with IDA Pro Disassembler Part1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <div class="card-body">
                  <h5 class="card-title">IDA Pro Full Course</h5>
              </div>
            </div>
          </div>

          <div class="row" style="display: flex; justify-content: center; margin-top: 50px; margin-bottom: 500px;">
            <div class="col text-center" style="font-size: 30px;">
              <a href="#">Learn More &raquo;</a>
            </div>
          </div>

          <div class="row">
            <div class="col" style=" height: 60px; display: flex; justify-content: end; width : 60px;">
              <a href="#"><img src="<?= base_url('images/home_learn_skill/ig.png'); ?>" width="50px" height="50px" style="margin-left: 10px;"></a>
              <a href="#"><img src="<?= base_url('images/home_learn_skill/facebook.png'); ?>" width="50px" height="50px" style="margin-left: 10px;"></a>
              <a href="#"><img src="<?= base_url('images/home_learn_skill/mail.png'); ?>" width="50px" height="50px" style="margin-left: 10px;"></a>
            </div>
            
            
          </div>
          <a href="#"></a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="logout_modal" tabindex="-1" aria-labelledby="logout_title" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="logout_title">Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Are you sure, do you want to logout?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">No</button>
                        <button type="button" class="btn btn-primary"  onclick="logout()">yes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- === -->
        
        <!-- Dynamic BG  -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>
        <script>
            VANTA.DOTS({
                el: "#vanta_bg",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: 0x7fff,
                color2: 0xffffff,
                backgroundColor: 0xffffff,
                spacing: 23.00
            })
        </script>
        
    </body>
</html>
