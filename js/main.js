const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener("click", () => {
  if (searchBox.style.top === "72px") {
    searchBox.style.top = "20px";
    searchBox.style.pointerEvents = "none";
    console.log("clicked");
  } else {
    searchBox.style.top = "72px";
    searchBox.style.pointerEvents = "auto";
    console.log("clicked else");
  }
});

menuIcon.addEventListener("click", () => {
  if (slideoutMenu.style.opacity === "1") {
    slideoutMenu.style.opacity = "0";

    slideoutMenu.style.pointerEvents = "none";
  } else {
    slideoutMenu.style.opacity = "1";
    slideoutMenu.style.pointerEvents = "auto";
  }
});

console.log(" href => " + window.location.href);
console.log(" host => " + window.location.host);
console.log(" hostname => " + window.location.hostname);
console.log(" port => " + window.location.port);
console.log(" protocol => " + window.location.protocol);
console.log(" pathname => " + window.location.pathname);
console.log(" hashpathname => " + window.location.hash);
console.log(" search=> " + window.location.search);

if (window.location.pathname === "/wordpress/") {
  const drivesKeyInsights = document.getElementById("drives-key-insights");
  const realTimeAccess = document.getElementById("real-time-access");
  const tailoredVisualReports = document.getElementById(
    "tailored-visual-reports"
  );
  const liDrives = document.getElementById("liDrives");
  const liReal = document.getElementById("liReal");
  const liTailored = document.getElementById("liTailored");

  liReal.addEventListener("click", () => {
    drivesKeyInsights.classList.remove("is-visible");
    liDrives.getElementsByTagName("a")[0].classList.remove("curent");
    realTimeAccess.classList.add("cas-detail", "is-visible");
    liReal.getElementsByTagName("a")[0].classList.add("curent");
    tailoredVisualReports.classList.remove("is-visible");
    liTailored.getElementsByTagName("a")[0].classList.remove("curent");
  });
  liDrives.addEventListener("click", () => {
    drivesKeyInsights.classList.add("cas-detail", "is-visible");
    liDrives.getElementsByTagName("a")[0].classList.add("curent");
    realTimeAccess.classList.remove("is-visible");
    liReal.getElementsByTagName("a")[0].classList.remove("curent");
    tailoredVisualReports.classList.remove("is-visible");
    liTailored.getElementsByTagName("a")[0].classList.remove("curent");
  });
  liTailored.addEventListener("click", () => {
    drivesKeyInsights.classList.remove("is-visible");
    liDrives.getElementsByTagName("a")[0].classList.remove("curent");
    realTimeAccess.classList.remove("is-visible");
    liReal.getElementsByTagName("a")[0].classList.remove("curent");
    tailoredVisualReports.classList.add("cas-detail", "is-visible");
    liTailored.getElementsByTagName("a")[0].classList.add("curent");
  });
}

// Sticky nav in /services

if (window.location.pathname === "/wordpress/services/") {
  // When the user scrolls the page, execute myFunction
  window.onscroll = function() {
    myFunction();
  };

  // Get the navbar
  const servicesNav = document.getElementById("services-nav");

  // Get the offset position of the navbar
  const sticky = servicesNav.offsetTop;

  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      servicesNav.classList.add("sticky-nav");
    } else {
      servicesNav.classList.remove("sticky-nav");
    }
  }
}

//   // Bind click handler to menu items
//   // so we can get a fancy scroll animation
//   menuItems.click(function(e) {
//     var href = $(this).attr("href"),
//       offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
//     $("html, body")
//       .stop()
//       .animate(
//         {
//           scrollTop: offsetTop
//         },
//         850
//       );
//     e.preventDefault();
//   });
// }

// // Bind to scroll
// $(window).scroll(function() {
//   // Get container scroll position
//   var fromTop = $(this).scrollTop() + topMenuHeight;

//   // Get id of current scroll item
//   var cur = scrollItems.map(function() {
//     if ($(this).offset().top < fromTop) return this;
//   });
//   // Get the id of the current element
//   cur = cur[cur.length - 1];
//   var id = cur && cur.length ? cur[0].id : "";

//   if (lastId !== id) {
//     lastId = id;
//     // Set/remove active class
//     menuItems
//       .parent()
//       .removeClass("active")
//       .end()
//       .filter("[href=#" + id + "]")
//       .parent()
//       .addClass("active");
//   }
// });
