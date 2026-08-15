
  <style>
    /* Red Hyperlink */
    .report-error-link {
      color: #c00;
      text-decoration: underline;
      cursor: pointer;
      font-size: 16px;
    }

    /* Popup Overlay */
    .custom-popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    /* Popup Form */
    .custom-popup-form {
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      width: 90%;
      max-width: 400px;
      position: relative;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .custom-popup-form h2 {
      margin-top: 0;
      font-size: 20px;
      color: #333;
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 24px;
      cursor: pointer;
      color: #666;
    }

    /* Form Elements */
    .form-group {
      margin-bottom: 15px;
    }

    .checkbox-label, .radio-label {
      display: block;
      position: relative;
      padding-left: 30px;
      margin-bottom: 12px;
      cursor: pointer;
      user-select: none;
    }

    .checkbox-label input, .radio-label input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    /* Custom Checkbox/Radio */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 20px;
      width: 20px;
      background-color: #eee;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .radio-label .checkmark {
      border-radius: 50%;
    }

    .checkbox-label:hover input ~ .checkmark,
    .radio-label:hover input ~ .checkmark {
      background-color: #ddd;
    }

    .checkbox-label input:checked ~ .checkmark {
      background-color: #c00;
    }

    .radio-label input:checked ~ .checkmark {
      background-color: #fff;
      border: 2px solid #c00;
    }

    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    .checkbox-label input:checked ~ .checkmark:after,
    .radio-label input:checked ~ .checkmark:after {
      display: block;
    }

    .checkbox-label .checkmark:after {
      left: 7px;
      top: 3px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg);
    }

    .radio-label .checkmark:after {
      top: 4px;
      left: 4px;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #c00;
    }

    /* Input Fields */
    textarea, input[type="email"],
    input[type="tel"], input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 14px;
    }

    textarea {
      height: 100px;
      resize: vertical;
    }

    /* Submit Button */
    .submit-btn {
      background-color: #c00;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
      width: 100%;
      font-size: 16px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .custom-popup-form {
        padding: 20px;
      }
      
      .checkbox-label, .radio-label {
        font-size: 14px;
        padding-left: 25px;
      }
    }

    @media (max-width: 480px) {
      .custom-popup-form {
        width: 95%;
        padding: 15px;
      }
      
      .checkbox-label, .radio-label {
        font-size: 13px;
      }
    }
  </style>

  <!-- Red Hyperlink Trigger -->
  <a href="#" class="report-error-link" id="errorLink">! Error or missing information? Please let us know</a>

  <!-- Popup Form -->
  <div class="custom-popup-overlay" id="popupOverlay">
    <div class="custom-popup-form">
      <span class="close-btn" id="closeBtn">×</span>
      <h2>Report an error</h2>
      <form id="errorForm" action="send_email.php" method="POST">
        <div class="form-group">
          <label class="radio-label">
            <input type="radio" name="issue" value="address">
            <span class="checkmark"></span>
            Address
          </label>
          <label class="radio-label">
            <input type="radio" name="issue" value="phone">
            <span class="checkmark"></span>
            Phone Number
          </label>
          <label class="radio-label">
            <input type="radio" name="issue" value="closed">
            <span class="checkmark"></span>
            This Service center has closed down
          </label>
        </div>

        <div class="form-group">
          <textarea name="comments" placeholder="Additional comments"></textarea>
        </div>

        <div class="form-group">
          <input type="email" name="email" placeholder="Your email (optional)">
        </div>

        <div class="form-group">
          <input type="tel" name="phone" placeholder="Your phone number (optional)">
        </div>

        <div class="form-group">
          <label>What is the sum of: 1 + 5 = 
            <input type="text" name="captcha" style="width: 60px;">
          </label>
        </div>

        <button type="submit" class="submit-btn">SUBMIT</button>
      </form>
    </div>
  </div>

  <script>
    // Open Popup
    document.getElementById("errorLink").addEventListener("click", function(e) {
      e.preventDefault();
      document.getElementById("popupOverlay").style.display = "flex";
    });

    // Close Popup
    document.getElementById("closeBtn").addEventListener("click", function() {
      document.getElementById("popupOverlay").style.display = "none";
    });

    // Form Submission
    document.getElementById("errorForm").addEventListener("submit", function(e) {
      e.preventDefault();
      
      // CAPTCHA Validation
      const captcha = document.querySelector('input[name="captcha"]').value;
      if (captcha !== "6") {
        alert("Please enter the correct sum (1 + 5 = 6).");
        return;
      }
      
      // Collect Form Data
      const formData = new FormData(this);
      const formObject = {};
      formData.forEach((value, key) => {
        formObject[key] = value;
      });
      
      console.log("Form submitted:", formObject);
      alert("Thank you for your report! We'll review it shortly.");
      document.getElementById("popupOverlay").style.display = "none";
      this.reset();
    });
  </script>
