<?php
session_start();
?>

<!doctype html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Strona główna</title>
    <link rel="stylesheet" href="./assets/style.css" />
  </head>
  <body>
    <header>
      <h1>
        <a href="/">B.L.O.gg</a>
      </h1>
    </header>
    <main>
      <section aria-labelledby="login-section" class="form-section visible">
        <h2 id="login-section">Sekcja logowania</h2>
        <form action="logowanie.php" method="post">
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username"/>
    
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password"/>
    
            <button type="submit">Zaloguj się</button>
        </form>
            <p>Nie masz konta? <a href="#" id="showRegister">Zarejestruj się</a></p>

<?php
if(isset($_SESSION["error_msg"])){
  echo $_SESSION["error_msg"];
  unset($_SESSION["error_msg"]);
}
?>

      </section>
      <section
        aria-labelledby="registration-section"
        class="form-section"
      >
        <h2 id="registration-section">Sekcja rejestracji</h2>
        <form action="rejestracja.php" method="post">
            <label for="new-username">Nazwa użytkownika:</label>
            <input type="text" id="new-username" name="new-username"/>
    
            <label for="new-password">Hasło:</label>
            <input type="password" id="new-password" name="new-password"/>
    
            <label for="new-re-password">Powtórz hasło:</label>
            <input type="password" id="new-re-password" name="new-re-password"/>

            <button type="submit">Zarejestruj się</button>
            </form> 
            <p>Masz już konto? <a href="#" id="showLogin">Zaloguj się</a></p>
      </section>
      <section aria-labelledby="blog-section">
        <h2 id="blog-section">5 najnowszych artykułów</h2>

        <div id="blog-cards-wrap">
          <a class="blog-card" href="/artykul1">
            <img src="./assets/img/image1.png" alt="PHP kurs" />
            <h3>Tytuł artykułu 1</h3>
            <p>Krótki opis artykułu 1...</p>
          </a>
          <a class="blog-card" href="/artykul2">
            <img src="./assets/img/image2.png" alt="JS kurs" />
            <h3>Tytuł artykułu 2</h3>
            <p>Krótki opis artykułu 2...</p>
          </a>
          <a class="blog-card" href="/artykul3">
            <img src="./assets/img/image3.png" alt="HTML kurs" />
            <h3>Tytuł artykułu 3</h3>
            <p>Krótki opis artykułu 3...</p>
          </a>
          <a class="blog-card" href="/artykul4">
            <img src="./assets/img/image4.png" alt="CSS kurs" />
            <h3>Tytuł artykułu 4</h3>
            <p>Krótki opis artykułu 4...</p>
          </a>
        </div>
      </section>
    </main>
    <footer>copyright &copy; 2026 B.L.O.gg</footer>
    <script src="./assets/script.js"></script>
  </body>
</html>
