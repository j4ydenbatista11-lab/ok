/*--------------------------------------------------- FONT IMPORT -------------------------------------------------*/

/*------------------------------------------------------ MAP ------------------------------------------------------*/
.section_content .tsT_plugin .b2b-location.wide .b2b-location-items-container .b2b-location-items.show-details li p {
    margin: 0 !important;
    line-height: 1.5em !important;
}
.tsD_map {padding-top: 0 !important;}
.tsD_map .tsR{max-width: 100% !important;margin: 0 !important;padding: 0 !Important;}
.tsD_map .tsI {margin: 0 !important;width: 100% !important;}
.tsD_map #_the_map_wrapper{max-width: 100% !important; margin: 0 !Important;padding: 0 !important;}


/**** NO MAP ****/ 
.primary.tsi-address, .b2b-location-canvas {display:none !important;} 
.primary.tsi-phone {width:100% !important;} 
.b2b-location-get-directions.color_bodylinks, .footer-street-address.footer-address, .b2b-location-get-directions {display:none !important;} 
.mobile-multi-locations .tsi-address a {display: none !important;} 
.tsAddress {display:none !important;}

/*-------------------------------------------------- GLOBAL BODY --------------------------------------------------*/
.tsH_wrp{padding: 0 !important;}
.tsD_white *, 
.b2b-location-items.show-details *{ 
  color: #fff !important; 
}
.tsH{
  display: flex !important;
  display: -webkit-flex !important;
  flex-direction:column-reverse !important;
  -webkit-flex-direction:column-reverse !important;
}

/*----------------------------------------------------- CTA -------------------------------------------------------*/

.tsSC .social-media-links {
    flex: 1 0 20% !important;
}

