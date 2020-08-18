var ip;

function getIp() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var obj = JSON.parse(this.responseText);
          
          ip = obj.dns.ip;
          
          setHello(ip);
      }
    };
    xhttp.open("GET", "http://edns.ip-api.com/json", true);
    xhttp.send();
  }

  function setHello(ip) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var obj = JSON.parse(this.responseText);

          document.getElementById("greeting").innerHTML = obj.hello;
      }
    };
    xhttp.open("GET", "https://fourtonfish.com/hellosalut/?ip=" + ip, true);
    xhttp.send();
  }

  getIp();