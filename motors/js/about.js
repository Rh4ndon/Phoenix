/*   
   For Products Navigation 
*/


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

