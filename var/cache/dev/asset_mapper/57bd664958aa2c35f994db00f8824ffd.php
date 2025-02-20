O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:109:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\css\templatemo-seo-dream.css";s:10:"publicPath";s:85:"/assets/frontend/assets/css/templatemo-seo-dream-e2fd824e3c9fc4cfc7015f3c5d7fd833.css";s:23:"publicPathWithoutDigest";s:52:"/assets/frontend/assets/css/templatemo-seo-dream.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:38817:"/*

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

/
/* ---------------------------------------------
Table of contents
------------------------------------------------
01. font & reset css
02. reset
03. global styles
04. header
05. banner
06. features
07. testimonials
08. contact
09. footer
10. preloader
11. search
12. portfolio

--------------------------------------------- */
/*
---------------------------------------------
font & reset css
---------------------------------------------
*/
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');
/*
---------------------------------------------
reset
---------------------------------------------
*/
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, div
pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q,
s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li,
figure, header, nav, section, article, aside, footer, figcaption {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .grid-item ---- */

.grid-sizer,
.grid-item {
  width: 50%;
}

.grid-item {
  float: left;
}

.grid-item img {
  display: block;
  max-width: 100%;
}

.clearfix:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

.clearfix {
  display: inline-block;
}

html[xmlns] .clearfix {
  display: block;
}

* html .clearfix {
  height: 1%;
}

ul, li {
  padding: 0;
  margin: 0;
  list-style: none;
}

header, nav, section, article, aside, footer, hgroup {
  display: block;
}

* {
  box-sizing: border-box;
}

html, body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
  background-color: #fff;
  -ms-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

a {
  text-decoration: none !important;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0px;
  margin-bottom: 0px;
}

ul {
  margin-bottom: 0px;
}

p {
  font-size: 15px;
  line-height: 30px;
  color: #2a2a2a;
}

img {
  width: 100%;
  overflow: hidden;
}

/*
---------------------------------------------
global styles
---------------------------------------------
*/
html,
body {
  background: #fff;
  font-family: 'Open Sans', sans-serif;
}

::selection {
  background: #03a4ed;
  color: #fff;
}

::-moz-selection {
  background: #03a4ed;
  color: #fff;
}

@media (max-width: 991px) {
  html, body {
    overflow-x: hidden;
  }
  .mobile-top-fix {
    margin-top: 30px;
    margin-bottom: 0px;
  }
  .mobile-bottom-fix {
    margin-bottom: 30px;
  }
  .mobile-bottom-fix-big {
    margin-bottom: 60px;
  }
}

.page-section {
  margin-top: 120px;
}

.section-heading {
  margin-bottom: 60px;
}

.section-heading h6 {
  font-size: 15px;
  font-weight: 700;
  color: #3aa004;
  text-transform: uppercase;
  margin-bottom: 15px;

}

.section-heading h2 {
  font-size: 30px;
  text-transform: capitalize;
  color: #2a2a2a;
  font-weight: 800;
  position: relative;
  z-index: 2;
  line-height: 45px;
}

.section-heading h2 em {
  font-style: normal;
  color: #3aa004;
}

.section-heading h2 span {
  color: #068702;
}

.main-blue-button a {
  display: inline-block;
  background-color: #4771cb;
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  text-transform: capitalize;
  padding: 12px 25px;
  border-radius: 23px;
  letter-spacing: 0.25px;
  border-bottom: 2px solid #fff!important;
  transition: all .3s;
}

.main-blue-button a:hover {
  background-color: #fff!important;
  color: #068702!important;
  border-bottom: 2px solid #068702!important;
}

.main-green-button a {
  display: inline-block;
  background-color: #068702;
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  text-transform: capitalize;
  padding: 12px 25px;
  border-radius: 23px;
  letter-spacing: 0.25px;
  border-bottom: 2px solid #068702!important;
  transition: all .3s;
}

.main-green-button a:hover {
  background-color: #068702!important;
  color: #fff!important;
  border-bottom: 2px solid #068702!important;
}


/*
---------------------------------------------
header
---------------------------------------------
*/

.background-header {
  background-color: white!important;
  height: 80px!important;
  position: fixed!important;
  top: 0px;
  left: 0px;
  right: 0px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.15)!important;
}

.background-header .logo,
.background-header .main-nav .nav li a {
  color: #fff;
}

.background-header .main-nav .nav li:hover a {
  color: white;
}

.background-header .nav li a.active {
  position: relative;
  color: #fff;
}

.background-header .nav li a.active:after {
  position: fixed;
  width: 20px;
  height: 2px;
  background-color: white;
  content: '';
  left: 50%;
  bottom: 0px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.15)!important;
}

.header-area {
  background-color: white;
  position: fixed;
  top: 0px;
  left: 0px;
  right: 0px;
  z-index: 100;
  height: 100px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.15)!important;
}

.header-area .main-nav {
  min-height: 80px;
  background: transparent;
}

.header-area .main-nav .logo {
  float: left;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  margin-top: 10px;
  height: 70px;
  width: 70px;
}


