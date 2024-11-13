/* Load base on #hash */
window.addEventListener('load', function() {
    const hash = window.location.hash.substring(1);
    const motorcycleDiv = document.getElementById(hash);
    if (motorcycleDiv) {
        motorcycleDiv.style.display = 'block';
    }
});

/* 360 Rotation */

/* rotation for raider 150 */

document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll("#rotation img");
    let isDragging = false;
    let startX, currentImage = 0;

    function showImage(index) {
        images.forEach((img, i) => {
            img.style.display = i === index ? "block" : "none";
        });
    }

    function calculateImageIndex(moveX) {
        const sensitivity = 8; // Adjust for smoother sensitivity
        let newIndex = (currentImage + Math.floor(moveX / sensitivity)) % images.length;
        newIndex = newIndex < 0 ? images.length + newIndex : newIndex; // Handle negative index
        return newIndex;
    }

    document.getElementById('rotation').addEventListener('mousedown', function(event) {
        isDragging = true;
        startX = event.clientX;
    });

    document.addEventListener('mousemove', function(event) {
        if (isDragging) {
            const moveX = event.clientX - startX;
            const newIndex = calculateImageIndex(moveX);

            if (newIndex !== currentImage) {
                showImage(newIndex);
                currentImage = newIndex;
                startX = event.clientX; // Reset startX for continuous drag
            }
        }
    });

    document.addEventListener('mouseup', function() {
        isDragging = false;
    });

    document.getElementById('rotation').addEventListener('mouseleave', function() {
        isDragging = false;
    });
});

/* rotation for vstorm */

document.addEventListener("DOMContentLoaded", function() {
    const images2 = document.querySelectorAll("#rotation2 img");
    let isDragging2 = false;
    let startX2, currentImage2 = 0;

    function showImage2(index) {
        images2.forEach((img, i) => {
            img.style.display = i === index ? "block" : "none";
        });
    }

    function calculateImageIndex2(moveX) {
        const sensitivity = 8;
        let newIndex = (currentImage2 + Math.floor(moveX / sensitivity)) % images2.length;
        newIndex = newIndex < 0 ? images2.length + newIndex : newIndex;
        return newIndex;
    }

    document.getElementById('rotation2').addEventListener('mousedown', function(event) {
        isDragging2 = true;
        startX2 = event.clientX;
    });

    document.addEventListener('mousemove', function(event) {
        if (isDragging2) {
            const moveX = event.clientX - startX2;
            const newIndex = calculateImageIndex2(moveX);

            if (newIndex !== currentImage2) {
                showImage2(newIndex);
                currentImage2 = newIndex;
                startX2 = event.clientX;
            }
        }
    });

    document.addEventListener('mouseup', function() {
        isDragging2 = false;
    });

    document.getElementById('rotation2').addEventListener('mouseleave', function() {
        isDragging2 = false;
    });
});


/* rotation for v8 */

document.addEventListener("DOMContentLoaded", function() {
    const images3 = document.querySelectorAll("#rotation3 img");
    let isDragging3 = false;
    let startX3, currentImage3 = 0;

    function showImage3(index) {
        images3.forEach((img, i) => {
            img.style.display = i === index ? "block" : "none";
        });
    }

    function calculateImageIndex3(moveX) {
        const sensitivity = 8;
        let newIndex = (currentImage3 + Math.floor(moveX / sensitivity)) % images3.length;
        newIndex = newIndex < 0 ? images3.length + newIndex : newIndex;
        return newIndex;
    }

    document.getElementById('rotation3').addEventListener('mousedown', function(event) {
        isDragging3 = true;
        startX3 = event.clientX;
    });

    document.addEventListener('mousemove', function(event) {
        if (isDragging3) {
            const moveX = event.clientX - startX3;
            const newIndex = calculateImageIndex3(moveX);

            if (newIndex !== currentImage3) {
                showImage3(newIndex);
                currentImage3 = newIndex;
                startX3 = event.clientX;
            }
        }
    });

    document.addEventListener('mouseup', function() {
        isDragging3 = false;
    });

    document.getElementById('rotation3').addEventListener('mouseleave', function() {
        isDragging3 = false;
    });
});





