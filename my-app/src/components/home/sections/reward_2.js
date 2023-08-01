import React from 'react';
import reward from "../../../images/reward.png";
import opop from "../../../images/opop.png";
import Background from "./background";

function Reward() {
  const h1Style = {
    fontSize: "40px",
    fontWeight: 700,
    lineHeight: "60px",
    letterSpacing: "0em",
    color: "black",
  };

  const pStyle = {
    fontSize: "24px",
    fontWeight: 300,
    lineHeight: "29px",
    letterSpacing: "0em",
  };

  const pStyle2 = {
    fontSize: "24px",
    fontWeight: 300,
    lineHeight: "29px",
    letterSpacing: "0em",
  };

  const btnStyle = {
    background: "#D9D9D9",
    color: "black",
    fontSize: "24px",
    fontWeight: 700,
    lineHeight: "36px",
    transition: "background 0.3s, color 0.3s", // Add transition for smooth color change on hover
  };

  // Add a hover style for the button
  const btnHoverStyle = {

  };

  return (
    <div className="container mt-5">
      <div className="row mt-5">
      <div className="col-4 mt-5">
          <img src={opop} alt="OPop Image" />
        </div>
        <div className="col-8 mt-5 mt-5">
          <h2 style={h1Style}>Get Reward to Support Local</h2>
          <p style={pStyle} className="mt-4">
            We’re all about supporting local, so we’ve built a few ways for you
            to get rewarded for trying out new spots, and spotlighting some of
            your favorites.
          </p>
          <div className="row">
            <div className="col-12">
              <div className="row mt-5">
                <div className="col-1">
                  <img src={reward} alt="Reward Icon" />
                </div>
                <div className="col-11">
                  <p className="mt-2" style={pStyle2}>
                    Offers - get discounts at local spots when you check in
                  </p>
                </div>
              </div>
              <div className="row mt-5">
                <div className="col-1">
                  <img src={reward} alt="Reward Icon" />
                </div>
                <div className="col-11">
                  <p className="mt-2" style={pStyle2}>
                    Offers - get discounts at local spots when you check in
                  </p>
                </div>
              </div>
              <div className="row mt-5">
                <div className="col-1">
                  <img src={reward} alt="Reward Icon" />
                </div>
                <div className="col-11">
                  <p className="mt-2" style={pStyle2}>
                    Offers - get discounts at local spots when you check in
                  </p>
                </div>
              </div>
              <div className="row">
                <div className="col-12">
                  <a
                    href="javascript:void(0);"
                    className="btn btn-secondary px-5 mt-5 border-0 ms-5"
                    style={{ ...btnStyle, ...btnHoverStyle }} // Merge the styles based on hover
                  >
                    Get Yuyki
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  );
}

export default Reward;
