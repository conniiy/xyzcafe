"use strict";

/*---------- ハンバーガーメニュー ----------*/
const hamburger = document.querySelector(".js_hamburger");
const navigation = document.querySelector(".js_navigation");
const body = document.querySelector(".js_body");



//ハンバーガーをクリックしたら
hamburger.addEventListener("click", () => {
  //それぞれに対してis-activeクラスをつけ外しする
    hamburger.classList.toggle("is-active");
    navigation.classList.toggle("is-active");
    body.classList.toggle("is-active");
  });


  // const navLinks = document.querySelectorAll(".l_header-nav_link");
  // navLinks.forEach(navLink => {
  //     navLink.addEventListener("click", () => {
  //         hamburger.classList.remove("is-active");
  //         navigation.classList.remove("is-active");
  //         body.classList.remove("is-active");
  //     });
  // });



  

  const slideshow = new Swiper('.swiper', {
    speed: 1200,
    effect: "fade",
    autoplay: {
      delay: 1400,
      disableOnInteraction: false,
    },
  });


  // おすすめ



  gsap.from(".js_style", {
    y:80 ,
    autoAlpha: 0,
    duration: 0.8,
    ease: "Power4.inOut",
    scrollTrigger: {
      trigger: ".js_style-trigger",
      start: "top center",
      // 発火するスクロール位置や終了位置をマーカーする
    },
    stagger: {
      // each: 指定した時間が経過された時に次の要素のアニメーションを開始する
      each: 0.4,
      // amount: アニメーションの総時間（eachかamountのどちらかを指定する）
      // amount: 1,
      from: "start",
      // 順番に表示する際のアニメーションスピード
      // ease: "bounce"
    },
  });








// メニュー

gsap.from(".js_menu_food-list", {
  y: 100,
  autoAlpha: 0,
  duration: 0.8,
  ease: "Power4.inOut",
  scrollTrigger: {
    trigger: ".js_menu-trigger",
    start: "top center",
    // 発火するスクロール位置や終了位置をマーカーする
    // markers: true,
  },
  stagger: {
    // each: 指定した時間が経過された時に次の要素のアニメーションを開始する
    each: 0.2,
    // amount: アニメーションの総時間（eachかamountのどちらかを指定する）
    // amount: 1,
    from: "start",
    // 順番に表示する際のアニメーションスピード
    // ease: "bounce"
  },
});

gsap.from(".js_menu_drink-list", {
  y: 100,
  autoAlpha: 0,
  duration: 0.8,
  ease: "Power4.inOut",
  scrollTrigger: {
    trigger: ".js_menu-trigger",
    start: "top center",
    // 発火するスクロール位置や終了位置をマーカーする
    // markers: true,
  },
  stagger: {
    // each: 指定した時間が経過された時に次の要素のアニメーションを開始する
    each: 0.2,
    // amount: アニメーションの総時間（eachかamountのどちらかを指定する）
    // amount: 1,
    from: "start",
    // 順番に表示する際のアニメーションスピード
    // ease: "bounce"
  },
});


//

gsap.from(".js_morning", {
  y: 80,
  autoAlpha: 0,
  ease: "Power4.inOut",
  scrollTrigger: {
    trigger: ".menu_morning_trigger",
    start: "top center",
  }
});

gsap.from(".js_lunch", {
  y: 80,
  autoAlpha: 0,
  ease: "Power4.inOut",
  scrollTrigger: {
    trigger: ".menu_lunch_trigger",
    start: "top center",
  }
});


gsap.from(".js_others", {
  y: 80,
  autoAlpha: 0,
  ease: "Power4.inOut",
  scrollTrigger: {
    trigger: ".menu_others_trigger",
    start: "top center",
  }
});


gsap.from(".js_desserts", {
  y: 80,
  autoAlpha: 0,
  ease: "Power4.inOut",
  scrollTrigger: {
    trigger: ".menu_desserts_trigger",
    start: "top center",
  }
});


gsap.from(".js_drink", {
  y: 80,
  autoAlpha: 0,
  ease: "Power4.inOut",
  scrollTrigger: {
    trigger: ".menu_drink_trigger",
    start: "top center",
  }
});






//

window.addEventListener("scroll", function () {
  // ヘッダーを変数の中に格納する
  const header = document.querySelector(".js_header");
  // 100px以上スクロールしたらヘッダーに「scroll-nav」クラスをつける
  header.classList.toggle("is-active", window.scrollY > document.documentElement.clientHeight);
  
});


// window.addEventListener("scroll", function () {
//   // ヘッダーを変数の中に格納する
//   const main = document.querySelector(".js_main");
//   // 100px以上スクロールしたらヘッダーに「scroll-nav」クラスをつける
//   main.classList.toggle("is-active", window.scrollY > document.documentElement.clientHeight);

  
// });


