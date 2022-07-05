<!doctype html>
<html lang="en">
  <head>
  

    <title>Online Learning Platform</title>
	<style>
	h1 {text-align: center;}
	h2 {text-align: center;}
html, body{
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  font-family: 'Open Sans', sans-serif;
}

a{
  text-decoration: none;
}

/* GRID */

.twelve { width: 100%; }
.eleven { width: 91.53%; }
.ten { width: 83.06%; }
.nine { width: 74.6%; }
.eight { width: 66.13%; }
.seven { width: 57.66%; }
.six { width: 49.2%; }
.five { width: 40.73%; }
.four { width: 32.26%; }
.three { width: 23.8%; }
.two { width: 15.33%; }
.one { width: 6.866%; }

/* COLUMNS */

.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}

.col:first-of-type {
  margin-left: 0;
}

.container{
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  position: relative;
  text-align: center;
}

/* CLEARFIX */

.cf:before,
.cf:after {
    content: " ";
    display: table;
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

/* ALL BUTTONS */

.button{
  display: inline-block;
  padding: 20px 50px;
  margin: 20px 0;
  position: relative;
  color: #ecf0f1;
}

/* BUTTON 1 */

#button-1{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-1:before{
  content: "";
  z-index: -1;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: -100%;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-1:hover{
  color: #ecf0f1;
}

#button-1:hover:before{
  left: 0;
}

/* BUTTON 2 */

#button-2{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-2:before{
  content: "";
  z-index: -1;
  position: absolute;
  width: 100%;
  height: 100%;
  top: -100%;
  left: 0;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-2:hover{
  color: #ecf0f1;
}

#button-2:hover:before{
  top: 0;
}

/* BUTTON 3 */

#button-3{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-3:before, #button-3:after{
  content: "";
  z-index: -1;
  position: absolute;
  width: 50%;
  height: 100%;
  top: 0;
  left: -50%;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-3:after{
  left: 100%;
}

#button-3:hover{
  color: #ecf0f1;
}

#button-3:hover:before{
  left: 0;
}

#button-3:hover:after{
  left: 50%;
}

/* BUTTON 4 */

#button-4{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-4:before, #button-4:after{
  content: "";
  position: absolute;
  width: 100%;
  height: 0;
  left: 0;
  top: 50%;
  z-index: -1;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-4:after{
  top: auto;
  bottom: 50%;
}

#button-4:hover{
  color: #ecf0f1;
}

#button-4:hover:before{
  height: 50%;
}

#button-4:hover:after{
  height: 50%;
}


/* BUTTON 5 */

#button-5{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-5:before{
  content: "";
  z-index: -1;
  position: absolute;
  width: 100%;
  height: 100%;
  top: -100%;
  left: 0;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-5:hover{
  color: #ecf0f1;
}

#button-5:hover:before{
  top: 0;
}

/* BUTTON 6 */

#button-6{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-6:before, #button-6:after{
  content: "";
  z-index: -1;
  position: absolute;
  width: 100%;
  height: 50%;
  top: -50%;
  left: 0;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-6:after{
  top: 100%;
}

#button-6:hover{
  color: #ecf0f1;
}

#button-6:hover:before{
  top: 0;
}

#button-6:hover:after{
  top: 50%;
}

/* BUTTON 7 */

#button-7{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-7:before, #button-4:after{
  content: "";
  position: absolute;
  width: 100%;
  height: 0;
  left: 0;
  top: 50%;
  z-index: -1;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-7:after{
  top: auto;
  bottom: 50%;
}

#button-7:hover{
  color: #ecf0f1;
}

#button-7:hover:before{
  height: 50%;
}

#button-7:hover:after{
  height: 50%;
}

/* BUTTON 8 */

#button-8{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-8:before, #button-8:after{
  content: "";
  z-index: -1;
  position: absolute;
  width: 50%;
  height: 100%;
  top: 0;
  left: -50%;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-8:after{
  left: 100%;
}

#button-8:hover{
  color: #ecf0f1;
}

#button-8:hover:before{
  left: 0;
}

#button-8:hover:after{
  left: 50%;
}

/* BUTTON 9 */

#button-9{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-9:before{
  content: "";
  z-index: -1;
  position: absolute;
  width: 100%;
  height: 100%;
  top: -100%;
  left: 0;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-9:hover{
  color: #ecf0f1;
}

#button-9:hover:before{
  top: 0;
}

/* BUTTON 10 */

#button-10{
  border: 2px solid #34495e;
  color: #34495e;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-10:before{
  content: "";
  z-index: -1;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: -100%;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-10:hover{
  color: #ecf0f1;
}

#button-10:hover:before{
  left: 0;
}

/* BUTTON 11 */

#button-11{
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-11:hover{
  -webkit-transform: translateX(10px);
  -ms-transform: translateX(10px);
  -o-transform: translateX(10px);
  transform: translateX(10px);
}

