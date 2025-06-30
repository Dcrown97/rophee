@extends('layout.home')
@section('contents')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
            <h1>Welcome to Rophe Hospital</h1>
            {{-- <h2>Get Quality and Affordable Diagnostics, Precision in Lagos.</h2> --}}
            <p>Rophe Hospital, founded February 1st 1990, remains dedicated since <br> inception to providing healthcare
                services with integrity, compassion, <br> ethical professionalism, and an unwavering fear of God.
            </p>
            <a href="#contact" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right" data-aos-easing="linear"
                    data-aos-duration="800">
                    <div class="content">
                        <h3>OUR CORE VALUE:</h3>
                        <p>
                            - Integrity: We believe to uphold the highest standards of integrity in our practice, ensuring
                            transparency, honesty, and accountability in all our interactions. <br>
                            - Godliness: We recognize the importance of spiritual well-being and strive to provide care that
                            respects the dignity and worth of every individual as equally created by the loving God. <br>
                            - Forthrightness: We are committed to doing what is right, fair, and just in all our endeavours.
                        </p>
                        {{-- <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div> --}}
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch" data-aos="fade-left" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            {{-- <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Main Goal</h4>
                                    <p>Our main goal is dedicated to becoming
                                        the premier provider of comprehensive diagnostic services, committed to
                                        delivering accurate care to enhance the
                                        well-being and health outcomes of our patients.</p>
                                </div>
                            </div> --}}
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Vision</h4>
                                    <p>Our Vision To be the renowned hallmark Hospital of Godliness, Forthrightness and
                                        realistic availability as City of Refuge from ill-health to our patrons.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Mission</h4>
                                    <p>Our mission is to give forthright service first to God and then to man, guided by our
                                        core values of integrity, godliness, and forthrightness.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">
                <div
                    class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                </div>

                <div
                    class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3 data-aos="fade-up-left" data-aos-easing="linear" data-aos-duration="700">About Us</h3>
                    {{-- <p data-aos="fade-up-left" data-aos-easing="linear" data-aos-duration="1000">Explore the
                            world of precise medical diagnostics at Cheers Medical Diagnostic Center. Our
                            commitment to excellence ensures accurate results in diagnostic procedures, providing you
                            with the highest quality healthcare.</p> --}}
                    @if (isset($aboutus))
                        @foreach ($aboutus as $about)
                            <div class="" data-aos="fade-up-left" data-aos-easing="linear" data-aos-duration="1000">
                                {{-- <div class="icon"><i class="bx bx-fingerprint"></i></div> --}}
                                {{-- <h4 class="title"><a href="#">{{ $about->title }}</a></h4> --}}
                                <p class="description">{!! $about->content !!}</p>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="icon-box">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="#">Dine Pad</a></h4>
                            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis
                                odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div> --}}

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    {{-- <section id="counts" class="counts">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fas fa-user-md"></i>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Doctors</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="far fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Departments</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Research Labs</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row">
                @if (isset($services))
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="flip-left"
                            data-aos-easing="ease-out" data-aos-duration="2000">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                <h4><a href="#">{{ $service->name }}</a></h4>
                                <p>{!! $service->desc !!}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    {{-- <section id="appointment" class="appointment section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Make an Appointment</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <form action="https://shreyascyber.com/test/Medilab/forms/appointment.php" method="post"
                    role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="phone" id="phone"
                                placeholder="Your Phone" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="datetime" name="date" class="form-control datepicker" id="date"
                                placeholder="Appointment Date" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="department" id="department" class="form-select">
                                <option value="">Select Department</option>
                                <option value="Department 1">Department 1</option>
                                <option value="Department 2">Department 2</option>
                                <option value="Department 3">Department 3</option>
                            </select>
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="doctor" id="doctor" class="form-select">
                                <option value="">Select Doctor</option>
                                <option value="Doctor 1">Doctor 1</option>
                                <option value="Doctor 2">Doctor 2</option>
                                <option value="Doctor 3">Doctor 3</option>
                            </select>
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Make an Appointment</button></div>
                </form>

            </div>
        </section> --}}
    <!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    {{-- <section id="departments" class="departments">
            <div class="container">

                <div class="section-title">
                    <h2>Departments</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            @if (isset($departments))
                                @foreach ($departments as $index => $department)
                                    <li class="nav-item">
                                        <a class="nav-link @if ($index === 0) active @endif"
                                            data-bs-toggle="tab" href="#tab-{{ $index + 1 }}">
                                            {{ $department->title }}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            @if (isset($departments))
                                @foreach ($departments as $index => $department)
                                    <div class="tab-pane @if ($index === 0) active @endif"
                                        id="tab-{{ $index + 1 }}">
                                        <div class="row gy-4">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>{{ $department->title }}</h3>
                                                <p class="fst-italic">{!! $department->content !!}</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="{{ '/storage/' . $department->image }}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    {{-- <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Doctors & Nurses</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img
                                    src="https://shreyascyber.com/test/Medilab/assets/img/doctors/doctors-1.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Medical Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                    <a href="#"><i class="ri-instagram-fill"></i></a>
                                    <a href="#"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img
                                    src="https://shreyascyber.com/test/Medilab/assets/img/doctors/doctors-2.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Anesthesiologist</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                    <a href="#"><i class="ri-instagram-fill"></i></a>
                                    <a href="#"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img
                                    src="https://shreyascyber.com/test/Medilab/assets/img/doctors/doctors-3.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Cardiology</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                    <a href="#"><i class="ri-instagram-fill"></i></a>
                                    <a href="#"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img
                                    src="https://shreyascyber.com/test/Medilab/assets/img/doctors/doctors-4.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Neurosurgeon</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                    <a href="#"><i class="ri-instagram-fill"></i></a>
                                    <a href="#"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
    <!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        @if (isset($faqs))
                            @foreach ($faqs as $index => $faq)
                                <li data-aos="fade-up">
                                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                        class="collapse"
                                        data-bs-target="#faq-list-{{ $index }}">{{ $faq->title }}? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="faq-list-{{ $index }}" class="collapse"
                                        data-bs-parent=".faq-list">
                                        <p>
                                            {!! $faq->content !!}
                                        </p>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </section> --}}
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Patient Testimonials</h2>
            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @if (isset($testimonials))
                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="{{ '/storage/' . $testimonial->image }}" class="testimonial-img"
                                            alt="">
                                        <h3>{{ $testimonial->title }}</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {!! $testimonial->content !!}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">

            <div class="section-title">
                <h2>Gallery</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>
        </div>

        <div class="container-fluid">
            <div class="row g-0">
                @if (isset($galleries))
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="{{ asset('storage' . '/' . $gallery->photo) ?? '' }}" class="galelry-lightbox">
                                    <img data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="700"
                                        src="{{ asset('storage' . '/' . $gallery->photo) ?? '' }}" alt=""
                                        class="img-fluid fixed-gallery-img">
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0774037512297!2d3.3424388735050874!3d6.637309621833378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93e4170b51d9%3A0xcba51893d166c306!2sCheers%20Medical%20Diagnostic!5e0!3m2!1sen!2sng!4v1714986177823!5m2!1sen!2sng"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-4" data-aos="fade-up-right" data-aos-easing="linear" data-aos-duration="700">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Locations:</h4>
                            <p><b>Head Office: </b>23, Anambra Crescent, Agbara Estate, Agbara, Ogun State.</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <div class="text-center">
                                <a href="mailto:: rophehospitalagbara@yahoo.com">rophehospitalagbara@yahoo.com</a>
                                <a href="mailto:: rophehospital@yahoo.co.uk">rophehospital@yahoo.co.uk</a>
                            </div>
                            {{-- <p>medipluspremierhospital@gmail.com</p> --}}
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>09074370650</p>
                            <p>08053003030</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-up-left" data-aos-easing="linear"
                    data-aos-duration="700">
                    @include('flash.flash')
                    <form action="/contact_us" method="POST" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="number" name="phone" class="form-control" id="Phone"
                                    placeholder="+234" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <select class="form-control" name="service" id="select2" required>
                                    <option value="">Select</option>
                                    @forelse ($services as $service)
                                        <option value="{{ $service->name ?? 'None' }}">
                                            {{ $service->name ?? 'None' }}</option>
                                    @empty
                                    @endforelse
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-control" name="service" id="select2" required>
                                <option value="">Select a location</option>
                                @forelse ($locations as $location)
                                    <option value="{{ $location->name ?? 'None' }}">
                                        {{ $location->name ?? 'None' }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->
@endsection
