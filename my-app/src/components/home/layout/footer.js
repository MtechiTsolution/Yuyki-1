import React from "react";
import backgroundImage from "../../../images/finalfooter.png"; // Replace with the actual path to your image
import Logo from "../../../images/Logo.png";
import ins from "../../../images/instagram 1.png";
import fb from "../../../images/facebook (1) 1.png";
import twt from "../../../images/Frame (2).png";
import you from "../../../images/youtube 1.png";
import pl from "../../../images/playstore.png";
import app from "../../../images/appstore.png";
import man from "../../../images/mans.png";

function Footer() {
  const h2Style = {
    fontWeight: 500,
    fontSize: "25px",
    color: "black",
    marginTop: "140px",
  };

  const imgStyle = {
    marginTop: "210px",
  };

  const liStyle = {
    fontWeight: 450,
    fontSize: "18px",
    color: "black",
    width: "100%", // Adjusted to 100%
    position: "relative",
    paddingLeft: "20px", // Add padding for the custom bullet
    listStyle: "none", // Hide default list styles
    textDecoration: "underline",
    marginBottom: "2px",
  };

  const bulletStyle = {
    content: "''",
    display: "block",
    width: "6px",
    height: "6px",
    borderRadius: "50%",
    backgroundColor: "black",
    position: "absolute",
    top: "50%", // Place the bullet at the center vertically
    transform: "translateY(-50%)",
    left: "-2px", // Adjust the distance between the bullet and the text
  };

  const containerStyle = {
    backgroundImage: `url(${backgroundImage})`,
    backgroundSize: "cover", // Adjust as needed (e.g., 'contain', '100% 100%', etc.)
    backgroundRepeat: "no-repeat", // Adjust as needed (e.g., 'repeat', 'repeat-x', 'repeat-y', 'no-repeat')
    backgroundPosition: "center", // Adjust as needed (e.g., 'center center', 'top left', 'bottom right', etc.)
    width: "100%",
    height: "600px", // Adjust as needed
  };

  const footerImg = {
    height: "300px",
    position: "relative",
    left: "24px",
    top: "147px",
  };

  const margin = {

    marginTop: "220px",
    marginLeft: "40px"
  }

  const customContainer = {

    
  }

  return (
    <>
      <div className="container-fluid">
        <div className="row text-end">
          <div className="col-12">
            <img className="" style={footerImg} src={man} alt="mans"></img>
          </div>
        </div>
      </div>
      <div style={containerStyle}>
        <div className="container-fluid">
          <div className="row">
            <div className="col-4">
              <h2 style={h2Style}>About</h2>
              <ul className="ps-0">
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  About Yuyki
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Careers
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Press
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Investors Relations
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Trust and Safety
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Content Guidelines
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Accessablity Statement about Yelp
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  About Yuyki
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Careers
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Press
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Investors Relations
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Trust and Safety
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Content Guidelines
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Accessablity Statement about Yelp
                </li>
              </ul>
            </div>
            <div className="col-3">
              <h2 style={h2Style}>Discover</h2>
              <ul className="ps-0">
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Yuyki Project Cost Guides
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Collections
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Talk
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Events
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Yuyki Blog
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Support
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Yuyki Mobile
                </li>
                <li style={liStyle}>
                  <div style={bulletStyle}></div>
                  Developers
                </li>
              </ul>
            </div>
            <div className="col-2">
              <img src={Logo} alt="Footer Logo" style={imgStyle}></img>
              <div className="row mt-2 text-left">
                <div className="col-3">
                  <img src={ins} alt="instagram"></img>
                </div>
                <div className="col-3">
                  <img src={fb} alt="facebook"></img>
                </div>
                <div className="col-3">
                  <img src={twt} alt="tweeter"></img>
                </div>
                <div className="col-3">
                  <img src={you} alt="youtube"></img>
                </div>
              </div>
              <div className="row mt-2">
                <div className="col-12 ps-0">
                  <img src={pl} alt="Play store"></img>
                </div>
                <div className="col-12">
                  <img src={app} alt="Apple Store"></img>
                </div>
              </div>
            </div>
            <div className="col-3">
                <ul style={margin}>
                  <li style={liStyle}>
                    Language
                  </li>
                  <li style={liStyle}>
                    English
                  </li>
                  <li style={liStyle}>
                    Countries
                  </li>
                  <li style={liStyle}>
                    United States
                  </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default Footer;
