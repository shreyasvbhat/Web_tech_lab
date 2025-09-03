<!DOCTYPE html>
<head> 
    <title>Form Submission</title> 
    <style> 
        .container { 
            margin: 50px auto; 
            width: 400px; 
            padding: 30px; 
            background-color: #f5f5f5; 
            border-radius: 10px; 
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.5); 
        } 
 
        textarea { 
            font-size: 12px; 
            padding: 10px; 
            margin: 5px; 
            border-radius: 2px; 
            width: 70%; 
        } 
 
        input[type="submit"], input[type="reset"] { 
            font-size: 12px; 
            background-color: rgb(204, 222, 216); 
            text-align: center; 
            padding: 10px; 
        } 
    </style> 
</head> 
<body> 
    <div class="container"> 
        <h2>Enter Your Information</h2> 
        <form action="" method="POST"> 
            <label for="info">Information:</label><br> 
            <textarea id="info" name="info" rows="6" cols="50"></textarea><br><br> 
            <input type="submit" value="Submit"> 
            <input type="reset" value="Reset"> 
        </form> 
    </div> 
 
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $info = $_POST["info"]; 
        if (!empty($info)) { 
        $file = fopen("form.txt", "a");  
        fwrite($file, $info . "\n"); 
        fclose($file);  
        echo "<script>alert('Information submitted successfully!\\n" . 
        htmlspecialchars($info) . "');</script>"; 
    } else { 
    echo "<script>alert('Please enter some information!');</script>"; 
    } 
    } 
?> 
</body> 
</html> 