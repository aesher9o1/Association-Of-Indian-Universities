<!doctype html>
<html lang="en">
<head>
  <title>Members</title>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/ionicons.min.css" rel="stylesheet" />
  <!-- animate css -->
  <link href="css/animate.css" rel="stylesheet" />
  <!-- Hero area slider css-->
  <link href="css/slider.css" rel="stylesheet" />
  <!-- owl craousel css -->
  <link rel="stylesheet" href="css/newsnormalize.min.css">
  <!-- news bar -->
  <link rel="stylesheet" href="css/style.css">
  <!-- news bar -->
  <link href="css/owl.carousel.css" rel="stylesheet" />
  <link href="css/sliderimages.html" rel="stylesheet" />
  <!-- image slider -->
  <link href="css/owl.theme.css" rel="stylesheet" />
  <link href="css/jquery.fancybox.css" rel="stylesheet" />
  <!-- template main css file -->
  <link href="css/main.css" rel="stylesheet" />
  <!-- responsive css -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- Template Javascript Files -->
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Meetings | AIU</title>
</head>

<body>
<?php require('navbar.php'); require('top.php'); ?>

<div class="holder" id="pld">
    <div class="preloader">
        <div></div>
        <div></div></div>
</div>
<section id="hero-area" class="hidden-xs" style="padding-top:1em;padding-bottom:8em;">
  <div class="container" style="padding-top:10em;padding-bottom:0em;max-height:2em;" >
    <div class="row">
      <div class="text-center">

        <!-- Slider -->
        <section class="cd-intro ">

          <h1 class="wow fadeInUp animated cd-headline slide"  ><span >Association of Indian Universities</span></h1>


        </section>


      </div>
    </div>
  </div>
</section>
<section>
  <header class=" navbar animated-header small-margin" id="top-bar"   >
    <div class="container" >
      <!-- main menu -->
      <nav class="navbar-right" role="navigation">
        <div class="main-menu sub-menu" >
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#annual">Annual Meetings</a></li>-->
            <!--<li><a href="#links">Important Links</a></li>-->
          </ul>
        </div>
      </nav>
      <!-- /main nav -->
    </div>
  </header>
</section>

<section class="container" style="margin-bottom:5em;" id="bod">
  <h1 class="wow fadeInUp animated cd-headline slide divison" data-wow-delay=".3s" style="margin-top: -29px"><span >Members</span></h1>

    <div class="wow fadeInUp animated cd-headline slide divison subdivison" data-wow-delay=".3s" style="margin-top: 1em;" ><a><span class = "Alphabet">A</span></a><a><span class = "Alphabet">B</span></a><a><span class = "Alphabet">C</span></a><a><span class = "Alphabet">D</span></a><a><span class = "Alphabet">E</span></a><a><span class = "Alphabet">F</span></a><a><span class = "Alphabet">G</span></a><a><span class = "Alphabet">H</span></a><a><span class = "Alphabet">I</span></a><a><span class = "Alphabet">J</span></a><a><span class = "Alphabet">K</span></a><a><span class = "Alphabet">L</span></a><a><span class = "Alphabet">M</span></a><a><span class = "Alphabet">N</span></a><a><span class = "Alphabet">O</span></a><a><span class = "Alphabet">P</span></a><a><span class = "Alphabet">Q</span></a><a><span class = "Alphabet">R</span></a><a><span class = "Alphabet">S</span></a><a><span class = "Alphabet">T</span></a><a><span class = "Alphabet">U</span></a><a><span class = "Alphabet">W</span></a><a><span class = "Alphabet">X</span></a><a><span class = "Alphabet">Y</span></a><a><span class = "Alphabet">Z</span></a></div>

</section>
<section class="container">
  <div class="univ row">
    <div class="logo_box col-md-2" style="padding-top:5em;padding-right:12em;">
    <img class="wow fadeInUp animated cd-headline slide subdivison unilogo" data-wow-delay=".3s" style="min-height: 2em; width: 3em;"  src=""></img>
  </div>
  <div class="disc_box col-lg-10">
    <p class="wow fadeInUp animated cd-headline slide subdivision univdiv" data-wow-delay=".3s" style="margin-top: 2px ;margin-left:2em;" >
  </div>
  </div>
  <div class="dummy" id="dummy">


  </div>
</section>
<?php require('footer.php'); ?>



<script>
  var s;
  var pld = document.getElementById("pld");
  var bod = document.getElementById("pld");
  pld.style.display = "none";

  var univ = document.getElementsByClassName("univ");
  var elem = univ[0].cloneNode(true);
  addClick();
  function script(A) {
        var url  ="json/"+A+".json";

        $.ajax({
            url: url,

            dataType: 'json',
            success: function (data) {
                v = data;

                v.sort(function(a, b) {
                    var k =a.details.replace(" ","").toLowerCase();
                    var l =b.details.replace(" ","").toLowerCase()
                    return k>l;
                });


                var dummy = document.getElementById("dummy");
//                dummy.innerHTML+="<div>";
                for(var i=0;i<v.length;i++){

                    var doc = document.getElementsByClassName("univ");
                    var d = elem.cloneNode(true);
                    d.getElementsByClassName("unilogo")[0].setAttribute("src", v[i].url.replace("../",""));

                    d.getElementsByClassName("univdiv")[0].innerHTML = reformat(v[i].details);
                    var dummy = document.getElementById("dummy");
//                    if((i%3)===0){
//                        dummy.innerHTML+='</div><div class ="row">';
//                    }
                    dummy.appendChild(d);
                }

                var doc = document.getElementsByClassName("univ");
                var un_element = univ[0];
                un_element.style.display="none";
                pld.style.display = "none";
//                bod.style.display = "block";

            },
            error: function(msg){
                console.log(msg.responseText);
            }

        });


    }
    script("A");
    function reformat(detail) {
        var strs = detail.split("<br>");
        var i =0;
        console.log(strs[i]);
        var result = '<div class="cl_name col-md-4"><div class="row"><strong >'+strs[i++]+'</strong></div>';
        for(i;i<strs.length;i++){
            if(!(strs[i][0]==="(") && !(strs[i].substr(0,3)==="Tel")){
                console.log(strs[i].substr(0,3));
                while (i<strs.length && !(strs[i].substr(0,3)==="Tel")  ){
                    console.log(strs[i]);
                result+='<h6 class="cl_add row">'+strs[i]+'</h6>';
                    i++;
                }
                break;
            }
            else{
                result+='<div class ="text-center row"><h6>'+strs[i++]+'</h6></div>';
            }

        }
        result+='</div><div class = "col-md-3">';
        for(i;i<strs.length;i++){
            console.log(strs[i]);
            if(strs[i].length>3 && strs[i].substr(0,3)==="Web"){
                if(strs[i].substr(strs.length-2)===","){
                    strs[i]=strs[i]
                }
                result+='<h6>'+strs[i].substr(0,8)+'<a href="'+strs[i].substr(9)+'"'+">"+strs[i].substr(9)+"</a></h6>";
            }
            else
            result+='<h6>'+strs[i]+"</h6>";
        }
        result+="</div>";
        return result;
    }


  function clear() {
      for(var i=1;i<univ.length;i++){
//          univ[i].parentNode.removeChild(univ[i]);
          univ[i].style.display="none";
      }
  }
    function addClick() {
        var alphabets = document.getElementsByClassName("Alphabet");
        for(var i=0;i<alphabets.length;i++)
            alphabets[i].addEventListener("click", function () {
                    clear();
        script(this.innerHTML.toUpperCase());
                    pld.style.display = "block";
//                    bod.style.display="none";

                }
            );
    }


</script>

</body>
</html>