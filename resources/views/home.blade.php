@extends('layouts.frontend')    
@section('content') 

            <div class="slide active" style="background-image: url('asset/img/banner1.webp');">
            </div>
            <div class="slide" style="background-image: url('asset/img/bannner5.webp');">
            </div>
            <div class="slide active" style="background-image: url('asset/img/banner6.jpg');">
            </div>
            <div class="slide" style="background-image: url('asset/img/banner7.jpeg');">
            </div>

            <div class="fashion-section">
                <div class="fashion-overlay"></div>
                <div class="fashion-content">
                    <h1>Find The Best Fashion Style For You</h1>
                    <p>
                        Fashion is an indispensable part of modern life, not just a collection of garments
                        that cover the body, but also a way to express individuality, style, and personal aesthetic.
                        From classic designs to contemporary trends, fashion is constantly evolving, reflecting
                        changes in time, culture, and society.
                    </p>
                    <a href="/product" class="fashion-btn">Shop Now</a>
                </div>
            </div>
            <div class="index-images">
                <div class="index-item index-item-0 itemactive"></div>
                <div class="index-item index-item-1"></div>
                <div class="index-item index-item-2"></div>
                <div class="index-item index-item-3"></div>
            </div>

        </div>
    </header>
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

    <section>
        <div class="container">
            <div class="text-content">
                <h1><span>Ne</span>w Collections</h1>
                <p>In a striking fashion feature captured by <u>Carmelo Donato</u>, FGR’s latest exclusive focuses
                    on denim, with models <u>Alina Enders</u> and <u>Jette</u> taking the spotlight. Stylist <u>Emma
                        Brown</u> curates a collection that remixes denim staples, from jean jackets to
                    high-waisted skirts and bustier tops.</p>
                <a href="#" class="details-btn">Details</a>
            </div>

            <div class="image-section">
                <img src="asset/img/index5.jpg" alt="Model in denim outfit" class="image-bottom">
                <img src="asset/img/index6.jpg" alt="Model posing in denim" class="image-top">
            </div>
            <div class="circle small"></div>
            <div class="circle medium"></div>
            <div class="circle large"></div>
            <div class="circle large2"></div>
            <div class="circle large1"></div>
        </div>
    </section>

    <section>
        <div class="img-decorate">

            <div class="img-deco" style="background-image: url(asset/img/index7.png);">
                <div class="img-h1">
                    <h1>The special offers</h1>
                </div>
                <div class="img-text">
                    <h3>SALE UP TO 35%</h3>
                    <button>Details</button>
                </div>
            </div>
        </div>
    </section>


   


    <div class="container my-5">
    <h3 class="text-center mb-5 text-uppercase font-weight-bold" style="color: #343a40;">Our Products</h3>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-img-container position-relative">
                        <img 
                            src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300x200' }}" 
                            class="card-img-top" 
                            alt="{{ $product->name }}" 
                            style="height: 200px; object-fit: cover; border-radius: 5px 5px 0 0;">
                        <div class="badge badge-primary position-absolute" style="top: 10px; left: 10px;">
                            {{ number_format($product->price, 0, ',', '.') }} VND
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-truncate" title="{{ $product->name }}" style="font-weight: bold; color: #343a40;">
                            {{ $product->name }}
                        </h5>
                        <p class="card-text text-muted" style="font-size: 14px;">
                        <p><strong>Mã sản phẩm:</strong> {{ $product->product_code }}</p>                        </p>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary btn-sm px-4">View Details</a>
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm px-4">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .card-img-container {
        position: relative;
    }

    .badge-primary {
        background-color: #007bff;
        color: #fff;
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 20px;
    }

    .card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-primary:hover {
        background-color: #495057;
        border-color: #495057;
    }
</style>
@endsection




    
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

</html>