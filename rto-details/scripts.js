
// Mobile menu toggle
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarCollapse = document.querySelector('.navbar-collapse');
navbarToggler.addEventListener('click', function() {
    const isExpanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !isExpanded);
    navbarCollapse.classList.toggle('show');
});


// function sharePage(platform) {
//     var pageUrl = encodeURIComponent(window.location.href);
//     var pageTitle = encodeURIComponent(document.title);
//     var shareUrl = "";
    
//     switch(platform) {
//         case 'facebook':
//             shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
//             break;
//         case 'twitter':
//             shareUrl = `https://twitter.com/intent/tweet?url=${pageUrl}&text=${pageTitle}`;
//             break;
//         case 'pinterest':
//             shareUrl = `https://pinterest.com/pin/create/button/?url=${pageUrl}&description=${pageTitle}`;
//             break;
//         case 'linkedin':
//             shareUrl = `https://www.linkedin.com/shareArticle?url=${pageUrl}&title=${pageTitle}`;
//             break;
//         case 'reddit':
//             shareUrl = `https://reddit.com/submit?url=${pageUrl}&title=${pageTitle}`;
//             break;
//         case 'tumblr':
//             shareUrl = `https://www.tumblr.com/share/link?url=${pageUrl}&name=${pageTitle}`;
//             break;
//         case 'whatsapp':
//             shareUrl = `https://api.whatsapp.com/send?text=${pageTitle} ${pageUrl}`;
//             break;
//     }
    
//     window.open(shareUrl, '_blank', 'width=600,height=400');
// }

function sharePage(platform) {
      var pageUrl = encodeURIComponent(window.location.href);
      var pageTitle = encodeURIComponent(document.title);
      var shareUrl = "";

      switch(platform) {
        case 'facebook':
          shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
          break;
        case 'twitter':
          shareUrl = `https://twitter.com/intent/tweet?url=${pageUrl}&text=${pageTitle}`;
          break;
        case 'pinterest':
          shareUrl = `https://pinterest.com/pin/create/button/?url=${pageUrl}&description=${pageTitle}`;
          break;
        case 'linkedin':
          shareUrl = `https://www.linkedin.com/shareArticle?url=${pageUrl}&title=${pageTitle}`;
          break;
        case 'reddit':
          shareUrl = `https://reddit.com/submit?url=${pageUrl}&title=${pageTitle}`;
          break;
        case 'tumblr':
          shareUrl = `https://www.tumblr.com/share/link?url=${pageUrl}&name=${pageTitle}`;
          break;
        case 'whatsapp':
          shareUrl = `https://api.whatsapp.com/send?text=${pageTitle} ${pageUrl}`;
          break;
      }

      window.open(shareUrl, '_blank', 'width=600,height=400');
    }

// Newsletter form submission
document.querySelector('.newsletter-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input').value;
    alert('Thank you for subscribing with ' + email);
    this.querySelector('input').value = '';
});