const navWrap = document.querySelector('.nav-wrap');
const progress = document.querySelector('.scroll-progress');
const glow = document.querySelector('.cursor-glow');
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

window.addEventListener('scroll', () => {
  const scroll = window.scrollY;
  navWrap.classList.toggle('scrolled', scroll > 20);
  const height = document.documentElement.scrollHeight - window.innerHeight;
  progress.style.width = `${height ? (scroll / height) * 100 : 0}%`;
});

window.addEventListener('pointermove', e => {
  if (glow) {
    glow.style.left = `${e.clientX}px`;
    glow.style.top = `${e.clientY}px`;
  }
});

menuToggle?.addEventListener('click', () => navLinks.classList.toggle('open'));
navLinks?.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navLinks.classList.remove('open')));

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, {threshold: .12});
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

document.querySelectorAll('.tilt').forEach(card => {
  card.addEventListener('pointermove', e => {
    if (window.innerWidth < 900) return;
    const r = card.getBoundingClientRect();
    const x = (e.clientX - r.left) / r.width - .5;
    const y = (e.clientY - r.top) / r.height - .5;
    card.style.transform = `perspective(900px) rotateX(${y * -5}deg) rotateY(${x * 5}deg) translateY(-3px)`;
  });
  card.addEventListener('pointerleave', () => card.style.transform = '');
});

// Lightweight particle field — no external library required.
const canvas = document.getElementById('particles');
const ctx = canvas?.getContext('2d');
let particles = [];
function resizeCanvas() {
  if (!canvas) return;
  canvas.width = window.innerWidth;
  canvas.height = document.querySelector('.hero')?.offsetHeight || window.innerHeight;
  particles = Array.from({length: Math.min(70, Math.floor(window.innerWidth / 20))}, () => ({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    r: Math.random() * 1.3 + .3,
    vx: (Math.random() - .5) * .22,
    vy: (Math.random() - .5) * .22
  }));
}
function drawParticles() {
  if (!ctx) return;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  particles.forEach(p => {
    p.x += p.vx; p.y += p.vy;
    if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
    if (p.y < 0 || p.y > canvas.height) p.vy *= -1;
    ctx.beginPath();
    ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
    ctx.fillStyle = 'rgba(167,139,250,.45)';
    ctx.fill();
  });
  requestAnimationFrame(drawParticles);
}
resizeCanvas();
drawParticles();
window.addEventListener('resize', resizeCanvas);

// Subtle typing loop in the hero eyebrow.
const phrases = ['BACKEND ENGINEER · WEB DEVELOPER','PHP · LARAVEL · WORDPRESS','APIs · CRM · AUTOMATION'];
const kicker = document.querySelector('.hero-kicker');
let phraseIndex = 0, charIndex = 0, deleting = false;
function typeLoop(){
  if(!kicker) return;
  const phrase = phrases[phraseIndex];
  kicker.textContent = deleting ? phrase.slice(0, --charIndex) : phrase.slice(0, ++charIndex);
  let delay = deleting ? 35 : 65;
  if(!deleting && charIndex === phrase.length){ delay = 1700; deleting = true; }
  if(deleting && charIndex === 0){ deleting = false; phraseIndex = (phraseIndex + 1) % phrases.length; delay = 300; }
  setTimeout(typeLoop, delay);
}
setTimeout(typeLoop, 900);
