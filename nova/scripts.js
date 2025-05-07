 // Add animation classes when page loads
 document.addEventListener('DOMContentLoaded', function() {
    // Animate working image
    const workingImage = document.querySelector('.working-image');
    if (workingImage) {
        setTimeout(() => {
            workingImage.classList.add('animate-fade-in');
            workingImage.style.opacity = '1';
            workingImage.style.transform = 'translateY(0)';
        }, 300);
    }
    
    // Animate gradient boxes
    const gradientBoxes = document.querySelectorAll('.gradient-box');
    gradientBoxes.forEach((box, index) => {
        setTimeout(() => {
            box.style.opacity = '1';
            box.style.transform = 'scale(1)';
        }, 500 + (index * 100));
    });
    
    // Animate outline texts on hover
    const virtualItems = document.querySelectorAll('.virtual');
    virtualItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            const text = this.querySelector('.outline-text');
            text.style.opacity = '1';
            text.style.transform = 'translateX(0)';
        });
        
        item.addEventListener('mouseleave', function() {
            const text = this.querySelector('.outline-text');
            text.style.opacity = '0';
            text.style.transform = 'translateX(-20px)';
        });
    });
});

// Make sure animations trigger when elements come into view
window.addEventListener('scroll', function() {
    const elements = document.querySelectorAll('.animate-slide-up, .animate-fade-in');
    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (elementPosition < windowHeight - 100) {
            element.style.opacity = '1';
            element.style.transform = element.classList.contains('animate-slide-up') ? 'translateY(0)' : 'scale(1)';
        }
    });
});