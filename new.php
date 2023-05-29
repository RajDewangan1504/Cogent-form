<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>



    <div class="form-container">



        <div class="main-form">
            <img src="conget1.jpeg" class="conget">

            <h2 class="heading">Cogent Developers Network Registration Form</h2>
            <form action="includes/database_connect.php" class="form" method="post">
                <div class="form-field">
                    <label for="name" class="form-label">1. Name</label>
                    <div class="input">
                        <input required type="text" class="form-input" name="name">
                        <span class="require">Required</span>
                    </div>
                </div>
                <div class="form-field">
                    <label for="email" class="form-label">2. Email</label>
                    <div class="input">
                        <input required type="email" class="form-input" name="email">
                        <span class="require">Required</span>
                    </div>

                </div>
                <div class="form-field">
                    <label for="Graduation" class="form-label">3. Graduation Year</label>
                    <div class="input">
                        <input required type="number" class="form-input" name="gy">
                        <span class="require"> Required</span>
                    </div>

                </div>
                <div class="form-field">
                    <label for="Mobile" class="form-label">4. Mobile Number</label>
                    <div class="input">
                        <input required type="number" class="form-input" name="mn">
                        <span class="require">Required</span>
                    </div>

                </div>
                <div class="form-field">
                    <label for="Whatsapp" class="form-label">5. Whatsapp Number</label>
                    <div class="input">
                        <input required type="number" class="form-input" name="wn">
                        <span class="require">Required</span>
                    </div>

                </div>
                <div class="form-field">
                    <label for="Technical" class="form-label">6. Technical Skills</label>
                    <div class="input">
                        <input type="checkbox" id="scales" name="ts">
                        <label for="Flutterr">Flutter</label><br><br>
                        <input type="checkbox" id="scales" name="ts ">
                        <label>React Native</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Andrid</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>lonic</label><br><br>
                        <input type="checkbox" id="" name="ts">
                        <label>Java</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>C++</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>C#</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label></label>PHP,MYSQL<br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>HTML,CSS</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Firebase</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Laraval</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Codeignitor</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>React JS </label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>.NET</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Unity</label><br><br>
                        <input type="checkbox" id="WordPress" name="ts">
                        <label>Unity 3D</label><br><br>
                        <input type="checkbox" id="Magento" name="ts">
                        <label>Unreal Engine</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Python</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Node JS</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>PHP Backend APIs Developer</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Crypto</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Etherum</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Blockchain</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Metaverse</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>NFT</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Online Multiplayer Game Development</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>AR/VR Game Development</label><br><br>
                        <input type="checkbox" id="scales" name="Solidity">
                        <label>Solidity</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Web Games Development (WebGL)</label><br><br>
                        <input type="checkbox" id="scales" name="ts">
                        <label>Kotlin</label><br>
                        <div class="input">
                            <input required type="text" placeholder="Other " class="form-input" >
                            <span class="require"> Required</span>
                        </div>
                    </div>

                </div>

                <div class="form-field">
                    <label for="Introduction" class="form-label">7. Short Introduction About Me</label>
                    <div class="input">
                        <input required type="text" class="form-input" name="am">
                        <span class="require"> Required</span>
                    </div>
                </div>
                <div class="form-field">
                    <label for="file" class="form-label">8. Resume</label>
                    <div class="input">
                        <br>
                        <label for="upload" id="upload-file">Upload</label>
                        <input required type="file" id="upload" class="form-input" name="file">
                        <p>* Maximum allowed file size is <span> 5MB</span> </p>
                        <span class="require">Required</span>
                    </div>

                </div>
                <button type="submit" class="btn" name="sb">SUBMIT</button>

                <p>This form content is not created or endorsed by <a
                        href="https://surveyheart.com/form/62e227be29b7672197e255c7">SurveyHeart - Report Abuse</a></p>

            </form>


            <!--   php start -->

            <?php
$conn = mysqli_connect("127.0.0.1", "root", "", "postfolio");

// if (mysqli_connect_errno()) {
//     // Throw error message based on ajax or not
//     echo "Failed to connect to MySQL! Please contact the admin.";
//     return;
// }
if(isset ($_POST['sb'])){

    $name=$_POST['name'];
    $emai =$_POST['email'];
    $G_year=$_POST['gy'];
    $M_number=$_POST['mn'];
    $W_number=$_POST['wn'];
    $t_skill=$_POST['ts'];
    $about=$_POST['am'];
    $resume=$_POST['file'];
    $query="INSERT INTO form_details(y_name,email,g_year,m_number,w_number,t_skills,about_me,file_up)VALUES('$name','$emai','$G_year','$M_number','$W_number','$t_skill','$about','$resume')";
    $run=mysqli_query($conn,$query);
}
?>



            <!--   php end -->


        </div>
    </div>

</body>

</html>