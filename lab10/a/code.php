<?php 
  $today = date("d-m-Y"); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
  <title>Today's Date</title> 
  <style> 
    body { font-family: Arial, sans-serif; background: #e0f7fa; text-align: center; 
padding: 50px; } 
    h1 { color: #00796b; } 
    p { font-size: 20px; color: #333; } 
  </style> 
</head> 
<body> 
  <h1>📅 Today's Date</h1> 
  <p><?php echo $today; ?></p> 
</body> 
</html>