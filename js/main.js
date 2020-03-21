const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener("click", () => {
  console.log(searchBox.style.display);
  if (searchBox.style.display === "block") {
    searchBox.style.display = "none";
    searchBox.style.pointerEvents = "none";
  } else {
    searchBox.style.display = "block";
    searchBox.style.pointerEvents = "auto";
  }
});

menuIcon.addEventListener("click", () => {
  if (slideoutMenu.style.display === "block") {
    slideoutMenu.style.display = "none";

    slideoutMenu.style.pointerEvents = "none";
  } else {
    slideoutMenu.style.display = "block";
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
    changeActiveSection();
  };

  // Get the navbar
  const servicesNav = document.getElementById("services-nav");
  // Get div containing the sections
  const servicesSection = document.querySelector(
    ".services-section__container"
  );

  // Get the offset position of the navbar
  const sticky = servicesNav.offsetTop;
  // Calculate the end of the sections
  servicesSection.offsetBottom =
    servicesSection.offsetTop + servicesSection.offsetHeight;

  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (
      window.pageYOffset + 100 >= sticky &&
      window.pageYOffset <= servicesSection.offsetBottom
    ) {
      servicesNav.classList.add("sticky-nav");
    } else {
      servicesNav.classList.remove("sticky-nav");
    }
  }
}

var section = document.querySelectorAll(".services-section");
var sections = {};
var i = 0;

Array.prototype.forEach.call(section, function(e) {
  sections[e.id] = e.offsetTop;
});

function changeActiveSection() {
  var scrollPosition =
    document.documentElement.scrollTop || document.body.scrollTop;

  for (i in sections) {
    if (sections[i] <= scrollPosition + 100) {
      document
        .querySelector(".activeSection")
        .setAttribute("class", "services-navigation__item__link");
      document
        .querySelector("a[href*=" + i + "]")
        .setAttribute("class", "services-navigation__item__link activeSection");
    }
  }
}

if (window.location.pathname === "/wordpress/contact/") {
  document.querySelector("body").style.backgroundColor = "#edf6fa";
  const header = document.getElementById("contact-header");
  window.onscroll = function() {
    if (document.documentElement.scrollTop > 1230) {
      header.style.position = "absolute";
      header.style.top = "1100px";
    } else {
      header.style.position = "fixed";
      header.style.top = "0";
    }
  };
}
// Email list sign up modal

document.addEventListener("DOMContentLoaded", function(event) {
  const popup = document.querySelector(".email-popup-con");

  document.getElementById("signUp").addEventListener("click", () => {
    popup.style.display = "block";
  });
  document.getElementById("nothanks").addEventListener("click", () => {
    popup.style.display = "none";
  });
});