.header-area .main-nav .logo h4 {
    font-size: 30px;
    font-weight: 800;
    text-transform: capitalize;
    color: black;
    line-height: 100px;
    float: left;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.header-area .main-nav .logo h4 img {
  max-width: 30px;
  margin-top: -20px;
  margin-left: 5px;
}

.background-header .main-nav .logo h4 {
  line-height: 80px;
}

.background-header .main-nav .nav {
  margin-top: 20px !important;
}

.header-area .main-nav .nav {
  float: right;
  margin-top: 30px;
  margin-right: 0px;
  background-color: transparent;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  position: relative;
  z-index: 999;
}

.header-area .main-nav .nav li {
  padding-left: 20px;
  padding-right: 20px;
}

.header-area .main-nav .nav li a {
  display: block;
  font-weight: 500;
  font-size: 15px;
  color: black;
  text-transform: capitalize;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  height: 40px;
  line-height: 40px;
  border: transparent;
  letter-spacing: 1px;
}

.header-area .main-nav .nav li:hover a,
.header-area .main-nav .nav li a.active {
  color: #068702!important;
}

.background-header .main-nav .nav li:hover a,
.background-header .main-nav .nav li a.active {
  color: #068702!important;
  opacity: 1;
}

.header-area .main-nav .nav li.submenu {
  position: relative;
  padding-right: 30px;
}

.header-area .main-nav .nav li.submenu:after {
  font-family: FontAwesome;
  content: "\f107";
  font-size: 12px;
  color: #2a2a2a;
  position: absolute;
  right: 18px;
  top: 12px;
}

.background-header .main-nav .nav li.submenu:after {
  color: #2a2a2a;
}

.header-area .main-nav .nav li.submenu ul {
  position: absolute;
  width: 200px;
  box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.06);
  overflow: hidden;
  top: 50px;
  opacity: 0;
  transform: translateY(+2em);
  visibility: hidden;
  z-index: -1;
  transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
}

.header-area .main-nav .nav li.submenu ul li {
  margin-left: 0px;
  padding-left: 0px;
  padding-right: 0px;
}

.header-area .main-nav .nav li.submenu ul li a {
  opacity: 1;
  display: block;
  background: #f7f7f7;
  color: #2a2a2a!important;
  padding-left: 20px;
  height: 40px;
  line-height: 40px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  position: relative;
  font-size: 13px;
  font-weight: 400;
  border-bottom: 1px solid #eee;
}

.header-area .main-nav .nav li.submenu ul li a:hover {
  background: #fff;
  color: #33ccc5!important;
  padding-left: 25px;
}

.header-area .main-nav .nav li.submenu ul li a:hover:before {
  width: 3px;
}

.header-area .main-nav .nav li.submenu:hover ul {
  visibility: visible;
  opacity: 1;
  z-index: 1;
  transform: translateY(0%);
  transition-delay: 0s, 0s, 0.3s;
}

.header-area .main-nav .menu-trigger {
  cursor: pointer;
  display: block;
  position: absolute;
  top: 33px;
  width: 32px;
  height: 40px;
  text-indent: -9999em;
  z-index: 99;
  right: 40px;
  display: none;
}

.background-header .main-nav .menu-trigger {
  top: 23px;
}

.header-area .main-nav .menu-trigger span,
.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  background-color: #fff;
  display: block;
  position: absolute;
  width: 30px;
  height: 2px;
  left: 0;
}

.background-header .main-nav .menu-trigger span,
.background-header .main-nav .menu-trigger span:before,
.background-header .main-nav .menu-trigger span:after {
  background-color: #fff;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  background-color: #fff;
  display: block;
  position: absolute;
  width: 30px;
  height: 2px;
  left: 0;
  width: 75%;
}

.background-header .main-nav .menu-trigger span:before,
.background-header .main-nav .menu-trigger span:after {
  background-color: #fff;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  content: "";
}

.header-area .main-nav .menu-trigger span {
  top: 16px;
}

.header-area .main-nav .menu-trigger span:before {
  -moz-transform-origin: 33% 100%;
  -ms-transform-origin: 33% 100%;
  -webkit-transform-origin: 33% 100%;
  transform-origin: 33% 100%;
  top: -10px;
  z-index: 10;
}

.header-area .main-nav .menu-trigger span:after {
  -moz-transform-origin: 33% 0;
  -ms-transform-origin: 33% 0;
  -webkit-transform-origin: 33% 0;
  transform-origin: 33% 0;
  top: 10px;
}

.header-area .main-nav .menu-trigger.active span,
.header-area .main-nav .menu-trigger.active span:before,
.header-area .main-nav .menu-trigger.active span:after {
  background-color: transparent;
  width: 100%;
}

.header-area .main-nav .menu-trigger.active span:before {
  -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
  -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
  -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
  transform: translateY(6px) translateX(1px) rotate(45deg);
  background-color: #fff;
}

.background-header .main-nav .menu-trigger.active span:before {
  background-color: #fff;
}

.header-area .main-nav .menu-trigger.active span:after {
  -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  transform: translateY(-6px) translateX(1px) rotate(-45deg);
  background-color: #fff;
}

