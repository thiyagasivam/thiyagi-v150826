<?php include 'header.php'; ?>

<title>Contact Thiyagi Tools 2026 - Get Professional Support | 25+ Years Experience</title>
<meta name="description" content="Contact Thiyagi Tools for professional support, feedback, and inquiries. Get help with our calculators, converters, and online tools. Professional support with 25+ years of digital expertise since 1999.">
<meta name="keywords" content="contact Thiyagi Tools, customer support, help desk, tool support, professional assistance 2026">

<title>Contact Us - Thiyagi Tools</title>
  <style>
    :root {
      --primary: #6e8efb;
      --secondary: #a777e3;
    }
    .contact-hero {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: white;
      padding: 80px 0;
      margin-bottom: 50px;
    }
    .contact-card {
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: transform 0.3s;
      padding: 30px;
      height: 100%;
    }
    .contact-card:hover {
      transform: translateY(-5px);
    }
    .contact-icon {
      font-size: 2rem;
      margin-bottom: 20px;
      color: var(--primary);
    }
    .btn-primary {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      border: none;
      color: white;
      padding: 12px 30px;
      border-radius: 6px;
      font-weight: 500;
      transition: all 0.3s;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(110, 142, 251, 0.3);
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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <div>
        <div class="contact-card text-center bg-white">
          <i class="fas fa-envelope contact-icon"></i>
          <h3 class="text-xl font-semibold mb-2">Email Us</h3>
          <p class="mb-4">For general inquiries and support:</p>
          <a href="mailto:support@thiyagi.com" class="inline-block px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-50 transition duration-300">support@thiyagi.com</a>
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

    <!-- Simple Contact Form -->
    <div class="flex justify-center">
      <div class="w-full max-w-2xl">
        <div class="contact-card bg-white">
          <h2 class="text-center text-2xl font-bold mb-6">Send Us a Message</h2>
          <form action="contact-action.php" method="post" id="contactForm">
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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('contactForm');
      const submitBtn = form.querySelector('button[type="submit"]');
      
      form.addEventListener('submit', function(e) {
        // Show loading state
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
        
        // Basic client-side validation
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();
        
        if (!name || !email || !message) {
          alert('Please fill in all required fields.');
          submitBtn.disabled = false;
          submitBtn.innerHTML = '<i class="fas fa-paper-plane mr-2"></i>Send Message';
          e.preventDefault();
          return false;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          alert('Please enter a valid email address.');
          submitBtn.disabled = false;
          submitBtn.innerHTML = '<i class="fas fa-paper-plane mr-2"></i>Send Message';
          e.preventDefault();
          return false;
        }
      });
    });
  </script>
</body>
<?php include 'footer.php'; ?>
</html>