/*---------------------------------------------------- HEADER -----------------------------------------------------*/
@media (min-width: 1024px){.home .tsC {margin-top: 0 !important; xpadding-top: 0 !important;}}
.tsSC {box-shadow: none !important;}
.home .tsH:not(.shrink){background-color: transparent;}
.tsH .tsSC{background: linear-gradient(var(--color24), rgba(54,43,75,0)) !IMPORTANT;}
.tsSC a{color: #fff !IMPORTANT;}
.tsH, .tsM_bdy, ul.sub-menu{-webkit-backdrop-filter: blur(8px) contrast(1) !important;backdrop-filter: blur(8px) contrast(1) !important;}
/*----------------------------------------------------- LOGO ------------------------------------------------------*/
@media (min-width: 1024px){.home .tsH.expand #_the_logo img{filter: brightness(0) invert(1) !IMPORTANT;}}
.tsH.shrink #_the_logo img {max-height: 6rem !IMPORTANT;}
/*-------------------------------------------------- NAVIGATION ---------------------------------------------------*/
.home .tsH.expand .menu a {color: #fff !IMPORTANT;}
.home .tsH.expand .menu a:hover {color: #8e9a90 !IMPORTANT;}
.home .tsH.expand .sub-menu a {color: #362b4b !IMPORTANT;}
/*---------------------------------------------------- BUTTON -----------------------------------------------------*/
.tsD_dl .tsI_btn.btn_2:hover,
.tsD_content .tsI_btn.btn_2:hover {
  background-color: var(--promo1) !IMPORTANT; 
  color: #fff !IMPORTANT; 
  border-color: var(--promo1) !IMPORTANT;
}
/*------------------------------------------------- FONT STYLING --------------------------------------------------*/
.tsI_hd, .tsI_sh{font-weight: lighter !important;}
/*--------------------------------------------------- CONTENT -----------------------------------------------------*/
.tsD_content, 
.home .tsD_main, 
.tsD_list {
  padding:0 !IMPORTANT;
}
.tsD_content .tsR, 
.tsD_split1 .tsR, 
.tsD_main .tsR {
  max-width:100% !important;
}
.tsD_main .tsI_sh{
  font-size: 300% !IMPORTANT; 
  text-transform: capitalize !IMPORTANT;
  margin-top: 1px !important;
}
.tsD_main .tsI_hd{
  font-weight: lighter !IMPORTANT;
  font-size: 120% !IMPORTANT;
  text-transform: uppercase !IMPORTANT;
  letter-spacing: .2em !important;
}
.tsD_content2 span{
  color: var(--promo1) !IMPORTANT; 
  font-size: 120% !IMPORTANT; 
  letter-spacing:5px !IMPORTANT;
}
.tsD_content2 .tsI{
  margin-bottom: 0 !IMPORTANT;
}
/*----------------------------------------------------- DLS -------------------------------------------------------*/
.tsD_dl .tsI {height: 100vh !important;}
.tsD_dl .tsI_txt {padding-top: 12rem !important;}


/*---------- DL TEXT ANIMATION ----------*/
.text7{font-size:3.5rem; color: #fff; text-transform: uppercase; letter-spacing: .2em; text-align:left}
.word{position: absolute; opacity: 0; margin: -4rem auto}
.letter{display: inline-block;position: relative;transform: translateZ(25px);transform-origin: 50% 50% 25px;}
.letter.out{transform: rotateX(90deg);transition: transform 0.32s cubic-bezier(0.55, 0.055, 0.675, 0.19);}
.letter.behind {transform: rotateX(-90deg);}
.letter.in {transform: rotateX(0deg);transition: transform 0.38s cubic-bezier(0.175, 0.885, 0.32, 1.275);}

@media(max-width:700px) {
  .text7{
	font-size:1.6rem !IMPORTANT;
  }
  .word{
	margin: -2.5rem auto!IMPORTANT;
  }
  .tsD_dl .tsI {
	height: 80vw !important;
  }.tsD_dl .tsI_txt {
	padding-top: 2rem !important;
  }
}
/*--------------------------------------------------- FEATURES ----------------------------------------------------*/
.tsD_photofeature13 .tsI { 
  box-shadow: none !important;
}
.tsD_photofeature13 .tsI:hover{
  transform: none !important;
}
.tsD_photofeature13 .tsI_cptn{
  height: 100% !important;
  background: rgba(0,0,0,0.2) !important;
}
.tsD_photofeature13 .tsI_txt{
  padding: 70% 0 0 !important;
}

.tsD_photofeature13 .tsI_hd {
  background:#fff !important;
  font-size: 1rem !important;
  padding: 5% 0% !important;
  width: 80% !important;
  margin: 0 !important;
  color: var(--color3) !IMPORTANT;
  border-radius: 0 50px 50px 0 !IMPORTANT;
  letter-spacing: .1rem !important;
  -webkit-transition: all .5s ease-in-out !important;
  transition: all .5s ease-in-out !important;
}
.tsD_photofeature13 .tsI:hover .tsI_hd {
  width: 98% !important;
}
@media(max-width:600px){
  .tsD_photofeature13 .tsI{
	width: 100% !important;
  }
}
/*--------------------------------------------------- SPLIT 1 ----------------------------------------------------*/
.tsD_split1 .tsI_hd{
  font-size: 200% !IMPORTANT; 
  color: #373737 !IMPORTANT;
}
.tsD_split1 .tsI_hd span{
  color: var(--promo1) !IMPORTANT; 
  font-size: 150% !IMPORTANT; 
  letter-spacing:5px !IMPORTANT;
}

.list li{
  letter-spacing: 3px !IMPORTANT;
  -webkit-transition: all 0.3s ease-in-out !important;
  transition: all 0.3s ease-in-out !important;
}
.list li:hover { 
  color: var(--promo1) !important; 
  letter-spacing: 5px !IMPORTANT;
  -webkit-transition: all 0.3s ease-in-out !important;
  transition: all 0.3s ease-in-out !important;
}

@media(max-width:1100px){
  .tsD_split1 .tsI {
	width: 100% !IMPORTANT; 
	margin-top: 0rem!important;
  }
  .tsD_split1 .tsI_txt, .tsD_split1 .tsI_hd {
	text-align: center !IMPORTANT;
  }
  .list li{
	list-style-type:none !IMPORTANT;
  }
   .tsD_split1 .tsI_hd span {
	 font-size: 65% !IMPORTANT;
  }
}
/*--------------------------------------------------- SERVICES ----------------------------------------------------*/

/*--------------------------------------------------- SUBPAGES ----------------------------------------------------*/
.tsD_form .tsI {background-color: #eee !important;}

/*---------------------------------------------------- FOOTER -----------------------------------------------------*/

/*------------------------------------------------- MEDIA QUERIES -------------------------------------------------*/
@media (max-width: 1024px){
  .tsH #_the_logo img {
	  max-height: 3.5em !important;
  }
}
@media (min-width: 1023px){
  .tsD_photofeature13, .tsD_split1 {
	width: 47% !important;
	margin: 1% !important;
	display: inline-block !important;
	position: relative !important;
	vertical-align: middle !important;
  }
}
@media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (orientation: landscape) {
  .tsH #_the_logo {
	  padding: .2rem 0 !important;
  }
  .tsH.expand #_the_logo img {
	  max-height: 2.5em !important;
  }
  .tsH.shrink #_the_logo img {
	  max-height: 2em !IMPORTANT;
  }
}
/*------------------------------------------------- ANIMATIONS -------------------------------------------------*/
svg.waves {
  position:absolute !important;
  bottom: -48px !important;
  width: 100%;
  left:0px !important;
  height:10vh !important;
  margin-bottom:0px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}
/* Animation */
.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5) infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 8s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
}

xxx@media(max-width:800px) {.tsSC.transition.tsflex {
    display: none;
}}

/* style for adding text button */
li.tsi-phone {
    width: 50% !important;
    display: inline-block !important;
    text-align: center !important;
    margin-top: .5rem;
}
/* END style for adding text button */
@media(min-width:800px) {
  li.tsi-phone {
    display: none !important;
  }
}

/* ------------------ Floating Social Media Tabs ------------------ */
 .social_items_flex {
 display: flex;
 flex-direction: column;
 justify-content: space-around;
 position: fixed;
 bottom: 70px;
 z-index: 999999;
 }
 
.social_button {
 height: 60px;
 width: 60px;
 float: left;
 margin: 5px;
 overflow: hidden;
 background: #fff;
 border-radius: 50px;
 cursor: pointer;
 box-shadow: 0 10px 10px rgba(0,0,0,0.1);
 transition: all 0.3s ease-out;
 }
 
.social_button:hover {
 width: 330px;
 }
 
.social_button .floating_icon {
 display: inline-block;
 height: 60px;
 width: 60px;
 text-align: center;
 border-radius: 50px;
 box-sizing: border-box;
 line-height: 60px;
 transition: all 0.3s ease-out;
 }
 
.facebook_button:hover .floating_icon {
 background: #1773EA;
 }
 
.google_button:hover .floating_icon {
 background: #CA1116;
 }
 
.facebook_button .floating_icon {
 color: #1773EA; 
 }
 
.google_button .floating_icon {
 color: #CA1116; 
 }
 
.social_button:hover .floating_icon svg {
 color: #fff !important;
 }
 
.social_button .floating_icon i {
 font-size: 25px;
 line-height: 60px;
 }
 
.social_button span {
 font-size: 20px;
 font-weight: 500;
 line-height: 60px;
 margin-left: 10px;
 transition: all 0.3s ease-out;
 }
 
.facebook_button:hover span {
 color: #1773EA;
 }
 
.google_button:hover span {
 color: #CA1116;
 }

.yelp_button:hover .floating_icon {background: #AA0606;}
.yelp_button .floating_icon {color: #AA0606; }
.yelp_button:hover span {color: #AA0606;}
 
@media (max-width: 1024px) {
 .social_items_flex {
 display: none !important;
 }
 }
 /* ------------------ End Floating Social Media Tabs ------------------ */
.tsPhone a {
    font-size: 1rem !important;
    font-weight: bolder !important;
}
li.tsPhone {
    background-color: #ca1217 !important;
    border-radius: 3rem !important;
}
.tsPhone a:hover {
    background-color:transparent !important;
}


 #mobile-call-btn {
 bottom: 14px;
 position: fixed;
 right: 20px;
 z-index: 99999;
 text-align: center !important;
 }

 #mobile-call-btn a {
 text-decoration: none;
 }

 @media (min-width: 1024px) {
 #mobile-call-btn {
 display: none;
 }
 }

 @media (max-width: 1024px) {
 .tsF {
  padding-bottom: 7.5rem !important;
 } 
 }

 #mobile-call-btn span {
 font-size: 1.25rem;
 text-align: center !important;
 font-weight: bold;
 color: #fff;
 background: #CA1217; /* change background color of text */
 padding: 0 5px 0;
 border-radius: 10px;
 border: solid 3px #000;
 }

 #mobile-call-btn img {
 position: relative;
 background: #CA1217; /* change background color of phone icon */
 max-width: 70px;
border-radius: 50%;
 z-index: 99 !important;
 width: 100%;
 animation: pulse 1s infinite;
 border: solid 3px #000;
 }

 @keyframes pulse {
 0% {transform: scale(1);}
 50% {transform:scale(1.15);}
 100% {transform:scale(1);}
 }

 .to-top {
 display: none;
 }

/*---Manual DL---*/
.tsD_MnDL {padding: 0 !important;}
.tsD_MnDL figure.tsI_img.theframe.imgtag.imgbase.img-loaded {margin: 0 !important;}
.tsD_MnDL .tsI_txt {display: none;}
.tsD_MnDL {background: #0d0d0d;}

.tsD_MnDL .tsR {
    max-width: 100% !important;
    padding: 0 !important;
}

.tsD_MnDL .tsI {
    margin: 0 auto!important;
    width: 60% !important;
}
@media (max-width:900px){
.tsD_MnDL .tsI {
    width: 100% !important;
}}