.background-header .main-nav .menu-trigger.active span:after {
  background-color: #fff;
}

.header-area.header-sticky {
  min-height: 80px;
}


.header-area .nav {
  margin-top: 30px;
}

.header-area.header-sticky .nav li a.active {
  color: #33ccc5;
}

@media (max-width: 1200px) {
  .header-area .main-nav .nav li {
    padding-left: 12px;
    padding-right: 12px;
  }
  .header-area .main-nav:before {
    display: none;
  }
}

@media (max-width: 992px) {
  .header-area .main-nav .nav li:last-child  ,
  .background-header .main-nav .nav li:last-child {
    display: none;
  }
  .header-area .main-nav .nav li:nth-child(6),
  .background-header .main-nav .nav li:nth-child(6) {
    padding-right: 0px;
  }
}

@media (max-width: 767px) {
  .background-header .main-nav .nav {
    margin-top: 80px !important;
  }
  .header-area .main-nav .logo {
    color: #1e1e1e;
  }
  .header-area.header-sticky .nav li a:hover,
  .header-area.header-sticky .nav li a.active {
    color: #33ccc5!important;
    opacity: 1;
  }
  .header-area.header-sticky .nav li.search-icon a {
    width: 100%;
  }
  .header-area {
    background-color: #33ccc5;
    padding: 0px 15px;
    height: 100px;
    box-shadow: none;
    text-align: center;
  }
  .header-area .container {
    padding: 0px;
  }
  .header-area .logo {
    margin-left: 30px;
  }
  .header-area .menu-trigger {
    display: block !important;
  }
  .header-area .main-nav {
    overflow: hidden;
  }
  .header-area .main-nav .nav {
    float: none;
    width: 100%;
    display: none;
    -webkit-transition: all 0s ease 0s;
    -moz-transition: all 0s ease 0s;
    -o-transition: all 0s ease 0s;
    transition: all 0s ease 0s;
    margin-left: 0px;
  }
  .background-header .nav {
    margin-top: 80px;
  }
  .header-area .main-nav .nav li:first-child {
    border-top: 1px solid #eee;
  }
  .header-area.header-sticky .nav {
    margin-top: 100px;
  }
  .header-area .main-nav .nav li {
    width: 100%;
    background: #fff;
    border-bottom: 1px solid #e7e7e7;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .header-area .main-nav .nav li a {
    height: 50px !important;
    line-height: 50px !important;
    padding: 0px !important;
    border: none !important;
    background: #f7f7f7 !important;
    color: #191a20 !important;
  }
  .header-area .main-nav .nav li a:hover {
    background: #eee !important;
    color: #33ccc5!important;
  }
  .header-area .main-nav .nav li.submenu ul {
    position: relative;
    visibility: inherit;
    opacity: 1;
    z-index: 1;
    transform: translateY(0%);
    transition-delay: 0s, 0s, 0.3s;
    top: 0px;
    width: 100%;
    box-shadow: none;
    height: 0px;
  }
  .header-area .main-nav .nav li.submenu ul li a {
    font-size: 12px;
    font-weight: 400;
  }
  .header-area .main-nav .nav li.submenu ul li a:hover:before {
    width: 0px;
  }
  .header-area .main-nav .nav li.submenu ul.active {
    height: auto !important;
  }
  .header-area .main-nav .nav li.submenu:after {
    color: #3B566E;
    right: 25px;
    font-size: 14px;
    top: 15px;
  }
  .header-area .main-nav .nav li.submenu:hover ul, .header-area .main-nav .nav li.submenu:focus ul {
    height: 0px;
  }
}

@media (min-width: 767px) {
  .header-area .main-nav .nav {
    display: flex !important;
  }
}

/*
---------------------------------------------
preloader
---------------------------------------------
*/

.js-preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    opacity: 1;
    visibility: visible;
    z-index: 9999;
    -webkit-transition: opacity 0.25s ease;
    transition: opacity 0.25s ease;
}

