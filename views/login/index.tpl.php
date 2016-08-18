<div class="row">
    
    <?php foreach ($values as $row) {
        if ($row['email']== $email && $row['password'] == $password) {
            $_SESSION['id'] = $row['id_user'];
            $_SESSION['type'] = $row['type'];
            $_SESSION['name'] = $row['name'];

            Redirection::go('home');
        }
    } ?>
</div>