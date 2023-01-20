// Like button functionality
let likeButtons = document.querySelectorAll("[id^='like-']");
likeButtons.forEach(button => {
  button.addEventListener("click", () => {
    button.innerHTML = "Liked!";
  });
});

// Subscribe button functionality
let subscribeButtons = document.querySelectorAll("[id^='subscribe-']");
subscribeButtons.forEach(button => {
  button.addEventListener("click", () => {
    button.innerHTML = "Subscribed!";
  });
});
