document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('profile-picture-input');
    const profilePicture = document.getElementById('profile-picture');
    const resetButton = document.getElementById('reset-picture');
  
    fileInput.addEventListener('change', function () {
      const file = fileInput.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          profilePicture.src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  
    resetButton.addEventListener('click', function () {
      profilePicture.src = 'https://bootdey.com/img/Content/avatar/avatar1.png';
      fileInput.value = ''; // Clear the file input
    });
  });