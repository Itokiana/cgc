setInterval(() => {
  let pos = $(".cgc-box-scroll-state1 > .cgc-carousel-position.active")

  $(".cgc-box-scroll-state2 span").html("0" + (pos.data("slide-to") + 1))

}, 500);
$("#cgc-open-menu").click((e) => {
  e.preventDefault()
  $(".cgc-trapeze").css("bottom", "20%");
  $(".cgc-menu").css("bottom", "35%");
  $(".cgc-menu-content").addClass("pt-4");
  $(".cgc-menu").addClass("cgc-shadow-menu")
})

$("#cgc-close-menu").click((e) => {
  e.preventDefault()
  $(".cgc-trapeze").css("bottom", "100%");
  $(".cgc-menu").css("bottom", "100%");
  $(".cgc-menu-content").removeClass("pt-4");
  $(".cgc-menu").removeClass("cgc-shadow-menu")
})

$(".cgc-img").css("display", "none");
$("#cgc-default-img").css("display", "block");

$("#cgc-glovo-target").hover((e) => {
  e.preventDefault();
  $(".cgc-img").css("display", "none");
  $("#cgc-glovo").css("display", "block");
})
$("#cgc-atda-target").hover((e) => {
  e.preventDefault();
  $(".cgc-img").css("display", "none");
  $("#cgc-atda").css("display", "block");
})
$("#cgc-deik-target").hover((e) => {
  e.preventDefault();
  $(".cgc-img").css("display", "none");
  $("#cgc-deik").css("display", "block");
})
$("#cgc-intelcia-target").hover((e) => {
  e.preventDefault();
  $(".cgc-img").css("display", "none");
  $("#cgc-intelcia").css("display", "block");
})
$("#cgc-mc-target").hover((e) => {
  e.preventDefault();
  $(".cgc-img").css("display", "none");
  $("#cgc-mc").css("display", "block");
})



$("#cgc-restart-img").hover((e) => {
  $(".cgc-img").css("display", "none");
  $("#cgc-default-img").css("display", "block");
})


$(".cgc-img2").css("display", "none");
$("#cgc-ag1").css("display", "block");

$("#cgc-ag1-target").hover((e) => {
  $(".cgc-img2").css("display", "none");
  $("#cgc-ag1").css("display", "block");
})
$("#cgc-ag2-target").hover((e) => {
  $(".cgc-img2").css("display", "none");
  $("#cgc-ag2").css("display", "block");
})
$("#cgc-ag3-target").hover((e) => {
  $(".cgc-img2").css("display", "none");
  $("#cgc-ag3").css("display", "block");
})
$("#cgc-ag4-target").hover((e) => {
  $(".cgc-img2").css("display", "none");
  $("#cgc-ag4").css("display", "block");
})

$("p.cgc-territoire").css("display", "none");
// $("#cgc-territoire1").css("display", "inline");


$("#cgc-afn").hover((e) => {
  $("p.cgc-territoire").css("display", "none");
  $("#cgc-territoire1").css("display", "inline");
})
$("#cgc-afo").hover((e) => {
  $("p.cgc-territoire").css("display", "none");
  $("#cgc-territoire2").css("display", "inline");
})
$("#cgc-afe").hover((e) => {
  $("p.cgc-territoire").css("display", "none");
  $("#cgc-territoire3").css("display", "inline");
})
$("#cgc-afc").hover((e) => {
  $("p.cgc-territoire").css("display", "none");
  $("#cgc-territoire4").css("display", "inline");
})
$("#cgc-af-aus").hover((e) => {
  $("p.cgc-territoire").css("display", "none");
  $("#cgc-territoire5").css("display", "inline");
})
$("#cgc-europe").hover((e) => {
  $("p.cgc-territoire").css("display", "none");
  $("#cgc-territoire6").css("display", "inline");
})
$("#cgc-asia").hover((e) => {
  $("p.cgc-territoire").css("display", "none");
  $("#cgc-territoire7").css("display", "inline");
})

$("#cgc-reset-show-africa2").hover((e) => {
  $("p.cgc-territoire").css("display", "none");
  $("div.cgc-industry-content").css("display", "none");
})

$("#cgc-reset-show-africa1").hover((e) => {
  $("p.cgc-territoire").css("display", "none");
})



$("div.cgc-industry-content").css("display", "none");

$("#cgc-industry1").hover((e) => {
  $("div.cgc-industry-content").css("display", "none");
  $("#cgc-industry1-content").css("display", "block");
})
$("#cgc-industry2").hover((e) => {
  $("div.cgc-industry-content").css("display", "none");
  $("#cgc-industry2-content").css("display", "block");
})
$("#cgc-industry3").hover((e) => {
  $("div.cgc-industry-content").css("display", "none");
  $("#cgc-industry3-content").css("display", "block");
})
$("#cgc-industry4").hover((e) => {
  $("div.cgc-industry-content").css("display", "none");
  $("#cgc-industry4-content").css("display", "block");
})

$("#cgc-reset-show-diplomatie").hover((e) => {
  $("div.cgc-industry-content").css("display", "none");
})