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

        <label for="Name">Seu Nome</label> 
        <input type="text" v-model="name">

        <label for="age">Idade</label>
        <input type="text" v-model="age">

        <label for="Email">Seu Email</label>
        <input type="email" v-model="email">

        <label for="Password">Sua Senha</label>
        <input type="password" v-model="password" placeholder="Enter your password">

        <label for="Gender">Seu genero</label>
        <label><input type="radio" v-model="gender" value="Male"> Masculino</label><br>
        <label><input type="radio" v-model="gender" value="Female"> Feminino</label><br>

            <label for="Image">Selecione sua imagem</label>
        <input type="file" v-model="image">

        <label for="Bio">Sua Bio</label>
        <textarea v-model="bio" maxlength="150" placeholder="Nos conte mais sobre você"></textarea>
        {{-- <p>Characters remaining: {{ remainingChars }}</p> --}}

       <label for="Work">Qual o seu trabalho?</label>  {{-- trabalho escravo kkkkkk --}}
        <label><input type="radio" v-model="adm" value="ADM">ADM</label>
        <label><input type="radio" v-model="adm" value="NormalUser">Normal User</label>

        <!-- Campo de senha para admins -->
        {{-- @if ($admin == 1)
        <div class="Admin-Stage">
            <h3>Admin Password:</h3>
            <input type="password" v-model="adminPassword" placeholder="Enter admin password">
        </div>
        @endif --}}
        

        <input type="submit" value="Enviar">

    </form>

        {{-- <h3>Summary:</h3>
        <p>Name: {{ name }}</p>
        <p>Age: {{ age }}</p>
        <p>Gender: {{ gender }}</p>
        <p>Email: {{ email }}</p>
        <p>Bio: {{ bio }}</p> --}}


        <button id="dark-mode-button">
            Dark Mode
            {{-- {{ darkMode ? 'Light Mode' : 'Dark Mode' }} --}}
        </button>
    </div>
</body>
</html>
