<body>
    <header>
        <div class="header-title">Admin Dashboard</div>
        <div class="header-subtitle">Manage user feedback and comments</div>
        <div class="user-info">
            <span>Welcome, Admin!</span>
            <button class="logout-btn" onclick="confirmLogout()">Logout</button>
        </div>
    </header>

    <!-- Tambahkan ini di bagian head atau sebelum tag body ditutup -->
    <script>
    function confirmLogout() {
        var isConfirmed = confirm("Apakah Anda yakin ingin logout?");
        if (isConfirmed) {
            // Redirect ke logout.php setelah menekan OK pada notifikasi
            window.location.href = "logout.php";
        }
    }
    </script>

</body>