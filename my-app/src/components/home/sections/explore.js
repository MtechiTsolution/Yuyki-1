import React, { useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
  faHome,
  faSearch,
  faVideo,
  faStar,
  faMapMarkerAlt,
} from "@fortawesome/free-solid-svg-icons";

import homemobile from "../../../images/homemobile.png";
import homeIconBackground from "../../../images/Ellipse.png";
import searchIconBackground from "../../../images/Ellipse.png";
import videoIconBackground from "../../../images/Ellipse.png";
import starIconBackground from "../../../images/Ellipse.png";
import mapIconBackground from "../../../images/Ellipse.png";

function Explore() {
  const [selectedIcon, setSelectedIcon] = useState(null);

  const SearchStyle = {
    padding: "25px",
    zIndex: 100,
    width: "90%",
    paddingLeft: "100px",
    height: "86px",
    borderRadius: "40px",
    backgroundColor: "#fff",
    boxShadow: "0 8px 16px rgba(252, 217, 117)",
    border: "none",
    boxSizing: "border-box",
  };

  const iconStyle = {
    height: "35px",
    fontWeight: 300,
    borderBottom: "2px solid transparent",
    margin: "0 10px",
    transition: "border-color 0.2s ease, box-shadow 0.2s ease",
    boxShadow: "none",
    width: "",
    position: "relative",
  };

  const selectedIconStyle = {
    color: "#FCD975",
  };

  const iconImageStyle = {
    width: "24px",
    height: "24px",
    position: "absolute",
    bottom: "-30px",
    left: "50%",
    transform: "translateX(-50%)",
  };

  const sectionIcon = {
    color: "#FCD975",
  };

  const pStyle = {
    fontFamily: "Inter",
    fontSize: "24px",
    fontWeight: 300,
    lineHeight: "29px",
    letterSpacing: "0em",
    textAlign: "left",
  };

  const renderIconImage = () => {
    if (selectedIcon === "home") {
      return (
        <img src={homeIconBackground} alt="Home Icon" style={iconImageStyle} />
      );
    } else if (selectedIcon === "search") {
      return (
        <img
          src={searchIconBackground}
          alt="Search Icon"
          style={iconImageStyle}
        />
      );
    } else if (selectedIcon === "video") {
      return (
        <img
          src={videoIconBackground}
          alt="Video Icon"
          style={iconImageStyle}
        />
      );
    } else if (selectedIcon === "star") {
      return (
        <img src={starIconBackground} alt="Star Icon" style={iconImageStyle} />
      );
    } else if (selectedIcon === "map") {
      return (
        <img src={mapIconBackground} alt="Map Icon" style={iconImageStyle} />
      );
    }
    return null;
  };

  return (
    <div className="container">
      <div className="row mt-5 pt-5">
        <div className="col-12 mt-5">
          <div className="search-container mx-auto mt-5" style={SearchStyle}>
            <div className="row">
              <div className="col-1"></div>
              <div className="col-2" onClick={() => setSelectedIcon("home")}>
                <FontAwesomeIcon
                  icon={faHome}
                  style={{
                    ...iconStyle,
                    ...(selectedIcon === "home" && selectedIconStyle),
                  }}
                />
              </div>
              <div className="col-2" onClick={() => setSelectedIcon("search")}>
                <FontAwesomeIcon
                  icon={faSearch}
                  style={{
                    ...iconStyle,
                    ...(selectedIcon === "search" && selectedIconStyle),
                  }}
                />
              </div>
              <div className="col-2" onClick={() => setSelectedIcon("video")}>
                <FontAwesomeIcon
                  icon={faVideo}
                  style={{
                    ...iconStyle,
                    ...(selectedIcon === "video" && selectedIconStyle),
                  }}
                />
              </div>
              <div className="col-2" onClick={() => setSelectedIcon("star")}>
                <FontAwesomeIcon
                  icon={faStar}
                  style={{
                    ...iconStyle,
                    ...(selectedIcon === "star" && selectedIconStyle),
                  }}
                />
              </div>
              <div className="col-2" onClick={() => setSelectedIcon("map")}>
                <FontAwesomeIcon
                  icon={faMapMarkerAlt}
                  style={{
                    ...iconStyle,
                    ...(selectedIcon === "map" && selectedIconStyle),
                  }}
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="row mt-5 pt-5" id="home_mobile">
        <div className="col-8 mt-5">
          <div className="h1 mt-5">
            <FontAwesomeIcon icon={faHome} style={sectionIcon} />
          </div>
          <h3 className="mt-4" style={sectionIcon}>
            Decide with confidence
          </h3>
          <p style={pStyle}>
            Get all the information you need to decide with confidence. See the
            menu. See the location. See the hours. See the amenities…it’s a
            business profile. Duh.
          </p>
        </div>
        <div className="col-4">
          <img src={homemobile} alt="Home Mobile" />
          {selectedIcon && renderIconImage()}
        </div>
      </div>
    </div>
  );
}

export default Explore;
