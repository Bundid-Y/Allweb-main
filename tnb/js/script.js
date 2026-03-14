// Koch Script JS
console.log('Koch script loaded');

document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // TNB Home Slider — 6-Slide Carousel (Prev/Next/Dots/Autoplay/Keyboard)
    // Guard: ทำงานเฉพาะหน้าที่มี #tnbHomeSlider เท่านั้น
    // ----------------------------------------------------
    const tnbSliderSection = document.getElementById('tnbHomeSlider');
    if (tnbSliderSection) {
        const slides    = Array.from(tnbSliderSection.querySelectorAll('.tnb-slide'));
        const dots      = Array.from(tnbSliderSection.querySelectorAll('.tnb-dot'));
        const btnPrev   = document.getElementById('tnbSliderPrev');
        const btnNext   = document.getElementById('tnbSliderNext');
        const TOTAL     = slides.length;
        let current     = 0;
        let autoTimer   = null;
        const AUTO_MS   = 8000; // autoplay interval — 8 วินาที

        /** แสดง slide ตาม index, อัปเดต dots */
        function goTo(index) {
            // wrap around
            index = ((index % TOTAL) + TOTAL) % TOTAL;

            // ถอด active ออกจาก slide และ dot ปัจจุบัน
            slides[current].classList.remove('tnb-slide--active');
            dots[current].classList.remove('tnb-dot--active');

            // ตั้งค่า current ใหม่
            current = index;
            slides[current].classList.add('tnb-slide--active');
            dots[current].classList.add('tnb-dot--active');
        }

        /** เริ่ม autoplay */
        function startAuto() {
            stopAuto();
            autoTimer = setInterval(() => goTo(current + 1), AUTO_MS);
        }

        /** หยุด autoplay */
        function stopAuto() {
            if (autoTimer) { clearInterval(autoTimer); autoTimer = null; }
        }

        // Prev button
        if (btnPrev) {
            btnPrev.addEventListener('click', () => {
                goTo(current - 1);
                startAuto(); // reset timer เมื่อคลิก
            });
        }

        // Next button
        if (btnNext) {
            btnNext.addEventListener('click', () => {
                goTo(current + 1);
                startAuto();
            });
        }

        // Dots click
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const idx = parseInt(dot.getAttribute('data-index'), 10);
                goTo(idx);
                startAuto();
            });
        });

        // Keyboard: ← →
        document.addEventListener('keydown', (e) => {
            if (!tnbSliderSection) return;
            if (e.key === 'ArrowLeft')  { goTo(current - 1); startAuto(); }
            if (e.key === 'ArrowRight') { goTo(current + 1); startAuto(); }
        });

        // หยุด autoplay เมื่อ hover (UX)
        tnbSliderSection.addEventListener('mouseenter', stopAuto);
        tnbSliderSection.addEventListener('mouseleave', startAuto);

        // เริ่ม autoplay
        startAuto();
    }

    // ----------------------------------------------------
    // ระบบ Infinite Loop สำหรับ Logo Carousel
    // — Duplicate items เพื่อให้ loop ไม่มีช่องว่าง
    // ----------------------------------------------------
    const carouselTrack = document.querySelector('.carousel-track');
    if (carouselTrack) {
        const items = carouselTrack.querySelectorAll('.carousel-item');
        // Clone ทุก item แล้วเพิ่มต่อท้าย เพื่อให้ CSS translateX(-50%) ทำงานต่อเนื่อง
        items.forEach(item => {
            const clone = item.cloneNode(true);
            carouselTrack.appendChild(clone);
        });
    }

    // ----------------------------------------------------
    // GSAP & Lenis Animations for Quotation Section การ์ดสไลด์ logo ลูกค้า
    // ----------------------------------------------------
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        // Note: SplitText is a GSAP Club plugin, ensure it's loaded if used.
        
        const lenis = new Lenis();
        lenis.on('scroll', ScrollTrigger.update);
        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });
        gsap.ticker.lagSmoothing(0);

        if (document.querySelector('.image-motion')) {
            gsap.set('.image-motion', {
                transform: 'rotatex(90deg)',
            });

            gsap.to('.image-motion', {
                transform: 'rotatex(0deg)',
                scrollTrigger: {
                    trigger: '.section2',
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true,
                    markers: false,
                },
            });
        }

        if (document.querySelector('.section3')) {
            gsap.fromTo('.title', {
                opacity: 0,
                y: 50,
            }, {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '.section3',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse',
                },
            });

            gsap.fromTo('.subtitle', {
                opacity: 0,
                y: 30,
            }, {
                opacity: 1,
                y: 0,
                duration: 0.8,
                delay: 0.3,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '.section3',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse',
                },
            });
        }

        if (document.querySelector('.text-content') && typeof SplitText !== 'undefined') {
            const text = new SplitText('.text', {
                types: 'lines',
                mask: 'lines',
            });

            gsap.fromTo(text.lines, {
                opacity: 0,
                y: 30,
            }, {
                opacity: 1,
                y: 0,
                stagger: 0.2,
                duration: 0.8,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '.text-content',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse',
                },
            });
        }

        if (document.querySelector('.features')) {
            gsap.fromTo('.feature', {
                opacity: 0,
                y: 50,
                scale: 0.9,
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                stagger: 0.2,
                duration: 0.8,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '.features',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse',
                },
            });
        }

        // ----------------------------------------------------
        // GSAP Animations — สี่เหลี่ยมแดงตกแต่ง (Decorative Red Shapes)
        // แต่ละ Section มีอนิเมชั่นไม่ซ้ำกัน
        // ----------------------------------------------------

        // === 8.1 PARTNERS SECTION: สี่เหลี่ยมเลื่อนลงจากบน ===
        const partnersSec = document.querySelector('.section-partners');
        if (partnersSec) {
            gsap.fromTo(partnersSec,
                { '--deco-y': '-100%' },
                {
                    '--deco-y': '0%',
                    duration: 0.8,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: '.section-partners',
                        start: 'top 85%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse',
                    },
                }
            );
        }

        // === 8.2 PRODUCTS SECTION: สี่เหลี่ยมเลื่อนลงจากบน ===
        const productsSec = document.querySelector('.section-products');
        if (productsSec) {
            gsap.fromTo(productsSec,
                { '--deco-y': '-100%' },
                {
                    '--deco-y': '0%',
                    duration: 1.2,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: '.section-products',
                        start: 'top 85%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse',
                    },
                }
            );
        }

        // Removed legacy 8.3 SLIDER SECTION GSAP logic
    }
});

