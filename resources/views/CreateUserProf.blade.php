<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style-to-UserC.css">
    <link id="theme-stylesheet" rel="stylesheet" href="dark-mode.css">
</head>
<body>
    <div id="login-app">
        <h2>Your Login:</h2>

        <h3>Your Image of Your Profile:</h3>
        <form action="/" method="POST">
        <img src="img/Character.png" alt="Profile Image" id="profile-img">

        <label for="Name">Your name</label>
        <input type="text" v-model="name">

        <label for="age">Idade</label>
        <input type="text" v-model="age">

        <label for="Email">Seu Email</label>
        <input type="email" v-model="email">

        <label for="Password">Sua Senha</label>
        <input type="password" v-model="password" placeholder="Enter your password">

        <h3>Your gender:</h3>
        <label><input type="radio" v-model="gender" value="Male"> Male</label><br>
        <label><input type="radio" v-model="gender" value="Female"> Female</label><br>

        <h3>Change Profile Image:</h3>
        <input type="text" v-model="image" placeholder="Paste image URL here">

        <h3>Your Bio:</h3>
        <textarea v-model="bio" maxlength="150" placeholder="Write something about yourself..."></textarea>
        {{-- <p>Characters remaining: {{ remainingChars }}</p> --}}

        <h3>Your Function:</h3>
        <label><input type="radio" v-model="adm" value="ADM">ADM</label><br>
        <label><input type="radio" v-model="adm" value="NormalUser">Normal User</label><br>

        <!-- Campo de senha para admins -->
        <div v-if="adm === 'ADM'">
            <h3>Admin Password:</h3>
            <input type="password" v-model="adminPassword" placeholder="Enter admin password">
        </div>

        <br>

        <button id="submit">Submit and Save</button>

    </form>

        {{-- <h3>Summary:</h3>
        <p>Name: {{ name }}</p>
        <p>Age: {{ age }}</p>
        <p>Gender: {{ gender }}</p>
        <p>Email: {{ email }}</p>
        <p>Bio: {{ bio }}</p> --}}


        <button id="dark-mode-button">
            {{-- {{ darkMode ? 'Light Mode' : 'Dark Mode' }} --}}
        </button>
    </div>
</body>
</html>
