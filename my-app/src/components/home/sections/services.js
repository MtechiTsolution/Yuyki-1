import React, { useState } from 'react';
import border from "../../../images/border.png";
import delivery_truck from "../../../images/delivery-truck.png";
import burger from "../../../images/burger.png";
import mexican_hat from "../../../images/mexican-hat.png"
import desert from "../../../images/dessert.png"
import reservation from "../../../images/reservation.png"
import traditional_medicine from "../../../images/traditional-medicine.png"
import spaghetti from "../../../images/spaghetti.png"
import takoyaki from "../../../images/takoyaki.png"

function Services() {
  const [isRestaurantHovered, setIsRestaurantHovered] = useState(false);
  const [isHomeHovered, setIsHomeHovered] = useState(false);
  const [isAutoHovered, setIsAutoHovered] = useState(false);

  const handleRestaurantMouseEnter = () => {
    setIsRestaurantHovered(true);
  };

  const handleRestaurantMouseLeave = () => {
    setIsRestaurantHovered(false);
  };

  const handleHomeMouseEnter = () => {
    setIsHomeHovered(true);
  };

  const handleHomeMouseLeave = () => {
    setIsHomeHovered(false);
  };

  const handleAutoMouseEnter = () => {
    setIsAutoHovered(true);
  };

  const handleAutoMouseLeave = () => {
    setIsAutoHovered(false);
  };

  const H1 = {
    fontSize: "25px",
    fontWeight: "400",
    lineHeight: "38px",
    letterSpacing: "0em",
    color: "#000000",
    fontWeight: "500",
    font: "Poppins",
    textDecoration:"none",
    
  };

  const imgStyle = {
    position: "Relative",
    bottom: "-15px",
    left: "-78px",
  };

  const buttonStyle = {
    backgroundColor: "#FCD975",
    fontSize: "16px",
    fontWeight: "600",
    height: "36px",
  };

  return (
    <div className="container">
      <div className="row mx-auto w-75">
        <div className="col-4 text-center">
          <a
            href="javascript:void(0);"
            id='rest_button'
            onMouseEnter={handleRestaurantMouseEnter}
            onMouseLeave={handleRestaurantMouseLeave}
            className="h3"
            style={H1}
          >
            Restaurants
          </a>
          <img src={border} style={imgStyle} alt="Border"></img>
        </div>
        <div className="col-4 text-center">
          <a
            href="javascript:void(0);"
            id='home_service'
            onMouseEnter={handleHomeMouseEnter}
            onMouseLeave={handleHomeMouseLeave}
            className="h3"
            style={H1}
          >
            Home Services
          </a>
          <img src={border} style={imgStyle} alt="Border"></img>
        </div>
        <div className="col-4 text-center">
          <a
            href="javascript:void(0);"
            id='auto_service'
            onMouseEnter={handleAutoMouseEnter}
            onMouseLeave={handleAutoMouseLeave}
            className="h3"
            style={H1}
          >
            Auto Services
          </a>
          <img src={border} style={imgStyle} alt="Border"></img>
        </div>
        <div className="col-12">
          <div className={isRestaurantHovered ? 'restaurant toggled' : 'd-none'} id="restaurant_service">
          <div className="row mt-3">
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={delivery_truck} className="float-start" alt="Delivery Truck"></img>
                  <span>Delivery</span>
                </button>
              </div>
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={mexican_hat} className="float-start" alt="Mexican Hat"></img>
                  <span>Mexican</span>
                </button>
              </div>
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={desert} className="float-start" alt="Desert"></img>
                  <span>Thai</span>
                </button>
              </div>
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={reservation} className="float-start" alt="Reservation"></img>
                  <span>Reservations</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={burger} className="float-start" alt="Burger"></img>
                  <span>Burgers</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={traditional_medicine} className="float-start" alt="Traditional Medicine"></img>
                  <span>Chinese</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={spaghetti} className="float-start" alt="Spaghetti"></img>
                  <span>Italian</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={takoyaki} className="float-start" alt="Takoyaki"></img>
                  <span>Japanese</span>
                </button>
              </div>
            </div>
          </div>
          <div className={isHomeHovered ? 'home toggled' : 'd-none'} id="home_service">
          <div className="row mt-3">
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={delivery_truck} className="float-start" alt="Delivery Truck"></img>
                  <span>Delivery</span>
                </button>
              </div>
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={mexican_hat} className="float-start" alt="Mexican Hat"></img>
                  <span>Mexican</span>
                </button>
              </div>
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={desert} className="float-start" alt="Desert"></img>
                  <span>Thai</span>
                </button>
              </div>
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={reservation} className="float-start" alt="Reservation"></img>
                  <span>Reservations</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={burger} className="float-start" alt="Burger"></img>
                  <span>Burgers</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={traditional_medicine} className="float-start" alt="Traditional Medicine"></img>
                  <span>Chinese</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={spaghetti} className="float-start" alt="Spaghetti"></img>
                  <span>Italian</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={takoyaki} className="float-start" alt="Takoyaki"></img>
                  <span>Japanese</span>
                </button>
              </div>
            </div>
          </div>
          <div className={isAutoHovered ? 'auto toggled' : 'd-none'} id="auto_service">
          <div className="row mt-3">
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={delivery_truck} className="float-start" alt="Delivery Truck"></img>
                  <span>Delivery</span>
                </button>
              </div>
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={mexican_hat} className="float-start" alt="Mexican Hat"></img>
                  <span>Mexican</span>
                </button>
              </div>
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={desert} className="float-start" alt="Desert"></img>
                  <span>Thai</span>
                </button>
              </div>
              <div className="col-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={reservation} className="float-start" alt="Reservation"></img>
                  <span>Reservations</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={burger} className="float-start" alt="Burger"></img>
                  <span>Burgers</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={traditional_medicine} className="float-start" alt="Traditional Medicine"></img>
                  <span>Chinese</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={spaghetti} className="float-start" alt="Spaghetti"></img>
                  <span>Italian</span>
                </button>
              </div>
              <div className="col-3 mt-3">
                <button
                  className="btn w-100 position-relative"
                  style={buttonStyle}
                >
                  <img src={takoyaki} className="float-start" alt="Takoyaki"></img>
                  <span>Japanese</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Services;