// ----------------------------------------------------
// ระบบฟีเจอร์เลื่อนหน้าจอ (Scrolling Feature Logic for development.php)
// ----------------------------------------------------
if (typeof $ !== 'undefined') {
    $(document).ready(function() {
        // ทำงานเมื่อมีคลาส .development-scroll-container อยู่ในหน้าเท่านั้น
        if ($('.development-scroll-container').length === 0) return;

    // กำหนด URL ของรูปภาพให้ตรงกับ ID ของแต่ละส่วนข้อความ
    const images = {
        'dev-section1': 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg',
        'dev-section2': 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/2fgvaqx-fxs-oskar-krawczyk.jpg',
        'dev-section3': 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/Great_Wave_off_Kanagawa2_cr.jpg'
    };

    const $sections = $('.scroll-text-container section');
    const $stickyImg = $('#sticky-dev-img');
    let currentSection = '';

    // ฟังก์ชันทำงานเวลาเลื่อนหน้าจอ
    function onScroll() {
        // หาจุดกึ่งกลางของหน้าจอเพื่อให้เปลี่ยนรูปเมื่ออ่านถึงตรงกลาง
        var scrollPosition = $(window).scrollTop() + $(window).height() / 2;

        $sections.each(function() {
            var $this = $(this);
            var sectionTop = $this.offset().top;
            var sectionBottom = sectionTop + $this.outerHeight();

            // ตรวจสอบว่าเลื่อนมาจุดที่แสดงส่วนข้อความนี้หรือยัง
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                var id = $this.attr('id');
                
                // เพิ่มคลาส active ให้แสดงข้อความให้ชัดเจนขึ้น
                $sections.removeClass('active-text');
                $this.addClass('active-text');

                // ถ้าเลื่อนเปลี่ยนส่วนข้อความ ให้แสดงอนิเมชั่นเปลี่ยนรูป
                if (currentSection !== id) {
                    currentSection = id;
                    
                    // เฟดภาพออก (เพิ่ม class fade-img)
                    $stickyImg.addClass('fade-img');
                    
                    // หลังจาก 400ms ให้เปลี่ยนรูปและเอาคลาส fade-img ออกเพื่อแสดงรูปใหม่
                    setTimeout(function() {
                        // ดึงรูปภาพจากแท็ก img ที่ซ่อนอยู่ใน HTML ก่อน (ถ้ามี)
                        var dynamicImgUrl = $('#' + id).find('.section-dynamic-image').attr('src');
                        var finalImgUrl = dynamicImgUrl ? dynamicImgUrl : images[id];
                        
                        if (finalImgUrl) {
                            $stickyImg.attr('src', finalImgUrl);
                        }
                        $stickyImg.removeClass('fade-img');
                    }, 400); // 400ms ให้ตรงกับ transition ใน CSS
                }
            }
        });
    }

    // เรียกทำงานตอน scroll และ resize
    $(window).on('scroll resize', onScroll);

    // ทำงานครั้งแรกเพื่อตั้งค่าเริ่มต้น
    setTimeout(onScroll, 100);
});
}