.js-preloader.loaded {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

@-webkit-keyframes dot {
    50% {
        -webkit-transform: translateX(96px);
        transform: translateX(96px);
    }
}

@keyframes dot {
    50% {
        -webkit-transform: translateX(96px);
        transform: translateX(96px);
    }
}

@-webkit-keyframes dots {
    50% {
        -webkit-transform: translateX(-31px);
        transform: translateX(-31px);
    }
}

@keyframes dots {
    50% {
        -webkit-transform: translateX(-31px);
        transform: translateX(-31px);
    }
}

.preloader-inner {
    position: relative;
    width: 142px;
    height: 40px;
    background: #fff;
}

.preloader-inner .dot {
    position: absolute;
    width: 16px;
    height: 16px;
    top: 12px;
    left: 15px;
    background: #33ccc5;
    border-radius: 50%;
    -webkit-transform: translateX(0);
    transform: translateX(0);
    -webkit-animation: dot 2.8s infinite;
    animation: dot 2.8s infinite;
}

.preloader-inner .dots {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    margin-top: 12px;
    margin-left: 31px;
    -webkit-animation: dots 2.8s infinite;
    animation: dots 2.8s infinite;
}

.preloader-inner .dots span {
    display: block;
    float: left;
    width: 16px;
    height: 16px;
    margin-left: 16px;
    background: #33ccc5;
    border-radius: 50%;
}



/*
---------------------------------------------
Banner Style
---------------------------------------------
*/

.main-banner {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  padding: 226px 0px 120px 0px;
  position: relative;
  overflow: hidden;
}

.main-banner:after {
  content: '';
  background-image: url("../images/banner-dec-left-c428c4ed6405faba10cb115d14592022.png");
  background-repeat: no-repeat;
  position: absolute;
  left: 0;
  top: 100px;
  width: 212px;
  height: 653px;
  z-index: -1;
}

.main-banner:before {
  content: '';
  background-image: url("../images/banner-dec-right-18c4bf443a31e63969a1ee3a29182afc.png");
  background-repeat: no-repeat;
  position: absolute;
  right: 0;
  top: 100px;
  width: 1159px;
  height: 797px;
  z-index: -1;
}

.main-banner .left-content {
  margin-right: 45px;
}

.main-banner .left-content h6 {
  text-transform: capitalize;
  font-size: 15px;
  font-weight: 400;
  color: #2a2a2a;
  margin-bottom: 8px;
}

.main-banner .left-content h4 {
  z-index: 2;
  position: relative;
  font-weight: 700;
  font-size: 20px;
  color: #2a2a2a;
}

.main-banner .left-content h2 {
  border-top: 1px solid #eee;
  margin-top: 30px;
  padding-top: 20px;
  margin-bottom: 45px;
  font-size: 60px;
  font-weight: 800;
  color: #2a2a2a;
  line-height: 72px;
  background: #FA9D4D;
  background: -webkit-linear-gradient(to right, #FA9D4D 0%, #FF4F6B 100%);
  background: -moz-linear-gradient(to right, #FA9D4D 0%, #FF4F6B 100%);
  background: linear-gradient(to right, #FA9D4D 0%, #FF4F6B 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.main-banner .right-image {
  text-align: right;
  position: relative;
  z-index: 2;
}

.main-banner .right-image img {
  max-width: 593px;
}



/*
---------------------------------------------
Features Style
---------------------------------------------
*/

#features {
  padding-top: 130px;
}

.features .features-content {
  z-index: 2;
  position: relative;
  background-color: #fff;
  border-radius: 50px;
  box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
}

.features-item {
  text-align: center;
  padding: 30px;
  border-radius: 50px;
  background: rgb(255,255,255);
  background: linear-gradient(105deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 100%);
  transition: background-color .5s;
  -webkit-transition: background-color .5s;
  -o-transition: background-color .5s;
  -moz-transition: background-color .5s;
}

.features-item:hover {
  background: rgb(51,204,197);
  background: linear-gradient(105deg, rgba(51,204,197,1) 0%, rgba(8,141,195,1) 100%);
}

.features-item:hover h4 {
  color: #fff;
}

.features-item:hover p {
  color: #fff;
}

.features-item:hover .line-dec {
  background-color: rgba(255,255,255,0.3);
}

.first-feature:hover .icon {
  background-image: url("../images/features-icon-white-01-2f16e12be51b315d192d6b5866bbbf74.png");
}

.second-feature:hover .icon {
  background-image: url("../images/features-icon-white-02-e4cf8d832eac36cb236ea294bbc574cb.png");
}

.features-item .number h6 {
  background-repeat: no-repeat;
  width: 110px;
  height: 69px;
  color: #fff;
  margin-left: auto;
  margin-right: auto;
  font-size: 30px;
  font-weight: 700;
  text-align: center;
  line-height: 69px;
  margin-top: -65px;
  margin-bottom: 30px;
}

.features-item .first-number h6 {
  background-image: url("../images/features-number-01-9a782510af2465299adfa372c7da86a6.png");
}

.features-item .second-number h6 {
  background-image: url("../images/features-number-02-189f2deadf3c6c3753288cb8e9d589ea.png");
}

.features-item .third-number h6 {
  background-image: url("../images/features-number-03-cf85b43805737a60f291fb1ea7fc8866.png");
}

.features-item .fourth-number h6 {
  background-image: url("../images/features-number-04-739f89df3dda274a1074e628d8f38ad7.png");
}

.first-feature .icon {
  background-image: url("../images/features-icon-black-01-19278f2d15e88e0166ac5087cf645dc3.png");
}

.second-feature .icon {
  background-image: url("../images/features-icon-black-02-ba7f3e1530d5272a97427cb1a97205e3.png");
}

.features-item .icon {
  width: 63px;
  height: 63px;
  margin: 0 auto;
  transition: all 0.5s;
}

.features-item h4 {
  margin-left: 15px;
  margin-right: 15px;
  margin-top: 30px;
  font-size: 20px;
  line-height: 30px;
  font-weight: 700;
  color: #2a2a2a;
  position: relative;
  transition: all 0.5s;
}

.features-item .line-dec {
  width: 100px;
  height: 2px;
  background-color: rgba(51,204,197,0.3);
  margin: 30px auto;
  transition: all 0.5s;
}

.features-item p {
  position: relative;
  margin-top: 0px;
  transition: all 0.5s;
}

.skills-content {
  position: relative;
  z-index: 1;
  margin-top: -50px;
  background-color: #f5f5f5;
  border-bottom-right-radius: 50px;
  border-bottom-left-radius: 50px;
  padding: 110px 0px 50px 0px;
}

.skill-item {
  text-align: center;
}

.progress {
  width: 150px;
  height: 150px;
  line-height: 150px;
  background: none;
  margin: 0 auto;
  box-shadow: none;
  position: relative;
}
.progress:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 5px solid #ddd;
  position: absolute;
  top: 0;
  left: 0;
}
.progress > span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}
.progress .progress-left {
  left: 0;
}
.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 5px;
  border-style: solid;
  position: absolute;
  top: 0;
  border-color: #fd6a54;
}
.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 75px;
  border-bottom-right-radius: 75px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.progress .progress-right {
  right: 0;
}
.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 75px;
  border-bottom-left-radius: 75px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.progress .progress-value {
  text-align: center;
  color: #2a2a2a;
  display: flex;
  width: 100%;
  border-radius: 50%;
  font-size: 32px;
  text-align: center;
  line-height: 20px;
  align-items: center;
  justify-content: center;
  height: 100%;
  font-weight: 700;
}
.progress .progress-value div {
  margin-top: 10px;
}
.progress .progress-value span {
  font-size: 12px;
  text-transform: uppercase;
}

