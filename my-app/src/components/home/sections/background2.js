import bg_main from "../../../images/bg_main.png"

function Background2() {
  const myStyle = {
    position: "absolute",
    right: "0",
    top: "330px",
  };
  return (
    <>
      <div className="container-fluid">
        <div className="row">
          <div className="col-12">
            <div className="banner_image_container">
              <img src={bg_main} style={myStyle} alt="Logo" />
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default Background2;
