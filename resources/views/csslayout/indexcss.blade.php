<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body {
  font-family: "Montserrat", sans-serif;
  text-align: center;
  overflow-x: hidden;
}
html {
  overflow-x: hidden;
  scroll-behavior: smooth;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
header {
  position: relative;
  height: 100vh;
  margin-bottom: 20px;
  width: 100%;
}





/* wrapper */

.wrapper {
  margin: 40px;
  display: flex;
  justify-content: space-between;
  padding: 40px;
  align-items: center;
}

.wrapper .young {
  height: 500px;
  width: 556px;
  -webkit-box-shadow: 30px -27px 16px -3px rgba(97,212,255,0.78)!important; 
  box-shadow: 30px -27px 16px -3px rgba(97,212,255,0.78)!important;
  border-radius: 30% 70% 63% 37% / 43% 30% 70% 57%  ;
  background-color: steelblue!important;
}
.wrapper p {
  font-family: "Montserrat";
  font-style: normal;
  font-weight: 600;
  font-size: 60px;
  line-height: 80px;
  
  color: #0f1376;
  text-align: left;
  text-transform: capitalize;
 
  width: 90%;
  margin-bottom: 20px;
 
}
.emtpy{
  height: 90px;
  /* background-color: red!important; */
}
.furst{
  height: 40%;
  z-index: 2;
  flex-basis: 40%;
}
.furst:hover img{
  border-radius: 30% 70% 46% 54% / 69% 66% 34% 31% ;
  cursor: pointer;
}
.wrapper button {
  /* width: 251px;
  height: 72px;
  left: 141px;
  top: 712px;
  color: white; */
  background: #040a99;
  border-radius: 44px;
  /* padding-inline-end: 10px; */
  border: none;
  padding: 20px 50px;

  font-size: 20px;
  text-transform: capitalize;
  animation: button 4s ease-in infinite alternate;
}

@keyframes button {
  0% {
    background-color: aqua;
  }
  25% {
    background-color: steelblue;
  }
  50% {
    background-color: slateblue;
    transform: scale(1.2);
  }
  75% {
    background-color: #0d104a;
  }
  100% {
    background-color: midnightblue;
    transform: scale(1.1);
  }
}
.wrapper button a {
  text-decoration: none;
  color: white;
}
.wrapper p span {
  font-weight: 800;
}

/* wrapper ends here */

/* box-model begins */
.boxmom {
  margin-top: 70px;
  width: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  
  
}

.box-model {
  display: flex;
  text-align: center;
  box-shadow: 2px 2px 4px 1px grey;
  padding: 20px;
  background-color: white!important;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 90%;
  margin: 70px 10px;
  z-index: 10;
}
.box-model hr {
  width: 100%;
}
.box-model p {
  text-transform: capitalize;
}
.box-model .innerbox-model-h {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
}
.box-model .innerbox-model-h h5 {
  padding: 5px;
  text-transform: uppercase;
}

.boxes p {
  background-color: #04096a;
  color: white;
  padding: 20px;
}
#crypto {
  width: 100px;
  border-radius: 5px;
  background-color: antiquewhite;
  padding: 5px;
  border: none;
}
.main-innerbox input[type="text"] {
  margin: 5px;
  width: 200px;
  padding: 5px;
  border: none;
  background-color: bisque;
  border-radius: 5px;
}
.main-innerbox button {
  color: white;
  padding: 5px 15px;
  background: #040a99;
  border-radius: 6px;
  border: none;
}
.who-we-are {
  margin: 20px 100px;
  padding: 10px;
}
.who-we-are h2 {
  text-align: center;
  color: #0d104a;
  text-transform: capitalize;
}
.who-we-are p {
  line-height: 25px;
  font-size: 20px;
  text-align: left;
  margin: 10px 40px;
  color: #bcbcbc;
}
.more-description {
  display: flex;
  padding: 20px;
  justify-content: space-around;
}
.more-description div{
  flex-basis: 50%;
}
.more-description img{
  width: 90%;
}
.more-description .text {
  width: 35%;
  font-size: 20px;
  color: #bcbcbc;
  text-align: left;
}
.boxmode-mom {
  display: flex;
  flex-direction: column;
}
.boxmode-mom ul {
  display: flex;
  justify-content: center;
  padding: 5px;
}
.boxmode-mom ul li {
  list-style-type: none;
  margin: 20px;
  color: #04096a;
  font-weight: bold;
  text-transform: capitalize;
  font-size: 20px;
}

