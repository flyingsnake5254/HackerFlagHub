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
    <body>
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
                          <a class="nav-link " aria-current="page" href="<?= base_url('/home'); ?>">Home</a>
                        </li>
                      </div>
                      <div class="col">
                        <li class="nav-item navbar-tab-text">
                          <a class="nav-link " href="<?= base_url('/learn'); ?>">Learn</a>
                        </li>
                      </div>
                      <div class="col">
                        <li class="nav-item navbar-tab-text">
                          <a class="nav-link active" href="<?= base_url('/problems'); ?>">Problems</a>
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

        <div class="page-top-margin">

          <!-- title  -->
          <ul class="nav nav-pills" id="myTab" role="tablist">
            <li class="nav-item" role="presentation" style="flex: 1;text-align: center;">
              <button class="nav-link active" id="gs-tab" data-bs-toggle="tab" data-bs-target="#gs" type="button" role="tab" aria-controls="gs" aria-selected="true">General Skills</button>
            </li>
            <li class="nav-item" role="presentation" style="flex: 1;text-align: center;">
              <button class="nav-link" id="we-tab" data-bs-toggle="tab" data-bs-target="#we" type="button" role="tab" aria-controls="we" aria-selected="false">Web Exploitation</button>
            </li>
            <li class="nav-item" role="presentation" style="flex: 1;text-align: center;">
              <button class="nav-link" id="crypt-tab" data-bs-toggle="tab" data-bs-target="#crypt" type="button" role="tab" aria-controls="crypt" aria-selected="false">Cryptography</button>
            </li>
            <li class="nav-item" role="presentation" style="flex: 1;text-align: center;">
              <button class="nav-link" id="forensics-tab" data-bs-toggle="tab" data-bs-target="#forensics" type="button" role="tab" aria-controls="forensics" aria-selected="false">Forensics</button>
            </li>
            <li class="nav-item" role="presentation" style="flex: 1;text-align: center;">
              <button class="nav-link" id="re-tab" data-bs-toggle="tab" data-bs-target="#re" type="button" role="tab" aria-controls="re" aria-selected="false">Reverse Engineering</button>
            </li>
            <li class="nav-item" role="presentation" style="flex: 1;text-align: center;">
              <button class="nav-link" id="be-tab" data-bs-toggle="tab" data-bs-target="#be" type="button" role="tab" aria-controls="be" aria-selected="false">Binary Exploitation</button>
            </li>
          </ul>

          <!-- content  -->
          <div class="tab-content" id="myTabContent" style="padding: 20px;">

            <!-- geleral_skill  -->

            <div class="tab-pane fade show active" id="gs" role="tabpanel" aria-labelledby="gs-tab">
              <!-- === -->
              
              <div class="row g-3" style="display: flex; justify-content: start;">
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title" id="p2_title">Hide message in image</h5>
                      <p class="card-text">score : 3</p>
                    </div>
                    <div class="card-foot d-flex justify-content-end" style="margin: 10px;">
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Try &raquo;</button>
                    </div>
                  </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hide message in image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Files can always be changed in a secret way. Can you find the flag? <a href="<?= base_url('/problems/ter/p1'); ?>">link</a><br>
                        (hint : zsteg)
                      </div>
                      <div class="modal-footer">
                        <div class="input-group">
                          <span class="input-group-text">Flag</span>
                          <input id="p2_ans" type="text" class="form-control" placeholder="flag{}"/>
                        </div>
                        <button type="button" class="btn btn-primary"  onclick="p2()">submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- === -->

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Python Wrangling</h5>
                      <p class="card-text">score : 4</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Wave a flag</h5>
                      <p class="card-text">score : 7</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Nice netcat...</h5>
                      <p class="card-text">score : 2</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Static ain't always noise</h5>
                      <p class="card-text">score : 3</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Tab, Tab, Attack</h5>
                      <p class="card-text">score : 5</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Magikarp Ground Mission</h5>
                      <p class="card-text">score : 6</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                
              </div>

              

            </div>

            <!-- web  -->
            <div class="tab-pane fade" id="we" role="tabpanel" aria-labelledby="we-tab">
              <div class="row g-3" style="display: flex; justify-content: start;">


                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title" id="p1_title">Where is the robots</h5>
                      <p class="card-text">score : 3</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#p1">Try &raquo;</button>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="p1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Where is the robots</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      Can you find the robots?<a href="<?= base_url('/problems/web/p1'); ?>">link</a>
                      </div>
                      <div class="modal-footer">
                        <div class="input-group">
                          <span class="input-group-text">Flag</span>
                          <input id="p1_ans" type="text" class="form-control" placeholder="flag{}"/>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="p1()">submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- === -->

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Nice netcat...</h5>
                      <p class="card-text">score : 4</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Warmed Up</h5>
                      <p class="card-text">score : 7</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Lets Warm Up</h5>
                      <p class="card-text">score : 2</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">strings it</h5>
                      <p class="card-text">score : 3</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Tab, Tab, Attack</h5>
                      <p class="card-text">score : 5</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Python Wrangling</h5>
                      <p class="card-text">score : 6</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                
              </div>
            </div>

            <div class="tab-pane fade" id="crypt" role="tabpanel" aria-labelledby="crypt-tab">
              <div class="row g-3" style="display: flex; justify-content: start;">
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Warmed Up</h5>
                      <p class="card-text">score : 3</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Nice netcat...</h5>
                      <p class="card-text">score : 4</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Warmed Up</h5>
                      <p class="card-text">score : 7</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Lets Warm Up</h5>
                      <p class="card-text">score : 2</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">strings it</h5>
                      <p class="card-text">score : 3</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Tab, Tab, Attack</h5>
                      <p class="card-text">score : 5</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="card" style=" width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">Python Wrangling</h5>
                      <p class="card-text">score : 6</p>
                    </div>
                    
                    <div class="card-foot" style="display: flex; justify-content: end; margin: 10px;">
                      <a href="#" class="btn btn-primary">Try &raquo;</a>
                    </div>
                  </div>
                </div>

                
              </div>
            </div>

            <div class="tab-pane fade" id="forensics" role="tabpanel" aria-labelledby="forensics-tab">
              <p>Contact content goes here.</p>
            </div>

            <div class="tab-pane fade" id="re" role="tabpanel" aria-labelledby="re-tab">
              <p>Contact content goes here.</p>
            </div>

            <div class="tab-pane fade" id="be" role="tabpanel" aria-labelledby="be-tab">
              <p>Contact content goes here.</p>
            </div>
          </div>
        </div>

        <script>
            let problemsComponent = {
                checkAnswer : function(data){
                    return fetch("http://localhost:8080/problems/checkAns", {
                        method : "POST",
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .catch(error => {
                        console.log("error" , error);
                    });
                }
            }
        </script>

        <script>
            // robot 
            function p1(){
                let userAns =document.getElementById("p1_ans").value;
                let pid = 1;
                data = {
                    "id" : pid,
                    "ans" : userAns
                };

                problemsComponent.checkAnswer(data)
                .then(res => {
                    alert(res.msg);
                    if (res.msg == "correct"){
                        let title =document.getElementById("p1_title");
                        title.className = "card-title text-success";
                    }
                })
                .catch(error => {
                    console.log(error);
                });
            
            }

            function p2(){
                let userAns =document.getElementById("p2_ans").value;
                let pid = 2;
                data = {
                    "id" : pid,
                    "ans" : userAns
                };

                problemsComponent.checkAnswer(data)
                .then(res => {
                    alert(res.msg);
                    if (res.msg == "correct"){
                        let title =document.getElementById("p2_title");
                        title.className = "card-title text-success";
                    }
                })
                .catch(error => {
                    console.log(error);
                });
            
            }
        </script>
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
        
        <script src="/static/gs_problems/show_problems.js"></script>
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