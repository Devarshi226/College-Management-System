<?php include('header.php') ?>


<div class="login-box" style="text-align: center; border-radius:5px">
    <form action="../CMS/action/login.php" id="boxexid" method="POST" style="border:4px solid #3b71ca; border-radius:15px ;padding-bottom:15px">
    <h2>Login for Saffrony Members </h2>
        <div class="user-box">
            <label for="uername" class="lab">User Id</label>
            <input type="email" name="username" id="userid" required>
        </div>
        <div class="user-box">
            <label for="password" class="lab">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <!-- <div class="user-box">
            <label class="form-label" for="role">Select your role:</label>
            <input type="radio" name="userType" id="" value="Student" class="custom-radio" required>&nbsp; Student |
            <input type="radio" name="userType" id="" value="Admin" class="custom-radio" required>&nbsp; Admin |
            <input type="radio" name="userType" id="" value="Faculty" class="custom-radio" required>&nbsp; Faculty | -->

            <!-- <select name="role" id="role" class="form-select mb-3">
                    <option value="admin">Admin</option>
                    <option value="faculty">Faculty</option>
                    <option value="student">Student</option>
                </select> -->
        <!-- </div> -->
        <div class="button-form">
            <input type="submit" name="login" style="border-color: #3b71ca;border-radius:5px" value="submit">
            <!-- <button id="login" name="login">Login</button></div> -->
        </div>
    </form>
</div>
</section>
<script>
    const x = document.getElementsByClassName("intro");
</script>
<?php include('footer.php') ?>