// ----------------------------------------------------
// Expanding Cards Logic (from index.php)
// ----------------------------------------------------
document.addEventListener('DOMContentLoaded', function() {
    // Only run if the relevant element exists on the page
    if (document.querySelector('.Block_Expanding_Cards') === null) return;

    var	doc = document ,
    elemList = Construct_SubElement_List( doc.body ) ,
    len = elemList.length ,
    win = window ,
    i ,
    _Blocks = [] ,
    Card_Expander ;

    for (  i = 0 ; i < len ; i++  ) {
        var	currElem	= elemList[i] ;
        if (  currElem.className && /^Block_Expanding_Cards$/.test( currElem.className )  ) {
            Card_Expander	= new Card_Expander_Obj( currElem ) ;
        }
        if (  currElem.parentNode && /body/i.test( currElem.parentNode.tagName ) && ( /^Block/.test( currElem.className ) || /^Block/.test( currElem.id ) )  )
            _Blocks.push( currElem ) ;
    }

    function	Card_Expander_Obj   (  ElemObjRef  )  {
        var	ELEM		= ElemObjRef ,
            ElemList	= Construct_SubElement_List( ELEM ) , num = ElemList.length , j , k ;

        this.ElemObj		= ELEM ;
        this._Cards		= [] ;
        this.current_index	= 0 ;

        for (  j = 0 ; j < num ; j++  ) {
            var	CE = ElemList[j] ;
            if ( /^US_City_sB/.test( CE.className ) ) {
                var	subElemList	= Construct_SubElement_List( CE ), n2 = subElemList.length ,
                    h1_EO , shade_EO , content_EO , BG_EO ;

                for ( k = 0 ; k < n2 ; k++ ) {
                    if ( /^card_h1/.test( subElemList[k].className ) )			h1_EO		= subElemList[k] ;
                    else if ( /^card_shade/.test( subElemList[k].className ) )	shade_EO		= subElemList[k] ;
                    else if ( /^card_content/.test( subElemList[k].className ) )	content_EO	= subElemList[k] ;
                    else if ( /^card_BG/.test( subElemList[k].className ) )		BG_EO		= subElemList[k] ;
                }

                this._Cards.push( {"EO": CE, "h1_EO": h1_EO, "shade_EO": shade_EO, "content_EO": content_EO, "BG_EO": BG_EO} ) ;

                CE.onclick = function() {
                    if ( this.className.indexOf("_active") > -1 )	return ;
                    Card_Expander._Toggle( parseInt( this.getAttribute("data-card-index") ) ) ;
                } ;
            }
        }

        this._Toggle = function ( new_card_index ) {
            this._Cards[ this.current_index ].EO.className			= "US_City_sB" ;
            this._Cards[ this.current_index ].h1_EO.className		= "card_h1" ;
            this._Cards[ this.current_index ].shade_EO.className		= "card_shade" ;
            this._Cards[ this.current_index ].content_EO.className	= "card_content" ;
            this._Cards[ this.current_index ].BG_EO.className		= "card_BG" ;

            this._Cards[ new_card_index ].EO.className			+= " _active" ;
            this._Cards[ new_card_index ].h1_EO.className		+= " _active" ;
            this._Cards[ new_card_index ].shade_EO.className	+= " _off" ;
            this._Cards[ new_card_index ].content_EO.className	+= " _on" ;
            this._Cards[ new_card_index ].BG_EO.className		+= " _active" ;

            this.current_index	= new_card_index ;
        } ;
    }

    function	Construct_SubElement_List ( ElemObjRef ) {
        var	_ELEM		= ElemObjRef ,
            tmpList		= _ELEM.getElementsByTagName("*") , tmpLen = tmpList.length , k ,
            ELEM_LIST 	= [] ;
        for (  k = 0 ; k < tmpLen ; k++  )		ELEM_LIST.push( tmpList[k] ) ;
        return		ELEM_LIST ;
    }
});





// =========================================
// Login Page Specific Styles & Script
// =========================================

    document.addEventListener('DOMContentLoaded', () => {
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const login_container = document.querySelector(".login-container");

      if (sign_up_btn && sign_in_btn && login_container) {
        sign_up_btn.addEventListener("click", () => {
          login_container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
          login_container.classList.remove("sign-up-mode");
        });
      }
    });

// =========================================
// Product Page Specific Script (Moved from product.php)
// =========================================

let currentLimit = 8;
let currentCategory = 'all';

function filterCategory(category, event) {
    if (event) {
        event.preventDefault();
        // Update active class on menu
        document.querySelectorAll('.category-menu a').forEach(link => {
            link.classList.remove('active');
        });
        event.target.classList.add('active');
    }

    currentCategory = category;
    currentLimit = 8; // Reset limit when filter changes
    updateGrid(false);
}

