/* Contact Form Submission */
const contactForm = document.querySelector('#contactForm');
contactForm.addEventListener('submit', evt => {
  evt.preventDefault();

  const data = new URLSearchParams();
  for (const pair of new FormData(contactForm)) {
    data.append(pair[0], pair[1]);
  }
  data.append('action', 'sunset_save_user_contact_form');
  const url = contactForm.getAttribute('data-url');

  fetch(url, {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: data
  })
  .then(() => {
    contactForm.reset();
    contactAlert.classList.add('block');
    contactAlert.classList.remove('hidden');
  });
});

const contactAlert = document.querySelector('.js-contact-alert');
const closeContactAlert = document.querySelector('.js-close-contact-alert');
closeContactAlert.addEventListener('click', () => {
    contactAlert.classList.add('hidden');
    contactAlert.classList.remove('block');
});
