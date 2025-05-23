// Lightbox
(function(b,a,c,d){c.swipebox=function(i,t){var r,m={useCSS:true,useSVG:true,initialIndexOnArray:0,removeBarsOnMobile:true,hideCloseButtonOnMobile:false,hideBarsDelay:0,videoMaxWidth:1140,vimeoColor:"cccccc",beforeOpen:null,afterOpen:null,afterClose:null,loopAtEnd:false,autoplayVideos:false,queryStringData:{},toggleClassOnLoad:""},p=this,e=[],f,j=i.selector,s=c(j),q=navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(Android)|(PlayBook)|(BB10)|(BlackBerry)|(Opera Mini)|(IEMobile)|(webOS)|(MeeGo)/i),l=q!==null||a.createTouch!==d||("ontouchstart" in b)||("onmsgesturechange" in b)||navigator.msMaxTouchPoints,n=!!a.createElementNS&&!!a.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect,h=b.innerWidth?b.innerWidth:c(b).width(),k=b.innerHeight?b.innerHeight:c(b).height(),g=0,o='<div id="swipebox-overlay">					<div id="swipebox-container">						<div id="swipebox-slider"></div>						<div id="swipebox-top-bar">							<div id="swipebox-title"></div>						</div>						<div id="swipebox-bottom-bar">							<div id="swipebox-arrows">								<a id="swipebox-prev"></a>								<a id="swipebox-next"></a>							</div>						</div>						<a id="swipebox-close"></a>					</div>			</div>';p.settings={};c.swipebox.close=function(){r.closeSlide()};c.swipebox.extend=function(){return r};p.init=function(){p.settings=c.extend({},m,t);if(c.isArray(i)){e=i;r.target=c(b);r.init(p.settings.initialIndexOnArray)}else{c(a).on("click",j,function(w){if(w.target.parentNode.className==="slide current"){return false}if(!c.isArray(i)){r.destroy();f=c(j);r.actions()}e=[];var u,v,x;if(!x){v="data-rel";x=c(this).attr(v)}if(!x){v="rel";x=c(this).attr(v)}if(x&&x!==""&&x!=="nofollow"){f=s.filter("["+v+'="'+x+'"]')}else{f=c(j)}f.each(function(){var z=null,y=null;if(c(this).attr("title")){z=c(this).attr("title")}if(c(this).attr("href")){y=c(this).attr("href")}e.push({href:y,title:z})});u=f.index(c(this));w.preventDefault();w.stopPropagation();r.target=c(w.target);r.init(u)})}};r={init:function(u){if(p.settings.beforeOpen){p.settings.beforeOpen()}this.target.trigger("swipebox-start");c.swipebox.isOpen=true;this.build();this.openSlide(u);this.openMedia(u);this.preloadMedia(u+1);this.preloadMedia(u-1);if(p.settings.afterOpen){p.settings.afterOpen()}},build:function(){var v=this,u;c("body").append(o);if(n&&p.settings.useSVG===true){u=c("#swipebox-close").css("background-image");u=u.replace("png","svg");c("#swipebox-prev, #swipebox-next, #swipebox-close").css({"background-image":u})}if(q&&p.settings.removeBarsOnMobile){c("#swipebox-bottom-bar, #swipebox-top-bar").remove()}c.each(e,function(){c("#swipebox-slider").append('<div class="slide"></div>')});v.setDim();v.actions();if(l){v.gesture()}v.keyboard();v.animBars();v.resize()},setDim:function(){var w,u,v={};if("onorientationchange" in b){b.addEventListener("orientationchange",function(){if(b.orientation===0){w=h;u=k}else{if(b.orientation===90||b.orientation===-90){w=k;u=h}}},false)}else{w=b.innerWidth?b.innerWidth:c(b).width();u=b.innerHeight?b.innerHeight:c(b).height()}v={width:w,height:u};c("#swipebox-overlay").css(v)},resize:function(){var u=this;c(b).resize(function(){u.setDim()}).resize()},supportTransition:function(){var v="transition WebkitTransition MozTransition OTransition msTransition KhtmlTransition".split(" "),u;for(u=0;u<v.length;u++){if(a.createElement("div").style[v[u]]!==d){return v[u]}}return false},doCssTrans:function(){if(p.settings.useCSS&&this.supportTransition()){return true}},gesture:function(){var E=this,D,G,F,x,z,B,y=false,w=false,A=10,C=50,H={},u={},I=c("#swipebox-top-bar, #swipebox-bottom-bar"),v=c("#swipebox-slider");I.addClass("visible-bars");E.setTimeout();c("body").bind("touchstart",function(J){c(this).addClass("touching");D=c("#swipebox-slider .slide").index(c("#swipebox-slider .slide.current"));u=J.originalEvent.targetTouches[0];H.pageX=J.originalEvent.targetTouches[0].pageX;H.pageY=J.originalEvent.targetTouches[0].pageY;c("#swipebox-slider").css({"-webkit-transform":"translate3d("+g+"%, 0, 0)",transform:"translate3d("+g+"%, 0, 0)"});c(".touching").bind("touchmove",function(L){L.preventDefault();L.stopPropagation();u=L.originalEvent.targetTouches[0];if(!w){z=F;F=u.pageY-H.pageY;if(Math.abs(F)>=C||y){var K=0.75-Math.abs(F)/v.height();v.css({top:F+"px"});v.css({opacity:K});y=true}}x=G;G=u.pageX-H.pageX;B=G*100/h;if(!w&&!y&&Math.abs(G)>=A){c("#swipebox-slider").css({"-webkit-transition":"",transition:""});w=true}if(w){if(0<G){if(0===D){c("#swipebox-overlay").addClass("leftSpringTouch")}else{c("#swipebox-overlay").removeClass("leftSpringTouch").removeClass("rightSpringTouch");c("#swipebox-slider").css({"-webkit-transform":"translate3d("+(g+B)+"%, 0, 0)",transform:"translate3d("+(g+B)+"%, 0, 0)"})}}else{if(0>G){if(e.length===D+1){c("#swipebox-overlay").addClass("rightSpringTouch")}else{c("#swipebox-overlay").removeClass("leftSpringTouch").removeClass("rightSpringTouch");c("#swipebox-slider").css({"-webkit-transform":"translate3d("+(g+B)+"%, 0, 0)",transform:"translate3d("+(g+B)+"%, 0, 0)"})}}}}});return false}).bind("touchend",function(J){J.preventDefault();J.stopPropagation();c("#swipebox-slider").css({"-webkit-transition":"-webkit-transform 0.4s ease",transition:"transform 0.4s ease"});F=u.pageY-H.pageY;G=u.pageX-H.pageX;B=G*100/h;if(y){y=false;if(Math.abs(F)>=2*C&&Math.abs(F)>Math.abs(z)){var K=F>0?v.height():-v.height();v.animate({top:K+"px",opacity:0},300,function(){E.closeSlide()})}else{v.animate({top:0,opacity:1},300)}}else{if(w){w=false;if(G>=A&&G>=x){E.getPrev()}else{if(G<=-A&&G<=x){E.getNext()}}}else{if(!I.hasClass("visible-bars")){E.showBars();E.setTimeout()}else{E.clearTimeout();E.hideBars()}}}c("#swipebox-slider").css({"-webkit-transform":"translate3d("+g+"%, 0, 0)",transform:"translate3d("+g+"%, 0, 0)"});c("#swipebox-overlay").removeClass("leftSpringTouch").removeClass("rightSpringTouch");c(".touching").off("touchmove").removeClass("touching")})},setTimeout:function(){if(p.settings.hideBarsDelay>0){var u=this;u.clearTimeout();u.timeout=b.setTimeout(function(){u.hideBars()},p.settings.hideBarsDelay)}},clearTimeout:function(){b.clearTimeout(this.timeout);this.timeout=null},showBars:function(){var u=c("#swipebox-top-bar, #swipebox-bottom-bar");if(this.doCssTrans()){u.addClass("visible-bars")}else{c("#swipebox-top-bar").animate({top:0},500);c("#swipebox-bottom-bar").animate({bottom:0},500);setTimeout(function(){u.addClass("visible-bars")},1000)}},hideBars:function(){var u=c("#swipebox-top-bar, #swipebox-bottom-bar");if(this.doCssTrans()){u.removeClass("visible-bars")}else{c("#swipebox-top-bar").animate({top:"-50px"},500);c("#swipebox-bottom-bar").animate({bottom:"-50px"},500);setTimeout(function(){u.removeClass("visible-bars")},1000)}},animBars:function(){var v=this,u=c("#swipebox-top-bar, #swipebox-bottom-bar");u.addClass("visible-bars");v.setTimeout();c("#swipebox-slider").click(function(){if(!u.hasClass("visible-bars")){v.showBars();v.setTimeout()}});c("#swipebox-bottom-bar").hover(function(){v.showBars();u.addClass("visible-bars");v.clearTimeout()},function(){if(p.settings.hideBarsDelay>0){u.removeClass("visible-bars");v.setTimeout()}})},keyboard:function(){var u=this;c(b).bind("keyup",function(v){v.preventDefault();v.stopPropagation();if(v.keyCode===37){u.getPrev()}else{if(v.keyCode===39){u.getNext()}else{if(v.keyCode===27){u.closeSlide()}}}})},actions:function(){var v=this,u="touchend click";if(e.length<2){c("#swipebox-bottom-bar").hide();if(d===e[1]){c("#swipebox-top-bar").hide()}}else{c("#swipebox-prev").bind(u,function(w){w.preventDefault();w.stopPropagation();v.getPrev();v.setTimeout()});c("#swipebox-next").bind(u,function(w){w.preventDefault();w.stopPropagation();v.getNext();v.setTimeout()})}c("#swipebox-close").bind(u,function(){v.closeSlide()})},setSlide:function(v,u){u=u||false;var w=c("#swipebox-slider");g=-v*100;if(this.doCssTrans()){w.css({"-webkit-transform":"translate3d("+(-v*100)+"%, 0, 0)",transform:"translate3d("+(-v*100)+"%, 0, 0)"})}else{w.animate({left:(-v*100)+"%"})}c("#swipebox-slider .slide").removeClass("current");c("#swipebox-slider .slide").eq(v).addClass("current");this.setTitle(v);if(u){w.fadeIn()}c("#swipebox-prev, #swipebox-next").removeClass("disabled");if(v===0){c("#swipebox-prev").addClass("disabled")}else{if(v===e.length-1&&p.settings.loopAtEnd!==true){c("#swipebox-next").addClass("disabled")}}},openSlide:function(u){c("html").addClass("swipebox-html");if(l){c("html").addClass("swipebox-touch");if(p.settings.hideCloseButtonOnMobile){c("html").addClass("swipebox-no-close-button")}}else{c("html").addClass("swipebox-no-touch")}c(b).trigger("resize");this.setSlide(u,true)},preloadMedia:function(u){var v=this,w=null;if(e[u]!==d){w=e[u].href}if(!v.isVideo(w)){setTimeout(function(){v.openMedia(u)},1000)}else{v.openMedia(u)}},openMedia:function(v){var w=this,x,u;if(e[v]!==d){x=e[v].href}if(v<0||v>=e.length){return false}u=c("#swipebox-slider .slide").eq(v);if(!w.isVideo(x)){u.addClass("slide-loading");w.loadMedia(x,function(){u.removeClass("slide-loading");u.html(this)})}else{u.html(w.getVideo(x))}},setTitle:function(u){var v=null;c("#swipebox-title").empty();if(e[u]!==d){v=e[u].title}if(v){c("#swipebox-top-bar").show();c("#swipebox-title").append(v)}else{c("#swipebox-top-bar").hide()}},isVideo:function(u){if(u){if(u.match(/(youtube\.com|youtube-nocookie\.com)\/watch\?v=([a-zA-Z0-9\-_]+)/)||u.match(/vimeo\.com\/([0-9]*)/)||u.match(/youtu\.be\/([a-zA-Z0-9\-_]+)/)){return true}if(u.toLowerCase().indexOf("swipeboxvideo=1")>=0){return true}}},parseUri:function(w,x){var v=a.createElement("a"),u={};v.href=decodeURIComponent(w);u=JSON.parse('{"'+v.search.toLowerCase().replace("?","").replace(/&/g,'","').replace(/=/g,'":"')+'"}');if(c.isPlainObject(x)){u=c.extend(u,x,p.settings.queryStringData)}return c.map(u,function(z,y){if(z&&z>""){return encodeURIComponent(y)+"="+encodeURIComponent(z)}}).join("&")},getVideo:function(w){var y="",v=w.match(/((?:www\.)?youtube\.com|(?:www\.)?youtube-nocookie\.com)\/watch\?v=([a-zA-Z0-9\-_]+)/),x=w.match(/(?:www\.)?youtu\.be\/([a-zA-Z0-9\-_]+)/),z=w.match(/(?:www\.)?vimeo\.com\/([0-9]*)/),u="";if(v||x){if(x){v=x}u=r.parseUri(w,{autoplay:(p.settings.autoplayVideos?"1":"0"),v:""});y='<iframe width="560" height="315" src="//'+v[1]+"/embed/"+v[2]+"?"+u+'&rel=0" frameborder="0" allowfullscreen></iframe>'}else{if(z){u=r.parseUri(w,{autoplay:(p.settings.autoplayVideos?"1":"0"),byline:"0",portrait:"0",color:p.settings.vimeoColor});y='<iframe width="560" height="315"  src="//player.vimeo.com/video/'+z[1]+"?"+u+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'}else{y='<iframe width="560" height="315" src="'+w+'" frameborder="0" allowfullscreen></iframe>'}}return'<div class="swipebox-video-container" style="max-width:'+p.settings.videoMaxWidth+'px"><div class="swipebox-video">'+y+"</div></div>"},loadMedia:function(v,w){if(v.trim().indexOf("#")===0){w.call(c("<div>",{"class":"swipebox-inline-container"}).append(c(v).clone().toggleClass(p.settings.toggleClassOnLoad)))}else{if(!this.isVideo(v)){var u=c("<img>").on("load",function(){w.call(u)});u.attr("src",v)}}},getNext:function(){var v=this,w,u=c("#swipebox-slider .slide").index(c("#swipebox-slider .slide.current"));if(u+1<e.length){w=c("#swipebox-slider .slide").eq(u).contents().find("iframe").attr("src");c("#swipebox-slider .slide").eq(u).contents().find("iframe").attr("src",w);u++;v.setSlide(u);v.preloadMedia(u+1)}else{if(p.settings.loopAtEnd===true){w=c("#swipebox-slider .slide").eq(u).contents().find("iframe").attr("src");c("#swipebox-slider .slide").eq(u).contents().find("iframe").attr("src",w);u=0;v.preloadMedia(u);v.setSlide(u);v.preloadMedia(u+1)}else{c("#swipebox-overlay").addClass("rightSpring");setTimeout(function(){c("#swipebox-overlay").removeClass("rightSpring")},500)}}},getPrev:function(){var u=c("#swipebox-slider .slide").index(c("#swipebox-slider .slide.current")),v;if(u>0){v=c("#swipebox-slider .slide").eq(u).contents().find("iframe").attr("src");c("#swipebox-slider .slide").eq(u).contents().find("iframe").attr("src",v);u--;this.setSlide(u);this.preloadMedia(u-1)}else{c("#swipebox-overlay").addClass("leftSpring");setTimeout(function(){c("#swipebox-overlay").removeClass("leftSpring")},500)}},closeSlide:function(){c("html").removeClass("swipebox-html");c("html").removeClass("swipebox-touch");c(b).trigger("resize");this.destroy()},destroy:function(){c(b).unbind("keyup");c("body").unbind("touchstart");c("body").unbind("touchmove");c("body").unbind("touchend");c("#swipebox-slider").unbind();c("#swipebox-overlay").remove();if(!c.isArray(i)){i.removeData("_swipebox")}if(this.target){this.target.trigger("swipebox-destroy")}c.swipebox.isOpen=false;if(p.settings.afterClose){p.settings.afterClose()}}};p.init()};c.fn.swipebox=function(f){if(!c.data(this,"_swipebox")){var e=new c.swipebox(this,f);this.data("_swipebox",e)}return this.data("_swipebox")}}(window,document,jQuery));

$(document).ready(function () {

  AOS.init({
    disable: function () {
      var maxWidth = 1200;
      return window.innerWidth < maxWidth;
    }
  });

  // Lightbox
  $( '.swipebox' ).swipebox({useSVG : false});

  if ($(window).width() <= 1200) {
    $(".nav-item.dropdown .nav-link").removeAttr("data-bs-hover");
    $(".nav-item.dropdown .nav-link").removeClass("dropdown-hover");
    $(".nav-item.dropdown .nav-link").attr("data-bs-toggle", "dropdown");
    $(".nav-item.dropdown .nav-link").addClass("dropdown-toggle");
  }

  $('input').focus(function () {
    $(this).parents('.box-anim').addClass('focused');
  });
  $('textarea').focus(function () {
    $(this).parents('.box-anim').addClass('focused');
  });
  $('input').blur(function () {
    var inputValue = $(this).val();
    if (inputValue == "") {
      $(this).removeClass('filled');
      $(this).parents('.box-anim').removeClass('focused');
    } else {
      $(this).addClass('filled');
    }
  });
  $('textarea').blur(function () {
    var inputValue = $(this).val();
    if (inputValue == "") {
      $(this).removeClass('filled');
      $(this).parents('.box-anim').removeClass('focused');
    } else {
      $(this).addClass('filled');
    }
  });


  $('.available-slider').slick({
    dots: false,
    arrows: true,
    prevArrow: "<img src='/images/arrow-left.svg' class='slick-prev slick-arrow'>",
    nextArrow: "<img src='/images/arrow-right-2.svg' class='slick-next slick-arrow'>",
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    cssEase: 'ease-out',
    responsive: [
      {
        breakpoint: 1500,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });

  AOS.refresh();
});

$(function () {

  $('#list').click(function () {
    $('#list img').addClass('active');
    $('#grid img').removeClass('active');
    $('#offerList').removeClass('grid');
    $('#offerList').addClass('list');
  });
  $('#grid').click(function () {
    $('#grid img').addClass('active');
    $('#list img').removeClass('active');
    $('#offerList').removeClass('list');
    $('#offerList').addClass('grid');
  });

});

//get the current year for the Copyright
$('#year').text(new Date().getFullYear());

