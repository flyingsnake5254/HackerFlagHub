document.addEventListener('DOMContentLoaded', function() {
    var page_id = 'tutorial-page'

    // programing language
    var page_cpp = document.getElementById('page_cpp');
    var page_c = document.getElementById('page_c');
    var page_python = document.getElementById('page_python');
    var page_java = document.getElementById('page_java');
    var page_js = document.getElementById('page_js');
    var page_mysql = document.getElementById('page_mysql');
    var page_html = document.getElementById('page_html');
    var page_php = document.getElementById('page_php');
    var page_perl = document.getElementById('page_perl');

    // penetration testing
    var page_pt = document.getElementById('page_pt');
    var page_kali = document.getElementById('page_kali');
    var page_netcat = document.getElementById('page_netcat');
    var page_ida = document.getElementById('page_ida');
  
    if (page_cpp) {
        page_cpp.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">C++ Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/8jLOx1hD3_o" title="C++ Programming Course - Beginner to Advanced" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }
  
    if (page_c) {
        page_c.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">C Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/KJgsSFOSQv0?list=PLWKjhJtqVAbmUE5IqyfGYEYjrZBYzaT4m" title="C Programming Tutorial for Beginners" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_python) {
        page_python.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">Python Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/rfscVS0vtbw" title="學習Python  - 初學者全教程" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }
    
    if (page_java) {
        page_java.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">Java Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/grEKMHGYyns" title="Learn Java 8 - Full Tutorial for Beginners" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_js) {
        page_js.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">JavaScript Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/jS4aFq5-91M" title="JavaScript Programming - Full Course" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_mysql) {
        page_mysql.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">MySQL Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/5OdVJbNCSso" title="MySQL Full Course for free 🐬 (2023)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_html) {
        page_html.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">HTML Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/kUMe1FH4CHE" title="Learn HTML – Full Tutorial for Beginners (2022)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_php) {
        page_php.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">PHP Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/OK_JCtrrv-c" title="PHP Programming Language Tutorial - Full Course" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_perl) {
        page_perl.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">Perl 5 Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/c0k9ieKky7Q" title="Perl Enough to be dangerous // FULL COURSE 3 HOURS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_pt) {
        page_pt.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">Penetration Testing Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/3Kq1MIfTWCE" title="Full Ethical Hacking Course - Network Penetration Testing for Beginners (2019)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_kali) {
        page_kali.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">Kali Linux Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/lZAoFs75_cs" title="Linux for Ethical Hackers (Kali Linux Tutorial)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_netcat) {
        page_netcat.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">Netcat Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/KlzSBk7VMss" title="Netcat Tutorial - The Swiss Army Knife Of Networking - Reverse Shell" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }

    if (page_ida) {
        page_ida.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(page_id).innerHTML = 
        '<h2 style="margin-top:20px;margin-bottom:20px;">IDA Pro Full Course Video</h2>' +
        '<iframe width="1154" height="649" src="https://www.youtube.com/embed/fgMl0Uqiey8?list=PLt9cUwGw6CYG2kmL5n6dFgi4wKMhgLNd7" title="How to Reverse Engineer with IDA Pro Disassembler Part1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
      });
    }



  });