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

        <!-- echart  -->
        <!-- Echart  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.2/echarts.min.js"></script>
    </head>
    <body class="bg-style">
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
                          <a class="nav-link active" href="<?= base_url('/scoreboard'); ?>">Scoreboard</a>
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

        <div class="container">
            <div class="row">
                <div class="column">
                    <div id="score_history" style="width: 1000px; height:600px; margin-top: 100px; "></div>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>

        <script>
            var scoreboardComponent = {
                getScore : function(data){
                    return fetch("http://localhost:8080/scoreboard/getScore", {
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

        <!-- chart  -->
        <script>
            var my_chart = echarts.init(document.getElementById("score_history"));
            data = {
                "id":1
            };
            var date = [];
            var score = [];
            scoreboardComponent.getScore(data)
            .then(res => {
                if (res.msg == "success"){
                    let sdate = res.date;
                    let sscore = res.score;
                    date =sdate.split(',');
                    score=sscore.split(',');
                    console.log(date);
                    console.log(score);
                }
                else{
                    alert("取得 score 紀錄失敗");
                }
            })
            .then(() => {
                var option = {
                    backgroundColor:"rgba(70,70,70,0.8)",
                    textStyle:{
                        color:"#ffffff"
                    },
                    title : {
                        text : "解題分數紀錄",
                        textStyle:{
                            color:"#ffffff"
                        },
                    }, 
                    tooltip : {
                        triggerOn : "click",
                        trigger : "axis"
                    },
                    legend : {
                        data: [
                            {
                                name: "score",
                            }
                        ],
                        textStyle:{
                            color:"#ffffff"
                        }

                    },
                    xAxis : {
                        type : "category",
                        name : "日期",
                        data : date
                    },
                    yAxis : {
                        type : "value",
                        name : "score"
                    },
                    series : [
                        {
                            name : "score",
                            color:"orange",
                            data : score,
                            type : "line",
                            label : {
                                show : true
                            },
                            animationDelay : 100,
                            textStyle:"#ffffff"
                            
                
                        }
                    ],
                    toolbox: {
                        
                        iconStyle:{
                            color: 'ffffffff', 
                            borderColor: 'yellow'
                        },
                        feature: {
                            saveAsImage: {
                                title: '儲存圖片', 
                                type: 'png', 
                                pixelRatio: 2 
                            },
                            
                            restore : {
                                title:"reset"
                            },
                            dataZoom:{
                                title: {
                                    zoom:"區域放大",
                                    back:"還原縮放"
                                }
                            }
                        },
                    },
                    tooltip : {
                        
                        trigger : "item"
                    },
                    dataZoom: [ 
                        {
                            show: true,
                            realtime: true,
                            start: 0,
                            end: 100
                        }
                    ],
                    label:{
                        color:"#ffffff"
                    }
                };
                my_chart.setOption(option);
            })
            .catch(error => {
                console.log(error);
            });

            

        </script>

        
        
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
