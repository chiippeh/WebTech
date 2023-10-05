const dashboard = document.querySelectorAll('.dashboard');

dashboard.forEach(element => {
    element.addEventListener('click', function() {
      // Code to run when a .dashboard element is clicked
      console.log('Dashboard element clicked');
      navigator.vibrate(5000);
      // Add your specific code here
    });
});
  