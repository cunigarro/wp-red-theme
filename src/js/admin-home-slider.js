(function () {
  const imageBtns = document.querySelectorAll('#home_slider_image_btn');

  imageBtns.forEach(imageBtn => {
    imageBtn.addEventListener('click', (e) => {
      e.preventDefault();
      const target = e.target;
      const parentNode = target.parentNode;

      let mediaUploader = null;

      if (mediaUploader) {
        mediaUploader.open();
        return;
      }

      mediaUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose the image for slider',
        button: {
          text: 'Choose a picture'
        },
        multiple: false
      });

      mediaUploader.on('select', () => {
        const attachment = mediaUploader.state().get('selection').first().toJSON();
        const imageInput = parentNode.querySelector('#home_slider_image');
        const image = parentNode.querySelector('#home_slider_image_img');

        imageInput.value = attachment.url;
        image.src = attachment.url;
      });

      mediaUploader.open();
    });
  });
}());
