$("#cgc-open-menu").click((e) => {
  e.preventDefault()
  $(".cgc-trapeze").css("bottom", "20%");
  $(".cgc-menu").css("bottom", "35%");
  $(".cgc-menu-content").addClass("pt-4");
})

$("#cgc-close-menu").click((e) => {
  e.preventDefault()
  $(".cgc-trapeze").css("bottom", "100%");
  $(".cgc-menu").css("bottom", "100%");
  $(".cgc-menu-content").removeClass("pt-4");
})

// $(".cgc-carousel-02").hover((e) => {
//   $(".cgc-carousel-02-content").css("left", "-600px")
// })
// $(".cgc-carousel-02").blur((e) => {
//   $(".cgc-carousel-02-content").css("left", "0")
// })
