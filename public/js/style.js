const contain = document.querySelector('.contain');
const services_section_2 = document.querySelector('.services_section_2');
const colors = ['linear-gradient(to left, #800080, #ffc0cb)', 'linear-gradient(to bottom right, #5f2c82, #49a09d)', 'linear-gradient(to bottom right, #01B7C4, #A8FF7A)', 'linear-gradient(to bottom right, #42275A, #734B6D)'];

function addEffect(event) {
  if (event.target.closest('.service_box')) {
    const index = Array.from(contain.children).indexOf(event.target.closest('.service_box'));
    services_section_2.style.backgroundImage = colors[index];
    services_section_2.style.transition = 'background-color 0.5s ease-in-out';
  }
}

function removeEffect() {
  services_section_2.style.backgroundImage = '';
  services_section_2.style.backgroundColor = '';
}

// Tambahkan event listener pada layar yang lebih besar dari 768 piksel
if (window.innerWidth >= 575) {
  contain.addEventListener('mouseover', addEffect);
  contain.addEventListener('mouseout', removeEffect);
}

// Hapus event listener pada layar yang lebih kecil dari 768 piksel
if (window.innerWidth < 767) {
  contain.removeEventListener('mouseover', addEffect);
  contain.removeEventListener('mouseout', removeEffect);
}

window.addEventListener('load', function () {
  // setTimeout to simulate the delay from a real page load
  setTimeout(lazyLoad, 1000);
});

// Listen for scroll event
window.addEventListener('scroll', lazyLoad);

function lazyLoad() {
  var card_images = document.querySelectorAll('.card-image');

  // loop over each card image
  card_images.forEach(function (card_image) {
    var image_url = card_image.getAttribute('data-image-full');
    var content_image = card_image.querySelector('img');

    // Check if the card image is already loaded
    if (!card_image.classList.contains('is-loaded')) {
      // Check if the card image is in the viewport or not
      if (isElementInViewport(card_image)) {
        // change the src of the content image to load the new high res photo
        content_image.src = image_url;

        // listen for load event when the new photo is finished loading
        content_image.addEventListener('load', function () {
          // swap out the visible background image with the new fully downloaded photo
          card_image.style.backgroundImage = 'url(' + image_url + ')';
          // add a class to remove the blur filter to smoothly transition the image change
          card_image.classList.add('is-loaded');
        });
      }
    } else {
      // Check if the card image is outside the viewport
      if (!isElementInViewport(card_image)) {
        // Reset the image source to the placeholder or a smaller size image
        var placeholder_image_url = card_image.getAttribute('data-image-placeholder');
        content_image.src = placeholder_image_url;
        // Remove the 'is-loaded' class to trigger lazy loading again
        card_image.classList.remove('is-loaded');
      }
    }
  });
}

// Helper function to check if an element is in the viewport
function isElementInViewport(element) {
  var rect = element.getBoundingClientRect();
  return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
}
