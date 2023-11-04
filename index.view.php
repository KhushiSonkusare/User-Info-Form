
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Information Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/utilities.css"/>
</head>
<body style="background-image: url('./assets/03-1024x576.jpg');height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover; ">
    <div style="background-color:white; width: 850px; margin-left:21%; height:600px; border-radius:5%;" >
    <div class="container" style="margin-top:50px; width:650px; " ><br>
        <h2 style="text-align: center;">User Information Form</h2>
        <form action="display.php" method="post">
            <div class="form-group">
                <label for="name" style="font-size: 20px">Name:</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <br>
            <div class="form-group">
                <label for="email" style="font-size: 20px">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="ex. abc@gmail.com" >
            </div>
            <br>
            <div class="form-group">
                <label for="gender" style="font-size: 20px">Gender:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="male" name="gender" value="Male" >
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="Female" >
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="city" style="font-size: 20px">City:</label>
                <select class="form-control" id="city" name="city" >
                    <option value="Nagpur">Nagpur</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Banglore">Banglore</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Goa">Goa</option>

                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br>
            <br>
            <br>
            <h4 style="text-align"><a href= "displayInfo.php">Registered users</a></h4>
        </form>
    </div>
</div>
</body>
</html>
