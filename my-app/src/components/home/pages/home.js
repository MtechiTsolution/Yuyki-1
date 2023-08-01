
import Header from "../layout/header";

import Background from "../sections/background";

import CarouselSlider from "../sections/banner";

import Background2 from "../sections/background2";

import Search from "../sections/search"

import Services from "../sections/services";

import Explore from "../sections/explore";

import Download_banner from "../sections/download_section";

import Reward from "../sections/reward_section";
 
import Reward2 from "../sections/reward_2";

import Activity from "../sections/activity"

import Categories from "../sections/categories";

import Footer from "../layout/footer"

import Slider from "../sections/slider";

import image1 from "../../../images/Frame (2).png";

import slide1 from "../../../images/slide1.png";

import slide2 from "../../../images/slide2.png";

import slide3 from "../../../images/slide3.png";


function Home() {

  const slides = [
    <img src={slide2} alt="Slide 1" />,
    <img src={slide2} alt="Slide 1" />,
    <img src={slide2} alt="Slide 1" />,
    <img src={slide2} alt="Slide 1" />,
    <img src={slide2} alt="Slide 1" />,
    // Add more slides as needed
  ];

  return (
    <>
      <Header></Header>

      <Background></Background>

      <CarouselSlider></CarouselSlider>

      <Background2></Background2>

      <Search></Search>

      <Services></Services>

      <Slider slides={slides}></Slider>

      <Explore></Explore>

      <Download_banner></Download_banner>

      <Reward></Reward>

      <Reward2></Reward2>

      <Activity></Activity>
    
      <Categories></Categories>

      <Footer></Footer>

    
    
    </>
  );
}

export default Home;
