const checkbox = document.querySelector("#checkbox");
const nav = document.querySelector("#sidebar");

if (checkbox.checked) {
  nav.style.left = "0";
  document.body.classList.add('overflow');
} else {
  nav.style.left = "-150px"
  document.body.classList.remove('overflow');
}

document.addEventListener("change", () => {
  if (checkbox.checked) {
    nav.style.left = "0";
    document.body.classList.add('overflow');
  } else {
    nav.style.left = "-150px";
    document.body.classList.remove('overflow');
  }
});