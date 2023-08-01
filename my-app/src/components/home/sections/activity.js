import React, { useState } from "react";

function Activity() {
  const [activeHeading, setActiveHeading] = useState("Nearby");

  const h1Style = {
    fontWeight: 700,
    fontSize: "34px",
    lineHeight: "51px",
    color: "black",
  };

  const h2Style = {
    fontWeight: 500,
    fontSize: "24px",
    lineHeight: "51px",
    color: "black",
    cursor: "pointer",
  };

  const activeStyle = {
    borderBottom: "3px solid #FCD975",
    fontWeight: 700,
  };

  const pStyle = {
    fontSize: "18px",
    fontWeight: 400,
    lineHeight: "22px",
  };

  const handleHeadingClick = (heading) => {
    setActiveHeading(heading);
  };

  return (
    <div className="container mt-5">
      <div className="row mt-5">
        <div className="col-12 mt-5 text-center">
          <h1 className="mt-5" style={h1Style}>
            Recent Activity
          </h1>
        </div>
        <div className="row text-center w-75 mx-auto">
          <div className="col-3"></div>
          <div className="col-2">
            <h1
              className="mt-5"
              style={{
                ...h2Style,
                ...(activeHeading === "Nearby" ? activeStyle : {}),
              }}
              onClick={() => handleHeadingClick("Nearby")}
            >
              Nearby
            </h1>
          </div>
          <div className="col-2">
            <h1
              className="mt-5"
              style={{
                ...h2Style,
                ...(activeHeading === "Friend" ? activeStyle : {}),
              }}
              onClick={() => handleHeadingClick("Friend")}
            >
              Friend
            </h1>
          </div>
          <div className="col-2">
            <h1
              className="mt-5"
              style={{
                ...h2Style,
                ...(activeHeading === "Following" ? activeStyle : {}),
              }}
              onClick={() => handleHeadingClick("Following")}
            >
              Following
            </h1>
          </div>
        </div>
      </div>
      <div className="row">
        <div className="col-12 text-center mt-4">
          <p>All activity from people you follow is shown. Check back soon!</p>
        </div>
        <div className="col-12 text-center mt-4">
          <p>Copyright © 2004–2023 Yuyki</p>
        </div>
      </div>
      

    </div>
  );
}

export default Activity;
