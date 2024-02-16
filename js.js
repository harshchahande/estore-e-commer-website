let c = document.querySelectorAll(".s5col");
let a = document.querySelectorAll(".s5col1");
let d = document.querySelectorAll(".s5col2");
let b = document.querySelectorAll(".s5col3");

function fun1() {
  for (i = 0; i < c.length; i++) {
    c[i].style.display = "block";
  }
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "none";
  }
  for (i = 0; i < d.length; i++) {
    d[i].style.display = "none";
  }
  for (i = 0; i < b.length; i++) {
    b[i].style.display = "none";
  }
}

function New() {
  for (i = 0; i < c.length; i++) {
    c[i].style.display = "none";
  }
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "block";
  }
  for (i = 0; i < d.length; i++) {
    d[i].style.display = "none";
  }
  for (i = 0; i < b.length; i++) {
    b[i].style.display = "none";
  }
}
function Featured() {
  for (i = 0; i < c.length; i++) {
    c[i].style.display = "none";
  }
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "none";
  }
  for (i = 0; i < d.length; i++) {
    d[i].style.display = "block";
  }
  for (i = 0; i < b.length; i++) {
    b[i].style.display = "none";
  }
}
function Offer() {
  for (i = 0; i < c.length; i++) {
    c[i].style.display = "none";
  }
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "none";
  }
  for (i = 0; i < d.length; i++) {
    d[i].style.display = "none";
  }
  for (i = 0; i < b.length; i++) {
    b[i].style.display = "block";
  }
}
// section 2
// Initialize the typing animation
const typingAnimationElement = document.getElementById("typing-animation");
// Create an array of typing text
const typingTexts = ["60% Discount  ", "60% Discount  ", "60% Discount   "];

// Create a function to display the typing animation for a given text
function playTypingAnimation(text) {
  // Loop through each character and add it to the element
  for (let i = 0; i < text.length; i++) {
    setTimeout(() => {
      typingAnimationElement.textContent += text[i];
    }, i * 200); // Increase the delay to slow down the typing animation
  }
  // Once the animation is complete, reset the text and start over
  setTimeout(() => {
    typingAnimationElement.textContent = "";
    playTypingAnimation(
      typingTexts[(typingTexts.indexOf(text) + 1) % typingTexts.length]
    );
  }, text.length * 200);
}

// Start the typing animation loop
playTypingAnimation(typingTexts[0]);

// section 8
