<?php require "../Partials/Primera.php" ?>

<div class="pagetitle">
<h3>Inmunología</h3>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Formularios</li>
            <li class="breadcrumb-item active">Inmunología</li>
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

        h1 {
            color: #343a40;
        }

        label {
            display: block;
            margin-top: 20px;
            color: #6c757d;
        }

        select {
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
    <form id="immunologyForm">
        

        <div class="form-group">
            <label for="FR">Factor Reumatoideo (FR):</label>
            <select id="FR" name="FR">
                <option value="negative">Negativo</option>
                <option value="8">8 IU/ml</option>
                <option value="16">16 IU/ml</option>
                <option value="32">32 IU/ml</option>
                <option value="64">64 IU/ml</option>
                <option value="128">128 IU/ml</option>
                <option value="256">256 IU/ml</option>
            </select>
        </div>

        <div class="form-group">
            <label for="ASO">Antiestreptolisina O (ASO):</label>
            <select id="ASO" name="ASO">
                <option value="negative">Negativo</option>

   <!-- corregir-->

                <option value="200">Positivo =   200 IU/ml</option>
                <option value="400">Positivo =   400 IU/ml</option>
                <option value="800">Positivo =   800 IU/ml</option>
                <option value="1600">Positivo =   1,600 IU/ml</option>
                <option value="3200">Positivo =   3,200 IU/ml</option>
            </select>
        </div>

        <div class="form-group">
            <label for="PCR">Proteína C Reactiva (PCR):</label>
            <select id="PCR" name="PCR">
                <option value="negative">Negativo</option>
                <option value="6">6 mg/L</option>
                <option value="12">12 mg/L</option>
                <option value="24">24 mg/L</option>
                <option value="48">48 mg/L</option>
                <option value="96">96 mg/L</option>
            </select>
        </div>

        <input type="submit" value="Enviar">

                <!-- boton de regresar -->
                <div class="container mt-4 d-flex justify-content-center">
                <a href="../Formularios/Dashboard.php" class="btn btn-volver">Volver al menú principal</a>
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
    </form>
    <?php require "../Partials/Segunda.php" ?>