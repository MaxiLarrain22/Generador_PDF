 <!doctype html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}">
 </head>


 <body>

     <div class="container">
        <section>
           <div class="img-logo">
                <img src="{{ public_path('images/logo.png') }}"  style="width: 20%">
            </div>
            <div class="card-body m-2">
                <h5 class="card-title fs-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif">PLAN <span
                        style="color: #E5037E"> BRONCE</span></h5>
            </div>
        </section>
        <section>

              <div class="card mb-3 ">
                 <div class="card-body"  style="background-color: rgb(231 230 231 / 26%)">
                     <div class="card-text d-flex flex-column align-items-center">
                         <h5 class="card-title" style="color: #E5037E">MANEJO DE REDES SOCIALES</h5>
                         <p>Facebook e Instagram.</p>
                         <p>1)Crecimiento orgánico / sostenido de los seguidores.</p>
                         <p>2)Incluye subir y mantener actualizado el contenido.</p>
                         <p>3)Respuestas personalizadas a cada consulta recibida.</p>
                         <p>4)Posicionamiento de la Fan Page de Face en Google.</p>
                     </div>
                 </div>
             </div>
        </section>
         {{-- <section>


             <div class="card mb-3">
                 <div class="card-body"style="background-color: rgb(231 230 231 / 26%)>
                     <div class="card-text d-flex flex-column align-items-center">
                         <h5 class="card-title" style="color: #E5037E">DISEÑO GRAFICO</h5>
                         <p>Incluye hasta 6 medios MENSUALES.</p>
                         <p>Incluye Mockup del Feed de Instagram.</p>
                         <p>Modelación de creatividades (Imágenes, videos de <br>
                             corta duración sin edición, flyers, frases motivadoras, <br>
                             consejo del sector, festejo de hito, felicitaciones, <br>
                             Reels con sonidos tendencias)</p>
                     </div>
                 </div>
             </div>

             <div class="card mb-3">
                 <div class="card-body" style="background-color: rgb(231 230 231 / 26%)>
                     <div class="card-text d-flex flex-column align-items-center">
                         <h5 class="card-title" style="color: #E5037E">INTERACCIÓN</h5>
                         <p>Incluye 6 Feed (Flyers o Reels) en Instagram, 6 <br>
                             contenidos en la pagina de inicio de la Fan page, 6 <br>
                             contenidos en la pagina de inicio del perfil de la <br>
                             empresa y 6 contenidos en los grupos creados</p>
                         <p>Incluye 8 historias mensuales con llamados a la acción
                         </p>
                     </div>
                 </div>
             </div>

             <div class="card mb-3">
                 <div class="card-body" style="background-color: rgb(231 230 231 / 26%">
                     <div class="card-text d-flex flex-column align-items-center">
                         <h5 class="card-title" style="color: #E5037E">REPORTE MENSUAL</h5>
                         <p>Alcance de la pagina de Facebook.</p>
                         <p>Alcance de Instagram</p>
                         <p>Visitas a la pagina de Facebook</p>
                         <p>Visitas al perfil de Instagram</p>
                         <p>Nuevos Like de Facebook</p>
                         <p>Nuevos seguidores de Instagram</p>
                         <p>Análisis del publico de Facebook</p>
                         <p>Análisis del publico de Instagram</p>
                         <p>Análisis con respecto a la competencia</p>
                     </div>
                 </div>
             </div>
         </section> --}}

         {{-- <section>
            <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-around">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body" style="background-color: rgb(231 230 231 / 26%)">
                            <h5 class="card-title" style="color: #E5037E">VALOR MENSUAL</h5>
                            <p class="card-text">US$90</p>
                            <p>Este plan tiene un costo mensual de
                                US$90 </p>
                            <p> El pago en pesos a dólar blue del
                                momento de la contratación. </p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body" style="background-color: rgb(231 230 231 / 26%)">
                            <h5 class="card-title" style="color: #E5037E">FORMA DE PAGO</h5>
                            <p>Los pagos se realizaran a Mes
                                Adelantado entre el 1 y el 5 de cada
                                mes.
                            </p>
                            <p>Formas de Pago : Tarjeta de Debito,
                                Transferencia Bancaria, Mercado
                                Pago, Modo, Efectivo. <br>
                            </p>
                            <p>Los montos pactados en pesos
                                tendrán una actualización cada 3
                                meses según el Dólar Blue.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 ">
                        <div class="card-body" style="background-color: rgb(231 230 231 / 26%)">
                            <h5 class="card-title" style="color: #E5037E">NOTA</h5>
                            <p>El precio del plan en dólares siempre vale lo mismo. </p>
                            <p>Si el dólar blue baja también disminuye el precio de nuestro servicio en pesos </p>

                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
     </div>
 </body>

 </html>
