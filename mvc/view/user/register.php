<div class="container text-center py-3">
    <div class="container mt-5 mb-3 shadow-lg text-center py-3" style="width: 400px">
        <form action="/user/register" method="post">
            <img src="/image/user.png" style="width: 200px; height: 200px;">
            <input type="text" placeholder="first name"  class="form-control mt-3" name="fname">
            <input type="text" placeholder="last name"  class="form-control mt-3" name="lname">
            <input type="text" placeholder="phone"  class="form-control mt-3" name="phone">
            <input type="text" placeholder="mobile"  class="form-control mt-3" name="mobile">
            <input type="text" placeholder="address"  class="form-control mt-3" name="address">
            <input type="text" placeholder="job"  class="form-control mt-3" name="job">
            <input type="email" placeholder="email"  class="form-control mt-3" name="email">
            <input type="password" placeholder="password"  class="form-control mt-2" name="password">
            <input type="password" placeholder="confirm password"  class="form-control mt-2" name="confirmPassword">
            <button type="submit" class="btn btn-primary mt-3" name="btn_login">register</button>
        </form>
    </div>
    <a href="/user/login" class="text-muted" style="text-decoration: none">Back</a><br>
</div>