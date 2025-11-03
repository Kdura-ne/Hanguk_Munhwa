document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.getElementById('quiz-toggle');
  if (!toggle) return;
  const wrapper = toggle.closest('.nav-dropdown');

  toggle.addEventListener('click', function (e) {
    e.preventDefault();
    const isOpen = wrapper.classList.toggle('open');
    toggle.setAttribute('aria-expanded', String(isOpen));
  });

  // fecha ao clicar fora
  document.addEventListener('click', function (e) {
    if (!wrapper.contains(e.target)) {
      wrapper.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });

  // fecha com Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      wrapper.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });
});