.boxes{
  max-width: 250px;
  margin: auto;
  position: relative;
  cursor: pointer;
}
.boximage {
  transition: .5s ease;
  width: 250px;

}

.boxes h2{
  position: absolute;
  top: 20%;
  left: 7%;
  right: 7%;
  color: white;
  font-size: 12px;
  transition: .5s ease;
  backface-visibility: hidden;
  opacity: 0;
}

.boxes:hover h2 {
  opacity: 1;
}
.boxes:hover .boximage{
  opacity: 0.3;
}

.boxes p {
  margin-bottom: 30px;
  text-justify: auto;
  text-transform: uppercase;
  text-align: center;
}

.service-boxmodel {
  margin: 10px;
  display: flex;
  justify-content: space-between;

  /* display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr; */
  flex-wrap: wrap;
}
.all-countingfooters {
  margin-top: 120px;
  text-align: center;
  position: relative;
  background: #04096a;
  padding: 90px;
}
.countingmum {
  position: absolute;
  display: flex;
  top: -100px;
  /* left: 200px; */

  justify-content: center;
  width: auto;
}
.counting-numbers {
  padding: 20px;
  display: flex;
  justify-content: space-around;
  align-items: center;
  background: #1d18fe;
  max-width: 80%;
  border: none;
}
.countingmum p {
  padding: 10px 20px;
  margin: 5px 30px;
  color: white;
  font-size: 20px;
  text-transform: uppercase;
}

.counting-numbers .first-count {
  text-align: center;
}

.all-countingfooters h2 {
  text-align: center;
  margin: 20px;
  text-transform: capitalize;
  color: white;
}
.all-countingfooters .whyusdiv {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  color: white;
  text-transform: capitalize;
}
.glass-mum {
  display: flex;
  flex-wrap: wrap;
}
.glassy {
  background: linear-gradient(
    13deg,
    rgba(255, 255, 255, 0.1),
    rgba(255, 255, 255, 0)
  );
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 20px;
  width: 350px;
  height: 200px;
  margin: 20px auto;
  border: 1px solid rgba(255, 255, 255, 0.18);
  box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
}
.glassy p {
  color: #04096a;
  font-size: 30px;
  padding: 20px;
}
/* testimonials */

/* testimonials */


footer {
  background-color: rgb(15, 19, 118);
}
footer .choose {
  margin: 20px;
}
footer .choose h2 {
  padding: 20px;
  color: white;
}
footer .chose {
  margin: 20px;
  padding: 20px;
  justify-content: space-around;
  align-items: center;
  display: flex;
  flex-wrap: wrap;
}
footer .chose div img {
  height: 50%;
  width: 50%;
}
footer .chose h3 {
  color: white;
  padding: 10px;
  margin: 10px;
}
footer .client {
  background-color: white;
  padding: 20px;
}
footer .client h2 {
  color: #04096a;
  padding: 20px;
}
footer .client .clients {
  display: flex;
  align-items: center;
  justify-content: space-around;
  flex-wrap: wrap;
  padding: 20px;
}
footer .client .clients p a {
  padding: 10px;
  color: #04096a;
  text-decoration: none;
}
footer .client .clients p a img {
  width: 50px;
  height: 50px;
}
footer .contact {
  padding: 20px;
}
footer .contact .contactdiv {
  display: flex;
  justify-content: space-around;
  padding: 10px;
  flex-wrap: wrap;
}
footer .contact .contactdiv h3 {
  color: white;
  padding: 10px;
}
footer .contact .contactdiv address {
  color: white;
}
footer .contact .input {
  position: relative;
}
footer .contact .contactdiv input[type="email"] {
  width: 300px;
  padding: 10px;
  border: none;
  border-radius: 10px;
}
footer .contact .contactdiv button {
  background-color: #1d18fe;
  color: white;
  border: none;
  padding: 7px;
  border-radius: 7px;
}
footer .line {
  text-align: center;
  align-items: center;
  display: flex;
  justify-content: center;
}
footer #line {
  margin: 5px;
  width: 90%;
  border: 1px solid white;
}
footer h4 {
  color: white;
  padding: 20px;
}
footer .fa {
  color: white;
  font-size: 20px;
  text-align: center;
}
footer .icon-last {
  padding: 1px 10px;
  text-align: left;
}

