<style>
    
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}
body {
  overflow-x: hidden;
}
html {
  overflow-x: hidden;
}
:root {
  --dark-blue: #0b0f4e;
}

main {
  margin: 0;
  font-family: sans-serif;
}

main .sec1 .grid {
  display: grid;
  grid-template-columns: 1fr minmax(200px, 1fr);
  margin: 0 3em;
  grid-template-rows: max-content;
}

main .sec1 {
  box-shadow: 2px 2px 4px 1px grey;
  padding-top: 1em;
  margin-top: 100px;
  margin-bottom: 2em;
  border-radius: 14px;
  padding-bottom: 2.5em;
}

main .sec1 h3 {
  text-align: center;
  padding-bottom: 1em;
}

main .sec1 .grid img {
  width: 70%;
  height: 55vmin;
  padding-top: 2em;
}

main .sec1 .grid p {
  color: grey;
  font-size: 20px;
}

main .sec1 .grid a {
  color: black;
  text-decoration: none;
}

main .sec2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  column-gap: 2em;
}

main .sec2 div {
  box-shadow: 2px 2px 4px 1px grey;
  height: 80vmin;
  margin-bottom: 1.5em;
  border-radius: 14px;
}

main .sec2 div h2 {
  text-align: center;
  padding-top: 1em;
}
main .sec2 div p {
  /* text-align: justify; */
  padding: 40px;
  font-size: 20px;
  color: grey;
}
main .team {
  text-align: center;
  padding: 0px;
  box-shadow: 2px 2px 4px 1px grey;
}
main .team .teambox {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: center;
  margin: 10px;
}
main .team .teambox h2 {
  background-color: #04096a;
  color: #fff;
  margin: 10px;
  font-size: 16px;
  padding: 10px;
}

main .team .teambox div {
  max-width: 350px;
  max-height: auto;
  display: flex;
  flex-direction: column;
  box-shadow: 2px 2px 4px 1px grey;
  align-items: center;
  margin: 20px;
}
main .team .teambox div img {
  border-radius: 50%;
  height: 20%;
  width: 90%;
  margin: 20px;
  box-shadow: 2px 2px 4px 1px grey;
}
main .team .teambox div p {
  text-align: left;
  padding: 20px;
  margin-top: 10px;
}
main .team .teambox div p strong {
  color: black;
  font-weight: 600;
  margin: 5px;
}
main .team .teambox h4 {
  color: blue;
  padding: 10px;
}
main .team .teambox h4 .fa {
  color: blue;
  font-size: 25px;
}
main .team h2 {
  margin: 20px;
  padding-top: 20px;
  color: #04096a;
}
main .team p {
  cursor: pointer;

  place-self: end;
  text-decoration: none;
  color: #878787;
  font-weight: bold;
  padding-right: 1em;
  cursor: pointer;
  padding: 20px;
}
main .team .teambox .undisplay {
  display: none;
}
/* main .team {
  display: flex;
  grid-template-columns: repeat(3, 30%);
  column-gap: 1em;
  box-shadow: 2px 2px 4px 1px grey;
  place-content: center end;
  grid-template-rows: max-content;
  border-radius: 14px;
  margin-bottom: .5em;
  padding-bottom: 1em;
}

main .team h2 {
  grid-column: span 3;
  place-self: center;
  padding-top: 1em;
  color: #0D104A;
}

main .team p {
  grid-column: span 3;
  place-self: end;
  text-decoration: none;
  color: #878787;
  font-weight: bold;
  padding-right: 1em;
  cursor: pointer;
} */
/* .usdisplay{
display: none;
}

main .team img {
  width: 80%;
  height: 40vmin;
  text-align: center;
  border-radius: 100%;
  padding-top: 1.5em;
}

main .team div {
  border-right: 2px solid #CBCBCB;
  margin: 1em;
  width: 80%;
}

main .team div:nth-of-type(3) {
  border-right: 0!important
}

main .team div p {
  color: #939393;
  padding-top: 1em;
  width: 90%;
} */
.about-table {
  display: flex;
  justify-content: space-around;
  gap: 10%;
  flex-wrap: wrap;
  margin: 30px auto;
}
.about-table table {
  flex-basis: 40%;
  /* border: 1px solid green; */
  box-shadow: 0px 7px 48px 10px #0000000d;

  /* width: 100%; */
}
.about-table table caption {
  color: #8082a0;
  text-transform: uppercase;
  font-weight: 700;
  margin: 20px;
  font-size: 25px;
}
.about-table tr,
.about-table td {
  padding: 20px;
  text-transform: uppercase;
  /* border: 1px solid green; */
  border-collapse: collapse;
  color: #8082a0;
  font-weight: bold;
}
.about-table tr:nth-child(odd) {
  background: #f4f4f4;
}
/* testimonials */
.testimonials {
  /* background: red; */
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  padding: 40px;
  background: #ececec;
}

