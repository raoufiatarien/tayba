
    getAll();
    function clearconsole() { 
      console.log(window.console);
      if(window.console || window.console.firebug) {
       console.clear();
      }
    };
    function img(link){
      document.getElementById("foto").src=link;
    };
     function cert(link){
      document.getElementById("fotocert").src=link;
    };

    function get(id){
      var x =document.getElementById(id).innerHTML;
      var xs = x.split('<');
      x = xs[0];
      var s ='';
      var Cat ="";
      var Sub= "";
      var subCat="";
      var superSub="";
      if(id.includes('On')){
        if(id[3] === 'B'){
          Cat = "Bio_dates";
          s = '&emsp;Bio dates <i class="glyphicon glyphicon-chevron-right"></i>';
        }else{
          Cat ="Conventional";
          s = '&emsp;Conventional <i class="glyphicon glyphicon-chevron-right"></i>'
        }
        Sub = "Deglet_nour";
        s += '&emsp;Deglet Nour <i class="glyphicon glyphicon-chevron-right"></i>';
      }else if(id.includes('Other')){
        if(id[6] === 'B'){
          Cat = "Bio_dates";
          s = '&emsp;Bio dates <i class="glyphicon glyphicon-chevron-right"></i>';
        }else{
          Cat ="Conventional";
          s = '&emsp;Conventional <i class="glyphicon glyphicon-chevron-right"></i>'
        }
        Sub = "Other_varieties";
        s += '&emsp;Other varieties <i class="glyphicon glyphicon-chevron-right"></i>';
      }else{
        var n =document.getElementById(id).parentNode.id;
        if(n.trim() ==="OnBB12".trim()){
          Cat = "Bio_dates";
          Sub = "Deglet_nour";
          subCat = "On_branch";
          s = '&emsp;Bio dates <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Deglet Nour <i class="glyphicon glyphicon-chevron-right"></i>&emsp;On Branch <i class="glyphicon glyphicon-chevron-right"></i>';
        }else if(n.trim() ==="OnBB22".trim()){
          Cat = "Bio_dates";
          Sub = "Deglet_nour";
          subCat = "Regime";
          s = '&emsp;Bio dates <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Deglet Nour <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Regime <i class="glyphicon glyphicon-chevron-right"></i>';
        }else if (n.trim() ==="OnBB32".trim()) {
          Cat = "Bio_dates";
          Sub = "Deglet_nour";
          subCat = "Pitted_dates";
          s = '&emsp;Bio dates <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Deglet Nour <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Pitted dates <i class="glyphicon glyphicon-chevron-right"></i>';
        }else if (n.trim() ==="OnBB42".trim()) {
          Cat = "Bio_dates";
          Sub = "Deglet_nour";
          subCat = "Bulk_dates";
          s = '&emsp;Bio dates <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Deglet Nour <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Bulk dates <i class="glyphicon glyphicon-chevron-right"></i>';
        }else if(n.trim() ==="OnBC12".trim()){
          Cat = "Conventional";
          Sub = "Deglet_nour";
          subCat = "On_branch";
          s = '&emsp;Conventional <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Deglet Nour <i class="glyphicon glyphicon-chevron-right"></i>&emsp;On Branch <i class="glyphicon glyphicon-chevron-right"></i>';
        }else if(n.trim() ==="OnBC22".trim()){
          Cat = "Conventional";
          Sub = "Deglet_nour";
          subCat = "Regime";
          s = '&emsp;Conventional <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Deglet Nour <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Regime <i class="glyphicon glyphicon-chevron-right"></i>';
        }else if (n.trim() ==="OnBC32".trim()) {
          Cat = "Conventional";
          Sub = "Deglet_nour";
          subCat = "Pitted_dates";
          s = '&emsp;Conventional <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Deglet Nour <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Pitted dates <i class="glyphicon glyphicon-chevron-right"></i>';
        }else if (n.trim() ==="OnBC42".trim()) {
          Cat = "Conventional";
          Sub = "Deglet_nour";
          subCat = "Bulk_dates";
          s = '&emsp;Conventional <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Deglet Nour <i class="glyphicon glyphicon-chevron-right"></i>&emsp;Bulk dates <i class="glyphicon glyphicon-chevron-right"></i>';
        }
      }
      var k = s+'&emsp;'+x+'<i class="glyphicon glyphicon-chevron-right"></i>';
      x = encodeURI(x);
      x = x.replace("%E2%80%83","");
      x = x.replace("%E2%80%83","");
      x = x.split("%20").join("_");
      if(subCat ===""){
        subCat = x;
      }else{
        superSub = x;
      }
      $.ajax({  
        type: "GET",
        url: "getProducts.php",
        data: {  
          cat : Cat,
          sub : Sub,
          sub_sub : subCat,
          sub_sub_sub : superSub,
        },                            
          success: function(response){
              if(response ===""){
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">'+k+'</h5></div><br>'+'<h2 align="center">Unavailable product</h2>' ;
              }else {
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">'+k+'</h5></div><br>'+response;
              }               
              
              clearconsole();
        }
      });
    };

    function getB(id){
      var x =document.getElementById(id).innerHTML;
      var xs = x.split('<');
      x = xs[0];
      var s ='';
      s = '&emsp;Bio dates <i class="glyphicon glyphicon-chevron-right"></i>';
      var k = s+'&emsp;'+x+'<i class="glyphicon glyphicon-chevron-right"></i>';
      x = encodeURI(x);
      x = x.replace("%E2%80%83","");
      x = x.replace("%E2%80%83","");
      x = x.split("%20").join("_");
      $.ajax({  
        type: "GET",
        url: "getProducts.php",
        data: {  
          cat : "Bio_dates",
          sub : x,
        },                            
          success: function(response){
              if(response ===""){
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">'+k+'</h5></div><br>'+'<h2 align="center">Unavailable product</h2>' ;
              }else {
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">'+k+'</h5></div><br>'+response;
              }               
              
              clearconsole();
        }
      });
    };
    function getC(id){
      var x =document.getElementById(id).innerHTML;
      var xs = x.split('<');
      x = xs[0];
      var s ='';
      s = '&emsp;Conventional <i class="glyphicon glyphicon-chevron-right"></i>';
      var k  = s+'&emsp;'+x+'<i class="glyphicon glyphicon-chevron-right"></i>';
      x = encodeURI(x);
      x = x.replace("%E2%80%83","");
      x = x.replace("%E2%80%83","");
      x = x.split("%20").join("_");
      $.ajax({  
        type: "GET",
        url: "getProducts.php",
        data: {  
          cat : "Conventional",
          sub : x,
        },                            
          success: function(response){
              if(response ===""){
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">'+k+'</h5></div><br>'+'<h2 align="center">Unavailable product</h2>' ;
              }else {
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">'+k+'</h5></div><br>'+response;
              }               
              
              clearconsole();
        }
      });
    };
    function getD(id){
      var x =document.getElementById(id).innerHTML;
      var xs = x.split('<');
      x = xs[0];
      var s ='';
      s = '&emsp;Derived from dates <i class="glyphicon glyphicon-chevron-right"></i>';
      var k = s+'&emsp;'+x+'<i class="glyphicon glyphicon-chevron-right"></i>';
      x = encodeURI(x);
      x = x.replace("%E2%80%83","");
      x = x.replace("%E2%80%83","");
      x = x.split("%20").join("_");
      $.ajax({  
        type: "GET",
        url: "getProducts.php",
        data: {  
          cat : "Derived from dates",
          sub : x,
        },                            
          success: function(response){
              if(response ===""){
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">'+k+'</h5></div><br>'+'<h2 align="center">Unavailable product</h2>' ;
              }else {
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">'+k+'</h5></div><br>'+response;
              }               
              
              clearconsole();
        }
      });
    };
    function getAll(){
      
      $.ajax({  
        type: "GET",
        url: "getProducts.php",
        data: {  
        },                            
          success: function(response){

              if(response ===""){
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">&emsp;All <i class="glyphicon glyphicon-chevron-right"></i></h5></div><br>'+'<h2 align="center">Unavailable product</h2>' ;
              }else {
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">&emsp;All <i class="glyphicon glyphicon-chevron-right"></i></h5></div><br>'+response;
              }               
              
              clearconsole();
        }
      });

    };
    function smsx(value){
      var k = value;
      value = encodeURI(value);
      value = value.split("%20").join("_");
      $.ajax({  
        type: "GET",
        url: "getProducts.php",
        data: { 
          cat : value, 
        },                            
          success: function(response){
              if(response ===""){
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">&emsp;'+k+'<i class="glyphicon glyphicon-chevron-right"></i></h5></div><br>'+'<h2 align="center">Unavailable product</h2>' ;
              }else {
                document.getElementById('sadFace').innerHTML = '<div><h5 id="heads">&emsp;'+k+'<i class="glyphicon glyphicon-chevron-right"></i></h5></div><br>'+response;
              }               
              
              clearconsole();
        }
      });
    };

