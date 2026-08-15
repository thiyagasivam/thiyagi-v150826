<?php include 'header.php';?>

<title>My Profile - Thiyagi</title>
<meta name="description" content="Your Thiyagi user profile. View your account details and manage your preferences.">
<meta name="robots" content="noindex, nofollow">

<style>
  .profile-card { max-width: 600px; }
  .profile-pic-lg { width: 96px; height: 96px; }
  #profile-loading { min-height: 400px; }
</style>

<!-- Not signed in state -->
<div id="profile-not-signed-in" class="hidden min-h-[60vh] flex items-center justify-center px-4">
  <div class="text-center">
    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
      <i class="fas fa-user text-4xl text-gray-400"></i>
    </div>
    <h1 class="text-2xl font-bold text-gray-800 mb-2">Sign in to view your profile</h1>
    <p class="text-gray-500 mb-6">Sign in with your Google account to access your profile page.</p>
    <button id="profile-signin-btn" class="inline-flex items-center px-6 py-3 border border-gray-300 text-base rounded-full text-gray-700 bg-white hover:bg-gray-50 shadow-sm">
      <svg class="w-5 h-5 mr-2" viewBox="0 0 48 48"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>
      Sign in with Google
    </button>
  </div>
</div>

<!-- Loading state -->
<div id="profile-loading" class="flex items-center justify-center px-4">
  <div class="text-center">
    <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-yellow-500 mx-auto mb-4"></div>
    <p class="text-gray-500">Loading profile...</p>
  </div>
</div>

<!-- Signed in profile -->
<div id="profile-signed-in" class="hidden py-10 px-4">
  <div class="profile-card mx-auto">
    <!-- Profile Header -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
      <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-32"></div>
      <div class="px-6 pb-6 -mt-16">
        <div class="flex flex-col items-center">
          <img id="profile-pic" src="" alt="Profile Picture" class="profile-pic-lg rounded-full border-4 border-white shadow-md object-cover">
          <h1 id="profile-name" class="text-2xl font-bold text-gray-800 mt-4"></h1>
          <p id="profile-email" class="text-gray-500 mt-1"></p>
        </div>
      </div>
    </div>

    <!-- Account Details Card -->
    <div class="bg-white rounded-2xl shadow-md mt-6 p-6">
      <h2 class="text-lg font-semibold text-gray-800 mb-4">
        <i class="fas fa-info-circle text-yellow-500 mr-2"></i>Account Details
      </h2>
      <div class="space-y-4">
        <div class="flex items-center justify-between py-3 border-b border-gray-100">
          <span class="text-gray-500">Name</span>
          <span id="detail-name" class="font-medium text-gray-800"></span>
        </div>
        <div class="flex items-center justify-between py-3 border-b border-gray-100">
          <span class="text-gray-500">Email</span>
          <span id="detail-email" class="font-medium text-gray-800"></span>
        </div>
        <div class="flex items-center justify-between py-3 border-b border-gray-100">
          <span class="text-gray-500">Email Verified</span>
          <span id="detail-verified" class="font-medium"></span>
        </div>
        <div class="flex items-center justify-between py-3 border-b border-gray-100">
          <span class="text-gray-500">Account Created</span>
          <span id="detail-created" class="font-medium text-gray-800"></span>
        </div>
        <div class="flex items-center justify-between py-3">
          <span class="text-gray-500">Last Sign In</span>
          <span id="detail-last-login" class="font-medium text-gray-800"></span>
        </div>
      </div>
    </div>

    <!-- Actions Card -->
    <div class="bg-white rounded-2xl shadow-md mt-6 p-6">
      <h2 class="text-lg font-semibold text-gray-800 mb-4">
        <i class="fas fa-cog text-yellow-500 mr-2"></i>Actions
      </h2>
      <div class="space-y-3">
        <button id="profile-signout-btn" class="w-full flex items-center justify-center px-4 py-3 border border-red-300 text-red-600 rounded-xl hover:bg-red-50 transition">
          <i class="fas fa-sign-out-alt mr-2"></i>Sign Out
        </button>
      </div>
    </div>
  </div>
</div>

<script>
(function() {
  function formatDate(dateStr) {
    if (!dateStr) return '—';
    var d = new Date(dateStr);
    return d.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' });
  }

  function showProfile(user) {
    document.getElementById('profile-loading').classList.add('hidden');

    if (user) {
      document.getElementById('profile-pic').src = user.photoURL || '';
      document.getElementById('profile-name').textContent = user.displayName || 'User';
      document.getElementById('profile-email').textContent = user.email || '';
      document.getElementById('detail-name').textContent = user.displayName || '—';
      document.getElementById('detail-email').textContent = user.email || '—';

      var verifiedEl = document.getElementById('detail-verified');
      if (user.emailVerified) {
        verifiedEl.textContent = 'Yes';
        verifiedEl.className = 'font-medium text-green-600';
      } else {
        verifiedEl.textContent = 'No';
        verifiedEl.className = 'font-medium text-red-500';
      }

      document.getElementById('detail-created').textContent = formatDate(user.metadata.creationTime);
      document.getElementById('detail-last-login').textContent = formatDate(user.metadata.lastSignInTime);

      document.getElementById('profile-signed-in').classList.remove('hidden');
      document.getElementById('profile-not-signed-in').classList.add('hidden');
    } else {
      document.getElementById('profile-signed-in').classList.add('hidden');
      document.getElementById('profile-not-signed-in').classList.remove('hidden');
    }
  }

  // Listen to auth state from header.php's Firebase instance
  window.addEventListener('firebaseAuthReady', function(e) {
    showProfile(e.detail.user);
  });

  // If auth already fired before this listener was added
  if (window.thiyagiAuth && window.thiyagiAuth.auth.currentUser) {
    showProfile(window.thiyagiAuth.auth.currentUser);
  }

  // Sign in from profile page
  document.getElementById('profile-signin-btn').addEventListener('click', function() {
    if (window.thiyagiAuth) {
      window.thiyagiAuth.signIn();
    }
  });

  // Sign out from profile page
  document.getElementById('profile-signout-btn').addEventListener('click', function() {
    if (window.thiyagiAuth) {
      window.thiyagiAuth.auth.signOut().then(function() {
        window.location.href = 'https://www.thiyagi.com/';
      });
    }
  });
})();
</script>

<?php include 'footer.php';?>
