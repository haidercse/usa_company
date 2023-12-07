<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              {{-- <a class="navbar-brand" href="{{route('frontend.index')}}"><img src="{{asset('frontend/assets/img/2.png')}}" alt="image" ></a> --}}
              <h3>EteQ Consultants<span>.</span></h3>
              <p>
                3050 Post Oak Boulevard Suite 510, <br>Houston, TX 77056, USA<br><br>
                <strong>Phone:</strong> (832) 269-4474<br>
                832-2694474 <br>
                <strong>Email:</strong> info@eteqgroup.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('frontend.index')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('pages', 'about')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('pages', 'services')}}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Testimonials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('pages','portfolio')}}">PortFolio</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

          <div class="col-lg-4 col-md-6 footer-newsletter">
            {{-- <h4>Our Newsletter</h4> --}}
            <p>EteQ Consultance offers an advanced enterprise AI platform that democratizes data science and automates the end-to-end process for building, deploying, and maintaining artificial intelligence and machine learning at scale.</p>
            {{-- <form action="" method="post">
              @csrf
              <input type="email" name="email">
              <input type="submit" value="Subscribe">
            </form> --}}

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>EtQ</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="{{route('frontend.index')}}">Etq Design Team</a>
      </div>
    </div>
  </footer>