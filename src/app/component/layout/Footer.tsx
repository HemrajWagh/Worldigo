

export default function footer() {
  return (
    <div className="footer-section py-5">
    <div className="container">
      <div className="row text-center text-lg-start align-items-center gy-4">
        <div className="col-lg-4 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-start">
          <div className="me-md-4 mb-3 mb-md-0">
            <img
              src="/img/Final_Logo.png"
              alt="Kumar Corp Logo"
              className="img-fluid"
              style={{ maxWidth: 100 }}
            />
          </div>
          <div className="d-flex align-items-center gap-2">
            {/* <i className="fas fa-globe fa-lg"></i> */}
          </div>
        </div>
        <div className="col-lg-4 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-start">
          <div className="me-md-4 mb-3 mb-md-0">
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#worldigo-section">About Us</a>
              </li>
              <li>
                <a href="terms_conditions.php">Terms &amp; Conditions</a>
              </li>
            </ul>
          </div>
        </div>
        <div className="col-lg-4">
          <div className="d-flex flex-column align-items-center align-items-lg-end text-center text-lg-end">
            <div className="footer-note small text-muted={true}">
              ©&nbsp;2026 Worldigo. All rights reserved.
            </div>
            <div className="footer-note small text-muted={true}">
              Created By Mamta Jain.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  )
}