@media (max-width: 1024px) {
  
  .more-description {
    flex-direction: column;
    align-items: center;
  }
  .more-description .text {
    width: 90%;
    margin: 20px;
  }
  .who-we-are {
    margin: 5px;
  }
  .wrapper p {
    font-weight: 600;
    font-size: 40px;
    line-height: 90px;
    width: 100%;
    color: #0f1376;
    text-transform: capitalize;
  }
}

@media (max-width: 768px) {
  .toggler{
    display: block;
}

.videoscript{
  display: none;
}
  .wrapper {
    /* flex-direction: column-reverse; */
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  .wrapper .young {
    height: 235px;
    width: 356px;
    border-radius: 0px;
    display: none;
  }
  .who-we-are p {
    text-align: left;
    font-size: 16px;
    margin: 10px 20px;
    color: #bcbcbc
    
    
  }
  .more-description {
    flex-direction: column;
    justify-content: center;
    margin: 40px 20px 10px;
  }
  .more-description .text {
    color: #b3b3b3;
    font-size: 17px;
    text-align: left;
  }
  .boxmode-mom ul li:nth-of-type(2) {
    display: none;
  }
}
@media (max-width: 992px) {
  header {
    background-image: url("../images/about-boxes-bg.jpg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background: steel;
    background-blend-mode: saturation;
    background-size: cover;
    animation: backchange 10s linear infinite alternate;
    display: flex;
  }
}
footer .contact .contactdiv input[type="email"] {
  width: 150px;
  padding: 10px;
  border: none;
  border-radius: 10px;
}

  @keyframes backchange {
    0% {
      background-image: url("../images/nano-images/4-18.jpg");
    }
    25% {
      background-image: url("../images/nano-images/IMG_1378.JPG");
    }
    50% {
      background-image: url("../images/nano-images/IMG_1383.JPG");
    }
    75% {
      background-image: url("../images/nano-images/IMG_1384.JPG");
    }
    100% {
      background-image: url("../images/nano-images/IMG_1380.JPG");
    }
  }
  .videoman {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: none;
  }
  .burger {
    /* background-color: black; */
    padding: 10px;
    display: block;
    cursor: pointer;
  }
  
  .wrapper p {
    font-size: 50px;
    background: #ffffff5c;
    box-shadow: 0px 0px 20px 300px #ffffff5c;
    -webkit-text-stroke: 1px #0f1376;
  }
  .who-we-are h2,
  .boxmode-mom ul li {
    font-size: 3vw;
  }
  
  .who-we-are {
    margin: 10px;
  }
  .more-description {
    align-items: center;
  }
  .more-description .text {
    width: 90%;
    margin: 20px;
  }
}
@media (max-width: 480px) {
.wrapper p{
  font-size: 34px;

}

  .wrapper button {
    /* width: 251px;
    height: 72px;
    left: 141px;
    top: 712px;
    color: white; */
    background: #040a99;
    border-radius: 44px;
    /* padding-inline-end: 10px; */
    border: none;
    padding: 20px;
  
    font-size: 14px;
    
  }
  .more-description img {
    width: 300px;
  }
  .wrapper p{
    font-size: 34px;
  }
}
@media (max-width:400px){
  .wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2px;
}
.who-we-are p{
  font-size: 10px;
  line-height: 15px;
}
}
@media (max-width:380px){
.who-we-are img{
  width: 20px;
  height: 10px;
}
.more-description img{
  width: 50vw;
}
.more-description .text {
  width: 95%;
  font-size: 10px;
  color: #bcbcbc;
  text-align: left;
}
}
</style>