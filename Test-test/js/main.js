var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");
var sidebarCloseIcon = document.getElementById("sidebarIcon");
function toggleSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add("sidebar__responsive");
    sidebarOpen = true;
  }
}
function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove("sidebar__responsive");
    sidebarOpen = false;
  }
}
