
    $(document).ready(function () {
        // Initialize the carousel
        var carousel = $("#blogSlide1");

        // Previous Button
        $(".btn-prev").click(function () {
            carousel.slick('slickPrev');
        });

        // Next Button
        $(".btn-next").click(function () {
            carousel.slick('slickNext');
        });

        // Initialize the carousel with your options
        carousel.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false, // Set to false since we're handling with custom buttons
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });

    $(document).ready(function () {
        // Initialize the carousel
        var carousel = $("#partenaire");

        // Previous Button
        $(".btn-prev-partner").click(function () {
            carousel.slick('slickPrev');
        });

        // Next Button
        $(".btn-next-partner").click(function () {
            carousel.slick('slickNext');
        });

        // Initialize the carousel with your options
        carousel.slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false, // Set to false since we're handling with custom buttons
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });

    $(document).ready(function () {
        // Initialize the carousel
        var gallerySlider = $("#gallerySlider");

        // Previous Button
        $(".btn-prev-gallery").click(function () {
            gallerySlider.slick('slickPrev');
        });

        // Next Button
        $(".btn-next-gallery").click(function () {
            gallerySlider.slick('slickNext');
        });

        // Initialize the carousel with your options
        gallerySlider.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });

    $(document).ready(function () {
        // Initialize the carousel
        var heroSlider = $(".hero-slider-2");

        // Middle Previous Button
        $(".btn-prev-middle").click(function () {
            var currentSlide = heroSlider.slick('slickCurrentSlide');
            var middleSlide = Math.floor(heroSlider.slick('getSlick').slideCount / 2);
            if (currentSlide > middleSlide) {
                heroSlider.slick('slickPrev');
            }
        });

        // Middle Next Button
        $(".btn-next-middle").click(function () {
            var currentSlide = heroSlider.slick('slickCurrentSlide');
            var middleSlide = Math.floor(heroSlider.slick('getSlick').slideCount / 2);
            if (currentSlide < middleSlide) {
                heroSlider.slick('slickNext');
            }
        });

        // Initialize the carousel with your options
        heroSlider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: false
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const postLinks = document.querySelectorAll('.post-link');
        
        postLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const seoTitle = this.getAttribute('data-seo-title');
                const metaDescription = this.getAttribute('data-meta-description');
                const metaKeywords = this.getAttribute('data-meta-keywords');

                document.title = seoTitle;
                updateMetaTag('description', metaDescription);
                updateMetaTag('keywords', metaKeywords);

                window.location.href = this.href;
            });
        });

        function updateMetaTag(name, content) {
            let metaTag = document.querySelector(`meta[name="${name}"]`);
            if (metaTag) {
                metaTag.setAttribute('content', content);
            } else {
                metaTag = document.createElement('meta');
                metaTag.setAttribute('name', name);
                metaTag.setAttribute('content', content);
                document.head.appendChild(metaTag);
            }
        }
    });
