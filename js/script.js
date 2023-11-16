document.addEventListener('DOMContentLoaded', () => {

const emails = document.querySelectorAll('.email-text');

if (emails) {
    emails.forEach((email) => {
        email.innerText = 'info@' + location.hostname;
    });
}

});

  function initSwiper() {
      const swipers = document.querySelectorAll('.swiper');

      if(!swipers) return;

      swipers.forEach(function(swiper) {
          let config = JSON.parse(swiper.querySelector('.swiper-config').innerHTML.trim());
          new Swiper(swiper, config);
      });
  }

  window.addEventListener('load', initSwiper);
