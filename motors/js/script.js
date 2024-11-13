/*   
   For Products Navigation 
*/

  // Get all the links with class "dropdown-item"
  const links = document.querySelectorAll('.dropdown-item');

  // Add an event listener to each link
  links.forEach((link) => {
    link.addEventListener('click', (e) => {
      // Prevent the default link behavior
      e.preventDefault();

      // Get the text content of the link
      const linkText = link.textContent.trim().toLowerCase();

      // Get the corresponding div
      const divId = linkText;
      const div = document.getElementById(divId);

      // Hide all divs
      document.querySelectorAll('.products').forEach((div) => {
        div.style.display = 'none';
      });

      // Show the corresponding div
      div.style.display = 'block';
    });
  });


  window.addEventListener('load', function() {
    const hash = window.location.hash.substring(1);
    const motorcycleDiv = document.getElementById(hash);
    if (motorcycleDiv) {
        document.querySelectorAll('.motorcycle').forEach((div) => {
            div.style.display = 'none';
        });
        motorcycleDiv.style.display = 'block';
    }
});



/*   
   For image zooming 
*/
