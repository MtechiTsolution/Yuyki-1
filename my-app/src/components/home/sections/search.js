import React, { useState } from "react";
import search_icon from "../../../images/search_icon.png";

function Search() {
  const [isHovered, setIsHovered] = useState(false); // State For Using Hover

  const defaultStyle = {
    padding: "25px", // Add padding to the top only
    zIndex: 100, // Set the z-index to 1
    width: "100%",
    paddinLeft:"100px", // Set the width to 100% to take full width on mobile
    height: "46px", // Set the height to 46 pixels
    borderRadius: "25px", // Set the border radius to 25 pixels
    backgroundColor: "#FCD975",
    border: "none",
    boxSizing: "border-box", // To include padding and border in the total width
  };

  const hoverStyle = {
    outline: "none", // Add outline none on hover
  };

  const iconStyle = {
    position: "relative",
    bottom: "40px",
    left: "8px",
  };

  const handleMouseEnter = () => {
    setIsHovered(true);
  };

  const handleMouseLeave = () => {
    setIsHovered(false);
  };

  const combinedStyles = isHovered
    ? { ...defaultStyle, ...hoverStyle }
    : defaultStyle;

  return (
    <div className="container">
      <div className="row mt-5 pt-5">
        <div className="col-12 mt-5">
          <div className="search-container w-75 mx-auto mt-5">
            <input
              type="text"
              className="w-100 mt-5"
              style={combinedStyles}
              onMouseEnter={handleMouseEnter}
              onMouseLeave={handleMouseLeave}
            ></input>
            <img src={search_icon} style={iconStyle} alt="Search" />
          </div>
        </div>
      </div>
    </div>
  );
}

export default Search;
