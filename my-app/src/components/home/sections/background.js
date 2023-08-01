import bg_1 from "../../../images/bg_1.png";

function Background() {
  const myStyle = {
    position: "relative",
    left: "-24px",
    top: "-67px",
  };
  return (
    <>
      <div className="container-fluid">
        <div className="row">
          <div className="col-12">
            <div className="background-caontainer">
              <img src={bg_1} style={myStyle} className="mt-1" alt="Logo" />
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default Background;
