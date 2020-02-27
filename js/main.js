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
