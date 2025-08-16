/*
 * 
 * THEME FONTS
 *
 */

/*
 * 
 * LOCATION:
 * /var/www/production.townsquareinteractive.com/docs/current/wp-content/themes/beacon-theme_charlotte/
 */

/*
 * 
 * Theme Fonts:
 * Laravel Theme Design Option fonts for beacon-theme_charlotte
 */

/*
 * 
 * Font Types:
 * Laravel Theme Design Option fonts_list for beacon-theme_charlotte
 */


/* FONTS:
body: Array
(
    [label] => Lato
    [google] => Lato:300,400,700,900,300italic,400italic,700italic,900italic
    [font-family] => 'Lato'
    [is-body-font] => 1
    [is-feat-font] => 1
    [is-hdrs-font] => 1
    [is-logo-font] => 1
)
feat: Array
(
    [label] => Open Sans
    [google] => Open+Sans:400,700,400italic,700italic
    [font-family] => 'Open Sans'
    [is-body-font] => 1
    [is-feat-font] => 1
    [is-hdrs-font] => 1
    [is-logo-font] => 1
)
hdrs: Array
(
    [label] => Open Sans
    [google] => Open+Sans:400,700,400italic,700italic
    [font-family] => 'Open Sans'
    [is-body-font] => 1
    [is-feat-font] => 1
    [is-hdrs-font] => 1
    [is-logo-font] => 1
)
*/


@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Open+Sans:400,700,400italic,700italic&display=swap);

     body.beacon{font-family:'Lato',Helvetica,Arial,sans-serif;font-weight:normal;}
    .gform_wrapper .gform_title,
    #wrapper .tsC .tsB_hd,
    #wrapper .tsI_hd {font-family:'Open Sans',Helvetica,Arial,sans-serif;}

    #wrapper .tsT_gallery.g1 .tsI_hd,
    #wrapper .tsT_gallery.g2 .tsI_hd,
    #wrapper .tsT_photo_grid .tsI_hd,
    #wrapper .tsT_photo_tiles .tsI_hd,
    #wrapper .tsT_parallax .tsI_hd{font-family:'Open Sans';}
    
/*
 * 
 * THEME COLORS
 *
 */

/*
 * 
 * Theme Colors:
 * Laravel Theme Design Option colors for beacon-theme_charlotte
 */


/*
 * 
 * Theme CSS Colors:
 * /var/www/production.townsquareinteractive.com/docs/current/wp-content/themes/beacon-theme_charlotte/css/theme_colors.css
 */


/*
 * 
 * Theme Background:
 * Laravel Theme Design Option backgrounds for beacon-theme_charlotte
 */