.swiper {
  width: 100%;
}
section .slider-card .image {
  height: 140px;
  width: 140px;
  border-radius: 50%;
  background: darkblue;
  padding: 4px;
}
section .slider-card .image img {
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #fff;
  position: relative;
  z-index: 5;
}
.slider-card {
  border-radius: 20px;
  background-color: #fff;
  position: relative;
  margin: 20px 0;
  box-shadow: 0px 4px 22px -1px #00000014;
}
.slider-card::before {
  content: "";
  position: absolute;
  height: 40%;
  width: 100%;
  border-radius: 20px 20px 0 0;
  background: darkblue;
}
.slider-card .card-content {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  margin: 10px;
  padding: 30px;
  z-index: 100;
}
.card-content .rating {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
}
.rating .name {
  font-size: 20px;
  text-transform: uppercase;
  font-weight: 600;
}

/* price-card-section */

figure {
  display: flex;
  padding-top: 10px;
  text-align: center;
  justify-content: center;
  color: #ee20d6;
  flex-direction: column;
}

.pricing-container {
  width: 100%;
  height: 100%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-around;
  color: white;
  padding: 30px;
}

.pricing-container .card-pricing {
  width: 300px;
  height: auto;
  margin: 10px;

  padding: 10px 0;
  text-align: center;
  background: linear-gradient(135deg, #ee20d6 0%, #0a2fb6 100%);
  border-radius: 15px;
  box-shadow: 2px 5px 15px black;
  transition: transform 0.3s;
  transform: skew(15deg);
}

.pricing-container .card-pricing:hover {
  transform: scale(1.05);
}

.pricing-container .card-pricing .card-title {
  padding: 30px 20px;
  border-bottom: 2px solid gray;
}

.pricing-container .card-pricing .card-title h2 {
  font-size: 35px;
  padding-bottom: 15px;
  color: yellow;
}

.pricing-container .card .card-title p span {
  font-size: 40px;
  padding: 0 5px;
}

.pricing-container .card .card-content ul {
  padding: 10px 30px;
  padding-bottom: 20px;
}

.pricing-container .card-pricing .card-content ul li {
  list-style: none;
  padding: 10px 0;
}

.pricing-container .card .card-content ul li i {
  margin-right: 4px;
}

.pricing-container .card-pricing .card-content button {
  width: 120px;
  padding: 10px 20px;
  background: white;
  border-radius: 20px;
  margin-bottom: 10px;
  outline: none;
  border: none;
  cursor: pointer;
  transition: 0.3s;
}

.pricing-container .card-pricing .card-content button:hover {
  background: #17ead9;
  letter-spacing: 1.2px;
}

.pricing-container .card-pricing .card-content button a {
  text-decoration: none;
  color: black;
  font-size: 15px;
}
.buytext {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center !important;
}
.buyflex {
  margin-top: 200px;
  display: flex;
  justify-content: space-around;
  align-items: flex-end;
}
.buyflex1 {
  text-align: center;
  flex-basis: 40%;

  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.buy-image {
  display: flex !important;
  justify-content: center;
}
.buy-image img {
  width: 25px;
  height: 25px;
  display: block;
  margin: 5px;
}
.buycont-image img {
  width: 300px;
  height: 200px;
}
.buytext h1,
.buytext h2 {
  color: #243da4;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 45px;
}
.buyflex2 {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;

  flex-basis: 30%;
  padding: 10px;
}
.buyflex2 div {
  background: #dde3ff;
  padding: 10px;
  color: #04096a;
  width: 100%;
  margin: 5px 0;
  border-radius: 5px;
  text-align: center;
  text-transform: uppercase;
}

.buyflex2 input {
  width: 100%;
  display: block;
  padding: 10px;
  box-shadow: 0px 4px 31px -2px #5a5a5a12;
  border: 1px solid #dfdfdf;
  margin: 10px 0;
}
.buyflex2 input:focus {
  border: 1px solid #dfdfdf;
}
.buyflex2 label {
  display: block;
}
.buyflex2 select {
  border: 1px solid #dfdfdf;
  width: 100%;
  padding: 10px;
  margin: 10px 0;
}
.qr-flex {
  display: flex;
  justify-content: center;
  align-items: center;
 
}
.center-qr {
  width: 50%;
  
  position: relative;
}
.aside-content1 {
  width: 70%;
 
  display: flex;
  justify-content: space-between;
  padding: 10px;
  box-shadow: 0px 4px 31px -2px #5a5a5a12;
  align-items: flex-end;
  position: relative;
  background-color: white;
  z-index: 11;
}
aside .div2 {
  display: flex;
}
.qcode {
  display: block;
  width: 120px;
  margin: 10px;
}
.center-kid .first-p {
  width: 70%;
  padding: 10px;
  background: #dde3ff;
  color: #080d7d;
  text-align: center;
  text-transform: capitalize;
  border-radius: 5px;
  margin: 10px 0;
}
.qr-bg {
  position: absolute;
  height: 200px;

  bottom: 0;
  right: 2%;
  z-index: 1;
}
.sell-form{
  width: 50%;
}
.sell-form label{
  display: block;
  margin: 5px;
  text-transform: capitalize;
color: #A3A3A3;
}
.sell-form input{
  display: block;
  margin-bottom: 15px;
  padding: 7px;
  width: 100%;
  background: #E7EBFF;
border: none;
  border-radius: 5px;
}
.sell-form select{
  margin: 5px 0;
  padding: 7px;
  width: 100%;
  background: #E7EBFF;
border: none;
  border-radius: 5px;
}
.sell-form form{
  width: 70%;
  position: relative;
  z-index: 2;
  background-color: white;
  padding: 15px;
  box-shadow: 0px 4px 31px -2px #5A5A5A12;
  border: 1px solid #DFDFDF;
  margin: 10px 0;
  border-radius: 5px;
}
.sell-form button{
  background: #223cac;
  padding: 7px 20px;
  color: white;
  margin: 10px 0;
  cursor: pointer;
  border: none;
  border-radius: 10px;
  text-transform: capitalize;
  
}
.sec-p {
  width: 70%;
  padding: 10px;
  background: #dde3ff;
  color: #080d7d;
  text-align: center;
  text-transform: capitalize;
  border-radius: 5px;
  margin: 10px 0;
}
.center-kid button {
  background: #223cac;
  padding: 7px;
  color: white;
  width: 60%;
  font-size: 10px;
  border: none;
  border-radius: 10px;
  text-transform: uppercase;
  margin: 10px auto;
}
.aside-content p {
  margin: 15px 0;
  font-size: 13px;
  text-align: center;
  color: #797979;
}
.buyflex2 button {
  background: #223cac;
  padding: 10px 35px;
  color: white;
  width: 60%;
  border: none;
  border-radius: 10px;
  text-transform: uppercase;
}
.buyflex2 button:hover {
  cursor: pointer;
  opacity: 0.8;
}
/* article-page css */

.heading{
  height: 80vh!important;
  margin-top: 90px;
  /* border: 1px solid; */
 
}
.heading .article_header{
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 20px;
}
.heading .article_header main{
  flex-basis:50% ;
}
.heading .article_header main img{
  width: 100%;
}
.heading .article_header .article-img{
  flex-basis: 60%;
}
.heading .article-content{
  color: #131875;
  text-transform: capitalize;
}
.heading .article-content h2{
  margin: 40px 0 0 20px;
  font-size: 40px;
}
.heading .article-content h1 {
  font-size: 50px;
  margin-bottom: 10px;
  -webkit-animation: tracking-in-expand 0.7s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
	        animation: tracking-in-expand 0.7s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
}
@-webkit-keyframes tracking-in-expand {
  0% {
    letter-spacing: -0.5em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    opacity: 1;
  }
}
@keyframes tracking-in-expand {
  0% {
    letter-spacing: -0.5em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    opacity: 1;
  }
}

.heading .article-content span {
  margin-right: 25px;
}
.heading .article-content span i{
  margin-right: 5px;
}
.heading .article-content h1 span{
  margin: 0;
  font-size: 40px;
}

.blog__post{
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.blog__post .blog_post_item1 h3{
  color: #474A85;
  text-transform: capitalize;
  margin-top: 20px;
}
.blog_post_item1 ul{
  margin: 10px 0;
  padding: 30px;
  border-radius:10px ;
  background: #DDE3FF40;

}
.blog_post_item1 ul li{
  list-style-type: square;
  margin: 15px;
  color: #4A4FA9;
  
}
.blog_post_item1 ul p{
  margin: 15px;
  color: #4A4FA9;
  
}
.accordion {
  width: 100%;
  background: #FFF;
  margin: 0 15px;
  padding: 15px;
  border-radius: 8px;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
}

.accordion .accordion-content {
  margin: 10px 0;
  border-radius: 4px;
  background: #B8BFFA42;

  /* border: 1px solid #FFD6B3; */
  overflow: hidden;
}

.accordion-content.open {
  padding-bottom: 10px;
}

.accordion-content header {
  display: flex;
  min-height: 50px;
  padding: 0 15px;
  cursor: pointer;
  align-items: center;
  justify-content: space-between;
  transition: all 0.2s linear;
}

.accordion-content.open header {
  min-height: 35px;
}

.accordion-content header .title {
  font-size: 19px;
  font-weight: 500;
  color: 
#4A4FA9;
}

.accordion-content header i {
  font-size: 20px;
color: 
#4A4FA9;}

.accordion-content .description {
  height: 0;
  
  background: #DDE3FF40;

  color: #4A4FA9;
  font-weight: 400;
  padding: 0 15px;
  transition: all 0.2s linear;
}
.review_instruct{
  display: flex;
 justify-content: space-around;
  padding: 20px;
  align-items: center;
  flex-wrap: wrap;
  gap: 5%;

}
.review__item{
  flex-basis: 55%;
}
.review__item1{
  flex-basis: 35%;
}
.review__item main{
  margin: 5px;
  padding: 10px;
}
.review__item main:nth-child(even){
  background: #D6D6D6;
}
.review__item span i{
  margin: 3px;
  font-size: 15px;
  color: orange;
}
.review__item h4{
  color: #131875;

}
.review__item1 h4{
  color: #131875;
  margin-bottom: 10px;
}
.review__item p{
  font-size: 11px;
  color: #131875;

}
.instructor{
  border-radius: 10px;
  border: 1px solid green;
   position: relative;
  /* width: 70%; */
}
.ins__prof{
  background: #294AD9;
  height: 120px;
  border-top-left-radius: 10px;
  border-bottom-right-radius: 10px;
  border-top-right-radius: 10px;

display: flex;
align-items: flex-end;
justify-content: center;
color: white;
padding: 10px;
  margin: 0;

}
.teacher_icon i{
  margin: 5px;
  color: #0F1376;

}
.teacher_icon{
  margin: 0!important;
  padding: 10px;
  text-align: center;
background: rgba(41, 74, 217, 0.08);
border-radius: 10px 10px 0px 0px;
/* transform: matrix(1, 0, 0, -1, 0, 0); */

}
.ins__prof1{
  padding: 45px 10px 10px;
  color: #131875;

}
.instructor img{
  position: absolute;
  height: 90px;
  top: 17%;
  left: 4%;
  width: 90px;
  border-radius: 50%;
}
/* article-page-ends */
/* gallery__page */
.gallery__head{
  margin: 90px 10px 10px;
  padding: 20px;
  
}
.gallery__head img{
  width: 100%;
}
.gallery__link{
  display: flex;
  gap: 2%;
  justify-content: space-around;
  padding: 0 30px;
}
.gallery__link a{
  text-decoration: unset;
flex-basis: 48%;
/* border: 2px solid green; */
text-align: center;
padding: 20px;
border-radius: 10px;
color: #04085B;
background: #1E34FF42;

}
.gallery__link a:hover{
  background: #1E34FF1F;

}
.gallery__grid{
  display: grid;
  gap: 2%;
  padding: 10px;
  width: 100%;
  height: auto;
  border: 1px solid green;
  grid-template-columns: 1fr 1fr 1fr;
  place-items: center;
  margin: 20px auto;
}
.gallery__grid_img{
  position: relative;
  height: 250px;
}

.gallery__info{
  position: absolute;
  padding:10px;
  bottom: 0;
  width: 100%;
  height:50%;
  background: linear-gradient(180.41deg, rgba(111, 64, 64, 0) 8.9%, #390000 99.64%);
  /* opacity: .8; */
  color: white;
  padding: 10px;
  transform: scale(0.1);
 visibility: hidden;
 border-radius: 10px;
 overflow: hidden;
 transition: transform 0.5s ease-in ;
}
.gallery__info h3{
  font-size: 90%;
}
.gallery__info p{
  font-size: 90%!important;
}
.gallery__grid_img:hover .gallery__info{
  cursor:pointer;
  transform: scale(1);
  visibility: visible;
}
.gallery__grid-imgholder{
  /* border: 2px solid blue; */
  width: 90%;
  margin: 30px 10px;
  position: relative;
  /* height: 250px; */
}
.gallery__grid-imgholder img{
  width: 100%;
 height: 100%;
}
.descriptive__info{
position: absolute;
top: -10%;
bottom: -10%;
overflow-x: hidden;
overflow-y: scroll;
height: auto;
border-radius: 10px;
background-color: white;
/* padding: 20px; */
/* border: 1px solid green; */
box-shadow: 0px 4px 45px -1px rgba(0, 0, 0, 0.43);
min-height: 200px;
left: 0;
right: 0;
transform: scale(0.1);
z-index: 2;
transition: transform 0.5s ease-in ;
visibility: hidden;
  /* display: none; */
}
.descriptive__info::-webkit-scrollbar{
  width: 0;
  /* background-color: #04096a; */
}
.descriptive__info>p{
  padding: 10px;
  font-size: 90%;
}
.file{
  
  transform: scale(1);
  visibility: visible;
  /* display: block!important; */
}
.gallery__profile{
  display: flex;
  position: relative;
  justify-content: space-around;
  bottom: 0;
  width: 100%;
  background-color: #0000000d;
  padding-top: 10px;
  padding-bottom: 20px;
}
.descriptive__info div:first-child{
  padding-top:15px;
}
.gallery__clearfix{
  height: 40px;
}
.gallery__profile a{
  font-size: 10px;
  color: black;
  text-decoration: unset;
  margin: 2px;
}
.gallery__profile img{
  height: 60px;
  width: 60px;
  border-radius: 50%;
  display: block;
  position: relative;
  top: 5%;
}
.times2{
  /* width: 30px; */
  cursor: pointer;
  color: grey;
}
.gallery__info .see{
  text-align: right;
  display: block;
}
.see::after{
  content: "\f0da";
}
/* gallery__page__end */
/* contact page */
.contact__client{
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 10px;
  margin-top:90px;
  
}
.contact__client h1{
 font-size: 40px;
 text-transform:capitalize;
}
.contact__client div{
  flex-basis: 60%;
  border:1px solid green;
  position:relative;
}
.contact__client div img{
  width:90%;
}
/* contact end */
footer {
  background-color: rgb(15, 19, 118);
}
footer .choose {
  margin: 20px;
}
footer .choose h2 {
  padding: 20px;
  text-align: center;
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
footer .chose div {
  text-align: center;
}
footer .chose div img {
  width: 50%;
  height: 50%;
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
  text-align: center;
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
@media (max-width:900px){
  .gallery__info{
 
    height:100%;
   
  }
}
@media (max-width: 768px) {

.gallery__info p{
  padding: 5px;
  font-size: 60%!important;
}
.gallery__info h3{

  font-size: 70%;
}
  .toggler {
    display: block;
  }
  .gallery__grid{

    grid-template-columns:  1fr 1fr;
    
  }
  main .sec1 .grid {
    grid-template-columns: minmax(200px, 1fr);
    margin: 0 1em;
    row-gap: 0.6em;
  }
  main .sec1 .grid img {
    width: 100%;
    height: 65vmin;
    padding-top: 1em;
  }
  main {
    margin: 0 1em;
  }
  main .sec2 {
    grid-template-columns: minmax(200px, 1fr);
    row-gap: 1em;
    column-gap: 0;
  }
  /* main .team {
      grid-template-columns: minmax(200px, 1fr);
      ;
      column-gap: 0em;
      box-shadow: 2px 2px 4px 1px grey;
      grid-template-rows: 30px;
      margin-bottom: .5em;
      padding-bottom: 1em;
  }
  main .team h2 {
      grid-column: span 1;
      place-self: center;
  }
  main .team a {
      grid-column: span 1;
  }
  main .team div {
      border-right: 0;
      margin: 3em;
      width: 70%;
      place-self: center;
  }
  main .team div p {
      color: #939393;
      padding-top: 1em;
  }
  main .team img {
      width: 100%;
      height: 50vmin;
      border-radius: 50%;
      ;
  } */

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
    margin: 10px 20px;
  }
  .more-description {
    flex-direction: column;
    justify-content: center;
    margin: auto;
  }
  .heading {
    height: auto!important;
    position: relative;
}
  .heading .article_header .article-content{
    position: relative;
    z-index: 10;
  }
  

.heading .article_header {
    display: block;
}
.heading .article_header .article-img{
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 100%;
}
.heading .article-img img{
  opacity: .5;
}
.blog__post{
  display: grid;
  grid-template-columns:  1fr;
}
.review_instruct{
  display: grid;
  grid-template-columns:  1fr;

}
}
@media (max-width: 992px) {
  header {
    background-image: url("../images/about-boxes-bg.jpg");
    background-position: fixed;
    background-repeat: no-repeat;
    background: steel;
    background-size: cover;
  }
  .videoman {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: none;
  }

  .wrapper p {
    font-size: 50px;
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
  .gallery__grid-imgholder{
  /* border: 2px solid blue; */
  width: 90%;
  margin: 30px 10px;
  position: static;
  /* height: 250px; */
}

  /* .descriptive__info>p {
    padding: 10px;
    font-size: 70%;
} */
.descriptive__info div:first-child {
  padding-top: 5px;
  font-size: 70%;
}
.gallery__profile img {
  height: 40px;
  width: 40px;
 
}
  /* .gallery__profile-info h2{
    font-size: 60%;
      }
  .gallery__profile-info p{
font-size: 50%;
  } */
  .gallery__grid_img{
    position: relative;
    height: 120px;
  }
  .about-table table {
    flex-basis: 100%;
    /* border: 1px solid green; */
    box-shadow: 0px 7px 48px 10px #0000000d;
    /* width: 100%; */
}


.descriptive__info {
   position: fixed;
    top: 10%;
   
}
  .sell-form{
    width: 100%;
  }
  .center-qr {
  width: auto;
  
  position: relative;
}
.aside-content1 {
  /* width: 70%; */
  /* display: flex; */
  width: 100%;
  display: block;
}
  .buyflex {
    display: block;
    margin-top: 100px;
  }
  footer .contact .input {
    position: relative;
    text-align: center;
  }
  main .sec1 .grid p {
    color: grey;
    font-size: 16px;
  }
  main .sec2 div p {
    /* text-align: justify; */
    padding: 20px;
    font-size: 16px;
  }
  .more-description img {
    width: 300px;
  }
  footer .contact .contactdiv input[type="email"] {
    width: 200px;
    padding: 10px;
  }
}
@media (max-width: 360px) {
  main .sec1 .grid p {
    color: grey;
    font-size: 14px;
  }
  main .sec2 div p {
    /* text-align: justify; */
    padding: 10px;
    font-size: 12px;
  }
}

</style>