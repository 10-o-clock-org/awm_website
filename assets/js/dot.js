// JavaScript for animated dots
const dotsContainer = document.getElementById('animatedDots');
const numberOfDots = 50;
const colors = ['gray', 'white', 'blue'];

for (let i = 0; i < numberOfDots; i++) {
  const dot = document.createElement('div');
  dot.classList.add('dot');
  const colorClass = `dot-${colors[Math.floor(Math.random() * colors.length)]}`;
  dot.classList.add(colorClass);
  dot.style.left = `${Math.random() * 100}%`;
  dot.style.top = `${Math.random() * 100}%`;
  dot.style.animationDelay = `${Math.random() * 3}s`;
  dotsContainer.appendChild(dot);
}

// JavaScript for countdown
const countdownElement = document.getElementById('countdown');
const targetDate = new Date('June 30th, 2025 08:00:00').getTime();

function padNumber(number) {
  return number < 10 ? `0${number}` : number;
}

function updateCountdown() {
  const now = new Date().getTime();
  const distance = targetDate - now;

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById('days').innerText = padNumber(days);
  document.getElementById('hours').innerText = padNumber(hours);
  document.getElementById('minutes').innerText = padNumber(minutes);
  document.getElementById('seconds').innerText = padNumber(seconds);

  if (distance < 0) {
    clearInterval(countdownInterval);
    countdownElement.innerHTML = "Event has started!";
  }
}

const countdownInterval = setInterval(updateCountdown, 1000);
