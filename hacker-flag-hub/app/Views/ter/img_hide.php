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

        <!-- xterm.js  -->
        <script src="<?= base_url('xterm.js'); ?>"></script>
        <link rel="stylesheet" href="<?= base_url('xterm.css'); ?>" />
    </head>
    <body class="bg-style">
        <div id="vanta_bg"></div>
        
        <div id="terminal"></div>
        <script>
            var term = new Terminal();
            term.open(document.getElementById('terminal'));

            var userInput = "";
            term.onData(function (data) {
                // enter
                if (data.charCodeAt(0) === 13) {
                    term.write('\r\n');
                    var command = userInput;
                    userInput = ""; 

                    // 如果用户输入的命令为 "ls"，则输出 "image.png"
                    if (command === "ls") {
                        term.write('image.png\r\n');
                    }

                    // 如果用户输入的命令为 "zsteg image.png"，则输出指定的字符串
                    else if (command === "zsteg image.png") {
                        term.write('meta F              .. ["Z" repeated 14999985 times]\r\n');
                        term.write('meta C              .. text: "Fourth and last cat is Luke"\r\n');
                        term.write('meta A              .. [same as "meta F"]\r\n');
                        term.write('meta date:create    .. text: "2012-03-15T23:32:46+07:00"\r\n');
                        term.write('meta date:modify    .. text: "2012-03-15T23:32:14+07:00"\r\n');
                        term.write('imagedata           .. file: 68K BCS executable\r\n');
                        term.write('b1,r,lsb,xy         .. text: "Second cat is Marussia"\r\n');
                        term.write('b1,g,lsb,xy         .. text: "flag{2pz8XXOWhEGg6fY0nKfBox5WiOLn3X}"\r\n');
                        term.write('b1,bgr,lsb,xy       .. text: "MF_WIhf>"\r\n');
                        term.write('b2,g,lsb,xy         .. text: "VHello, third kitten is Bessy"\r\n');
                    }
                    else {
                        term.write('command not found\r\n');
                    }

                    term.write('Hacker Flag Hub \x1B[1;3;31musers\x1B[0m $ ');
                } 
                // backspace
                else if (data.charCodeAt(0) === 127 || data.charCodeAt(0) === 8) {
                    userInput = userInput.slice(0, -1);
                    term.write('\b \b');
                } else {
                    userInput += data; 
                    term.write(data); 
                }
            });

            term.write('Hacker Flag Hub \x1B[1;3;31musers\x1B[0m $ ');


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