/* BUTTON 12 */

#button-12{
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-12:hover{
  -webkit-transform: translateX(-10px);
  -ms-transform: translateX(-10px);
  -o-transform: translateX(-10px);
  transform: translateX(-10px);
}


/* BUTTON 13 */

#button-13{
  background-color: #34495e;
  -webkit-font-smoothing: antialiased;
}

#button-13:hover{
  animation: wobbleud 0.5s linear infinite;
}

@keyframes wobbleud{
  0%{
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }

  25%{
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    -o-transform: translateY(-5px);
    transform: translateY(-5px);
  }

  75%{
    -webkit-transform: translateY(5px);
    -ms-transform: translateY(5px);
    -o-transform: translateY(5px);
    transform: translateY(5px);
  }

  100%{
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}
/* BUTTON 14 */

#button-14{
  background-color: #34495e;
}

#button-14:hover{
  animation: wobblelr 0.5s linear infinite;
}

@keyframes wobblelr{
  0%{
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }

  25%{
    -webkit-transform: translateX(-5px);
    -ms-transform: translateX(-5px);
    -o-transform: translateX(-5px);
    transform: translateX(-5px);
  }

  75%{
    -webkit-transform: translateX(5px);
    -ms-transform: translateX(5px);
    -o-transform: translateX(5px);
    transform: translateX(5px);
  }

  100%{
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

/* BUTTON 15 */

#button-15{
  background-color: rgba(52, 73, 94, 1);
}

#button-15:hover{
  animation: bgchange 2s linear infinite;
}

@keyframes bgchange{
  0%{
    background-color: rgba(52, 73, 94, 1);
  }

  50%{
    background-color: rgba(52, 73, 94, 0.7);
  }

  100%{
    background-color: rgba(52, 73, 94, 1);
  }
}

/* BUTTON 16 */

#button-16{
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-16:hover{
  border-radius: 15px;
}

/* BUTTON 17 */

#button-17{
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-17:before{
  content: "";
  position: absolute;
  top: calc(50% - 15px);
  left: 0;
  border-right: 15px solid #34495e;
  border-top: 15px solid transparent;
  border-bottom: 15px solid transparent;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-17:hover{
  -webkit-transform: translateX(15px);
  -ms-transform: translateX(15px);
  -o-transform: translateX(15px);
  transform: translateX(15px);
}

#button-17:hover:before{
  left: -15px;
}


/* BUTTON 18 */

#button-18{
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-perspective: 100px;
  -moz-perspective: 100px;
  -ms-perspective: 100px;
  perspective: 100px;
  -webkit-perspective-origin: right;
  -moz-perspective-origin: right;
  -ms-perspective-origin: right;
  perspective-origin: right;
}

#button-18:after{
  content: "X";
  line-height: 60px;
  position: absolute;
  top: 0;
  right: -60px;
  width: 60px;
  height: 100%;
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-transform: rotateY(90deg);
  -ms-transform: rotateY(90deg);
  -o-transform: rotateY(90deg);
  transform: rotateY(90deg);
  -webkit-transform-origin: left;
  -moz-transform-origin: left;
  -ms-transform-origin: left;
  -o-transform-origin: left;
  transform-origin: left;
}

#button-18:hover:after{
  -webkit-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  -o-transform: rotateY(0deg);
  transform: rotateY(0deg);
}

/* BUTTON 19 */

#button-19{
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-19:hover{
  -webkit-transform: rotate(5deg);
  -ms-transform: rotate(5deg);
  -o-transform: rotate(5deg);
  transform: rotate(5deg);
}

/* BUTTON 20 */

#button-20{
  background-color: #34495e;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-20:hover{
  -webkit-transform: rotate(-5deg);
  -ms-transform: rotate(-5deg);
  -o-transform: rotate(-5deg);
  transform: rotate(-5deg);
}


</style>
</head>
<body>

<u><h1>ONLINE LEARNING PLATFORM</h1></u>
  </head

  <body>
<div class="container">
    <h2>CHOOSE SUBJECT :</h2>
    <div class="row cf">
      <div class="six col">
        <a href="#" class="button" id="button-1">Thermodynamics</a>
      </div>
      <div class="six col">
        <a href="#" class="button" id="button-2">Fluid Mechanics</a>
      </div>
    </div>
    <div class="row cf">
      <div class="six col">
        <a href="#" class="button" id="button-3">Strength Of Materials</a>
      </div>
      <div class="six col">
        <a href="#" class="button" id="button-4">Materials Engineering</a>
      </div>
    </div>
    <div class="row cf">
      <div class="six col">
        <a href="#" class="button" id="button-5">Mathematics-III</a>
      </div>
      <div class="six col">
        <a href="#" class="button" id="button-6">Environmental Science_</a>
      </div>
    </div>
    
    </div>
    
    </div>
  </div>
  </body>
</html>
