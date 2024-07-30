<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Easy peasy english</title>

        @vite('resources/css/app.css')

    </head>
    <body>

        <section class="layout">

            <div class="header">
                <img class="logo" src="{{URL::asset('images/logo.png')}}" alt="Logo">
            </div>


            <div class="main">
                <h2>¿Qué es Easy peasy english?</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>

                <h2>Cursos disponibles:</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>

                <h2>Inscríbete aquí</h2>

                <div class="formSection">

                    <form class="form">
                      <label for="name">Nombre</label>
                      <input type="text">
                      <br>
                      <label for="surname">Apellido</label>
                      <input type="text">
                      <br>
                      <label for="email">Email</label>
                      <input type="email">
                      <br>
                      <label for="course">Seleccione curso</label>
                      <select name="course" id="course">
                        <option value="course1">Curso 1</option>
                        <option value="course2">Curso 2</option>
                      </select>
                      <br>
                    <input type="submit" class="btn" value="Inscribirse">
                    </form>

                </div>

            </div>


            <div class="footer">
                <img class="imgFooter" src="{{URL::asset('images/insta.png')}}" alt="Instagram">
            </div>


          </section>

    </body>
</html>
