function smoothScrollTo(target) { //bisa scroll-smooth saja, tapi ini contoh penerapan JS / alternatifnya
  var offsetTop = $(target).offset().top;
  $('html, body').animate({
    scrollTop: offsetTop
  });
}

$(document).ready(function () {
  function toggleDropdown() {
    $('#dropdown').toggleClass('hidden');
  }

  $('.dropdown-toggle').click(function () {
    toggleDropdown();
  });

});


document.addEventListener("DOMContentLoaded", function () {

  const hidden_bottom = document.querySelectorAll(".hidden_bottom");
  const observer_bottom = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle("show_bottom", entry.isIntersecting);
    });
  }, { threshold: 0 });

  hidden_bottom.forEach((element) => {
    observer_bottom.observe(element);
  });

  const hidden_right = document.querySelectorAll(".hidden_right");
  const observer_right = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle("show_right", entry.isIntersecting);
    });
  }, { threshold: 0 });

  hidden_right.forEach((element) => {
    observer_right.observe(element);
  });

  const hidden_left = document.querySelectorAll(".hidden_left");
  const observer_left = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle("show_left", entry.isIntersecting);
    });
  }, { threshold: 0 });

  hidden_left.forEach((element) => {
    observer_left.observe(element);
  });
  
});


function updateprogress_bar() {
  const { scrollTop, scrollHeight, clientHeight } = document.documentElement;
  const scroll_percent = (scrollTop / (scrollHeight - clientHeight)) * 100 + '%';
  // console.log(scrollTop, scrollHeight, clientHeight);
  // console.log(scroll_percent);

  document.querySelector('#progress_bar').style.setProperty('--progress', scroll_percent);
}

document.addEventListener('scroll', updateprogress_bar);









