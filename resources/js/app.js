import AOS from 'aos';
import Swiper, { Pagination } from 'swiper';
import { delegateEvent, slideToggle } from './utils';

Swiper.use([Pagination]);

document.addEventListener('DOMContentLoaded', function () {
  const mobilePrimaryMenu = document.querySelector('.mobile-primary-menu');

  if (mobilePrimaryMenu) {
    document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
      e.preventDefault();
      e.currentTarget.classList.toggle('active');
      slideToggle(mobilePrimaryMenu);
    });

    delegateEvent('click', '.mobile-primary-menu .wp-menu-item', function (e) {
      const subMenuItemsWrapper = e.target.closest('.wp-menu-item').querySelector('.sub-menu-items-wrapper');
      if (subMenuItemsWrapper) {
        slideToggle(subMenuItemsWrapper);
      }
    });
  }

  AOS.init();

  const swiper = new Swiper('.testimonial-swiper', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      autoplay: 5000,
    },
  });
});
