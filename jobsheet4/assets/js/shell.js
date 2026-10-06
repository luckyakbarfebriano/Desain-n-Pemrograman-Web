// Toggle sidebar di layar kecil (dipanggil di semua jobsheet)
function initSidebarToggle() {
  const toggleBtn = document.getElementById("nav-toggle-btn");
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("sidebar-overlay");
  if (!toggleBtn || !sidebar) return;

  function close() {
    sidebar.classList.remove("open");
    if (overlay) overlay.classList.remove("show");
  }

  toggleBtn.addEventListener("click", function () {
    sidebar.classList.toggle("open");
    if (overlay) overlay.classList.toggle("show");
  });

  if (overlay) overlay.addEventListener("click", close);
}

document.addEventListener("DOMContentLoaded", initSidebarToggle);
