import React, { useEffect } from 'react';
import Swiper from 'swiper';

const MySwiperComponent = () => {
  useEffect(() => {
    const mySwiper = new Swiper('.swiper-container', {
      loop: true,
      speed: 1000,
      autoplay: {
        delay: 3000,
      },
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 0,
        stretch: 80,
        depth: 200,
        modifier: 1,
        slideShadows: false,
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    // Clean up the Swiper instance when the component unmounts
    return () => {
      mySwiper.destroy(true, true);
    };
  }, []); // Empty dependency array to ensure it runs only once on mount

  return (
    <div className="swiper-container">
      <div className="swiper-wrapper">
        {/* Slides */}
        <div className="swiper-slide">
          <img src="http://marveltheme.com/tf/html/appai/appai/img/app-screenshots/10.jpg" alt="" />
        </div>
        <div className="swiper-slide">
          <img src="http://marveltheme.com/tf/html/appai/appai/img/app-screenshots/11.jpg" alt="" />
        </div>
        <div className="swiper-slide">
          <img src="http://marveltheme.com/tf/html/appai/appai/img/app-screenshots/12.jpg" alt="" />
        </div>
      </div>
      {/* If we need navigation buttons */}
      <div className="swiper-button-prev"></div>
      <div className="swiper-button-next"></div>
    </div>
  );
};

export default MySwiperComponent;
