<?php require "../../Presentacion/Partials/Primera.php" ?>

<div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Layouts</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        form {
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #343a40;
        }

        label {
            display: block;
            margin-top: 20px;
            color: #6c757d;
        }

        select,
        input {
            width: 100%;
            height: 40px;
            margin-top: 5px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form action="process.php" method="post">
        <h1>Examen de Heces</h1>

        <h2>Macroscópico:</h2>
        <label for="color">Color:</label>
        <select id="color" name="color">
            <option value="cafe">Café</option>
            <option value="verde">Verde</option>
            <option value="rojo">Rojo</option>
        </select>

        <label for="consistencia">Consistencia:</label>
        <select id="consistencia" name="consistencia">
            <option value="pastoso">Pastoso</option>
            <option value="formado">Formado</option>
            <option value="semi_diarreico">Semi-diarreico</option>
            <option value="diarreico">Diarreico</option>
        </select>

        <label for="moco">Moco:</label>
        <select id="moco" name="moco">
            <option value="negativo">Negativo</option>
            <option value="escaso">Escaso</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundante">Abundante</option>
        </select>

        <label for="sangre">Sangre:</label>
        <select id="sangre" name="sangre">
            <option value="negativa">Negativa</option>
            <option value="escasa">Escasa</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundante">Abundante</option>
        </select>

        <label for="restos_alimenticios">Restos Alimenticios:</label>
        <select id="restos_alimenticios" name="restos_alimenticios">
            <option value="negativos">Negativos</option>
            <option value="escasos">Escasos</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundantes">Abundantes</option>
        </select>

        <label for="pH">pH:</label>
        <input type="number" id="pH" name="pH" min="1.0" max="12.0" step="0.1">

        <h2>Microscópico:</h2>

        <label for="celulas_vegetales">Células vegetales:</label>
        <select id="celulas_vegetales" name="celulas_vegetales">
            <option value="negativas">Negativas</option>
            <option value="escasas">Escasas</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundantes">Abundantes</option>
        </select>

        <label for="grasas">Grasas:</label>
        <select id="grasas" name="grasas">
            <option value="negativas">Negativas</option>
            <option value="escasas">Escasas</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundantes">Abundantes</option>
        </select>

        <label for="almidones">Almidones:</label>
        <select id="almidones" name="almidones">
            <option value="negativos">Negativos</option>
            <option value="escasos">Escasos</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundantes">Abundantes</option>
        </select>

        <label for="levaduras">Levaduras:</label>
        <select id="levaduras" name="levaduras">
            <option value="negativas">Negativas</option>
            <option value="escasas">Escasas</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundantes">Abundantes</option>
        </select>

        <label for="jabones">Jabones:</label>
        <select id="jabones" name="jabones">
            <option value="negativos">Negativos</option>
            <option value="escasa">Escasos</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundantes">Abundantes</option>
        </select>

        <label for="bacterias">Bacterias:</label>
        <select id="bacterias" name="bacterias">
            <option value="negativas">Negativas</option>
            <option value="escasas">Escasas</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundante">Abundante</option>
        </select>

        <label for="leucocitos">Leucocitos:</label>
        <select id="leucocitos" name="leucocitos">
            <option value="negativos">Negativos</option>
            <option value="escasos">Escasos</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundantes">Abundantes</option>
        </select>

        <label for="eritrocitos">Eritrocitos:</label>
        <select id="eritrocitos" name="eritrocitos">
            <option value="negativos">Negativos</option>
            <option value="escasos">Escasos</option>
            <option value="regular_cantidad">Regular cantidad</option>
            <option value="abundantes">Abundantes</option>
        </select>

        <!-- opciones de Paracitos -->
        <div class="form-group">
            <h2>Parásitos</h2>
            <div id="parasitos-container">
                <div class="parasito-item">
                    <label for="parasitos">Tipo de Parasito encontrado</label>
                    <select name="parasitos_especie[]" id="parasitos_especie">
                        <option value="">-- Seleccione una opción --</option>
                        <option value="No se encontraron Paracitos">No se encontraron Paracitos</option>
                        <option value="Blastocystis hominis">Blastocystis hominis</option>
                        <option value="Entamoeba histolytica">Entamoeba histolytica</option>
                        <option value="Entamoeba coli">Entamoeba coli</option>
                        <option value="Endolimax nana">Endolimax nana</option>
                        <option value="Iodamoeba butschlii">Iodamoeba butschlii</option>
                    </select>
                    <label for="cantidad">Cantidad</label>
                    <select name="parasitos_cantidad[]" id="parasitos_cantidad">
                        <option value="">-- Seleccione una opción --</option>
                        <option value="No aplicable">No aplicable</option>
                        <option value="escasos">Escasos</option>
                        <option value="regular_cantidad">Regular cantidad</option>
                        <option value="abundantes">Abundantes</option>
                    </select>
                </div>
            </div>
            <br>
            <button type="button" id="add_parasito">Añadir más</button>
        </div>




        <!-- opciones de Trofozoitos -->

        <div class="form-group">
            <h2>Trofozoitos</h2>
            <div id="trofozoitos-container">
                <div class="trofozoito-item">
                    <label for="trofozoitos">Tipo de trofozoitos encontrado</label>
                    <select name="trofozoitos_especie[]" id="trofozoitos_especie">
                        <option value="">-- Seleccione una opción --</option>
                        <option value="No se encontraron trofozoitos">No se encontraron trofozoitos</option>
                        <option value="Entamoeba histolytica">Entamoeba histolytica</option>
                        <option value="Entamoeba coli">Entamoeba coli</option>
                        <option value="Endolimax nana">Endolimax nana</option>
                        <option value="Iodamoeba butschlii">Iodamoeba butschlii</option>
                    </select>
                    <label for="cantidad">Cantidad</label>
                    <select name="trofozoitos_cantidad[]" id="trofozoitos_cantidad">
                        <option value="">-- Seleccione una opción --</option>
                        <option value="No aplicable">No aplicable</option>
                        <option value="escasos">Escasos</option>
                        <option value="regular_cantidad">Regular cantidad</option>
                        <option value="abundantes">Abundantes</option>
                    </select>
                </div>
            </div>
            <br>
            <button type="button" id="add_trofozoito">Añadir más</button>
        </div>
        <input type="submit" value="Enviar" style="margin-bottom: 20px;">

        <!-- boton de regresar -->
        <div class="container mt-4 d-flex justify-content-center">
            <a href="../Dashboard.php" class="btn btn-volver">Volver al menú principal</a>
        </div>

        <style>
            .btn-volver,
            .btn-examen {
                display: inline-block;
                padding: 10px 30px;
                background-color: #00befd;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s;
                margin-right: 10px;
                /* Agregar espacio entre botones */
                margin-top: 20px;
                margin-bottom: 35px;
                /* Agregar espacio entre los botones y el contenido siguiente */
            }

            .btn-volver:hover,
            .btn-examen:hover {
                background-color: #0056b3;
            }
        </style>


        <!-- nuevos -->

    </form>
    <!-- dropdown trofozoito -->
    <script>
        document.getElementById('add_trofozoito').addEventListener('click', function () {
            var trofozoitosContainer = document.getElementById('trofozoitos-container');
            var newTrofozoitoItem = document.createElement('div');
            newTrofozoitoItem.innerHTML = document.querySelector('.trofozoito-item').innerHTML;
            trofozoitosContainer.appendChild(newTrofozoitoItem);
        });
    </script>

    <!-- dropdown parasitos -->
    <script>
        document.getElementById('add_parasito').addEventListener('click', function () {
            var parasitosContainer = document.getElementById('parasitos-container');
            var newParasitoItem = document.createElement('div');
            newParasitoItem.innerHTML = document.querySelector('.parasito-item').innerHTML;
            parasitosContainer.appendChild(newParasitoItem);
        });
    </script>

<?php require "../../Presentacion/Partials/Segunda.php" ?>