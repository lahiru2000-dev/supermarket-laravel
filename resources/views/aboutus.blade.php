<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.0/components/abouts/about-1/assets/css/about-1.css" />

    <style>
        .neon-text {
            color: #fff; 
            text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff; 
        }

        .team-section h3 {
            margin-right: 20px;
        }

        

        .dt-container {
            color: #fff; 
            text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff; 
            font-family: arial;
            font-weight: bold;
            border:1px solid #FFD700;
            width:340px;
            padding:10px;
            margin-left: auto;
            margin-right: 20px;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .team-images img {
            animation: fadeIn 3s ease-out;
            animation-fill-mode: both;
            
        }

        .h2.neon-text.mb-3 {
            margin-left: 120px;
            }
    </style>

</head>
<body  style="background-image: url('aboutus-img/abus2.jpg'); background-size: cover; background-position: center;" onLoad="renderTime();">

    <script>
        function renderTime(){
            //date
            var mydate = new Date();
            var year =mydate.getYear();
                if(year <1000){
                    year +=1900
                }
            var day = mydate.getDay();
            var month =mydate.getMonth();
            var daym = mydate.getDate();
            var dayarray = new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Friday,","Saturday,");
            var montharray= new Array("January","February","March","April","May","June","July","August","September","October","November","December");
            //date end

            //Time
            var currentTime= new Date();
            var h= currentTime.getHours();
            var m= currentTime.getMinutes();
            var s= currentTime.getSeconds();
                if(h==24){
                    h=0;
                }else if(h>12){
                    h=h-0;
                }

                if(h<10){
                    h="0"+h;
                }
                if(m<10){
                    m="0"+m;
                }
                if(s<10){
                    s="0"+s;
                }
                var myClock=document.getElementById("clockDisplay");
                myClock.textContent=""+dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s;
                myClock.innerText=""+dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s;

                setTimeout("renderTime()",1000);
        } 
        renderTime();      
    </script>
    <div id="clockDisplay" class="dt-container"></div>
    <section class="py-3 py-md-5 py-xl-8">
    
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5">
             <!-- Team Section -->
             <div class="team-section">
                                <h3 class="h2 neon-text  mb-3 "  >Our Team</h3>
                                <br>
                                <div class="row team-images">
                                    <div class="col-6 col-md-6 mb-4">
                                        <img src="aboutus-img/avatar1.png" alt="Team Member 1" style="width: 100px; height: auto;">
                                    </div>
                                    <div class="col-6 col-md-6 mb-4">
                                        <img src="aboutus-img/avatar2.png" alt="Team Member 2" style="width: 100px; height: auto;">
                                    </div>
                                    
                                    <div class="col-6 col-md-6">
                                        <img src="aboutus-img/avatar3.png" alt="Team Member 3" style="width: 100px; height: auto;">
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <img src="aboutus-img/avatar4.png" alt="Team Member 4" style="width: 100px; height: auto;">
                                    </div>
                                </div>
                </div>
                            <!-- End Team Section -->
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
            <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
                <h2 class="h1 mb-3 neon-text" >Who Are We?</h2>
                
                <p class="lead fs-4 text-secondary mb-3" id="paragraphContent">
                    <span>At</span> <span>Family</span> <span>supermarket,</span> <span>we</span> <span>are</span> <span>more</span> <span>than</span> <span>just</span> <span>a</span> <span>place</span> <span>to</span> <span>shop</span> <span>we're</span> <span>your</span> <span>community</span> <span>hub</span> <span>for</span> <span>fresh</span> <span>experiences</span> <span>and</span> <span>quality</span> <span>essentials.</span> <span>Rooted</span> <span>in</span> <span>a</span> <span>passion</span> <span>for</span> <span>providing</span> <span>families</span> <span>with</span> <span>wholesome</span> <span>choices,</span> <span>we</span> <span>strive</span> <span>to</span> <span>be</span> <span>the</span> <span>heartbeat</span> <span>of</span> <span>your</span> <span>neighborhood.</span> <span>From</span> <span>locally</span> <span>sourced</span> <span>produce</span> <span>to</span> <span>a</span> <span>diverse</span> <span>selection</span> <span>of</span> <span>international</span> <span>goods,</span> <span>our</span> <span>commitment</span> <span>is</span> <span>to</span> <span>offer</span> <span>a</span> <span>delightful</span> <span>shopping</span> <span>journey</span> <span>that</span> <span>nourishes</span> <span>both</span> <span>body</span> <span>and</span> <span>soul.</span> <span>Discover</span> <span>the</span> <span>difference</span> <span>at</span> <span>Family</span> <span>supermarket,</span> <span>where</span> <span>every</span> <span>aisle</span> <span>tells</span> <span>a</span> <span>story</span> <span>of</span> <span>quality,</span> <span>care,</span> <span>and</span> <span>the</span> <span>joy</span> <span>of</span> <span>bringing</span> <span>people</span> <span>together</span> <span>through</span> <span>exceptional</span> <span>products</span> <span>and</span> <span>personalized</span> <span>service.</span>
                </p>

                
                
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
    <script>
        gsap.from("#paragraphContent span", {
            opacity: 0,
            y: 10,
            stagger: 0.1, 
            duration: 0.5,
            ease: "power3.out",
        });
    </script>

</body>
</html>