$(document).ready(function(){
  $('.first-slider').slick({
    infinite: true,
    slidesToShow: 1,  // Number of slides visible at once
    slidesToScroll: 1, // Number of slides to scroll
    autoplay: true,    // Enables auto-play
    autoplaySpeed: 10000, // Speed of autoplay in milliseconds
    dots: true        // Adds navigation dots
  });
});

$(document).ready(function(){
  $('.second-slider').slick({
    infinite: true,
    slidesToShow: 4,  // Number of slides visible at once
    slidesToScroll: 4, // Number of slides to scroll
    autoplay: true,    // Enables auto-play
    autoplaySpeed: 5430, // Speed of autoplay in milliseconds
    dots: true,
    arrows: true        // Adds navigation dots
  });
});


function showPreview(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var previewImg = document.getElementById('preview-img');
  var previewArea = document.getElementById('preview-area');
  var upload = document.getElementById('upload-area');

  // Hide upload area initially
  upload.classList.add('hidden');
  
  document.getElementById("submitImg").disabled = false;
  if (file) {
      // When the file is successfully read, set the image source
      reader.onload = function(e) {
          previewImg.setAttribute('src', e.target.result ); // Set src to the file data URL
          console.log(previewImg.src);
          previewArea.classList.remove('hidden'); // Unhide the image preview
      };

      // Read the file as a data URL
      reader.readAsDataURL(file);
  }
}


