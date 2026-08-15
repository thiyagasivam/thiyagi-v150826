<main class="flex-grow">
  <div class="container mx-auto my-8">
    <div class="flex justify-center flex-wrap gap-3 px-4">
      <!-- Facebook -->
      <a href="#" onclick="sharePage('facebook')" class="flex items-center justify-center w-12 h-12 rounded-lg bg-[#3b5998] text-white text-xl hover:scale-110 transition-transform">
        <i class="fab fa-facebook-f"></i>
      </a>
      
      <!-- Twitter -->
      <a href="#" onclick="sharePage('twitter')" class="flex items-center justify-center w-12 h-12 rounded-lg bg-[#1da1f2] text-white text-xl hover:scale-110 transition-transform">
        <i class="fab fa-twitter"></i>
      </a>
      
      <!-- Pinterest -->
      <a href="#" onclick="sharePage('pinterest')" class="flex items-center justify-center w-12 h-12 rounded-lg bg-[#bd081c] text-white text-xl hover:scale-110 transition-transform">
        <i class="fab fa-pinterest-p"></i>
      </a>
      
      <!-- LinkedIn -->
      <a href="#" onclick="sharePage('linkedin')" class="flex items-center justify-center w-12 h-12 rounded-lg bg-[#0077b5] text-white text-xl hover:scale-110 transition-transform">
        <i class="fab fa-linkedin-in"></i>
      </a>
      
      <!-- Reddit -->
      <a href="#" onclick="sharePage('reddit')" class="flex items-center justify-center w-12 h-12 rounded-lg bg-[#ff4500] text-white text-xl hover:scale-110 transition-transform">
        <i class="fab fa-reddit-alien"></i>
      </a>
      
      <!-- Tumblr -->
      <a href="#" onclick="sharePage('tumblr')" class="flex items-center justify-center w-12 h-12 rounded-lg bg-[#35465d] text-white text-xl hover:scale-110 transition-transform">
        <i class="fab fa-tumblr"></i>
      </a>
      
      <!-- WhatsApp -->
      <a href="#" onclick="sharePage('whatsapp')" class="flex items-center justify-center w-12 h-12 rounded-lg bg-[#25d366] text-white text-xl hover:scale-110 transition-transform">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
  </div>
</main>

<script>
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
</script>
