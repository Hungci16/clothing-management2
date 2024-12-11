    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link rel="stylesheet" href="asset/fontawesome-free-6.6.0-web/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="asset/css/style.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@100..700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Kalnia:wght@100..700&display=swap"
            rel="stylesheet">
    </head>

    <body>
        <header>
            <div class="main">

                <div class="navbar header-container">
                    <div class="search">
                        <div class="iconsearch">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <a href="">Search</a>
                    </div>

                    <div class="menu">
                        <ul>
                            <li><a href="/">Home</a>

                            </li>
                            <li><a href="/about">About</a>

                            </li>
                            <li><a href="index.html"><img src="asset/img/logo.png" alt="" class="anh"></a></li>

                            <li><a href="/product">Product</a></li>
                            <li><a href="/blog">Blog</a>

                            </li>
                            <li><a href="/contact">Contact</a>

                            </li>
                        </ul>
                    </div>

                    <div class="icon" id="menuIcon">
                        <div class="icon1">
                            <div class="iconsearch1">
                                <i class="fa-solid fa-user">
                                    <ul class="submenu">
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="createaccount/">Sign up</a></li>
                                    </ul>
                                </i>
                            </div>
                            <div class="iconsearch1">
        @php
            // Đảm bảo $cart luôn là một mảng hoặc Countable
            $cart = isset($cart) && (is_array($cart) || $cart instanceof Countable) ? $cart : [];
        @endphp

        {{-- Liên kết đến trang Giỏ hàng --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cart.index') }}">
                <i class="fa-solid fa-cart-shopping"></i>
                @if (count($cart) > 0)
                    <span class="badge">{{ count($cart) }}</span>
                @else
                    <!-- <span class="badge">0</span> -->
                @endif
            </a>
        </li>
    </div>
    <!-- </header> -->

    

                        <div class="iconsearch1">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide active" style="background-image: url('asset/img/banner1.webp');">
            </div>
            <div class="slide" style="background-image: url('asset/img/bannner5.webp');">
            </div>
            <div class="slide active" style="background-image: url('asset/img/banner6.jpg');">
            </div>
            <div class="slide" style="background-image: url('asset/img/banner7.jpeg');">
            </div>
            <section>
        <div class="ourteamh3">
            <div class="team-title">
                <h3 class="title">NEW PRODUCT</h3>
            </div>
        </div>
        <div class="galler">
            <div class="gallery1">
                <div>
                    <span class="image-container">
                        <img src="asset/img/index1.jpg" alt="">
                        <div class="overlay-text">
                            <p><span>2,100,000 VND</span><br>Faded Black Denim Jacket</p>
                        </div>
                    </span>
                    <span class="image-container">
                        <img src="asset/img/index2.jpg" alt="">
                        <div class="overlay-text">
                            <p><span>1,600,000 VND</span><br>Patchwork Denim</p>
                        </div>
                    </span>
                    <span class="image-container">
                        <img src="asset/img/index3.jpg" alt="">
                        <div class="overlay-text">
                            <p><span>1,800,000 VND</span><br>Cropped Wide-Leg Denim Pants </p>
                        </div>
                    </span>
                    <span class="image-container">
                        <img src="asset/img/index4.jpg" alt="">
                        <div class="overlay-text">
                            <p><span>1,900,000 VND</span><br>Faded Black Denim Jacket</p>
                        </div>
                    </span>
                </div>
                <div>
                    <span class="image-container">
                        <img src="asset/img/index1.jpg" alt="">
                        <div class="overlay-text">
                            <p><span>2,100,000 VND</span><br>Faded Black Denim Jacket</p>
                        </div>
                    </span>
                    <span class="image-container">
                        <img src="asset/img/index2.jpg" alt="">
                        <div class="overlay-text">
                            <p><span>1,600,000 VND</span><br>Patchwork Denim</p>
                        </div>
                    </span>
                    <span class="image-container">
                        <img src="asset/img/index3.jpg" alt="">
                        <div class="overlay-text">
                            <p><span>1,800,000 VND</span><br>Cropped Wide-Leg Denim Pants </p>
                        </div>
                    </span>

                    <span class="image-container">
                        <img src="asset/img/index4.jpg" alt="">
                        <div class="overlay-text">
                            <p><span>1,900,000 VND</span><br>Faded Black Denim Jacket</p>
                        </div>
                    </span>
                </div>
            </div>

        </div>
    </section>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    <section>
        <!-- carousel -->
        <div class="carousel">
            list item
            <div class="list">
                <div class="item">
                    <img src="asset/img/bannerindex.png">
                    <!-- <img src="assets/img/home1.png"> -->
                    <div class="content">
                        <!-- <div class="author">BEAUTY</div> -->
                        <div class="title">Discover the world of premium relaxation <br>where your soul finds peace
                        </div>
                        <!-- <div class="topic">CENTER</div> -->
                        <div class="des">
                            <!-- lorem 50 -->
                            we offer exceptional spa treatments, from relaxing massages to deep skin care, helping you
                            melt away
                            stress and regain balance in your life. Let us take care of you and provide the ultimate
                            experience.
                        </div>
                        <div class="buttons">
                            <button>SEE MORE</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="asset/img/aboutbanner.jpg">
                    <div class="content">
                        <!-- <div class="author">BEAUTY</div> -->
                        <div class="title">The Perfect Journey of Self-Care - Where You Can Relax and Beautify</div>
                        <!-- <div class="topic">CENTER</div> -->
                        <div class="des">
                            <!-- lorem 50 -->
                            we believe that self-care is not just a hobby but a way of life. Join us to experience
                            high-quality spa
                            services and find peace of mind. Book your appointment today and start your self-care
                            journey!
                        </div>
                        <div class="buttons">
                            <button>SEE MORE</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="asset/img/productbanner.jpg">
                    <div class="content">
                        <!-- <div class="author">BEAUTY</div> -->
                        <div class="title">Experience Wonderful Moments of Relaxation - A Paradise of Comfort and Beauty
                        </div>
                        <!-- <div class="topic">CENTER</div> -->
                        <div class="des">
                            <!-- lorem 50 -->
                            we offer a range of exclusive spa treatments to provide you with the most wonderful moments
                            of
                            relaxation. With a luxurious atmosphere and a dedicated team, we will help you banish
                            worries and feel
                            rejuvenated.
                        </div>
                        <div class="buttons">
                            <button>SEE MORE</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="asset/img/pr9.jpg">
                    <div class="content">
                        <!-- <div class="author">BEAUTY</div> -->
                        <div class="title">Reach the Relaxation Paradise with Beauty Care Treatments</div>
                        <!-- <div class="topic">CENTER</div> -->
                        <div class="des">
                            <!-- lorem 50 -->
                            Explore a serene spa space with professional skin care and massage therapies at [Spa Name].
                            We are
                            committed to providing you with safe and effective experiences that help you recharge and
                            renew
                            yourself.
                        </div>
                        <div class="buttons">
                            <button>SEE MORE</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- list thumnail -->
            <div class="thumbnail">
                <div class="item">
                    <img src="assets/img/bnn1.png">
                    <div class="content">
                        <div class="title">
                            Discover the world
                        </div>
                        <div class="description">
                            Spa treatments
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/bnn3.png">
                    <div class="content">
                        <div class="title">
                            Relax and Beautify
                        </div>
                        <div class="description">
                            Spa services
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/bnn2.png">
                    <div class="content">
                        <div class="title">
                            Comfort and Beauty
                        </div>
                        <div class="description">
                            Spa treatments
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/bnn4.jpg">
                    <div class="content">
                        <div class="title">
                            Beauty Care Treatment
                        </div>
                        <div class="description">
                            Skin care
                        </div>
                    </div>
                </div>
            </div>
            <!-- next prev -->
            <div class="arrows">
                <button id="prev">
                    < </button>
                        <button id="next">></button>
            </div>
            <!-- time running -->
            <!-- <div class="time"></div> -->
        </div>
    </section>
    <footer class="footer">
        <div class="footer-section logo">
            <h1>GN</h1>
            <p>The Devil Nest</p>
        </div>
        <div class="footer-section contact">
            <h3>CONTACT</h3>
            <p>+123456789</p>
            <p>thedevilnestvietnam.com</p>
            <p>88 Tran Nguyen Han, Hai Phong, Viet Nam</p>
        </div>
        <div class="footer-section openhours">
            <h3>OPENHOURS</h3>
            <p>Weekdays: 9:00 AM - 20:30 PM</p>
            <p>Monday: 9:00 AM - 19:00 PM</p>
            <p>Sunday: Closed</p>
        </div>
        <div class="footer-section subscribe">
            <h3>CONTACT</h3>
            <form action="#">
                <input type="email" placeholder="Your email" class="email-input">
                <button type="submit">→</button>
            </form>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            </div>
        </div>
    </footer>
</body>
<script src="asset/js/app.js"></script>

<script>
    //slide
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    const indexItems = document.querySelectorAll('.index-item');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });

        // Cập nhật trạng thái cho index-item
        const activeItem = document.querySelector('.itemactive');
        if (activeItem) {
            activeItem.classList.remove('itemactive');
        }
        document.querySelector('.index-item-' + currentSlide).classList.add('itemactive');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides; // Quay vòng lại slide đầu tiên khi hết danh sách
        showSlide(currentSlide);
    }

    // Gán sự kiện click cho các index-item
    indexItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            currentSlide = index; // Cập nhật chỉ số slide hiện tại
            showSlide(currentSlide); // Hiển thị slide tương ứng
        });
    });

    // Bắt đầu slideshow và thay đổi ảnh mỗi 5 giây
    setInterval(nextSlide, 5000);

    // Hiển thị slide đầu tiên khi trang tải
    showSlide(currentSlide);



    let currentIndex = 0;
    const testimonials = document.querySelectorAll('.testimonial-container');
    const dots = document.querySelectorAll('.dot');

    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.classList.remove('active', 'previous', 'next');
            dots[i].classList.remove('active'); // Loại bỏ active ở tất cả các chấm
            if (i === index) {
                testimonial.classList.add('active');
                dots[i].classList.add('active'); // Đánh dấu chấm tròn active
            } else if (i < index) {
                testimonial.classList.add('previous');
            } else {
                testimonial.classList.add('next');
            }
        });
    }

    function nextTestimonial() {
        currentIndex++;
        if (currentIndex >= testimonials.length) {
            currentIndex = 0;
        }
        showTestimonial(currentIndex);
    }

    function prevTestimonial() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = testimonials.length - 1;
        }
        showTestimonial(currentIndex);
    }

    function currentTestimonial(index) {
        currentIndex = index;
        showTestimonial(currentIndex);
    }

    // Initialize slider
    showTestimonial(currentIndex);

    // Auto-slide every 5 seconds
    setInterval(nextTestimonial, 5000);

    //scroll
    let scrollContainer = document.querySelector(".gallery1");
    let autoScrollSpeed = 1; // Tốc độ cuộn
    let isScrolling = false;
    let scrollDirection = 0; // -1 cho trái, 1 cho phải

    // Hàm bắt đầu cuộn theo hướng
    function startScroll(direction) {
        if (!isScrolling) {
            isScrolling = true;
            scrollDirection = direction;
            requestAnimationFrame(autoScroll);
        }
    }

    // Hàm dừng cuộn
    function stopScroll() {
        isScrolling = false;
    }

    // Hàm cuộn tự động theo hướng
    function autoScroll() {
        if (isScrolling) {
            scrollContainer.scrollLeft += scrollDirection * autoScrollSpeed;
            requestAnimationFrame(autoScroll); // Lặp lại hàm này cho cuộn liên tục
        }
    }

    // Sự kiện để xác định hướng cuộn dựa trên vị trí chuột
    scrollContainer.addEventListener("mousemove", (evt) => {
        let containerWidth = scrollContainer.offsetWidth;
        let mouseX = evt.clientX - scrollContainer.getBoundingClientRect().left;

        if (mouseX < containerWidth / 2) {
            startScroll(-1); // Chuột nằm bên trái, cuộn sang trái
        } else {
            startScroll(1); // Chuột nằm bên phải, cuộn sang phải
        }
    });

    // Khi chuột rời khỏi container, dừng cuộn
    scrollContainer.addEventListener("mouseleave", stopScroll);
    
</script>
</body>
</html>
