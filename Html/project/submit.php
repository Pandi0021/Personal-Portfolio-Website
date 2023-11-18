<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "pandiproject2@gmail.com"; // Replace with the recipient's email address
    $subject = "Order Details";
    $selectedItems = $_POST["item"];
    $totalPrice = $_POST["totalPrice"];
    
    $message = "Hello,\n\n";
    $message .= "Selected Items:\n";
   
    foreach ($selectedItems as $item) {
    $message .= "- $item\n";
    }
    $message .= "\nTotal Price: $totalPrice\n";
    
    $headers = "From: sender@example.com"; // Replace with the sender's email address
    
    $mailSent = mail($to, $subject, $message, $headers);
    
    if ($mailSent) {
        echo "Order sent successfully!";
        echo "<script>window.location.href='index.php'</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
  echo "<script>window.location.href='index.php'</script>";
}
}
?>
