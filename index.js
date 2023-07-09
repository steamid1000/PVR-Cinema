   // Wait for the DOM to load
   document.addEventListener('DOMContentLoaded', function() {
    var slider = document.getElementById('slider');
    var images = slider.getElementsByTagName('img');
    var currentIndex = 0;
  
    // Show the first image
    images[currentIndex].style.display = 'block';
  
    // Function to hide all images except the current one
    function showCurrentImage() {
      for (var i = 0; i < images.length; i++) {
        images[i].style.display = 'none';
      }
      images[currentIndex].style.display = 'block';
    }
  
    // Function to switch to the next image
    function nextImage() {
      currentIndex++;
      if (currentIndex >= images.length) {
        currentIndex = 0;
      }
      showCurrentImage();
    }
  
    // Start the slideshow
    var intervalId = setInterval(nextImage, 3000); // Change slide every 3 seconds
  
    // Stop the slideshow when the mouse is over the slider
    slider.addEventListener('mouseover', function() {
      clearInterval(intervalId);
    });
  
    // Resume the slideshow when the mouse leaves the slider
    slider.addEventListener('mouseout', function() {
      intervalId = setInterval(nextImage, 3000);
    });
  });