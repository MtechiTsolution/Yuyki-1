import React, { useState, useEffect, useRef } from "react";

const CoverFlowSlider = ({ slides }) => {
  const [activeSlide, setActiveSlide] = useState(2);
  const slideWrapperRef = useRef(null);

  useEffect(() => {
    const handleKeyPress = (e) => {
      if (e.key === "ArrowRight") {
        goToNextSlide();
      } else if (e.key === "ArrowLeft") {
        goToPreviousSlide();
      }
    };

    document.addEventListener("keydown", handleKeyPress);

    return () => {
      document.removeEventListener("keydown", handleKeyPress);
    };
  }, [activeSlide]);

  useEffect(() => {
    const slideWrapper = slideWrapperRef.current;
    const slideWidth = slideWrapper.offsetWidth;
    const centerIndex = Math.floor(slides.length / 2);

    const handleSlideChange = () => {
      const newIndex = Math.round(slideWrapper.scrollLeft / slideWidth);
      setActiveSlide(newIndex + centerIndex);
    };

    slideWrapper.addEventListener("scroll", handleSlideChange);

    return () => {
      slideWrapper.removeEventListener("scroll", handleSlideChange);
    };
  }, [slides]);

  const goToSlide = (index) => {
    const slideWrapper = slideWrapperRef.current;
    const slideWidth = slideWrapper.offsetWidth;
    const centerIndex = Math.floor(slides.length / 2);
    const targetIndex = index - centerIndex;

    slideWrapper.scrollTo({
      left: targetIndex * slideWidth,
      behavior: "smooth",
    });
  };

  const goToNextSlide = () => {
    setActiveSlide((prevIndex) => (prevIndex + 1) % slides.length);
  };

  const goToPreviousSlide = () => {
    setActiveSlide((prevIndex) =>
      prevIndex === 0 ? slides.length - 1 : prevIndex - 1
    );
  };

  const h2Style = {
    fontWeight: 700,
    fontSize: "34px",
    lineHeight: "51px",
  };

  return (
    <div className="full-page-slider-container text-center">
      <h2 style={h2Style} className="mt-5">
        Amazing real life users generated content
      </h2>
      <div className="slider-wrapper" ref={slideWrapperRef}>
        <button className="arrow-button left-arrow" onClick={goToPreviousSlide}>
          &lt;
        </button>
        <div className="cover-flow-slider">
          {slides.map((slide, index) => (
            <div
              key={index}
              className={`slide ${index === activeSlide ? "active" : ""}`}
              onClick={() => goToSlide(index)}
            >
              {slide}
            </div>
          ))}
        </div>
        <button className="arrow-button right-arrow" onClick={goToNextSlide}>
          &gt;
        </button>
      </div>
      <h2 style={h2Style} className="mt-5">
        Everything you need to make a great decision
      </h2>
    </div>
  );
};

export default CoverFlowSlider;
