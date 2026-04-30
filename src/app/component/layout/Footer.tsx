import Link from 'next/link';
import { Mail, Phone, MapPin } from 'lucide-react';

export default function Footer() {
  return (
    <footer className="border-t bg-muted/50 py-12">
      <div className="container max-w-screen-2xl">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
          {/* Company Info */}
          <div>
            {/* <h3 className="font-bold text-lg mb-4">HydraFlow</h3> */}

            <img
              src="/img/Final_Logo.png"
               alt="Kumar Corp Logo"
               className="img-fluid"
               style={{ maxWidth: 100 }}
             />
            
            {/* <p className="text-sm text-muted-foreground mb-4">
              Premium hydration solutions for your active lifestyle.
            </p> */}
            <div className="flex gap-4">
              {/* <a href="#" className="hover:text-primary transition-colors">
                <Facebook className="w-5 h-5" />
              </a>
              <a href="#" className="hover:text-primary transition-colors">
                <Twitter className="w-5 h-5" />
              </a>
              <a href="#" className="hover:text-primary transition-colors">
                <Instagram className="w-5 h-5" /> 
              </a>*/}
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="font-semibold mb-4">Quick Links</h4>
            <nav className="flex flex-col gap-2">
              <Link href="/" className="text-sm text-muted-foreground hover:text-primary transition-colors">
                Home
              </Link>
              <Link href="/product" className="text-sm text-muted-foreground hover:text-primary transition-colors">
                Product
              </Link>
              <Link href="/cart" className="text-sm text-muted-foreground hover:text-primary transition-colors">
                Cart
              </Link>
              <a href="#" className="text-sm text-muted-foreground hover:text-primary transition-colors">
                Privacy Policy
              </a>
            </nav>
          </div>

          {/* Contact */}
          <div>
            <h4 className="font-semibold mb-4">Contact Us</h4>
            <div className="flex flex-col gap-3">
              <a href="mailto:hello@hydraflow.com" className="text-sm text-muted-foreground hover:text-primary transition-colors flex items-center gap-2">
                <Mail className="w-4 h-4" />
                hello@hydraflow.com
              </a>
              <a href="tel:+1-800-123-4567" className="text-sm text-muted-foreground hover:text-primary transition-colors flex items-center gap-2">
                <Phone className="w-4 h-4" />
                +1 (800) 123-4567
              </a>
              <div className="text-sm text-muted-foreground flex items-start gap-2">
                <MapPin className="w-4 h-4 mt-0.5" />
                <span>123 Water Street, San Francisco, CA 94102</span>
              </div>
            </div>
          </div>
        </div>

        <div className="border-t pt-8 flex flex-col md:flex-row justify-between items-center">
          <p className="text-sm text-muted-foreground">
            &copy; 2024 HydraFlow. All rights reserved.
          </p>
          <div className="flex gap-4 mt-4 md:mt-0">
            <a href="#" className="text-sm text-muted-foreground hover:text-primary transition-colors">
              Terms of Service
            </a>
            <a href="#" className="text-sm text-muted-foreground hover:text-primary transition-colors">
              Privacy Policy
            </a>
          </div>
        </div>
      </div>
    </footer>
  );
}


// export default function footer() {
//   return (
//     <div className="footer-section py-5">
//     <div className="container">
//       <div className="row text-center text-lg-start align-items-center gy-4">
//         <div className="col-lg-4 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-start">
//           <div className="me-md-4 mb-3 mb-md-0">
//             <img
//               src="/img/Final_Logo.png"
//               alt="Kumar Corp Logo"
//               className="img-fluid"
//               style={{ maxWidth: 100 }}
//             />
//           </div>
//           <div className="d-flex align-items-center gap-2">
//             {/* <i className="fas fa-globe fa-lg"></i> */}
//           </div>
//         </div>
//         <div className="col-lg-4 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-start">
//           <div className="me-md-4 mb-3 mb-md-0">
//             <ul>
//               <li>
//                 <a href="#">Home</a>
//               </li>
//               <li>
//                 <a href="#worldigo-section">About Us</a>
//               </li>
//               <li>
//                 <a href="terms_conditions.php">Terms &amp; Conditions</a>
//               </li>
//             </ul>
//           </div>
//         </div>
//         <div className="col-lg-4">
//           <div className="d-flex flex-column align-items-center align-items-lg-end text-center text-lg-end">
//             <div className="footer-note small text-muted={true}">
//               ©&nbsp;2026 Worldigo. All rights reserved.
//             </div>
//             <div className="footer-note small text-muted={true}">
//               Created By Mamta Jain.
//             </div>
//           </div>
//         </div>
//       </div>
//     </div>
//   </div>
//   )
// }
