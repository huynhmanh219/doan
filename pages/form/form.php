<html>

<head>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h1>Add Account User</h1>
        <div class = "form-insert">
            <form action="form_user_insert.php" method="POST">
             <div class = "form-label">  
                <label for="user">
                User:<input type="text" name ="user" id= "user">
                </label>
                <label for="fname">  
                FirstName: <input type ="text" name ="fname" id ="fname">
                </label>  
                <label for="lname">
                LastName:<input type ="text" name ="lname">
                </label> 
                <label for="status">
                Status:<input type ="text" name ="status">
                </label> 
                 <label for="file">
                Image:<input type ="file" name= "image" id ="file">
                </label> 
                <input type="submit" VALUE = "THÊM" ID = "submit">
                 </div> 
            </form>
        </div>
</body>
</html>