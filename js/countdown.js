// JavaScript for countdown
const countdownElement = document.getElementById('countdown');
const targetDate = new Date('Juni 30, 2025 08:00:00').getTime();

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