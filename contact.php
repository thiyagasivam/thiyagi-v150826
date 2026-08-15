<?php
$pageTitle = 'Contact Thiyagi Tools 2026 - Get Professional Support | 25+ Years Experience';
$pageDescription = 'Contact Thiyagi Tools for professional support, feedback, and inquiries. Get help with our calculators, converters, and online tools. Professional support with 25+ years of digital expertise since 1999.';
$pageKeywords = 'contact Thiyagi Tools, customer support, help desk, tool support, professional assistance 2026';
include 'header.php';
?>
  <style>
    :root {
      --primary: #6e8efb;
      --secondary: #a777e3;
    }
    body {
      /* background-color: #f8f9fa; - handled by bg-gray-100 */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .contact-hero {
      /* Converted using Tailwind bg-gradient-to-br, from-[var(--primary)], to-[var(--secondary)] */
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: white;
      padding: 80px 0; /* py-20 */
      margin-bottom: 50px; /* mb-12 */
    }
    .contact-card {
      /* border: none; - Tailwind default */
      border-radius: 10px; /* rounded-lg */
      box-shadow: 0 5px 15px rgba(0,0,0,0.05); /* shadow-md */
      transition: transform 0.3s; /* transition duration handled by Tailwind */
      padding: 30px; /* p-8 */
      height: 100%; /* h-full */
    }
    .contact-card:hover {
      transform: translateY(-5px); /* hover:-translate-y-1.5 */
    }
    .contact-icon {
      font-size: 2rem; /* text-3xl */
      margin-bottom: 20px; /* mb-5 */
      color: var(--primary); /* text-[var(--primary)] */
    }
    /* Custom focus state - Tailwind can do this, but this is simpler */
    .form-control:focus {
      border-color: var(--primary); /* border-[var(--primary)] */
      box-shadow: 0 0 0 0.25rem rgba(110, 142, 251, 0.25); /* ring-4 ring-blue-200 */
    }
    /* Gradient Button - Tailwind doesn't easily do arbitrary solid colors like Bootstrap btn-primary */
    .btn-primary {
      background-color: var(--primary); /* bg-[var(--primary)] */
      border-color: var(--primary); /* border-[var(--primary)] */
      color: white; /* text-white */
      padding: 0.5rem 1rem; /* py-2 px-4 */
      border-radius: 0.375rem; /* rounded */
      font-weight: 500; /* font-medium */
    }
    .btn-primary:hover {
        opacity: 0.9; /* hover:opacity-90 */
    }
    /* Custom Alert Colors */
    .alert-success {
      /* background-color: #d1e7dd; - bg-green-100 */
      /* border-color: #badbcc; - border-green-200 */
      /* color: #0f5132; - text-green-800 */
      /* Using Tailwind classes directly in HTML is preferred */
    }
    .alert-danger {
      /* background-color: #f8d7da; - bg-red-100 */
      /* border-color: #f5c2c7; - border-red-200 */
      /* color: #842029; - text-red-800 */
       /* Using Tailwind classes directly in HTML is preferred */
    }
  </style>

<body class="bg-gray-100">
  <!-- Hero Section -->
  <section class="contact-hero text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Our Team</h1>
      <p class="text-xl md:text-2xl">Have questions, suggestions, or partnership inquiries? We'd love to hear from you.</p>
    </div>
  </section>

  <!-- Contact Options -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12"> <!-- row g-4 -> gap-6 -->
      <div>
        <div class="contact-card text-center bg-white"> <!-- contact-card text-center -> contact-card text-center bg-white -->
          <i class="fas fa-envelope contact-icon"></i> <!-- contact-icon -> contact-icon -->
          <h3 class="text-xl font-semibold mb-2">Email Us</h3> <!-- h3 -> text-xl font-semibold mb-2 -->
          <p class="mb-4">For general inquiries and support:</p> <!-- mb-4 -->
          <a href="mailto:support@thiyagi.com" class="inline-block px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-50 transition duration-300">support@thiyagi.com</a> <!-- btn btn-outline-primary -> inline-block px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-50 -->
        </div>
      </div>
      <div>
        <div class="contact-card text-center bg-white">
          <i class="fas fa-lightbulb contact-icon"></i>
          <h3 class="text-xl font-semibold mb-2">Suggest a Tool</h3>
          <p class="mb-4">Have an idea for a new tool?</p>
          <a href="mailto:support@thiyagi.com" class="inline-block px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-50 transition duration-300">support@thiyagi.com</a>
        </div>
      </div>
      <div>
        <div class="contact-card text-center bg-white">
          <i class="fas fa-handshake contact-icon"></i>
          <h3 class="text-xl font-semibold mb-2">Partnerships</h3>
          <p class="mb-4">For business collaborations:</p>
          <a href="mailto:support@thiyagi.com" class="inline-block px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-50 transition duration-300">support@thiyagi.com</a>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="flex justify-center">
      <div class="w-full max-w-2xl">
        <div class="contact-card bg-white">
          <h2 class="text-center text-2xl font-bold mb-6">Send Us a Message</h2>
          <form action="contact-action" method="post" id="contactForm">
            <div class="space-y-4">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label for="name" class="block mb-2 font-medium text-gray-700">Your Name *</label>
                  <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="name" name="name" required>
                </div>
                <div>
                  <label for="phone" class="block mb-2 font-medium text-gray-700">Phone Number</label>
                  <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="phone" name="phone">
                </div>
              </div>
              
              <div>
                <label for="email" class="block mb-2 font-medium text-gray-700">Email Address *</label>
                <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="email" name="email" required>
              </div>
              
              <div>
                <label for="service" class="block mb-2 font-medium text-gray-700">Service Interested</label>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="service" name="service">
                  <option value="">Select a service</option>
                  <option value="Calculator Tools">Calculator Tools</option>
                  <option value="Converter Tools">Converter Tools</option>
                  <option value="Technical Support">Technical Support</option>
                  <option value="Custom Tool Development">Custom Tool Development</option>
                  <option value="Business Partnership">Business Partnership</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              
              <div>
                <label for="message" class="block mb-2 font-medium text-gray-700">Your Message *</label>
                <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="message" name="message" rows="5" required placeholder="Tell us how we can help you..."></textarea>
              </div>
              
              <div class="text-center pt-4">
                <button type="submit" class="btn-primary">
                  <i class="fas fa-paper-plane mr-2"></i>Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('contactForm');
      const submitBtn = form.querySelector('button[type="submit"]');
      
      form.addEventListener('submit', function(e) {
        // Basic client-side validation
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();
        
        if (!name || !email || !message) {
          alert('Please fill in all required fields.');
          return false;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          alert('Please enter a valid email address.');
          return false;
        }
        
        // Show loading state
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
        
        // Re-enable button after 10 seconds in case of issues
        setTimeout(function() {
          if (submitBtn.disabled) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-paper-plane mr-2"></i>Send Message';
          }
        }, 10000);
      });
    });
  </script>
</body>
<?php include 'footer.php'; ?>
</html>
