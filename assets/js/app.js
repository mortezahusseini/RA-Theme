function show_list () {
  let show_list =  document.getElementById('show_list');
  show_list.style.display = 'bock';
}

function show_main_list () {
  let main_list = document.getElementById('main_list');
  main_list.style.display= 'block';
}

function show_list2 () {
  let show_list2 = document.getElementById('show_list2')
  show_list2.style.display = 'block';
}

function show_list3 () {
  let show_list3 = document.getElementById('show_list3')
  show_list3.style.display = 'block';
}

function hide_main_list () {
  let main_list = document.getElementById('main_list');
  main_list.style.display= 'none';
}

function show_search_box () {
  let search_box = document.getElementById('search_box');
  search_box.style.display= 'block';
}

function hide_search_box () {
  let search_box = document.getElementById('search_box');
  search_box.style.display = 'none'
}

// //when the user scrolls down 20px the sidebar fixed
// var a = new StickySidebar('#sidebar', {
//   topSpacing: 20,
//   bottomSpacing: 20,
//   containerSelector: '.container',
//   innerWrapperSelector: '.box'
// });

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("gotoTop").style.display = "block";
  } else {
    document.getElementById("gotoTop").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  $('html, body').animate({scrollTop:0}, 'slow');
}

$(document).ready(function() {
  var s = $("#fixed_top");
  var logo_scroll = $("#logo_scroll");
  var scroll_col9 = $("#scroll_col9");
  var add_container = $("#add_container");

  var pos = s.position();
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();

    if (windowpos >= pos.top) {
      s.addClass("fixed-top");
      s.addClass("container_fluid");
      s.addClass("center");
      // s.addClass("mr-auto");
      // s.addClass("ml-auto");
      s.addClass("border-bottom");
      s.addClass("shadow")
      add_container.removeClass("d-none");
      add_container.removeClass("py-3");
      add_container.addClass("container");
      logo_scroll.removeClass("d-none");
      logo_scroll.addClass("d-inline-block");
      scroll_col9.removeClass("col-lg-7")
      scroll_col9.addClass("col-lg-9")
    } else {
      s.removeClass("fixed-top");
      s.removeClass("container_fluid");
      s.removeClass("center");
      // s.removeClass("mr-auto");
      // s.removeClass("ml-auto");
      add_container.removeClass("container");
      add_container.addClass("py-3");
      s.removeClass("border-bottom");
      s.removeClass("shadow");
      logo_scroll.addClass("d-none");
      logo_scroll.removeClass("d-inline-block");
      scroll_col9.removeClass("col-lg-9");
      scroll_col9.addClass("col-lg-7");
    }

    var a = 0;
    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.count').each(function() {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
            countNum: countTo
          },
          {
            duration: 2000,
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
              //alert('finished');
            }
          });
      });
      a = 1;
    }
  });
});