function updateGrid(isLoadMore = false) {
    const items = document.querySelectorAll('.product-grid-item');
    let delay = 0;
    let visibleCount = 0;
    let totalMatch = 0;

    items.forEach(item => {
        if (!isLoadMore) {
            item.style.animation = 'none'; // reset animation
            item.offsetHeight; // trigger reflow
        }

        const isMatch = (currentCategory === 'all' || item.getAttribute('data-category') === currentCategory);

        if (isMatch) {
            totalMatch++;
            if (visibleCount < currentLimit) {
                if (!isLoadMore || item.style.display !== 'flex') {
                    item.style.display = 'flex';
                    item.style.animation = `fadeIn 0.4s ease ${delay}s forwards`;
                    delay += 0.05; // stagger effect
                }
                visibleCount++;
            } else {
                item.style.display = 'none';
                item.style.animation = 'none';
            }
        } else {
            item.style.display = 'none';
            item.style.animation = 'none';
        }
    });

    // Update Load More button visibility
    const loadMoreContainer = document.querySelector('.load-more-container');
    if (loadMoreContainer) {
        if (totalMatch > currentLimit) {
            loadMoreContainer.style.display = 'block'; // Or 'text-align: center' parent handles it
        } else {
            loadMoreContainer.style.display = 'none';
        }
    }
}

// Initialize default view
document.addEventListener('DOMContentLoaded', () => {
    filterCategory('all', null);

    const loadMoreBtn = document.querySelector('.load-more-btn');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
            currentLimit += 8;
            updateGrid(true);
        });
    }
});


// =========================================
// Menubar Component (component/menubar.php)
// =========================================
document.addEventListener('DOMContentLoaded', () => {
    // Guard: ทำงานเฉพาะหน้าที่มี menubar เท่านั้น
    if (!document.getElementById('header')) return;

    const header = document.getElementById('header');
    const navMenu = document.getElementById('navMenu');
    const navToggle = document.getElementById('navToggle');
    const navClose = document.getElementById('navClose');
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    const navLinks = document.querySelectorAll('.header .nav-list .nav-item > a.nav-link');

    /* ===== Scroll Effect: Header compact เมื่อ scroll ลง ===== */
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        lastScroll = currentScroll;
    }, { passive: true });

    /* ===== ฟังก์ชันเปิดเมนู ===== */
    function openMenu() {
        navMenu.classList.add('show-menu');
        navToggle.classList.add('active');
        document.body.style.overflow = 'hidden'; /* ล็อค scroll เวลาเปิดเมนู */
    }

    /* ===== ฟังก์ชันปิดเมนู ===== */
    function closeMenu() {
        navMenu.classList.remove('show-menu');
        navToggle.classList.remove('active');
        document.body.style.overflow = ''; /* คืน scroll */
    }

    /* ===== Hamburger Toggle — เปิด/ปิดเมนู ===== */
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            if (navMenu.classList.contains('show-menu')) {
                closeMenu();
            } else {
                openMenu();
            }
        });
    }

    /* ===== ปุ่ม ✕ ปิดเมนู ===== */
    if (navClose) {
        navClose.addEventListener('click', () => {
            closeMenu();
        });
    }

    /* ===== คลิกลิงก์เมนูแล้วปิดเมนูอัตโนมัติ (มือถือ) ===== */
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 1024) {
                closeMenu();
            }
        });
    });

    /* ===== Resize: ปิดเมนูอัตโนมัติเมื่อกลับเป็น Desktop ===== */
    window.addEventListener('resize', () => {
        if (window.innerWidth > 1024) {
            closeMenu();
        }
    });

    /* ===== Mobile Dropdown Toggle ===== */
    dropdownItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        if (link) {
            link.addEventListener('click', (e) => {
                if (window.innerWidth > 1024) return;
                e.preventDefault();
                item.classList.toggle('active');
                if (item.classList.contains('active')) {
                    link.style.color = 'var(--primary-color)';
                } else {
                    link.style.color = 'var(--text-color)';
                }
            });
        }
    });
});

/* START: CodePen TruckLoader Component */
document.addEventListener("DOMContentLoaded", function() {
    const truckComponent = document.querySelector('.TruckLoader');
    if (truckComponent) {
        console.log("TruckLoader component initialized correctly.");
        // Component logic would go here if interactions are added in future
    }
});
/* END: CodePen TruckLoader Component */

/* START: CodePen LTR TruckLoader Component */
document.addEventListener("DOMContentLoaded", function() {
    const truckComponentLtr = document.querySelector('.codepen-truck-wrapper-partner .TruckLoader');
    if (truckComponentLtr) {
        console.log("LTR TruckLoader component initialized correctly.");
    }
});
/* END: CodePen LTR TruckLoader Component */