/* This for loop creates the  necessary css animation names
Due to the split circle of progress-left and progress right, we must use the animations on each side.
*/
.progress[data-percentage="10"] .progress-right .progress-bar {
  animation: loading-1 1.5s linear forwards;
}
.progress[data-percentage="10"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="20"] .progress-right .progress-bar {
  animation: loading-2 1.5s linear forwards;
}
.progress[data-percentage="20"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="30"] .progress-right .progress-bar {
  animation: loading-3 1.5s linear forwards;
}
.progress[data-percentage="30"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="40"] .progress-right .progress-bar {
  animation: loading-4 1.5s linear forwards;
}
.progress[data-percentage="40"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="50"] .progress-right .progress-bar {
  animation: loading-5 1.5s linear forwards;
}
.progress[data-percentage="50"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="60"] .progress-right .progress-bar {
  animation: loading-5 1.5s linear forwards;
}
.progress[data-percentage="60"] .progress-left .progress-bar {
  animation: loading-1 1.5s linear forwards 1.5s;
}

.progress[data-percentage="70"] .progress-right .progress-bar {
  animation: loading-5 1.5s linear forwards;
}
.progress[data-percentage="70"] .progress-left .progress-bar {
  animation: loading-2 1.5s linear forwards 1.5s;
}

.progress[data-percentage="80"] .progress-right .progress-bar {
  animation: loading-5 1.5s linear forwards;
}
.progress[data-percentage="80"] .progress-left .progress-bar {
  animation: loading-3 1.5s linear forwards 1.5s;
}

.progress[data-percentage="90"] .progress-right .progress-bar {
  animation: loading-5 1.5s linear forwards;
}
.progress[data-percentage="90"] .progress-left .progress-bar {
  animation: loading-4 1.5s linear forwards 1.5s;
}

.progress[data-percentage="100"] .progress-right .progress-bar {
  animation: loading-5 1.5s linear forwards;
}
.progress[data-percentage="100"] .progress-left .progress-bar {
  animation: loading-5 1.5s linear forwards 1.5s;
}

@keyframes loading-1 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(36);
    transform: rotate(36deg);
  }
}
@keyframes loading-2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(72);
    transform: rotate(72deg);
  }
}
@keyframes loading-3 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(108);
    transform: rotate(108deg);
  }
}
@keyframes loading-4 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(144);
    transform: rotate(144deg);
  }
}
@keyframes loading-5 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(180);
    transform: rotate(180deg);
  }
}
.progress {
  margin-bottom: 1em;
}


/*
---------------------------------------------
About Us Style
---------------------------------------------
*/

#about {
  padding-top: 130px;
}

.about-us .section-heading {
  margin-bottom: 40px;
}

.about-us .left-image {
  margin-right: 45px;
}

.about-us .about-item h4 {
  font-size:38px;
  font-weight: 800;
  color:#088ec3;
}

.about-us .about-item h6 {
  font-size: 16px;
  margin-top: 5px;
  font-weight: 400;
  color: #2a2a2a;
  text-transform: capitalize;
}

.about-us p {
  margin: 40px 0px;
}

/*
---------------------------------------------
Services Style
---------------------------------------------
*/

.our-services {
  padding-top: 120px;
}

.our-services .section-heading {
  text-align: center;
  margin-left: 75px;
  margin-right: 75px;
}

.our-services .container-fluid {
  padding: 0px 80px;
}

