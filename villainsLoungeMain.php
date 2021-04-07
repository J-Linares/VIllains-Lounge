<!DOCTYPE html>
<html>
<!-- This webpage will serve as the main source of info for all 
of our currently hosted servers that we can afford-->

<!-- DISCLAIMER, this webpage serves as a playgorround and testing ground for any web development
 ideas that i come across, this merely serves as a playground for me to be able to learn and
 practice whenever i cant fit it into my schedule-->

<head>
    <title> The Villains' Lounge. </title>
</head>

<!--include a style section/stylesheet with css to make the page look prettier-->
<!-- you can include all stylistic details here in a single style sheet to make the 
rest of the code much prettier and easier to look at instead of writing them inline-->

<!-- creating a base style for our own div classes can essentially speed up the development
process, creating ouir own .myDiv creates a new general div classs that can be repurposed and 
copied for multiple use within a webpage-->

<!-- as a reminder it is very good to get into the habit of creating small blocks of code to act 
 as small components that can be repurposed to whatever needs tthat could arise during the development
process, there is nothing inherently wrong with repurposing code, just ensure that you understand
exactly what it is you are going to do with it, and consult other professionals for development good practices
and to advise you of any pitfals you may encounter in development-->

<!--- consider how to implement security from the start of the development cycle-->

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

    .serverDiv {
        display: flex;
        justify-content: center;
        font-weight: bolder;
    }

    .userDiv {
        border: 10px outset rgb(204, 103, 9);
        background-color: rgb(179, 54, 16);
        text-align: center;
    }

    .infoModule {

        text-align: center;
        font-style: italic;
        font-size: large;
        display: flex;
        justify-content: center;
    }

    .suggestBox {
        border: 3px outset rgba(56, 35, 24, 0.753);
        background-color: rgba(235, 231, 15, 0.322);
        display: grid;
        margin: 5px;
        border-color: rgba(56, 35, 24, 0.753);
    }

    .suggestPrompt {
        text-align: left;
        font-size: 15;
        font-weight: 600;
        margin: 10px;
    }

    .hostedGames {
        justify-content: center;
        text-align: center;
    }

    body {
        background-color: rgba(210, 105, 30, 0.842);
        background-image: url(img/iu.png);
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

    h4 {
        background: rgba(105, 105, 105, 0.678);
        text-align: inherit;
    }

    h5 {
        background-color: rgba(81, 110, 23, 0.527);
        font-style: italic;
        font-size: 30px;
        display: grid;
        justify-content: left;
        border: 5px outset rgba(179, 54, 16, 0.822);

        text-align: center;
    }

    h6 {
        background-color: rgba(0, 128, 0, 0.486);
        font-style: italic;
        font-size: 20px;
        color: crimson;
    }
</style>

<body>
    <!--Body section should house as much information as possible 
    for anyone looking to know more about who runs the server and how to get in contact with them
    should any issue arise during a game-->


    <div class="myDiv">
        <h1 style="color: crimson; font-size: 60px;font-family:'Courier New', Courier, monospace"> <strong>The Villains'
                Lounge</strong> </h1>
        <h2 style="color:rgb(81, 110, 23)"> The illest villains <mark
                style="font-size: 35px; font-family: Arial, Helvetica, sans-serif;font-style:italic;">chillin'</mark> &
            <mark
                style="font-size: 35px; font-family: Arial, Helvetica, sans-serif;font-style: italic;">killin'</mark>!!!
        </h2>
    </div>

    <!--display information about currently hosted server locations-->
    <!--there must be some way to automatge this process instead of building everything inline-->

    <a href="adminLogin.php" style="text-align: right; font-size: large;"><button type="button"> Login.</button></a>
    <h4>
        <strong style="font-size: 20px;">Hosting services currently available:</Strong>
    </h4>

    <div class="hostedGames">
        <p1> <strong style="font-style: italic; font-size: 30px; color: sienna; ">Team Fortress 2</strong> </br>
            <strong style="font-style: italic; font-size: 30px; color: rgb(38, 78, 187);">Counter-Strike: Global
                Offensive
            </strong> </br>
        </p1>
    </div>

    <!---try to figure out how to 
         display dynamically changing text
         if at any moment in time the servers are not active for whatever reason,
         it should be simple and easy for anyone to be able to switch between active and in active through some signal being 
         sent to the web page
        
         figure some way to make Dynamically changing text that can be triggered easily without needing
         to hardcode it directly intop the webpage-->


    <h5 style="color: rgb(0, 255, 0);"> Public Servers: </h5>
    <div class="serverDiv">
        <div class="infoModule">
            <h4>Game: <strong
                    style="font-style: italic; font-size: 18px; color: sienna;  background-color: rgba(105, 105, 105, 0.678);">
                    Team Fortress 2 </strong>
                <img src="/VIllains Lounge/img/ec290778ff1f408a1db9009581016083.png" style="width: 18px; height: 18px;">
                </br> <strong style="font-size: 18px; background-color: rgba(105, 105, 105, 0.678);">
                    Hosted from: Texas, USA </br>
                    Public IP: 170.130.2.130:19001 </br>
                </strong>
                <mark>Status:</mark> <strong
                    style="color: rgb(6, 151, 6); font-size: 20px; border-style: dashed; border-color: green; background-color: rgba(172, 255, 47, 0.562);">
                    Active </strong> <br> <br>


                <p3>Game: <strong
                        style="font-style: italic; font-size: 18px; color: rgb(38, 78, 187);  background-color: rgba(105, 105, 105, 0.678);">
                        Counter-Strike:
                        Global
                        Offensive <img src="/VIllains Lounge/img/csgoicon.png" style="width: 18px; height: 18px; ">
                    </strong> </br>
                    <strong style="font-size: 18px; background-color: rgba(105, 105, 105, 0.678);">
                        Hosted from: Texas, USA </br>
                        Public IP: 170.130.2.130:19001 </br>
                    </strong>
                    <mark>Status:</mark> <strong
                        style="color: rgb(6, 151, 6); font-size: 20px; border-style: dashed; border-color: green; background-color: rgba(172, 255, 47, 0.562);">
                        Active </strong> <br> <br></p3>

                </p3>
            </h4>
        </div>

    </div>
    <!--suggestions for server  hosting services-->
    <!--find a way to automate this process by manually creating div  classes for the specific styles and widget functionality if possible-->

    <h5 style="color: rgb(179, 100, 3);"> Hosting Suggestions: </h5>

    <div class="infoModule">
        <p4
            style="font-size: 20px; font-style: italic; border: dashed rgb(0, 0, 0);background-color: rgba(253, 253, 253, 0.164);">
            <div class="suggestBox">
                <strong>Suggest a Game for Hosting!!!</strong>
                <form action="VLinsert.php" method="post" style=" display: grid; justify-content: center;">
                    <div class="suggestPrompt">
                        <label for="GameName"> Game name: </label>
                        <input style="float: right;" type="text" id="GameName" name="GameName" class="form-control">
                    </div>

                    <div class="suggestPrompt">
                        <label for="ServerLocation"> Server Location: </label>
                        <input type="text" id="ServerLocation" name="ServerLocation" class="form-control"> <br>
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit" value="submit"
                        style="font-family: 'Courier New', Courier, monospace; font: 10px; font-style: italic;">
                </form>

            </div>
        </p4>
    </div>

    <h5 style="color:crimson;"> Servers coming soon: </h5>

    <div class="serverDiv">
        <div class="infoModule">
            <p1>
                <strong style="font-style: italic; font-size: 30px; color: rgb(160, 45, 45); ">Quake 3: Arena</strong>
                </br>
                <strong style="font-style: italic; font-size: 30px; color: rgb(50, 187, 38);">Left 4 Dead
                </strong> </br>
            </p1>
        </div>
    </div>

    <!--Admin appliccation regiostration system, users will need to register in order to gain access
     to the admin page, these credentials need to be added to the  -->

    <h5 style="color:crimson;"> Thinking about becoming an admin? </h5>
    <h4>
        <strong style="font-size: 20px;">Apply below, and we will E-mail you back soon!</Strong>
    </h4>

    <!--Admin login -->
    <div class="register">
        <form action="VLinsert.php" method="post" autocomplete="off">
            <!-- these are  the labels for the entry fields these labels-->>
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="varchar" name="RequestUsername" placeholder="Username" id="RequestUsername" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="RequestPassword" placeholder="Password" id="RequestPassword" required>
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="RequestEmail" placeholder="Email" id="RequestEmail" required>
            <input type="submit" name="Register" value="Register">
        </form>
    </div>

    <br>
    <br>

    <h5 style="color:crimson; text-align: center; justify-content: center;"> Current Admins: </h5>
    <div class="adminPanel">
        <mark> stupidspecter <br>
            nhoj <br>
            MEME-MUCHACHO <br>
            The Blyatman </mark> <br>

    </div>

    <!-- consider implementing a simple email system for practice,
        try adding this functionality in a later update -->
</body>

</html>