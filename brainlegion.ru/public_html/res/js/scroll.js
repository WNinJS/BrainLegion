jQuery(window).scroll(function() {
  let sections = $('section');
  let ids = [];
  for (let i = 0; i < sections.length; i++) {
    ids.push($(sections[i]).attr('id'));
  }
  sections.each((i, element) => {
    let top = $(element).offset().top - 100;
    let scroll = $(window).scrollTop();
    if (scroll > $(element).offset().top - 100 &&
      scroll < (top + $(element).height())) {
      for (let j = 0; j < ids.length; j++) {
        if (j == i) {
          $('a[href="#' + ids[j] + '"]').addClass('nav-link-active');
        } else {
          $('a[href="#' + ids[j] + '"]').removeClass('nav-link-active');
        }
      }
    }
  })
});

$(window).ready(() => {
  $("nav").on("click", "a", function(event) {
    let id = $(this).attr('href');
    if (id !== "index.php") {
      event.preventDefault();
      let top = $(id).offset().top;
      $('body,html').animate({
        scrollTop: top
      }, 800);
    }
  });
});