.service-item {
  padding: 60px 30px;
  border: 2px solid #f7f7f7;
  border-radius: 5px;
  transition: all .3s;
  margin-bottom: 30px;
}

.service-item:hover {
  background-color: #fff;
  border: 2px solid transparent;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}

.service-item .icon {
  margin-top: 10px;
  width: 80px;
  height: 80px;
  display: inline-block;
  text-align: center;
  line-height: 80px;
  background-color: transparent;
  border-radius: 50%;
}

.service-item .icon img {
    width: 150px;
    height: 150px;
}

.service-item h4 {
  font-size: 22px;
  font-weight: 700;
  color: #2a2a2a;
  margin-bottom: 15px;
}


/*
---------------------------------------------
Portfolio
---------------------------------------------
*/

.our-portfolio {
  padding-top: 100px;
  overflow: hidden;
}

.our-portfolio .container-fluid {
  padding-right: 0px;
  padding-left: 0px;
}

.portfolio-item {
  margin-bottom: 30px;
  border-radius: 50px;
}

.portfolio-item:hover .thumb .hover-content {
  opacity: 1;
  visibility: visible;
}

.portfolio-item .thumb {
  position: relative;
  border-radius: 50px;
}

.portfolio-item .thumb img {
  border-radius: 50px;
  overflow: hidden;
}

.portfolio-item .thumb .hover-content {
  border-radius: 50px;
  overflow: hidden;
  position: absolute;
  left: 0;
  top: 0;
  background: rgb(51,204,197);
  background: linear-gradient(105deg, rgba(51,204,197,1) 0%, rgba(8,141,195,1) 100%);
  width: 100%;
  height: 100%;
  opacity: 0;
  visibility: hidden;
  transition: all .5s;
}

.portfolio-item .thumb .hover-content .inner-content {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
}

.portfolio-item .thumb .hover-content .inner-content h4 {
  font-size: 20px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 10px;
}

.portfolio-item .thumb .hover-content .inner-content span {
  font-size: 15px;
  color: #fff;
}

.our-portfolio .owl-nav {
  display: inline-block!important;
  position: absolute;
  top: -117px;
  right: 15%;
  max-width: 1320px;
}

.our-portfolio .owl-nav .owl-next {
  margin-left: 10px;
}

.our-portfolio .owl-nav span {
  width: 46px;
  height: 46px;
  display: inline-block;
  text-align: center;
  line-height: 35px;
  font-size: 30px;
  border: 2px solid #eee;
  border-radius: 50%;
  color: #ddd;
  transition: all 0.5s;
}

.our-portfolio .owl-nav span:hover {
  color: #33ccc5;
  border-color: #33ccc5;
}



/*
---------------------------------------------
contact
---------------------------------------------
*/

.contact-us {
  margin-top: 0px;
  padding: 120px 0px;
  background-image: url("../images/contact-bg-9a68042b156b08db7dee1e2eb6202fc8.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}
.contact-us .section-heading {
  text-align: center;
  margin-left: 20px;
  margin-right: 20px;
}

.contact-us .contact-info {
  padding: 40px 30px;
  border: 2px solid #eee;
}

.contact-us .contact-info ul li {
  text-align: center;
  display: block;
  margin-bottom: 30px;
}

.contact-us .contact-info ul li a {
  font-size: 15px;
  color: #afafaf;
  transition: all .5s;
}

.contact-us .contact-info ul li:hover a {
  color: #2a2a2a;
}

.contact-us .contact-info ul li:last-child {
  margin-bottom: 0px;
}

.contact-us .contact-info ul li .icon {
  margin-bottom: 10px;
}

.contact-us .contact-info ul li .icon img {
  max-width: 32px;
}

form#contact {
  position: relative;
  background-color: #fff;
  padding: 60px 80px;
  border-radius: 50px;
  text-align: center;
}

form#contact input {
  width: 100%;
  height: 46px;
  border-radius: 5px;
  background-color: transparent;
  border: 2px solid #efefef;
  outline: none;
  font-size: 15px;
  font-weight: 300;
  color: #2a2a2a;
  padding: 0px 20px;
  margin-bottom: 20px;
}

form#contact input::placeholder {
  color: #aaa;
}

form#contact textarea {
  width: 100%;
  min-width: 100%;
  max-width: 100%;
  max-height: 180px;
  min-height: 140px;
  height: 140px;
  border-radius: 5px;
  background-color: transparent;
  border: 2px solid #efefef;
  outline: none;
  font-size: 15px;
  font-weight: 300;
  color: #2a2a2a;
  padding: 15px 20px;
  margin-bottom: 20px;
}

form#contact textarea::placeholder {
  color: #aaa;
}

form#contact button {
  display: inline-block;
  background-color: #068702;
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  margin-top: 20px;
  text-transform: capitalize;
  padding: 12px 25px;
  border-radius: 23px;
  letter-spacing: 0.25px;
  border-bottom: 5px solid #068702!important;
  transition: all .3s;
  outline: none;
  border: none;
}

form#contact button:hover {
  background-color: #068702!important;
  color: #fff!important;
  border-bottom: 2px solid #068702!important;
}

