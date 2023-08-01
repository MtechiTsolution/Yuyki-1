import banner_image from "../../../images/banner_image.png";

function Banner() {
  
  return (
    <>
      <div className="container">
        <div className="row">
          <div className="col-12">
            <div className="image-banner text-center">
              <img src={banner_image} className="mt-1" alt="Logo" />
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default Banner;
