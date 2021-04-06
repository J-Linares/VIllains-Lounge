<!DOCTYPE html>
<html>
<!---This will be the simple splash page for log in for admin Users
    once an admin user logs into the page then it should redirect the user to the admin control page
    if the login fails, the page should display a message that the page would notify the user that
    their credentials are not found within the system

    only registered users should have access to the administrator page, so once a set of credentials is
     cross referenced from within the -->



<!-- Remember to have a consistent aesethtic design across all pages you 
        will be developing, you can borrow style and modules across all your 
        web pages so long as it is approriate
    -->
<style>
    .adminPanel {
        border: 5px outset rgb(179, 54, 16);
        background-color: rgba(81, 110, 23, 0.322);
        text-align: center; 
    }

    .myDiv {
        border: 5px outset rgb(179, 54, 16);
        background-color: rgba(81, 110, 23, 0.322);
        text-align: center;
    }

    body {
        background-color: rgba(210, 105, 30, 0.842);
        background-image: url(https://cdn.discordapp.com/attachments/521154378879729664/796570539552407603/iu.png);
        display: grid;
        justify-content: center;
    }

    h1 {
        background-color: rgb(129, 129, 3);
        font-style: italic;
        font-family: 'Courier New', Courier, monospace;
        display: grid;
        justify-content: center;
        border: dashed rgba(161, 67, 0, 0.87);
    }
</style>

<!--discover a method of introducing a button that can redirect you from the main landing page
    onto this page, and implement a home button icon if possible, that will trake you back to the splash page
 -->

<head>
    <title> The Villains' Lounge. </title>
</head>

<body>
    <div class="myDiv">
        <h1 style="color: crimson; font-size: 60px;font-family:'Courier New', Courier, monospace"> <strong>The Villains'
                Lounge</strong> </h1>
        <h2 style="color:rgb(81, 110, 23)"> The illest villains <mark
                style="font-size: 35px; font-family: Arial, Helvetica, sans-serif;font-style:italic;">chillin'</mark> &
            <mark
                style="font-size: 35px; font-family: Arial, Helvetica, sans-serif;font-style: italic;">killin'</mark>!!!
        </h2>
    </div>
    <a href="villainsLoungeMain.php" style="text-align: right; font-size: large;" ><button type="button">Home</button></a>
    <br>
    
    <!--- add the user login module , see how you can obtain user input
          so you can crossreference login credentials  to obtain access to the main admin splash page 
          ensure to add a login redirect to return to the admin credential page
    -->
    <!-- Admin login -->
   
    <div class="adminPanel">
        <strong style="justify-content: center;">Admin Login</strong>
        <form action="VLinsert.php" method="post" style=" display: grid; justify-content: center; text-align: left;">
            <div class="suggestPrompt">
                <label for="Userame" > Username: </label>
                <input style="float: right;" type="text" id="Username" name="Username" class="form-control">
            </div>

            <div class="suggestPrompt">
                <label for="Password"> Password: </label>
                <input type="text" id="Password" name="Password" class="form-control"> <br>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Login"
                style="font-family: 'Courier New', Courier, monospace; font: 10px; font-style: italic;">
        </form>
        <br>
    </div>

</body>

</html>