import message from "../../../images/message.png";
import notification from "../../../images/notification.png";

function Header() {

  const myStyle = {
    paddingTop: "30px", // Add padding to the top only
  };

  return (
    <div className="header">
      <div className="container">
        <div className="row">
          <div className="col-12 col-sm-6 col-md-2"></div>
          <div className="col-12 col-sm-6 col-md-6"  style={myStyle}>
            <a className="nav_li me-4 mt-2" href="javascript:void(0);">
              Yuyki for Business
            </a>
            <a
              className="nav_li ms-sm-5 mt-2 mt-sm-0"
              href="javascript:void(0);"
            >
              Share your experiences
            </a>
          </div>
          <div className="col-12 col-sm-6 col-md-4 pt-4 text-center">
            <img src={message} className="mt-1" alt="Logo" />
            <img className="ms-4 mt-2 mt-sm-0" src={notification} alt="Logo" />
            <div className="btn-group ms-4 mt-2 mt-md-0">
              <a href="javascript:void(0);" className="btn btn_sign_in p-2">
                Sign in
              </a>
              <a href="javascript:void(0);" className="btn btn_login p-2">
                Login
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Header;
