import apple from "../../../images/apple.png";

import android from "../../../images/android.png";

function Download_banner() {
  const backgrounStyle = {
    backgroundColor: "#FCD975",
    height: "400px",
  };

  const h1Style = {
    fontSize: "35px",
    fontWeight: 700,
    lineHeight: "60px",
    textAlign: "center",
    color: "black",
  };

  const h4Style = {
    fontSize: "22px",
    fontWeight: 300,
    lineHeight: "60px",
    textAlign: "center",
    color: "black",
  };

  return (
    <div className="background-color mt-5" style={backgrounStyle}>
      <div className="container">
        <div className="row">
          <div className="col-4"></div>
          <div className="col-4 text-center">
            <h3 className="mt-3" style={h1Style}>
              Download Yuyki the app today
            </h3>
          </div>
          <div className="col-4"></div>
        </div>
        <div className="row">
          <div className="row">
            <div className="col-1 d-none d-lg-block"></div>
            <div className="col-3">
              <img src={android}></img>
            </div>
            <div className="col-3"></div>
            <div className="col-3">
              <img src={android}></img>
            </div>
          </div>
        </div>
        <div className="row">
          <div className="col-4"></div>
          <div className="col-4 text-center">
            <h3 className="mt-5" style={h4Style}>
              Want to chat someone? Click here{""}
            </h3>
          </div>
          <div className="col-4"></div>
        </div>
      </div>
    </div>
  );
}

export default Download_banner;