/* main_bg Array
(
    [src] => /wp-content/uploads/b2b/backgrounds/beacon/no-bkg-img.gif
    [repeat] => repeat-x
    [position] => center top
    [attachment] => 
    [size] => 
    [bgcolor] => 
)
*//*Array
(
    [color_1] => #8e9a90
    [color_2] => #0f1fda
    [color_3] => #CA1116
    [color_4] => #373737
    [color_5] => #131416
    [color_6] => #19181b
    [color_7] => #ffffff
    [color_8] => #000000
    [color_9] => #090909
    [color_10] => #000000
    [color_11] => #ffffff
    [color_12] => #fafaeb
    [color_13] => #362b4b
    [color_14] => #DDDDDD
    [color_15] => transparent
    [color_16] => #ffffff
    [color_17] => rgba(0,0,0,0.41)
    [color_18] => #131313
    [color_19] => #CA1116
    [color_20] => #CA1116
    [color_21] => #ffffff
    [color_22] => rgba(255,255,255,1)
    [color_23] => rgba(255,255,255,.8)
    [color_24] => #0f1fda
    [color_25] => #0f1fda
    [color_26] => #0f1fda
    [color_27] => rgba(255,255,255,1)
    [color_28] => #373737
    [color_29] => #CA1116
    [color_30] => #ffffff
    [color_31] => #0f1fda
    [color_32] => #CA1116
    [color_33] => #ffffff
    [color_34] => #0f1fda
    [color_35] => #CA1116
    [color_36] => #ffffff
    [IMAGE_SRC] => /wp-content/uploads/b2b/backgrounds/beacon/no-bkg-img.gif
    [IMAGE_REP] => repeat-x
    [IMAGE_POS] => center top
    [IMAGE_ATT] => 
    [IMAGE_SIZE] => 100%
)
*/:root {
  --color1: #8e9a90;
  --color2: #0f1fda;
  --color3: #CA1116;
  --color4: #373737;
  --color5: #131416;
  --color6: #19181b;
  --color7: #ffffff;
  --color8: #000000;
  --color9: #090909;
  --color10: #000000;
  --color11: #ffffff;
  --color12: #fafaeb;
  --color13: #362b4b;
  --color14: #DDDDDD;
  --color15: transparent;
  --color16: #ffffff;
  --color17: rgba(0,0,0,0.41);
  --color18: #131313;
  --color19: #CA1116;
  --color20: #CA1116;
  --color21: #ffffff;
  --color22: rgba(255,255,255,1);
  --color23: rgba(255,255,255,.8);
  --color24: #0f1fda;
  --color25: #0f1fda;
  --color26: #0f1fda;
  --color27: rgba(255,255,255,1);
  --color28: #373737;
  --color29: #CA1116;
  --promoT: #ffffff;
  --promo1: #0f1fda;
  --promo2: #CA1116;
  --promo3: #ffffff;
  --promo4: #0f1fda;
  --promo5: #CA1116;
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///               TEXT                 ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
body {
  background-color: #ffffff;
  background-image: url("/wp-content/uploads/b2b/backgrounds/beacon/no-bkg-img.gif");
  background-repeat: repeat-x;
  background-position: center top;
  background-attachment: ;
  background-size: 100%;
  color: #373737;
}
body a {
  color: #131416;
}
body a:hover {
  color: #19181b;
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///      HEADER, CONTENT, FOOTER       ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
/* HEADER/FOOTER */
.tsH {
  background: #ffffff;
  background: rgba(255,255,255,.8);
}
.tsH .sf-menu .sub-menu {
  background: #ffffff;
  background: rgba(255,255,255,.8);
}
.tsH .sf-menu .sub-menu .menu-item > .sub-menu {
  background: transparent;
}
.tsH_navTrig {
  color: #131313;
}

.menu a {
  color: #131313;
}
.menu a:hover {
  color: #CA1116;
}

.tsM .tsM_wrp {
  background: rgba(255,255,255,.8);
}
.tsM .tsM_wrp .tsB_hd {
  color: #131313;
}

.menu .current-menu-item > a {
  color: #CA1116;
}

#_the_logo * {
  color: #8e9a90;
}

/* CONTENT */
.tsC .tsB_hd span {
  color: #0f1fda;
}

.well .tsI:not(.blog-plugin) {
  background-color: #0f1fda;
}

.tsW {
  background-color: #0f1fda;
  background-color: rgba(255,255,255,1);
}

.content .tsB .well .tsI.yHero {
  background-color: #362b4b;
}
.content .tsB .well .tsI.yHero * {
  color: #373737;
}

/* MODALS */
.mdl {
  background-color: rgba(255,255,255,.8);
  color: #131313;
}
.mdl .tsI_cptn_overlay {
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
  background-color: rgba(0,0,0,0.41);
}
.mdl .tsI_wrp a {
  color: #131313;
}
.mdl .tsI_wrp a:hover {
  color: #ffffff;
  background-color: #000000;
}
.mdl .mdl_title {
  background: #0f1fda;
  color: #131313;
}

.tsC_close {
  background-color: #000000;
  color: #ffffff;
}
.tsC_close:hover {
  color: #000000;
  background-color: #ffffff;
}

/* FOOTER */
.tsF {
  background-color: #ffffff;
  background-color: rgba(255,255,255,1);
  color: #373737;
}
.tsF .tsI a,
.tsF .copyright a {
  color: #373737;
}
.tsF .tsI a:hover,
.tsF .copyright a:hover {
  color: #ffffff;
  background-color: #000000;
}
.tsF .tsC_Btn {
  background: transparent;
  color: #CA1116;
}
.tsF .tsC_Btn:hover {
  color: #ffffff;
  background-color: #000000;
}

/* LOCAL NAV */
.tsL:hover {
  background: #0f1fda;
  background: rgba(255,255,255,1);
}
.tsL nav a {
  color: #131416;
}
.tsL nav a:hover, .tsL nav a.active {
  color: #19181b;
}
.tsL nav a:hover:before, .tsL nav a.active:before {
  background-color: #19181b;
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///              SOCIAL                ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
/*HEADER SOCIAL*/
.tsSC {
  background-color: #0f1fda;
}
.tsSC .social-media-links a {
  background: transparent;
  color: #131313;
}
.tsSC .social-media-links a:hover {
  color: #ffffff;
  background-color: #000000;
}
.tsSC .tsC_Btn {
  background: transparent;
  color: #131313;
}
.tsSC .tsC_Btn:hover {
  color: #ffffff;
  background-color: #000000;
}
.tsSC.full-color .social-media-links a:hover {
  color: #ffffff;
}

/*MOBILE SOCIAL */
.tsM .social-media-links a {
  background: transparent;
  color: #131313;
}
.tsM .social-media-links a:hover {
  color: #ffffff;
  background-color: #000000;
}
.tsM .full-color .social-media-links a:hover {
  color: #ffffff;
  background-color: #000000 !important;
}

/*MOBILE SOCIAL */
.tsF .social-media-links a {
  background: transparent;
  color: #CA1116;
}
.tsF .social-media-links a:hover {
  color: #ffffff;
  background-color: #000000;
}
.tsF.full-color .social-media-links a:hover {
  color: #ffffff;
  background-color: #000000;
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///            MODULE SETUP            ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
.tsB.well .tsI, .tsB.tsT_list.list_well .tsI {
  background-color: #0f1fda;
}

.tsI .tsI_hd {
  color: #0f1fda;
}
.tsI .tsI_sh {
  color: #CA1116;
}
.tsI .tsI_dsc {
  color: #373737;
}
.tsI .tsI_hd .fa-inverse * {
  color: #0f1fda;
}

.tsB.well .tsI.yHero, .tsB.tsT_list.list_well .tsI.yHero {
  background-color: #0f1fda;
}
.tsB.well .tsI.yHero .tsI_hd, .tsB.tsT_list.list_well .tsI.yHero .tsI_hd {
  color: #090909;
}
.tsB.well .tsI.yHero .tsI_sh, .tsB.tsT_list.list_well .tsI.yHero .tsI_sh {
  color: #000000;
}
.tsB.well .tsI.yHero .tsI_dsc, .tsB.tsT_list.list_well .tsI.yHero .tsI_dsc {
  color: #ffffff;
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///               MODULES              ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
/* BLOG POSTS, PARALLAX, BANNER ---------------------------------------------------------- */
.tsI.nImg:nth-of-type(5n+1) .tsI_icon,
.promo_colors.not_well .nImg:not(.yBkg):nth-of-type(5n+1),
.tsT_plugin.not_well .tsI.type-post:nth-of-type(5n+1) .tsI_hd {
  background-color: #0f1fda;
}

.tsI.nImg:nth-of-type(5n+2) .tsI_icon,
.promo_colors.not_well .nImg:not(.yBkg):nth-of-type(5n+2),
.tsT_plugin.not_well .tsI.type-post:nth-of-type(5n+2) .tsI_hd {
  background-color: #CA1116;
}

.tsI.nImg:nth-of-type(5n+3) .tsI_icon,
.promo_colors.not_well .nImg:not(.yBkg):nth-of-type(5n+3),
.tsT_plugin.not_well .tsI.type-post:nth-of-type(5n+3) .tsI_hd {
  background-color: #ffffff;
}

.tsI.nImg:nth-of-type(5n+4) .tsI_icon,
.promo_colors.not_well .nImg:not(.yBkg):nth-of-type(5n+4),
.tsT_plugin.not_well .tsI.type-post:nth-of-type(5n+4) .tsI_hd {
  background-color: #0f1fda;
}

.tsI.nImg:nth-of-type(5n+5) .tsI_icon,
.promo_colors.not_well .nImg:not(.yBkg):nth-of-type(5n+5),
.tsT_plugin.not_well .tsI.type-post:nth-of-type(5n+5) .tsI_hd {
  background-color: #CA1116;
}

.tsI.nImg:nth-of-type(5n+1) .tsI_icon_in .fa-circle,
.tsI.nImg:nth-of-type(5n+1) .tsI_hd .fa-stack .fa-inverse * {
  color: #0f1fda;
}

.tsI.nImg:nth-of-type(5n+2) .tsI_icon_in .fa-circle,
.tsI.nImg:nth-of-type(5n+2) .tsI_hd .fa-stack .fa-inverse * {
  color: #CA1116;
}

.tsI.nImg:nth-of-type(5n+3) .tsI_icon_in .fa-circle,
.tsI.nImg:nth-of-type(5n+3) .tsI_hd .fa-stack .fa-inverse * {
  color: #ffffff;
}

.tsI.nImg:nth-of-type(5n+4) .tsI_icon_in .fa-circle,
.tsI.nImg:nth-of-type(5n+4) .tsI_hd .fa-stack .fa-inverse * {
  color: #0f1fda;
}

.tsI.nImg:nth-of-type(5n+5) .tsI_icon_in .fa-circle,
.tsI.nImg:nth-of-type(5n+5) .tsI_hd .fa-stack .fa-inverse * {
  color: #CA1116;
}

/* WHEN WELL IS USED: GRADIENT BACKGROUND WILL BE CREATED WITH Promo 1 > Promo 2, Promo 2 > Promo 3, etc. ---------------------------------------------------------- */
.promo_colors.well .nImg:not(.yBkg):nth-of-type(5n+1),
.tsT_plugin.well .tsI.type-post:nth-of-type(5n+1) .tsI_hd {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

.promo_colors.well .nImg:not(.yBkg):nth-of-type(5n+2),
.tsT_plugin.well .tsI.type-post:nth-of-type(5n+2) .tsI_hd {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #ffffff);
}

.promo_colors.well .nImg:not(.yBkg):nth-of-type(5n+3),
.tsT_plugin.well .tsI.type-post:nth-of-type(5n+3) .tsI_hd {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #0f1fda);
}

.promo_colors.well .nImg:not(.yBkg):nth-of-type(5n+4),
.tsT_plugin.well .tsI.type-post:nth-of-type(5n+4) .tsI_hd {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

.promo_colors.well .nImg:not(.yBkg):nth-of-type(5n+5),
.tsT_plugin.well .tsI.type-post:nth-of-type(5n+5) .tsI_hd {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #ffffff);
}

.tsT_gallery.well .nImg:nth-of-type(5n+1) .tsI_wrp,
.tsT_photo_grid.well .nImg:nth-of-type(5n+1) .tsI_cptn,
.tsT_photo_tiles.well .nImg:nth-of-type(5n+1) .tsI_cptn,
.tsT_plugin .tsI.type-post:nth-of-type(5n+1) .tsI_hd,
.tsT_parallax.well .nImg:nth-of-type(5n+1) .tsI_wrp,
.tsT_banner.b1.well .nImg:nth-of-type(5n+1) .tsI_wrp {
  background-image: url("/wp-content/themes/beacon-theme_charlotte/css/bkgs/subtle-white-feathers.png");
}

.tsT_gallery.well .nImg:nth-of-type(5n+2) .tsI_wrp,
.tsT_photo_grid.well .nImg:nth-of-type(5n+2) .tsI_cptn,
.tsT_photo_tiles.well .nImg:nth-of-type(5n+2) .tsI_cptn,
.tsT_plugin .tsI.type-post:nth-of-type(5n+2) .tsI_hd,
.tsT_parallax.well .nImg:nth-of-type(5n+2) .tsI_wrp,
.tsT_banner.b1.well .nImg:nth-of-type(5n+2) .tsI_wrp {
  background-image: url("/wp-content/themes/beacon-theme_charlotte/css/bkgs/shattered-dark.png");
}

.tsT_gallery.well .nImg:nth-of-type(5n+3) .tsI_wrp,
.tsT_photo_grid.well .nImg:nth-of-type(5n+3) .tsI_cptn,
.tsT_photo_tiles.well .nImg:nth-of-type(5n+3) .tsI_cptn,
.tsT_plugin .tsI.type-post:nth-of-type(5n+3) .tsI_hd,
.tsT_parallax.well .nImg:nth-of-type(5n+3) .tsI_wrp,
.tsT_banner.b1.well .nImg:nth-of-type(5n+3) .tsI_wrp {
  background-image: url("/wp-content/themes/beacon-theme_charlotte/css/bkgs/fabric-of-squares.png");
}

.tsT_gallery.well .nImg:nth-of-type(5n+4) .tsI_wrp,
.tsT_photo_grid.well .nImg:nth-of-type(5n+4) .tsI_cptn,
.tsT_photo_tiles.well .nImg:nth-of-type(5n+4) .tsI_cptn,
.tsT_plugin .tsI.type-post:nth-of-type(5n+4) .tsI_hd,
.tsT_parallax.well .nImg:nth-of-type(5n+4) .tsI_wrp,
.tsT_banner.b1.well .nImg:nth-of-type(5n+4) .tsI_wrp {
  background-image: url("/wp-content/themes/beacon-theme_charlotte/css/bkgs/cartographer.png");
}

.tsT_gallery.well .nImg:nth-of-type(5n+5) .tsI_wrp,
.tsT_photo_grid.well .nImg:nth-of-type(5n+5) .tsI_cptn,
.tsT_photo_tiles.well .nImg:nth-of-type(5n+5) .tsI_cptn,
.tsT_plugin .tsI.type-post:nth-of-type(5n+5) .tsI_hd,
.tsT_parallax.well .nImg:nth-of-type(5n+5) .tsI_wrp,
.tsT_banner.b1.well .nImg:nth-of-type(5n+5) .tsI_wrp {
  background-image: url("/wp-content/themes/beacon-theme_charlotte/css/bkgs/bright-squares.png");
}

.tsI .tsI_icon {
  color: #ffffff;
}

.promo_colors .nImg:not(.yBkg):nth-of-type(5n+1) .btn_1 {
  background: #ffffff;
  color: #0f1fda;
}
.promo_colors .nImg:not(.yBkg):nth-of-type(5n+1) .btn_1:hover {
  background: #0f1fda;
  color: #ffffff;
}

.promo_colors .nImg:not(.yBkg):nth-of-type(5n+2) .btn_1 {
  background: #ffffff;
  color: #CA1116;
}
.promo_colors .nImg:not(.yBkg):nth-of-type(5n+2) .btn_1:hover {
  background: #CA1116;
  color: #ffffff;
}

.promo_colors .nImg:not(.yBkg):nth-of-type(5n+3) .btn_1 {
  background: #ffffff;
  color: #ffffff;
}
.promo_colors .nImg:not(.yBkg):nth-of-type(5n+3) .btn_1:hover {
  background: #ffffff;
  color: #ffffff;
}

.promo_colors .nImg:not(.yBkg):nth-of-type(5n+4) .btn_1 {
  background: #ffffff;
  color: #0f1fda;
}
.promo_colors .nImg:not(.yBkg):nth-of-type(5n+4) .btn_1:hover {
  background: #0f1fda;
  color: #ffffff;
}

.promo_colors .nImg:not(.yBkg):nth-of-type(5n+5) .btn_1 {
  background: #ffffff;
  color: #CA1116;
}
.promo_colors .nImg:not(.yBkg):nth-of-type(5n+5) .btn_1:hover {
  background: #CA1116;
  color: #ffffff;
}

.tsB.promo_colors .tsI.yBkg .tsI_btn.btn_1:not(.btn_p1):not(.btn_p2):not(.btn_p3):not(.btn_p4):not(.btn_p5) {
  background-color: #ffffff;
}
.tsB.promo_colors .tsI.yBkg .tsI_btn.btn_1:not(.btn_p1):not(.btn_p2):not(.btn_p3):not(.btn_p4):not(.btn_p5):hover {
  color: #ffffff;
}

.tsB.promo_colors .tsI.yBkg .tsI_btn.btn_2.btn_2:not(.btn_p1):not(.btn_p2):not(.btn_p3):not(.btn_p4):not(.btn_p5) {
  border-color: #ffffff;
  color: #ffffff;
}
.tsB.promo_colors .tsI.yBkg .tsI_btn.btn_2.btn_2:not(.btn_p1):not(.btn_p2):not(.btn_p3):not(.btn_p4):not(.btn_p5):hover {
  background: #ffffff;
}

/* BANNER MODULE ---------------------------------------------------------- */
.tsT_banner .tsI.yImg.yOvr .tsI_wrp {
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
  background-color: rgba(0,0,0,0.41);
}
.tsT_banner .tsI .tsI_cptn .tsI_hd,
.tsT_banner .tsI .tsI_cptn .tsI_sh,
.tsT_banner .tsI .tsI_cptn .tsI_dsc {
  color: #ffffff;
}

/* PARALLAX MODULE ---------------------------------------------------------- */
.tsT_parallax .tsI.yImg.yHero, .tsT_parallax .tsI.yImg {
  background: none;
}
.tsT_parallax .tsI.yImg.yHero.yOvr .tsI_wrp, .tsT_parallax .tsI.yImg.yOvr .tsI_wrp {
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
  background-color: rgba(0,0,0,0.41);
}
.tsT_parallax .tsI .tsI_cptn .tsI_hd,
.tsT_parallax .tsI .tsI_cptn .tsI_sh,
.tsT_parallax .tsI .tsI_cptn .tsI_dsc {
  color: #ffffff;
}
.tsT_parallax .tsI.nImg .tsI_cptn .tsI_hd,
.tsT_parallax .tsI.nImg .tsI_cptn .tsI_sh,
.tsT_parallax .tsI.nImg .tsI_cptn .tsI_dsc {
  color: #ffffff;
}

/* VIDEO MODULE ---------------------------------------------------------- */
.tsT_video .tsI .tsI_txt {
  background-color: rgba(0,0,0,0.41);
}
.tsT_video .tsI .tsI_txt .tsI_hds .tsI_hd,
.tsT_video .tsI .tsI_txt .tsI_hds .tsI_sh {
  color: #ffffff;
}

/* BUTTONS MODULE ---------------------------------------------------------- */
.tsT_buttons .tsI.btn_nHero .tsI_btn.btn_default {
  color: #131416;
  border-color: #131416;
}
.tsT_buttons .tsI.btn_nHero .tsI_btn.btn_default:hover {
  color: #19181b;
  border-color: #19181b;
}
.tsT_buttons .tsI.btn_yHero .tsI_btn.btn_default {
  color: #fafaeb;
  background-color: #362b4b;
}
.tsT_buttons .tsI.btn_yHero .tsI_btn.btn_default:hover {
  color: #362b4b;
  background-color: #fafaeb;
}

/* CARDS ---------------------------------------------------------- */
.tsT_card .tsI_hds {
  color: #0f1fda;
}

/* GALLERY ---------------------------------------------------------- */
.tsT_gallery .tsI.yImg .tsI_hd,
.tsT_gallery .tsI.yImg .tsI_sh,
.tsT_gallery .tsI.yImg .tsI_dsc {
  color: #ffffff;
}
.tsT_gallery .tsI.nImg .tsI_hd,
.tsT_gallery .tsI.nImg .tsI_sh,
.tsT_gallery .tsI.nImg .tsI_dsc {
  color: #ffffff;
}
.tsT_gallery .slick-prev,
.tsT_gallery .slick-next {
  background-color: #000000;
  color: #ffffff;
}
.tsT_gallery.g1 .tsI.yImg .tsI_wrp {
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
  background-color: rgba(0,0,0,0.41);
}
.tsT_gallery.g1 .slick-dots li button {
  background-color: #000000;
}
.tsT_gallery.g1 .slick-dots li:hover button:before {
  border-bottom-color: #000000;
}
.tsT_gallery.g1 .slick-dots li.slick-active button {
  background-color: #000000;
}
.tsT_gallery.g1 .slick-dots li.slick-active button:before {
  border-bottom-color: #000000;
}
.tsT_gallery.g1:not(.vg1) .tsI.yImg.nHds.nDsc .tsI_wrp {
  -webkit-filter: none !important;
          filter: none !important;
  /* IE 7 and the rest of the world */
  background: none;
}
.tsT_gallery.g2 .slick-slides .tsI.yImg .tsI_cptn .tsI_txt {
  background-color: rgba(0,0,0,0.41);
}
.tsT_gallery.g2 .slick-nav .tsI_nav:before {
  border-top-color: #8e9a90;
}
.tsT_gallery.g2 .slick-nav .tsI_nav.slick-current .tsI_cptn {
  border-bottom-color: #8e9a90;
}
.tsT_gallery.g2 .slick-nav .tsI_nav.nImg .tsI_cptn, .tsT_gallery.g2 .slick-nav .tsI_nav.yHds .tsI_cptn {
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
  background-color: rgba(0,0,0,0.41);
}
.tsT_gallery.g2 .slick-nav .tsI_nav .tsI_dsc {
  color: #ffffff;
}

/* LIST 1 ---------------------------------------------------------- */
.tsT_list.l1.list_not_well .tsI {
  border-bottom-color: #373737;
  background-color: #0f1fda;
}
.tsT_list.l1.list_not_well .tsI .tsI_num {
  background-color: #fafaeb;
}
.tsT_list.l1.list_not_well .tsI .tsI_num .tsI_hd {
  color: #362b4b;
}
.tsT_list.l1.list_not_well .tsI .tsI_hd {
  color: #0f1fda;
}
.tsT_list.l1.list_not_well .tsI .tsI_sh {
  color: #CA1116;
}
.tsT_list.l1.list_not_well .tsI .tsI_dsc {
  color: #373737;
}
.tsT_list.l1.list_well .tsI {
  border-bottom-color: #373737;
}
.tsT_list.l1.list_well .tsI .tsI_num {
  background-color: #362b4b;
}
.tsT_list.l1.list_well .tsI .tsI_num .tsI_hd {
  color: #fafaeb;
}
.tsT_list.l1.list_well .tsI.yHero .tsI_num .tsI_hd {
  color: #ffffff;
}
.tsT_list.l1.list_well .tsI.yHero:nth-of-type(5n+1) .tsI_num {
  background-color: #0f1fda;
}
.tsT_list.l1.list_well .tsI.yHero:nth-of-type(5n+2) .tsI_num {
  background-color: #CA1116;
}
.tsT_list.l1.list_well .tsI.yHero:nth-of-type(5n+3) .tsI_num {
  background-color: #ffffff;
}
.tsT_list.l1.list_well .tsI.yHero:nth-of-type(5n+4) .tsI_num {
  background-color: #0f1fda;
}
.tsT_list.l1.list_well .tsI.yHero:nth-of-type(5n+5) .tsI_num {
  background-color: #CA1116;
}

/* LIST 2 ---------------------------------------------------------- */
.tsT_list.l2 .tsI .tsI_num:before {
  color: #131416;
}
.tsT_list.l2 .tsI.yHero .tsI_num {
  color: #362b4b;
}
.tsT_list.l2 .tsI.yHero .tsI_num:before {
  color: #362b4b;
}

/* MENU ---------------------------------------------------------- */
.tsT_menu.m2 .tsI_sh,
.tsT_menu.m3 .tsI_sh {
  color: #ffffff;
  background-color: #000000;
}
.tsT_menu.m2.well .tsI.yHero .tsI_sh,
.tsT_menu.m3.well .tsI.yHero .tsI_sh {
  color: #fafaeb;
  background-color: #362b4b;
}

/* SECTION ---------------------------------------------------------- */
.tsT_sec .sec_intro .tsI_hds,
.tsT_sec .sec_intro .tsI_dsc {
  color: #0f1fda;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs {
  border-color: #000000;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs .tab-link {
  color: #000000;
  border-color: transparent;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs .tab-link:hover {
  border-color: #000000;
  color: #000000;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-1 .tsI_tabs .tab-link.current {
  background-color: #000000;
  color: #ffffff;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs {
  background: #0f1fda;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs .tab-link {
  color: #131416;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs .tab-link:hover {
  background-color: #ffffff;
  color: #000000;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-2 .tsI_tabs .tab-link.current {
  background-color: #000000;
  color: #ffffff;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs .tab-link {
  color: #131416;
  border-color: rgba(0,0,0,0.41);
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs .tab-link:hover {
  background-color: #000000;
  color: #ffffff;
}
.tsT_sec .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs .tab-link.current {
  background: #ffffff;
  color: #000000;
}

@media print, screen and (max-width: 980px) {
  /* SECTION ---------------------------------------------------------- */
  .tsT_sec .tsI_tabs_wrp.sec-tabs-3 .tsI_tabs {
    background: #0f1fda;
  }
}
/* SERVICES 1 ---------------------------------------------------------- */
.tsT_services.s1.well .tsI .tsI_hd {
  color: #fafaeb;
}
.tsT_services.s1.well .tsI .tsI_hds_wrp {
  background-color: #362b4b;
}
.tsT_services.s1.well .tsI.nImg .tsI_hd {
  color: #0f1fda;
}

.section_content .tsT_services.well .tsI.yHero .tsI_hd {
  color: #362b4b;
}
.section_content .tsT_services.well .tsI.yHero .tsI_hds_wrp {
  background: #fafaeb;
}
.section_content .tsT_services.well .tsI.yHero.nImg .tsI_hd {
  color: #090909;
}

/* SOCIAL PROMOS ---------------------------------------------------------- */
.section_content .section .tsT_social_promos .tsI.yImg .tsI_scl_icn {
  color: #ffffff;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
  background-color: rgba(0,0,0,0.41);
}

.tsT_social_promos .nImg:nth-of-type(5n+1) .tsI_scl_icn {
  background: #0f1fda;
}

.tsT_social_promos .nImg:nth-of-type(5n+2) .tsI_scl_icn {
  background: #CA1116;
}

.tsT_social_promos .nImg:nth-of-type(5n+3) .tsI_scl_icn {
  background: #ffffff;
}

.tsT_social_promos .nImg:nth-of-type(5n+4) .tsI_scl_icn {
  background: #0f1fda;
}

.tsT_social_promos .nImg:nth-of-type(5n+5) .tsI_scl_icn {
  background: #CA1116;
}

/* TESTIMONIALS ---------------------------------------------------------- */
.tsT_testimonials .tsI_stars {
  color: #CA1116;
}
.tsT_testimonials .tsI_dsc .icon-quote {
  color: #0f1fda;
}
.tsT_testimonials.not_well .tsI .tsI_hds:before {
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,2989d8+50,ffffff+100&0+0,0+100 */
  /* FF3.6-15 */
  /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, #0f1fda 50%, rgba(255, 255, 255, 0) 100%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}
.tsT_testimonials.well .tsI .tsI_hds {
  background-color: #ffffff;
}
.tsT_testimonials.well .tsI .tsI_hds .tsI_hd,
.tsT_testimonials.well .tsI .tsI_hds .tsI_sh {
  color: #000000;
}
.tsT_testimonials.well .tsI .tsI_hds:before {
  border-top-color: #0f1fda !important;
}

/* TESTIMONIALS HERO ---------------------------------------------------------- */
.section_content .tsT_testimonials.well .tsI.yHero {
  color: #ffffff;
}
.section_content .tsT_testimonials.well .tsI.yHero .tsI_hds {
  background-color: #362b4b;
}
.section_content .tsT_testimonials.well .tsI.yHero .tsI_hds .tsI_hd,
.section_content .tsT_testimonials.well .tsI.yHero .tsI_hds .tsI_sh {
  color: #fafaeb;
}
.section_content .tsT_testimonials.well .tsI.yHero .tsI_hds:before {
  border-top-color: #0f1fda !important;
}
.section_content .tsT_testimonials.well .tsI.yHero .tsI_dsc .icon-quote {
  color: #090909;
}
.section_content .tsT_testimonials.well .tsI.yHero .tsI_stars {
  color: #000000;
}

/* TESTIMONIALS CAROUSEL ---------------------------------------------------------- */
.section_content .tsT_testimonials_2.well .tsI {
  background: #0f1fda;
}
.section_content .tsT_testimonials_2 .slick-prev,
.section_content .tsT_testimonials_2 .slick-next {
  background-color: #000000;
  color: #ffffff;
}
.section_content .tsT_testimonials_2 .slick-dots li button {
  background-color: #000000;
}
.section_content .tsT_testimonials_2 .slick-dots li:hover button:before {
  border-bottom-color: #000000;
}
.section_content .tsT_testimonials_2 .slick-dots li.slick-active button {
  background-color: #000000;
}
.section_content .tsT_testimonials_2 .slick-dots li.slick-active button:before {
  border-bottom-color: #000000;
}

/* TESTIMONIALS CAROUSEL HERO ---------------------------------------------------------- */
.section_content .tsT_testimonials_2.well .tsI.yHero {
  color: #ffffff;
  background-color: #0f1fda;
}
.section_content .tsT_testimonials_2.well .tsI.yHero .tsI_hds .tsI_hd,
.section_content .tsT_testimonials_2.well .tsI.yHero .tsI_hds .tsI_sh {
  color: #090909;
}
.section_content .tsT_testimonials_2.well .tsI.yHero .tsI_hds:before {
  border-top-color: #0f1fda !important;
}
.section_content .tsT_testimonials_2.well .tsI.yHero .tsI_dsc .icon-quote {
  color: #090909;
}
.section_content .tsT_testimonials_2.well .tsI.yHero .tsI_stars {
  color: #000000;
}

/* PHOTO GRID & TILES ---------------------------------------------------------- */
.tsT_photo_grid .tsI.yImg .tsI_cptn,
.tsT_photo_tiles .tsI.yImg .tsI_cptn {
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
  background-color: rgba(0,0,0,0.41);
}
.tsT_photo_grid .tsI.yImg .tsI_cptn .tsI_hd,
.tsT_photo_grid .tsI.yImg .tsI_cptn .tsI_sh,
.tsT_photo_grid .tsI.yImg .tsI_cptn .tsI_dsc,
.tsT_photo_tiles .tsI.yImg .tsI_cptn .tsI_hd,
.tsT_photo_tiles .tsI.yImg .tsI_cptn .tsI_sh,
.tsT_photo_tiles .tsI.yImg .tsI_cptn .tsI_dsc {
  color: #ffffff;
}
.tsT_photo_grid .tsI.nImg .tsI_cptn .tsI_hd,
.tsT_photo_grid .tsI.nImg .tsI_cptn .tsI_sh,
.tsT_photo_grid .tsI.nImg .tsI_cptn .tsI_dsc,
.tsT_photo_tiles .tsI.nImg .tsI_cptn .tsI_hd,
.tsT_photo_tiles .tsI.nImg .tsI_cptn .tsI_sh,
.tsT_photo_tiles .tsI.nImg .tsI_cptn .tsI_dsc {
  color: #ffffff;
}
.tsT_photo_grid.pt2 .tsI.yImg.nHero.nDsc .tsI_cptn,
.tsT_photo_tiles.pt2 .tsI.yImg.nHero.nDsc .tsI_cptn {
  background: transparent;
}
.tsT_photo_grid.pt2 .tsI.yImg.nHero.nDsc .tsI_txt,
.tsT_photo_tiles.pt2 .tsI.yImg.nHero.nDsc .tsI_txt {
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
  background-color: rgba(0,0,0,0.41);
}

/* PHOTO GRID ---------------------------------------------------------- */
.tsT_photo_grid .nImg .tsI_cptn {
  background: none;
}
.tsT_photo_grid .nImg .tsI_hd,
.tsT_photo_grid .nImg .tsI_sh {
  color: #ffffff !important;
}

/* Icons --------------------*/
.promo_colors .tsI .tsI_hds .fa-stack .fa-inverse * {
  color: #0f1fda;
}

/* Captions --------------------*/
.tsI .tsI_img figcaption {
  color: #ffffff;
}

.tsT_card .tsI .tsI_img figcaption,
.tsT_list.l1 .tsI .tsI_img figcaption {
  background: rgba(0,0,0,0.41);
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///           LEGACY MODULES           ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
/* MAP */
.tsI.nHero ._the_map .b2b-location .b2b-location-items {
  background-color: #0f1fda;
}
.tsI.nHero ._the_map .b2b-location .b2b-location-items * {
  color: #373737;
}
.tsI.nHero ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2,
.tsI.nHero ._the_map .b2b-location .b2b-location-items .b2b-location-h2 {
  color: #0f1fda;
}
.tsI.nHero ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b {
  color: #CA1116;
}
.tsI.nHero ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks {
  color: #131416;
}
.tsI.nHero ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks:hover {
  color: #19181b;
}
.tsI.nHero ._the_map .b2b-location .b2b-location-items p {
  color: #373737;
}
.tsI.yHero ._the_map .b2b-location .b2b-location-items {
  background-color: #0f1fda;
}
.tsI.yHero ._the_map .b2b-location .b2b-location-items * {
  color: #ffffff;
}
.tsI.yHero ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2,
.tsI.yHero ._the_map .b2b-location .b2b-location-items .b2b-location-h2 {
  color: #090909;
}
.tsI.yHero ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b {
  color: #000000;
}
.tsI.yHero ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks {
  color: #DDDDDD;
}
.tsI.yHero ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks:hover {
  color: transparent;
}
.tsI.yHero ._the_map .b2b-location .b2b-location-items p {
  color: #ffffff;
}

/* CONTACT */
.b2b-form input[type=text],
.b2b-form textarea {
  background-color: #eee;
  color: #222;
}

.b2b-form-submit-text {
  color: #ffffff;
  background-color: #000000;
}
.b2b-form-submit-text:hover {
  color: #000000;
  background-color: #ffffff;
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///                BLOG                ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
.tsI.type-post .tsI_hd {
  background: #0f1fda;
}
.tsI.type-post .tsI_hd a {
  color: #ffffff !important;
}
.tsI.type-post .tsI_sh a {
  color: #CA1116;
}
.tsI.type-post .post-footer .post-tags:before,
.tsI.type-post .post-footer .post-tags a {
  color: #131416;
}
.tsI.type-post .post-footer .post-tags:before:hover,
.tsI.type-post .post-footer .post-tags a:hover {
  color: #19181b;
}

.tsB.well .blog-plugin {
  background-color: unset;
}
.tsB .tsI.type-post {
  background-color: #0f1fda;
}

.tsT_blog .single-post .post-header .tsI_hd,
.tsT_blog .single-post .post-header .tsI_hd a {
  color: #0f1fda;
}
.tsT_blog .single-post .post-content a {
  color: #131416;
}
.tsT_blog .single-post .post-tags li a {
  color: #ffffff;
  background-color: #000000;
}
.tsT_blog .single-post .post-tags li a:hover {
  color: #000000;
  background-color: #ffffff;
}
.tsT_blog .single-post .post-categories:before {
  color: #131416;
}
.tsT_blog .post-btn,
.tsT_blog .post-btn a {
  color: #131416;
}
.tsT_blog .post-btn:hover,
.tsT_blog .post-btn a:hover {
  color: #19181b;
}

/* HERO BUTTON WELL */
.tsT_plugin .tsI .tsI_btn.btn_1.btn_w,
.tsT_plugin .tsI:hover .tsI_btn.btn_1.btn_w {
  color: #ffffff;
  background-color: #000000;
}

/* HERO BUTTON WELL */
.tsT_plugin .tsI .type-post:hover .tsI_btn.btn_1.btn_w {
  color: #000000;
  background-color: #ffffff;
}

/* HERO BUTTON WELL */
.tsT_plugin .tsI.yHero .type-post .tsI_btn.btn_1.btn_w,
.tsT_plugin .tsI.yHero .type-post:hover .tsI_btn.btn_1.btn_w {
  color: #fafaeb;
  background-color: #362b4b;
}

/* HERO BUTTON WELL */
.tsT_plugin .tsI.yHero .type-post:hover .tsI_btn.btn_1.btn_w {
  color: #362b4b;
  background-color: #fafaeb;
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///           GRAVITY FORMS            ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
/*GRAVITY BUTTONS*/
.gf_progressbar {
  background-color: rgba(0, 0, 0, 0.1);
}

.gf_progressbar_percentage {
  color: #ffffff;
  background: #000000;
}

.gform_wrapper .button {
  color: #131416;
  border-color: #131416;
  background: transparent;
}
.gform_wrapper .button:hover, .gform_wrapper .button:focus, .gform_wrapper .button:active, .gform_wrapper .button.active, .gform_wrapper .button.disabled, .gform_wrapper .button.disabled:hover, .gform_wrapper .button.disabled:focus, .gform_wrapper .button.disabled:active, .gform_wrapper .button.disabled.active {
  color: #19181b;
  border-color: #19181b;
  background: transparent;
}

.gform_wrapper .gform_button_select_files,
.gform_wrapper .gform_button,
.gform_wrapper input[type=submit] {
  color: #ffffff;
  background-color: #000000;
  border-color: transparent;
}
.gform_wrapper .gform_button_select_files:hover, .gform_wrapper .gform_button_select_files:focus, .gform_wrapper .gform_button_select_files:active, .gform_wrapper .gform_button_select_files.active, .gform_wrapper .gform_button_select_files.disabled, .gform_wrapper .gform_button_select_files.disabled:hover, .gform_wrapper .gform_button_select_files.disabled:focus, .gform_wrapper .gform_button_select_files.disabled:active, .gform_wrapper .gform_button_select_files.disabled.active,
.gform_wrapper .gform_button:hover,
.gform_wrapper .gform_button:focus,
.gform_wrapper .gform_button:active,
.gform_wrapper .gform_button.active,
.gform_wrapper .gform_button.disabled,
.gform_wrapper .gform_button.disabled:hover,
.gform_wrapper .gform_button.disabled:focus,
.gform_wrapper .gform_button.disabled:active,
.gform_wrapper .gform_button.disabled.active,
.gform_wrapper input[type=submit]:hover,
.gform_wrapper input[type=submit]:focus,
.gform_wrapper input[type=submit]:active,
.gform_wrapper input[type=submit].active,
.gform_wrapper input[type=submit].disabled,
.gform_wrapper input[type=submit].disabled:hover,
.gform_wrapper input[type=submit].disabled:focus,
.gform_wrapper input[type=submit].disabled:active,
.gform_wrapper input[type=submit].disabled.active {
  color: #000000;
  background-color: #ffffff;
  border-color: transparent;
}

.open .dropdown-toggle.gform_button {
  color: #222;
  background-color: #eee;
}

.ginput_container input {
  color: #222;
}
.ginput_container input:-moz-placeholder, .ginput_container input::-moz-placeholder, .ginput_container input:-ms-input-placeholder, .ginput_container input::-webkit-input-placeholder {
  color: #555;
}
.ginput_container input:focus {
  color: #222;
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///         ALT COLOR CLASSES          ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
/* TEXT COLORS */
.logo_c {
  color: #8e9a90 !important;
}

.hd_c {
  color: #0f1fda !important;
}

.sh_c {
  color: #CA1116 !important;
}

.txt_c {
  color: #373737 !important;
}

.lnk_c {
  color: #131416 !important;
}

.lnk_h_c {
  color: #19181b !important;
}

.btn_txt_c {
  color: #ffffff !important;
}

.btn_bkg_c {
  color: #000000 !important;
}

.hero_hd_c {
  color: #090909 !important;
}

.hero_sh_c {
  color: #000000 !important;
}

.hero_txt_c {
  color: #ffffff !important;
}

.hero_btn_txt_c {
  color: #fafaeb !important;
}

.hero_btn_bkg_c {
  color: #362b4b !important;
}

.hero_lnk_c {
  color: #DDDDDD !important;
}

.hero_lnk_h_c {
  color: transparent !important;
}

.cpt_txt_c {
  color: #ffffff !important;
}

.cpt_bkg_c {
  color: rgba(0,0,0,0.41) !important;
}

.nav_c {
  color: #131313 !important;
}

.nav_h_c {
  color: #CA1116 !important;
}

.nav_c_c {
  color: #CA1116 !important;
}

.bkg_main_c {
  color: #ffffff !important;
}

.bkg_cnt_c {
  color: rgba(255,255,255,1) !important;
}

.bkg_hdr_c {
  color: #ffffff !important;
  color: rgba(255,255,255,.8) !important;
}

.bkg_social_c {
  color: #0f1fda !important;
}

.bkg_i_c {
  color: #0f1fda !important;
}

.bkg_hero_c {
  color: #0f1fda !important;
}

.ftr_bkg_c {
  color: #ffffff !important;
  color: rgba(255,255,255,1) !important;
}

.ftr_txt_c {
  color: #373737 !important;
}

.ftr_lnk_c {
  color: #CA1116 !important;
}

.p_txt_c {
  color: #ffffff !important;
}

.p1_c {
  color: #0f1fda !important;
}

.p2_c {
  color: #CA1116 !important;
}

.p3_c {
  color: #ffffff !important;
}

.p4_c {
  color: #0f1fda !important;
}

.p5_c {
  color: #CA1116 !important;
}

/* BACKGROUNDS */
.logo_b {
  background-color: #8e9a90 !important;
}

.hd_b {
  background-color: #0f1fda !important;
}

.sh_b {
  background-color: #CA1116 !important;
}

.txt_b {
  background-color: #373737 !important;
}

.lnk_b {
  background-color: #131416 !important;
}

.lnk_h_b {
  background-color: #19181b !important;
}

.btn_txt_b {
  background-color: #ffffff !important;
}

.btn_bkg_b {
  background-color: #000000 !important;
}

.hero_hd_b {
  background-color: #090909 !important;
}

.hero_sh_b {
  background-color: #000000 !important;
}

.hero_txt_b {
  background-color: #ffffff !important;
}

.hero_btn_txt_b {
  background-color: #fafaeb !important;
}

.hero_btn_bkg_b {
  background-color: #362b4b !important;
}

.hero_lnk_b {
  background-color: #DDDDDD !important;
}

.hero_lnk_h_b {
  background-color: transparent !important;
}

.cpt_txt_b {
  background-color: #ffffff !important;
}

.cpt_bkg_b {
  background-color: rgba(0,0,0,0.41) !important;
}

.nav_b {
  background-color: #131313 !important;
}

.nav_h_b {
  background-color: #CA1116 !important;
}

.nav_c_b {
  background-color: #CA1116 !important;
}

.bkg_main_b {
  background-color: #ffffff !important;
}

.bkg_cnt_b {
  background-color: rgba(255,255,255,1) !important;
}

.bkg_hdr_b {
  background-color: #ffffff !important;
  background-color: rgba(255,255,255,.8) !important;
}

.bkg_social_b {
  background-color: #0f1fda !important;
}

.bkg_i_b {
  background-color: #0f1fda !important;
}

.bkg_hero_b {
  background-color: #0f1fda !important;
}

.ftr_bkg_b {
  background-color: #ffffff !important;
  background-color: rgba(255,255,255,1) !important;
}

.ftr_txt_b {
  background-color: #373737 !important;
}

.ftr_lnk_b {
  background-color: #CA1116 !important;
}

.p_txt_b {
  color: #ffffff !important;
}

.p1_b {
  background-color: #0f1fda !important;
}

.p2_b {
  background-color: #CA1116 !important;
}

.p3_b {
  background-color: #ffffff !important;
}

.p4_b {
  background-color: #0f1fda !important;
}

.p5_b {
  background-color: #CA1116 !important;
}

/* P1 Grads */
.p1_p2_b {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

.p1_p3_b {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #ffffff);
}

.p1_p4_b {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #0f1fda);
}

.p1_p5_b {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

/* P2 Grads */
.p2_p1_b {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}

.p2_p3_b {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #ffffff);
}

.p2_p4_b {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}

.p2_p5_b {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #CA1116);
}

/* P3 Grads */
.p3_p1_b {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #0f1fda);
}

.p3_p2_b {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #CA1116);
}

.p3_p4_b {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #0f1fda);
}

.p3_p5_b {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #CA1116);
}

/* P4 Grads */
.p4_p1_b {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #0f1fda);
}

.p4_p2_b {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

.p4_p3_b {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #ffffff);
}

.p4_p5_b {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

/* P5 Grads */
.p5_p1_b {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}

.p5_p2_b {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #CA1116);
}

.p5_p3_b {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #ffffff);
}

.p5_p4_b {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///      ALT MODULE COLOR CLASSES      ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
.tsB {
  /* P1 ITEMS */
  /* P2 ITEMS */
  /* P3 ITEMS */
  /* P4 ITEMS */
  /* P5 ITEMS */
  /* P1 ITEMS */
  /* P2 ITEMS */
  /* P3 ITEMS */
  /* P4 ITEMS */
  /* P5 ITEMS */
  /* P1 Grad Items */
  /* P2 Grad Items */
  /* P3 Grad Items */
  /* P4 Grad Items */
  /* P5 Grad Items */
}
.tsB.tsD_items, .tsB.tsD_p1_item, .tsB.tsD_p2_item, .tsB.tsD_p3_item, .tsB.tsD_p4_item, .tsB.tsD_p5_item {
  /* MAP */
}
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2,
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items .b2b-location-h2,
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b,
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks,
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items p, .tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2,
.tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2,
.tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b,
.tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks,
.tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items p, .tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2,
.tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2,
.tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b,
.tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks,
.tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items p, .tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2,
.tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2,
.tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b,
.tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks,
.tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items p, .tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2,
.tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2,
.tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b,
.tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks,
.tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items p, .tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2,
.tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2,
.tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b,
.tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks,
.tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items p {
  color: #ffffff;
}
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2:hover,
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items .b2b-location-h2:hover,
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b:hover,
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks:hover,
.tsB.tsD_items ._the_map .b2b-location .b2b-location-items p:hover, .tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2:hover,
.tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2:hover,
.tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b:hover,
.tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks:hover,
.tsB.tsD_p1_item ._the_map .b2b-location .b2b-location-items p:hover, .tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2:hover,
.tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2:hover,
.tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b:hover,
.tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks:hover,
.tsB.tsD_p2_item ._the_map .b2b-location .b2b-location-items p:hover, .tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2:hover,
.tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2:hover,
.tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b:hover,
.tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks:hover,
.tsB.tsD_p3_item ._the_map .b2b-location .b2b-location-items p:hover, .tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2:hover,
.tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2:hover,
.tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b:hover,
.tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks:hover,
.tsB.tsD_p4_item ._the_map .b2b-location .b2b-location-items p:hover, .tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items .b2b-location-basic-info h2:hover,
.tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items .b2b-location-h2:hover,
.tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items .b2b-location-detail-info b:hover,
.tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items .color_bodylinks.color_bodylinks:hover,
.tsB.tsD_p5_item ._the_map .b2b-location .b2b-location-items p:hover {
  color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+1), .tsB.tsD_p1_item .tsI {
  background-color: #0f1fda;
  /* MAP */
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+1) .tsI_hd,
.tsB.tsD_p_items .tsI:nth-of-type(5n+1) .tsI_sh,
.tsB.tsD_p_items .tsI:nth-of-type(5n+1) .tsI_dsc, .tsB.tsD_p1_item .tsI .tsI_hd,
.tsB.tsD_p1_item .tsI .tsI_sh,
.tsB.tsD_p1_item .tsI .tsI_dsc {
  color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+1) .tsI_btn, .tsB.tsD_p1_item .tsI .tsI_btn {
  color: #0f1fda;
  background-color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+1) .tsI .tsI_btn:hover, .tsB.tsD_p1_item .tsI .tsI .tsI_btn:hover {
  color: #ffffff;
  background-color: #0f1fda;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+1) .tsI_btn.lnk, .tsB.tsD_p1_item .tsI .tsI_btn.lnk {
  color: #131416;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+1) .tsI:hover .tsI_btn.lnk, .tsB.tsD_p1_item .tsI .tsI:hover .tsI_btn.lnk {
  color: #19181b;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+1) ._the_map .b2b-location .b2b-location-items, .tsB.tsD_p1_item .tsI ._the_map .b2b-location .b2b-location-items {
  background-color: #0f1fda;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+2), .tsB.tsD_p2_item .tsI {
  background-color: #CA1116;
  /* MAP */
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+2) .tsI_hd,
.tsB.tsD_p_items .tsI:nth-of-type(5n+2) .tsI_sh,
.tsB.tsD_p_items .tsI:nth-of-type(5n+2) .tsI_dsc, .tsB.tsD_p2_item .tsI .tsI_hd,
.tsB.tsD_p2_item .tsI .tsI_sh,
.tsB.tsD_p2_item .tsI .tsI_dsc {
  color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+2) .tsI_btn, .tsB.tsD_p2_item .tsI .tsI_btn {
  color: #CA1116;
  background-color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+2) .tsI .tsI_btn:hover, .tsB.tsD_p2_item .tsI .tsI .tsI_btn:hover {
  color: #ffffff;
  background-color: #CA1116;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+2) .tsI_btn.lnk, .tsB.tsD_p2_item .tsI .tsI_btn.lnk {
  color: #131416;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+2) .tsI:hover .tsI_btn.lnk, .tsB.tsD_p2_item .tsI .tsI:hover .tsI_btn.lnk {
  color: #19181b;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+2) ._the_map .b2b-location .b2b-location-items, .tsB.tsD_p2_item .tsI ._the_map .b2b-location .b2b-location-items {
  background-color: #CA1116;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+3), .tsB.tsD_p3_item .tsI {
  background-color: #ffffff;
  /* MAP */
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+3) .tsI_hd,
.tsB.tsD_p_items .tsI:nth-of-type(5n+3) .tsI_sh,
.tsB.tsD_p_items .tsI:nth-of-type(5n+3) .tsI_dsc, .tsB.tsD_p3_item .tsI .tsI_hd,
.tsB.tsD_p3_item .tsI .tsI_sh,
.tsB.tsD_p3_item .tsI .tsI_dsc {
  color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+3) .tsI_btn, .tsB.tsD_p3_item .tsI .tsI_btn {
  color: #ffffff;
  background-color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+3) .tsI .tsI_btn:hover, .tsB.tsD_p3_item .tsI .tsI .tsI_btn:hover {
  color: #ffffff;
  background-color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+3) .tsI_btn.lnk, .tsB.tsD_p3_item .tsI .tsI_btn.lnk {
  color: #131416;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+3) .tsI:hover .tsI_btn.lnk, .tsB.tsD_p3_item .tsI .tsI:hover .tsI_btn.lnk {
  color: #19181b;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+3) ._the_map .b2b-location .b2b-location-items, .tsB.tsD_p3_item .tsI ._the_map .b2b-location .b2b-location-items {
  background-color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+4), .tsB.tsD_p4_item .tsI {
  background-color: #0f1fda;
  /* MAP */
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+4) .tsI_hd,
.tsB.tsD_p_items .tsI:nth-of-type(5n+4) .tsI_sh,
.tsB.tsD_p_items .tsI:nth-of-type(5n+4) .tsI_dsc, .tsB.tsD_p4_item .tsI .tsI_hd,
.tsB.tsD_p4_item .tsI .tsI_sh,
.tsB.tsD_p4_item .tsI .tsI_dsc {
  color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+4) .tsI_btn, .tsB.tsD_p4_item .tsI .tsI_btn {
  color: #0f1fda;
  background-color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+4) .tsI .tsI_btn:hover, .tsB.tsD_p4_item .tsI .tsI .tsI_btn:hover {
  color: #ffffff;
  background-color: #0f1fda;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+4) .tsI_btn.lnk, .tsB.tsD_p4_item .tsI .tsI_btn.lnk {
  color: #131416;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+4) .tsI:hover .tsI_btn.lnk, .tsB.tsD_p4_item .tsI .tsI:hover .tsI_btn.lnk {
  color: #19181b;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+4) ._the_map .b2b-location .b2b-location-items, .tsB.tsD_p4_item .tsI ._the_map .b2b-location .b2b-location-items {
  background-color: #0f1fda;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+5), .tsB.tsD_p5_item .tsI {
  background-color: #CA1116;
  /* MAP */
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+5) .tsI_hd,
.tsB.tsD_p_items .tsI:nth-of-type(5n+5) .tsI_sh,
.tsB.tsD_p_items .tsI:nth-of-type(5n+5) .tsI_dsc, .tsB.tsD_p5_item .tsI .tsI_hd,
.tsB.tsD_p5_item .tsI .tsI_sh,
.tsB.tsD_p5_item .tsI .tsI_dsc {
  color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+5) .tsI_btn, .tsB.tsD_p5_item .tsI .tsI_btn {
  color: #CA1116;
  background-color: #ffffff;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+5) .tsI .tsI_btn:hover, .tsB.tsD_p5_item .tsI .tsI .tsI_btn:hover {
  color: #ffffff;
  background-color: #CA1116;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+5) .tsI_btn.lnk, .tsB.tsD_p5_item .tsI .tsI_btn.lnk {
  color: #131416;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+5) .tsI:hover .tsI_btn.lnk, .tsB.tsD_p5_item .tsI .tsI:hover .tsI_btn.lnk {
  color: #19181b;
}
.tsB.tsD_p_items .tsI:nth-of-type(5n+5) ._the_map .b2b-location .b2b-location-items, .tsB.tsD_p5_item .tsI ._the_map .b2b-location .b2b-location-items {
  background-color: #CA1116;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+1).btn_nHero .tsI_btn, .tsB.tsD_p1_btn .tsI.btn_nHero .tsI_btn {
  color: #0f1fda;
  border-color: #0f1fda;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+1).btn_nHero .tsI_btn:hover, .tsB.tsD_p1_btn .tsI.btn_nHero .tsI_btn:hover {
  color: #ffffff;
  border-color: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+1).btn_yHero .tsI_btn, .tsB.tsD_p1_btn .tsI.btn_yHero .tsI_btn {
  color: #ffffff;
  border-color: #0f1fda;
  background-color: #0f1fda;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+1).btn_yHero .tsI_btn:hover, .tsB.tsD_p1_btn .tsI.btn_yHero .tsI_btn:hover {
  color: #0f1fda;
  border-color: #ffffff;
  background: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+2).btn_nHero .tsI_btn, .tsB.tsD_p2_btn .tsI.btn_nHero .tsI_btn {
  color: #CA1116;
  border-color: #CA1116;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+2).btn_nHero .tsI_btn:hover, .tsB.tsD_p2_btn .tsI.btn_nHero .tsI_btn:hover {
  color: #ffffff;
  border-color: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+2).btn_yHero .tsI_btn, .tsB.tsD_p2_btn .tsI.btn_yHero .tsI_btn {
  color: #ffffff;
  border-color: #CA1116;
  background-color: #CA1116;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+2).btn_yHero .tsI_btn:hover, .tsB.tsD_p2_btn .tsI.btn_yHero .tsI_btn:hover {
  color: #CA1116;
  border-color: #ffffff;
  background: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+3).btn_nHero .tsI_btn, .tsB.tsD_p3_btn .tsI.btn_nHero .tsI_btn {
  color: #ffffff;
  border-color: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+3).btn_nHero .tsI_btn:hover, .tsB.tsD_p3_btn .tsI.btn_nHero .tsI_btn:hover {
  color: #ffffff;
  border-color: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+3).btn_yHero .tsI_btn, .tsB.tsD_p3_btn .tsI.btn_yHero .tsI_btn {
  color: #ffffff;
  border-color: #ffffff;
  background-color: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+3).btn_yHero .tsI_btn:hover, .tsB.tsD_p3_btn .tsI.btn_yHero .tsI_btn:hover {
  color: #ffffff;
  border-color: #ffffff;
  background: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+4).btn_nHero .tsI_btn, .tsB.tsD_p4_btn .tsI.btn_nHero .tsI_btn {
  color: #0f1fda;
  border-color: #0f1fda;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+4).btn_nHero .tsI_btn:hover, .tsB.tsD_p4_btn .tsI.btn_nHero .tsI_btn:hover {
  color: #ffffff;
  border-color: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+4).btn_yHero .tsI_btn, .tsB.tsD_p4_btn .tsI.btn_yHero .tsI_btn {
  color: #ffffff;
  border-color: #0f1fda;
  background-color: #0f1fda;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+4).btn_yHero .tsI_btn:hover, .tsB.tsD_p4_btn .tsI.btn_yHero .tsI_btn:hover {
  color: #0f1fda;
  border-color: #ffffff;
  background: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+5).btn_nHero .tsI_btn, .tsB.tsD_p5_btn .tsI.btn_nHero .tsI_btn {
  color: #CA1116;
  border-color: #CA1116;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+5).btn_nHero .tsI_btn:hover, .tsB.tsD_p5_btn .tsI.btn_nHero .tsI_btn:hover {
  color: #ffffff;
  border-color: #ffffff;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+5).btn_yHero .tsI_btn, .tsB.tsD_p5_btn .tsI.btn_yHero .tsI_btn {
  color: #ffffff;
  border-color: #CA1116;
  background-color: #CA1116;
}
.tsB.tsD_p_btns .tsI:nth-of-type(5n+5).btn_yHero .tsI_btn:hover, .tsB.tsD_p5_btn .tsI.btn_yHero .tsI_btn:hover {
  color: #CA1116;
  border-color: #ffffff;
  background: #ffffff;
}
.tsB.tsD_p1_btn.tsD_p1_2_btn .tsI_btn, .tsB.tsD_p1_btn.tsD_p1_2_item .tsI, .tsB.tsD_p1_item.tsD_p1_2_btn .tsI_btn, .tsB.tsD_p1_item.tsD_p1_2_item .tsI {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}
.tsB.tsD_p1_btn.tsD_p1_3_btn .tsI_btn, .tsB.tsD_p1_btn.tsD_p1_3_item .tsI, .tsB.tsD_p1_item.tsD_p1_3_btn .tsI_btn, .tsB.tsD_p1_item.tsD_p1_3_item .tsI {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #ffffff);
}
.tsB.tsD_p1_btn.tsD_p1_4_btn .tsI_btn, .tsB.tsD_p1_btn.tsD_p1_4_item .tsI, .tsB.tsD_p1_item.tsD_p1_4_btn .tsI_btn, .tsB.tsD_p1_item.tsD_p1_4_item .tsI {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #0f1fda);
}
.tsB.tsD_p1_btn.tsD_p1_5_btn .tsI_btn, .tsB.tsD_p1_btn.tsD_p1_5_item .tsI, .tsB.tsD_p1_item.tsD_p1_5_btn .tsI_btn, .tsB.tsD_p1_item.tsD_p1_5_item .tsI {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}
.tsB.tsD_p2_btn.tsD_p2_1_btn .tsI_btn, .tsB.tsD_p2_btn.tsD_p2_1_item .tsI, .tsB.tsD_p2_item.tsD_p2_1_btn .tsI_btn, .tsB.tsD_p2_item.tsD_p2_1_item .tsI {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}
.tsB.tsD_p2_btn.tsD_p2_3_btn .tsI_btn, .tsB.tsD_p2_btn.tsD_p2_3_item .tsI, .tsB.tsD_p2_item.tsD_p2_3_btn .tsI_btn, .tsB.tsD_p2_item.tsD_p2_3_item .tsI {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #ffffff);
}
.tsB.tsD_p2_btn.tsD_p2_4_btn .tsI_btn, .tsB.tsD_p2_btn.tsD_p2_4_item .tsI, .tsB.tsD_p2_item.tsD_p2_4_btn .tsI_btn, .tsB.tsD_p2_item.tsD_p2_4_item .tsI {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}
.tsB.tsD_p2_btn.tsD_p2_5_btn .tsI_btn, .tsB.tsD_p2_btn.tsD_p2_5_item .tsI, .tsB.tsD_p2_item.tsD_p2_5_btn .tsI_btn, .tsB.tsD_p2_item.tsD_p2_5_item .tsI {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #CA1116);
}
.tsB.tsD_p3_btn.tsD_p3_1_btn .tsI_btn, .tsB.tsD_p3_btn.tsD_p3_1_item .tsI, .tsB.tsD_p3_item.tsD_p3_1_btn .tsI_btn, .tsB.tsD_p3_item.tsD_p3_1_item .tsI {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #0f1fda);
}
.tsB.tsD_p3_btn.tsD_p3_2_btn .tsI_btn, .tsB.tsD_p3_btn.tsD_p3_2_item .tsI, .tsB.tsD_p3_item.tsD_p3_2_btn .tsI_btn, .tsB.tsD_p3_item.tsD_p3_2_item .tsI {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #CA1116);
}
.tsB.tsD_p3_btn.tsD_p3_4_btn .tsI_btn, .tsB.tsD_p3_btn.tsD_p3_4_item .tsI, .tsB.tsD_p3_item.tsD_p3_4_btn .tsI_btn, .tsB.tsD_p3_item.tsD_p3_4_item .tsI {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #0f1fda);
}
.tsB.tsD_p3_btn.tsD_p3_5_btn .tsI_btn, .tsB.tsD_p3_btn.tsD_p3_5_item .tsI, .tsB.tsD_p3_item.tsD_p3_5_btn .tsI_btn, .tsB.tsD_p3_item.tsD_p3_5_item .tsI {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #CA1116);
}
.tsB.tsD_p4_btn.tsD_p4_1_btn .tsI_btn, .tsB.tsD_p4_btn.tsD_p4_1_item .tsI, .tsB.tsD_p4_item.tsD_p4_1_btn .tsI_btn, .tsB.tsD_p4_item.tsD_p4_1_item .tsI {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #0f1fda);
}
.tsB.tsD_p4_btn.tsD_p4_2_btn .tsI_btn, .tsB.tsD_p4_btn.tsD_p4_2_item .tsI, .tsB.tsD_p4_item.tsD_p4_2_btn .tsI_btn, .tsB.tsD_p4_item.tsD_p4_2_item .tsI {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}
.tsB.tsD_p4_btn.tsD_p4_3_btn .tsI_btn, .tsB.tsD_p4_btn.tsD_p4_3_item .tsI, .tsB.tsD_p4_item.tsD_p4_3_btn .tsI_btn, .tsB.tsD_p4_item.tsD_p4_3_item .tsI {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #ffffff);
}
.tsB.tsD_p4_btn.tsD_p4_5_btn .tsI_btn, .tsB.tsD_p4_btn.tsD_p4_5_item .tsI, .tsB.tsD_p4_item.tsD_p4_5_btn .tsI_btn, .tsB.tsD_p4_item.tsD_p4_5_item .tsI {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}
.tsB.tsD_p5_btn.tsD_p5_1_btn .tsI_btn, .tsB.tsD_p5_btn.tsD_p5_1_item .tsI, .tsB.tsD_p5_item.tsD_p5_1_btn .tsI_btn, .tsB.tsD_p5_item.tsD_p5_1_item .tsI {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}
.tsB.tsD_p5_btn.tsD_p5_2_btn .tsI_btn, .tsB.tsD_p5_btn.tsD_p5_2_item .tsI, .tsB.tsD_p5_item.tsD_p5_2_btn .tsI_btn, .tsB.tsD_p5_item.tsD_p5_2_item .tsI {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #CA1116);
}
.tsB.tsD_p5_btn.tsD_p5_4_btn .tsI_btn, .tsB.tsD_p5_btn.tsD_p5_4_item .tsI, .tsB.tsD_p5_item.tsD_p5_4_btn .tsI_btn, .tsB.tsD_p5_item.tsD_p5_4_item .tsI {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #ffffff);
}
.tsB.tsD_p5_btn.tsD_p5_5_btn .tsI_btn, .tsB.tsD_p5_btn.tsD_p5_5_item .tsI, .tsB.tsD_p5_item.tsD_p5_5_btn .tsI_btn, .tsB.tsD_p5_item.tsD_p5_5_item .tsI {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///      ALT SECTION COLOR CLASSES     ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
/* SECTION COLORS */
.tsD_p1_sec {
  background-color: #0f1fda;
}

.tsD_p2_sec {
  background-color: #CA1116;
}

.tsD_p3_sec {
  background-color: #ffffff;
}

.tsD_p4_sec {
  background-color: #0f1fda;
}

.tsD_p5_sec {
  background-color: #CA1116;
}

.tsD_hero_b_sec {
  background-color: #0f1fda;
}

.tsD_item_b_sec {
  background-color: #0f1fda;
}

.tsD_hdr_b_sec {
  background-color: rgba(255,255,255,.8);
}

.tsD_ftr_b_sec {
  background-color: rgba(255,255,255,1);
}

/* P1 Grads */
.tsD_p1_2_sec {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

.tsD_p1_3_sec {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #ffffff);
}

.tsD_p1_4_sec {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #0f1fda);
}

.tsD_p1_5_sec {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

/* P2 Grads */
.tsD_p2_1_sec {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}

.tsD_p2_3_sec {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #ffffff);
}

.tsD_p2_4_sec {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}

.tsD_p2_5_sec {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #CA1116);
}

/* P3 Grads */
.tsD_p3_1_sec {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #0f1fda);
}

.tsD_p3_2_sec {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #CA1116);
}

.tsD_p3_4_sec {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #0f1fda);
}

.tsD_p3_5_sec {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #ffffff, #CA1116);
}

/* P4 Grads */
.tsD_p4_1_sec {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #0f1fda);
}

.tsD_p4_2_sec {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

.tsD_p4_3_sec {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #ffffff);
}

.tsD_p4_5_sec {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #0f1fda, #CA1116);
}

/* P5 Grads */
.tsD_p5_1_sec {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}

.tsD_p5_2_sec {
  background-color: #CA1116;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #CA1116);
}

.tsD_p5_3_sec {
  background-color: #ffffff;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #ffffff);
}

.tsD_p5_4_sec {
  background-color: #0f1fda;
  /* Fallback Color */
  /* Saf4+, Chrome */
  /* Chrome 10+, Saf5.1+, iOS 5+ */
  /* FF3.6 */
  /* IE10 */
  /* Opera 11.10+ */
  background-image: linear-gradient(-45deg, #CA1116, #0f1fda);
}

/* Button for Nav */
.menu .tsD_btn.tsD_btn a {
  color: #ffffff;
  background-color: #000000;
}
.menu .tsD_btn.tsD_btn a:hover {
  color: #000000;
  background-color: #ffffff;
}
.menu .tsD_h_btn.tsD_h_btn a {
  color: #fafaeb;
  background-color: #362b4b;
}
.menu .tsD_h_btn.tsD_h_btn a:hover {
  color: #362b4b;
  background-color: #fafaeb;
}
.menu .tsD_p1_btn.tsD_p1_btn a,
.menu .tsD_p1_btn.tsD_p1_btn .tsI_btn.tsI_btn {
  color: #ffffff;
  background-color: #0f1fda;
}
.menu .tsD_p1_btn.tsD_p1_btn a:hover,
.menu .tsD_p1_btn.tsD_p1_btn .tsI_btn.tsI_btn:hover {
  color: #0f1fda;
  background-color: #ffffff;
}
.menu .tsD_p2_btn.tsD_p2_btn a,
.menu .tsD_p2_btn.tsD_p2_btn .tsI_btn.tsI_btn {
  color: #ffffff;
  background-color: #CA1116;
}
.menu .tsD_p2_btn.tsD_p2_btn a:hover,
.menu .tsD_p2_btn.tsD_p2_btn .tsI_btn.tsI_btn:hover {
  color: #CA1116;
  background-color: #ffffff;
}
.menu .tsD_p3_btn.tsD_p3_btn a,
.menu .tsD_p3_btn.tsD_p3_btn .tsI_btn.tsI_btn {
  color: #ffffff;
  background-color: #ffffff;
}
.menu .tsD_p3_btn.tsD_p3_btn a:hover,
.menu .tsD_p3_btn.tsD_p3_btn .tsI_btn.tsI_btn:hover {
  color: #ffffff;
  background-color: #ffffff;
}
.menu .tsD_p4_btn.tsD_p4_btn a,
.menu .tsD_p4_btn.tsD_p4_btn .tsI_btn.tsI_btn {
  color: #ffffff;
  background-color: #0f1fda;
}
.menu .tsD_p4_btn.tsD_p4_btn a:hover,
.menu .tsD_p4_btn.tsD_p4_btn .tsI_btn.tsI_btn:hover {
  color: #0f1fda;
  background-color: #ffffff;
}
.menu .tsD_p5_btn.tsD_p5_btn a,
.menu .tsD_p5_btn.tsD_p5_btn .tsI_btn.tsI_btn {
  color: #ffffff;
  background-color: #CA1116;
}
.menu .tsD_p5_btn.tsD_p5_btn a:hover,
.menu .tsD_p5_btn.tsD_p5_btn .tsI_btn.tsI_btn:hover {
  color: #CA1116;
  background-color: #ffffff;
}

/*//////////////////////////////////////////*/
/*///                                    ///*/
/*///              BUTTONS               ///*/
/*///                                    ///*/
/*//////////////////////////////////////////*/
/*TO TOP */
.tsC_Btn.to-top,
.tsC_Btn.to-top:hover {
  color: #ffffff;
  background: rgba(0,0,0,0.41);
}

/*BUTTONS */
.tsC_Btn {
  color: #ffffff;
  background-color: #000000;
}

.tsC_Btn:hover {
  color: #000000;
  background-color: #ffffff;
}

/*BUTTON LINK */
.tsI_btn.lnk {
  color: #131416;
}

.tsI.yLk:hover .tsI_btn.lnk {
  color: #19181b;
}

.tsI.yLks .tsI_btn.lnk:hover {
  color: #19181b;
}

/* CAPTION BUTTON */
.tsI_cptn_btn {
  background-color: #000000;
  color: #ffffff;
}
.tsI_cptn_btn:hover {
  background-color: #ffffff;
  color: #000000;
}

.tsI {
  /*BUTTON WELL AGNOSTIC */
  /*BUTTON WELL AGNOSTIC */
  /*BUTTON NO WELL */
}
.tsI .tsI_btn.btn_1 {
  color: #ffffff;
  background-color: #000000;
}
.tsI .tsI_btn.btn_1:hover {
  color: #000000;
  background-color: #ffffff;
}
.tsI .tsI_btn.btn_2 {
  color: #131416;
  border-color: #131416;
  background: transparent;
}
.tsI .tsI_btn.btn_2:hover {
  color: #19181b;
  border-color: #19181b;
  background: transparent;
}
.tsI .tsI_btn.btn_nw {
  color: #ffffff;
  background-color: #000000;
}
.tsI .tsI_btn.btn_nw:hover {
  color: #000000;
  background-color: #ffffff;
}

/*BUTTON WELL */
.tsI_btn.btn_1.btn_w {
  color: #ffffff;
  background-color: #000000;
}

.tsI:hover .tsI_btn.btn_1.btn_w {
  color: #000000;
  background-color: #ffffff;
}

/* HERO BUTTON WELL */
.tsI.yHero .tsI_btn.btn_1.btn_w {
  color: #fafaeb;
  background-color: #362b4b;
}

.tsI.yHero:hover .tsI_btn.btn_1.btn_w {
  color: #362b4b;
  background-color: #fafaeb;
}

/* HERO BUTTON LINK */
.tsI.yHero .tsI_btn.lnk {
  color: #131416;
}

.tsI.yHero:hover .tsI_btn.lnk {
  color: #19181b;
}

/* HERO BUTTON LINK */
.well .tsI.yHero .tsI_btn.lnk {
  color: #DDDDDD;
}

.well .tsI.yHero:hover .tsI_btn.lnk {
  color: transparent;
}

/* BADGE */
.tsI .tsI_bdg {
  background: #000000;
  color: #ffffff;
}

/* PROMO BUTTONS ---------------- */
.tsB .tsI .tsI_btn.btn_1.btn_p1 {
  /* P1 BUTTON */
  color: #ffffff;
  background-color: #0f1fda;
}
.tsB .tsI .tsI_btn.btn_1.btn_p1:hover {
  color: #0f1fda;
  background-color: #ffffff;
}
.tsB .tsI .tsI_btn.btn_p1 {
  /* P1 BTN 2 and LINK */
}
.tsB .tsI .tsI_btn.btn_p1.btn_2, .tsB .tsI .tsI_btn.btn_p1.lnk {
  color: #0f1fda;
}
.tsB .tsI .tsI_btn.btn_p1.btn_2:hover, .tsB .tsI .tsI_btn.btn_p1.lnk:hover {
  color: #19181b;
}
.tsB .tsI .tsI_btn.btn_p1.btn_2 {
  border-color: #0f1fda;
}
.tsB .tsI .tsI_btn.btn_p1.btn_2:hover {
  border-color: #19181b;
}
.tsB .tsI .tsI_btn.btn_1.btn_p2 {
  /* P1 BUTTON */
  color: #ffffff;
  background-color: #CA1116;
}
.tsB .tsI .tsI_btn.btn_1.btn_p2:hover {
  color: #CA1116;
  background-color: #ffffff;
}
.tsB .tsI .tsI_btn.btn_p2 {
  /* P2 BTN 2 and LINK */
}
.tsB .tsI .tsI_btn.btn_p2.btn_2, .tsB .tsI .tsI_btn.btn_p2.lnk {
  color: #CA1116;
}
.tsB .tsI .tsI_btn.btn_p2.btn_2:hover, .tsB .tsI .tsI_btn.btn_p2.lnk:hover {
  color: #19181b;
}
.tsB .tsI .tsI_btn.btn_p2.btn_2 {
  border-color: #CA1116;
}
.tsB .tsI .tsI_btn.btn_p2.btn_2:hover {
  border-color: #19181b;
}
.tsB .tsI .tsI_btn.btn_1.btn_p3 {
  /* P1 BUTTON */
  color: #ffffff;
  background-color: #ffffff;
}
.tsB .tsI .tsI_btn.btn_1.btn_p3:hover {
  color: #ffffff;
  background-color: #ffffff;
}
.tsB .tsI .tsI_btn.btn_p3 {
  /* P3 BTN 2 and LINK */
}
.tsB .tsI .tsI_btn.btn_p3.btn_2, .tsB .tsI .tsI_btn.btn_p3.lnk {
  color: #ffffff;
}
.tsB .tsI .tsI_btn.btn_p3.btn_2:hover, .tsB .tsI .tsI_btn.btn_p3.lnk:hover {
  color: #19181b;
}
.tsB .tsI .tsI_btn.btn_p3.btn_2 {
  border-color: #ffffff;
}
.tsB .tsI .tsI_btn.btn_p3.btn_2:hover {
  border-color: #19181b;
}
.tsB .tsI .tsI_btn.btn_1.btn_p4 {
  /* P1 BUTTON */
  color: #ffffff;
  background-color: #0f1fda;
}
.tsB .tsI .tsI_btn.btn_1.btn_p4:hover {
  color: #0f1fda;
  background-color: #ffffff;
}
.tsB .tsI .tsI_btn.btn_p4 {
  /* P4 BTN 2 and LINK */
}
.tsB .tsI .tsI_btn.btn_p4.btn_2, .tsB .tsI .tsI_btn.btn_p4.lnk {
  color: #0f1fda;
}
.tsB .tsI .tsI_btn.btn_p4.btn_2:hover, .tsB .tsI .tsI_btn.btn_p4.lnk:hover {
  color: #19181b;
}
.tsB .tsI .tsI_btn.btn_p4.btn_2 {
  border-color: #0f1fda;
}
.tsB .tsI .tsI_btn.btn_p4.btn_2:hover {
  border-color: #19181b;
}
.tsB .tsI .tsI_btn.btn_1.btn_p5 {
  /* P1 BUTTON */
  color: #ffffff;
  background-color: #CA1116;
}
.tsB .tsI .tsI_btn.btn_1.btn_p5:hover {
  color: #CA1116;
  background-color: #ffffff;
}
.tsB .tsI .tsI_btn.btn_p5 {
  /* P5 BTN 2 and LINK */
}
.tsB .tsI .tsI_btn.btn_p5.btn_2, .tsB .tsI .tsI_btn.btn_p5.lnk {
  color: #CA1116;
}
.tsB .tsI .tsI_btn.btn_p5.btn_2:hover, .tsB .tsI .tsI_btn.btn_p5.lnk:hover {
  color: #19181b;
}
.tsB .tsI .tsI_btn.btn_p5.btn_2 {
  border-color: #CA1116;
}
.tsB .tsI .tsI_btn.btn_p5.btn_2:hover {
  border-color: #19181b;
}

/*IE8/9   -------------------*/
/* HEADER/FOOTER */
.no-rgba .tsH,
.no-rgba .tsH .sub-menu {
  background: #ffffff;
}
.no-rgba .tsH .tsH_navTrig {
  color: #8e9a90;
}
.no-rgba .promo_colors .nImg.item_1, .no-rgba .promo_colors .nImg.item_6, .no-rgba .promo_colors .nImg.item_11 {
  background-color: #0f1fda;
}
.no-rgba .promo_colors .nImg.item_2, .no-rgba .promo_colors .nImg.item_7, .no-rgba .promo_colors .nImg.item_12 {
  background-color: #CA1116;
}
.no-rgba .promo_colors .nImg.item_3, .no-rgba .promo_colors .nImg.item_8, .no-rgba .promo_colors .nImg.item_13 {
  background-color: #ffffff;
}
.no-rgba .promo_colors .nImg.item_4, .no-rgba .promo_colors .nImg.item_9, .no-rgba .promo_colors .nImg.item_14 {
  background-color: #0f1fda;
}
.no-rgba .promo_colors .nImg.item_5, .no-rgba .promo_colors .nImg.item_10, .no-rgba .promo_colors .nImg.item_15 {
  background-color: #CA1116;
}
.no-rgba .tsT_list.l2 .tsI .tsI_num {
  color: #131416;
}
.no-rgba .tsT_list.l2 .tsI.yHero .tsI_num {
  color: #362b4b;
}
.no-rgba .menu a {
  color: #131313;
}
.no-rgba .menu a:hover {
  color: #CA1116;
}
.no-rgba .current-menu-item > a {
  color: #CA1116;
}
.no-rgba #_the_logo * {
  color: #8e9a90;
}
.no-rgba .tsW {
  background: none !important;
}
/* >>> <<< */