body button {
  background-color: #3aa004!important;
  color: #fff!important;
}

body button:hover {
  background-color: #068702!important;
  color: #fff!important;
}

/*
---------------------------------------------
Footer Style
---------------------------------------------
*/

footer{
  background-color: rgb(223, 223, 223);
}

footer p {
  text-align: center;
  margin: 30px 0px;
}

footer p a {
  color: #33ccc5;
  transition: all .5s;
}

footer p a:hover {
  color: #4771cb;
}

/*
---------------------------------------------
responsive
---------------------------------------------
*/

@media (max-width: 1200px) {
  .header-area .main-nav .logo h4 {
    font-size: 24px;
  }
  .header-area .main-nav .logo h4 img {
    max-width: 25px;
    margin-left: 0px;
  }
  .header-area .main-nav .nav li:last-child {
    padding-left: 20px;
  }
}

@media (max-width: 992px) {
  .header-area .main-nav .logo h4 {
    font-size: 20px;
  }
  .main-banner .left-content {
    margin-right: 0px;
  }
  .main-banner {
    text-align: center;
  }
  .main-banner:before {
    display: none;
  }
  .main-banner .right-image {
    margin: 30px auto 0px auto;
    text-align: center;
  }
  .features-item {
    margin-bottom: 45px;
  }
  .last-features-item,
  .last-skill-item {
    margin-bottom: 0px !important;
  }
  .skill-item {
    margin-bottom: 30px;
  }
  .service-item {
    text-align: center;
  }
  .service-item .icon {
    margin-top: 0px;
    margin-bottom: 30px;
  }
  .about-us .left-image {
    margin-right: 30px;
    margin-left: 30px;
    margin-bottom: 45px;
  }
  .our-portfolio .owl-nav {
    display: none !important;
  }
  .contact-info {
    margin-top: 60px;
  }
  form#contact {
    padding: 45px;
  }
}

@media (max-width: 767px) {
  .header-area .main-nav .logo h4 {
    font-size: 30px;
  }
  .header-area .main-nav .logo h4 img {
    max-width: 30px;
    margin-left: 5px;
  }
  .main-banner .info-stat {
    margin-bottom: 15px;
  }
  .service-item {
    text-align: center;
    padding: 30px;
  }
  .service-item .icon {
    float: none;
    margin-right: 0px;
    margin-bottom: 15px;
  }
  .service-item .right-content {
    display: inline-block;
  }
  .our-portfolio .section-heading,
  .about-us .section-heading,
  .about-us .about-item,
  .about-us p,
  .about-us .main-green-button {
    text-align: center;
  }
  .our-services .section-heading {
    margin-left: 15px;
    margin-right: 15px;
  }
  .about-us .about-item {
    margin-top: 15px;
  }
  form#contact {
    padding: 30px;
  }
}


.product-item {
  margin-bottom: 30px;
}
.product-item .product-thumb {
  position: relative;
}
.product-item .product-thumb img {
  width: 100%;
  height: auto;
}
.product-item .product-thumb .bage {
  position: absolute;
  top: 12px;
  right: 12px;
  background: #000;
  color: #fff;
  font-size: 12px;
  padding: 4px 12px;
  font-weight: 300;
  display: inline-block;
}
.product-item .product-thumb:before {
  transition: 0.3s all;
  opacity: 0;
  background: rgba(0, 0, 0, 0.6);
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}
.product-item .product-thumb .preview-meta {
  position: absolute;
  text-align: center;
  bottom: 0;
  left: 0;
  width: 100%;
  justify-content: center;
  opacity: 0;
  transition: 0.2s;
  transform: translateY(10px);
}
.product-item .product-thumb .preview-meta li {
  display: inline-block;
}
.product-item .product-thumb .preview-meta li a, .product-item .product-thumb .preview-meta li span {
  background: #fff;
  padding: 10px 0px;
  cursor: pointer;
  display: inline-block;
  font-size: 20px;
  transition: 0.2s all;
  width: 50px;
}
.product-item .product-thumb .preview-meta li a:hover, .product-item .product-thumb .preview-meta li span:hover {
  background: #000;
  color: #fff;
}
.product-item:hover .product-thumb:before {
  opacity: 1;
}
.product-item:hover .preview-meta {
  opacity: 1;
  transform: translateY(-20px);
}
.product-item .product-content {
  text-align: center;
}
.product-item .product-content h4 {
  font-size: 16px;
  font-weight: 400;
  margin-top: 15px;
  margin-bottom: 6px;
}
.product-item .product-content h4 a {
  color: #000;
}

/* Single Product Section */
.single-product {
  margin-top: 100px;
  margin-bottom: 50px;
  padding: 50px 0;
}

