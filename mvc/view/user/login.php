<div class="container text-center py-3">
    <div class="container mt-5 mb-3 shadow-lg text-center py-3" style="width: 400px">
        <form action="/user/login" method="post">
            <img src="/image/user.png" style="height: 200px; width: 200px;" >
            <input type="email" placeholder="email"  class="form-control mt-3" name="email">
            <input type="password" placeholder="password"  class="form-control mt-2" name="password">
            <button type="submit" class="btn btn-primary mt-3" name="btn_login">login</button>
        </form>
    </div>
    <a href="/user/register" class="text-muted" style="text-decoration: none">Create new account</a><br>
    <a href="/" class="text-muted">Home</a>
</div>