
import food from "../../../images/food.png"

import car from "../../../images/car.png"

import cleaning from "../../../images/cleaning-service.png"

import makeup from "../../../images/makeup.png"

function Categories() {
  const h1Style = {
    fontWeight: 700,
    fontSize: "34px",
    lineHeight: "51px",
    color: "black",
  };

  const circleStyle = {
    width:  "141px",
    height: "141px",
    boxShadow : "0px 0px 3px 1px",
    borderRadius: "50%",
  };

  const imgStyle = {

    marginTop: "35px",
  }

  const categoryStyle = {

    boxShadow: '0px 8px 8px rgba(252, 217, 117, 0.5)',

  }

  return (
    <div className="container py-4 mb-5" style={categoryStyle}>
      <div className="row">
        <div className="col-12 text-center">
          <h1 className="mt-5" style={h1Style}>
            Categories
          </h1>
        </div>
        <div className="col-3 text-center mt-5">
          <div className="circle ms-5" style={circleStyle}>
            <img src={food} style={imgStyle}></img>
          </div>
        </div>
        <div className="col-3 text-center mt-5">
          <div className="circle ms-5" style={circleStyle}>
            <img src={car} style={imgStyle}></img>
          </div>
        </div>
        <div className="col-3 text-center mt-5">
          <div className="circle ms-5" style={circleStyle}>
            <img src={cleaning} style={imgStyle}></img>
          </div>
        </div>
        <div className="col-3 text-center mt-5">
          <div className="circle ms-5" style={circleStyle}>
            <img src={makeup} style={imgStyle}></img>
          </div>
        </div>
        <div className="col-3 text-center mt-5">
          <div className="circle ms-5" style={circleStyle}>
            <img src={food} style={imgStyle}></img>
          </div>
        </div>
        <div className="col-3 text-center mt-5">
          <div className="circle ms-5" style={circleStyle}>
            <img src={car} style={imgStyle}></img>
          </div>
        </div>
        <div className="col-3 text-center mt-5">
          <div className="circle ms-5" style={circleStyle}>
            <img src={cleaning} style={imgStyle}></img>
          </div>
        </div>
        <div className="col-3 text-center mt-5">
          <div className="circle ms-5" style={circleStyle}>
            <img src={makeup} style={imgStyle}></img>
          </div>
        </div>
       
        
      </div>
    </div>
  );
}

export default Categories;