.single-product-slider img {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.single-product-details {
  padding: 20px;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.single-product-details h2 {
  font-size: 28px;
  color: #333;
  margin-bottom: 20px;
}

.details-table .table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0 10px;
}

.details-table .table td {
  padding: 10px;
  vertical-align: middle;
}

.details-table .table h5 {
  margin: 0;
  font-size: 18px;
  color: #333;
}

.details-table .table .product-price {
  margin: 0;
  font-size: 16px;
  color: #555;
}
";s:6:"digest";s:32:"e2fd824e3c9fc4cfc7015f3c5d7fd833";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:11:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:107:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\banner-dec-left.png";s:10:"publicPath";s:83:"/assets/frontend/assets/images/banner-dec-left-c428c4ed6405faba10cb115d14592022.png";s:23:"publicPathWithoutDigest";s:50:"/assets/frontend/assets/images/banner-dec-left.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"c428c4ed6405faba10cb115d14592022";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:42:"frontend/assets/images/banner-dec-left.png";}i:1;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:108:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\banner-dec-right.png";s:10:"publicPath";s:84:"/assets/frontend/assets/images/banner-dec-right-18c4bf443a31e63969a1ee3a29182afc.png";s:23:"publicPathWithoutDigest";s:51:"/assets/frontend/assets/images/banner-dec-right.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"18c4bf443a31e63969a1ee3a29182afc";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:43:"frontend/assets/images/banner-dec-right.png";}i:2;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:114:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\features-icon-white-01.png";s:10:"publicPath";s:90:"/assets/frontend/assets/images/features-icon-white-01-2f16e12be51b315d192d6b5866bbbf74.png";s:23:"publicPathWithoutDigest";s:57:"/assets/frontend/assets/images/features-icon-white-01.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"2f16e12be51b315d192d6b5866bbbf74";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:49:"frontend/assets/images/features-icon-white-01.png";}i:3;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:114:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\features-icon-white-02.png";s:10:"publicPath";s:90:"/assets/frontend/assets/images/features-icon-white-02-e4cf8d832eac36cb236ea294bbc574cb.png";s:23:"publicPathWithoutDigest";s:57:"/assets/frontend/assets/images/features-icon-white-02.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"e4cf8d832eac36cb236ea294bbc574cb";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:49:"frontend/assets/images/features-icon-white-02.png";}i:4;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:110:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\features-number-01.png";s:10:"publicPath";s:86:"/assets/frontend/assets/images/features-number-01-9a782510af2465299adfa372c7da86a6.png";s:23:"publicPathWithoutDigest";s:53:"/assets/frontend/assets/images/features-number-01.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"9a782510af2465299adfa372c7da86a6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:45:"frontend/assets/images/features-number-01.png";}i:5;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:110:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\features-number-02.png";s:10:"publicPath";s:86:"/assets/frontend/assets/images/features-number-02-189f2deadf3c6c3753288cb8e9d589ea.png";s:23:"publicPathWithoutDigest";s:53:"/assets/frontend/assets/images/features-number-02.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"189f2deadf3c6c3753288cb8e9d589ea";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:45:"frontend/assets/images/features-number-02.png";}i:6;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:110:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\features-number-03.png";s:10:"publicPath";s:86:"/assets/frontend/assets/images/features-number-03-cf85b43805737a60f291fb1ea7fc8866.png";s:23:"publicPathWithoutDigest";s:53:"/assets/frontend/assets/images/features-number-03.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"cf85b43805737a60f291fb1ea7fc8866";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:45:"frontend/assets/images/features-number-03.png";}i:7;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:110:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\features-number-04.png";s:10:"publicPath";s:86:"/assets/frontend/assets/images/features-number-04-739f89df3dda274a1074e628d8f38ad7.png";s:23:"publicPathWithoutDigest";s:53:"/assets/frontend/assets/images/features-number-04.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"739f89df3dda274a1074e628d8f38ad7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:45:"frontend/assets/images/features-number-04.png";}i:8;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:114:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\features-icon-black-01.png";s:10:"publicPath";s:90:"/assets/frontend/assets/images/features-icon-black-01-19278f2d15e88e0166ac5087cf645dc3.png";s:23:"publicPathWithoutDigest";s:57:"/assets/frontend/assets/images/features-icon-black-01.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"19278f2d15e88e0166ac5087cf645dc3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:49:"frontend/assets/images/features-icon-black-01.png";}i:9;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:114:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\features-icon-black-02.png";s:10:"publicPath";s:90:"/assets/frontend/assets/images/features-icon-black-02-ba7f3e1530d5272a97427cb1a97205e3.png";s:23:"publicPathWithoutDigest";s:57:"/assets/frontend/assets/images/features-icon-black-02.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"ba7f3e1530d5272a97427cb1a97205e3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:49:"frontend/assets/images/features-icon-black-02.png";}i:10;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"C:\Users\User\Downloads\EcoWay-produit (1)\EcoWay-produit\assets\frontend\assets\images\contact-bg.jpg";s:10:"publicPath";s:78:"/assets/frontend/assets/images/contact-bg-9a68042b156b08db7dee1e2eb6202fc8.jpg";s:23:"publicPathWithoutDigest";s:45:"/assets/frontend/assets/images/contact-bg.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"9a68042b156b08db7dee1e2eb6202fc8";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:37:"frontend/assets/images/contact-bg.jpg";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:44:"frontend/assets/css/templatemo-seo-dream.css";}