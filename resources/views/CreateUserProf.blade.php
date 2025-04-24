<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style-to-UserC.css">
    <link id="theme-stylesheet" rel="stylesheet" href="dark-mode.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="login-app">
        <div class="body-form">
            <button id="dark-mode-button" class="fa fa-moon-o">

                {{-- {{ darkMode ? 'Light Mode' : 'Dark Mode' }} --}}
            </button>
            <form action="/" method="POST">
                <label for="inputArquivo">
                    <img src="img/Character.png" alt="Profile Image" id="profile-img">
                </label>
                <input type="file" name="arquivo" id="inputArquivo" class="inputArquivo">

                <label for="name">Seu Nome</label>
                <input type="text" name="name" id="name" placeholder="Qual o seu nome?">

                <label for="age">Idade</label>
                <input type="text" name="age" id="age" class="age" placeholder="Me fale sua idade">

                <label for="email">Seu Email</label>
                <input type="email" name="email" id="email" class="email" placeholder="Digite seu Email">

                <label for="password">Sua Senha</label>
                <input type="password" name="password" id="password" class="password" placeholder="Digite sua senha">

                <label for="gender">Seu genero</label>
                <div class="change-label">
                    <select name="gender" id="gender" class="from-control">
                        <option value="0">Feminino</option>
                        <option value="1">Masculino</option>
                    </select>
                </div>
                <label for="Bio">Sua Bio</label>
                <textarea name="bio" maxlength="150" id="bio" class="bio" placeholder="Nos conte mais sobre você"></textarea>
                {{-- <p>Characters remaining: {{ remainingChars }}</p> --}}

                <label for="type-user">Você é um ADM?</label> {{-- trabalho escravo kkkkkk --}}
                <div class="change-label">
                    <select name="user" id="user" class="from-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <!-- Campo de senha para admins -->
                {{-- @if ($admin == 1)
        <div class="Admin-Stage">
            <h3>Admin Password:</h3>
            <input type="password" v-model="adminPassword" placeholder="Enter admin password">
        </div>
        @endif --}}

                <div class="button-submit">
                <input type="submit" value="Enviar">
            </div>
            </form>
        </div>
        {{-- <h3>Summary:</h3>
        <p>Name: {{ name }}</p>
        <p>Age: {{ age }}</p>
        <p>Gender: {{ gender }}</p>
        <p>Email: {{ email }}</p>
        <p>Bio: {{ bio }}</p> --}}



    </div>
</body>

</html>
