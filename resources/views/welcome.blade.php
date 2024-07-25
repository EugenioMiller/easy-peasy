<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Easy peasy english</title>

        @vite('resources/css/app.css')

    </head>
    <body>

        <div class="container">

            <div class="navBar">
                <div id="nav">
                    <div class="logoNav">
                    LOGO
                    </div>

                </div>
            </div>

            <div class="content">
                <div class="information">
                    <h1>Easy peasy english</h1>

                    <h2>¿Qué es Easy Peasy English?</h2>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aspernatur voluptatibus molestias magni quaerat
                        omnis placeat deserunt, magnam quidem unde enim optio consectetur nulla fugiat debitis aut!
                        Fuga, corporis distinctio!
                    </p>

                    <h2>Cursos disponibles</h2>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aspernatur voluptatibus molestias magni quaerat
                        omnis placeat deserunt, magnam quidem unde enim optio consectetur nulla fugiat debitis aut!
                        Fuga, corporis distinctio!
                    </p>
                </div>



                <div class="formContainer">
                    <div class="section">
                        <p class="text">Inscribete aquí</p>
                        <img class="imgArrow" src="{{URL::asset('images/flecha.png')}}" alt="imagen de flecha">
                    </div>

                    <div class="formSection">

                        <form action="" method="post" class="form">
                            <div class="inputName">
                                <label for="name">Nombre</label>
                                <br>
                                <input type="text" id="name" placeholder="Ingrese su nombre" >

                                <label for="surname">Apellidos</label>
                                <br>
                                <input type="text" id="surname" placeholder="Ingrese sus apellidos" >

                                <label for="email">Email</label>
                                <br>
                                <input type="email" id="email" placeholder="Ingrese su email" >

                                <label for="course">Seleccione curso</label>
                                <br>
                                <select name="course" id="course" class="input">
                                    <option value="course1">Curso 1</option>
                                    <option value="course2">Curso 2</option>
                                </select>


                                <div>
                                    <input type="submit" value="Inscribirse" class="inputButton">
                                </div>
                            </div>

                        </form>
                    </div>
                <div>

            </div>


        </div>
    </body>
</html>
