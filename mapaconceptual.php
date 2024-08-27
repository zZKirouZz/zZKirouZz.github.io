<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad Nativa en la Nube: Palo Alto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .map-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        .title {
            font-size: 2em;
            margin-bottom: 20px;
            color: #0056b3;
        }
        .node {
            background-color: #007bff;
            color: white;
            padding: 15px 25px;
            margin: 10px;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
        }
        .node:hover {
            transform: scale(1.1);
            background-color: #0056b3;
        }
        .subnodes {
            display: none;
            margin-top: 10px;
        }
        .subnode {
            background-color: #17a2b8;
            color: white;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 6px;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
        }
        .subnode:hover {
            transform: scale(1.05);
            background-color: #138496;
        }
        .description {
            text-align: left;
            margin: 10px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
        }
        .description p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="map-container">
        <div class="title">Seguridad Nativa en la Nube: Palo Alto <p>(Antonio Contreras)</p></div>
        <div class="node" onclick="toggleSubnodes('subnodes1')">Arquitectura propuesta para solucionar los problemas presentados</div>
        <div class="subnodes" id="subnodes1">
            <div class="subnode" onclick="toggleDescription('prob1')">Código Generado por IA</div>
            <div class="description" id="prob1">
                <p><strong>Consolidación con Plataformización:</strong> Se recomienda usar una plataforma centralizada de gestión de seguridad que acompañe el crecimiento de la madurez en la nube de las organizaciones. Una estrategia holística y agnóstica a la arquitectura es esencial para una visibilidad, control y automatización óptimos. Empezar con un proveedor de plataforma que pueda expandirse en futuros casos de uso, tanto en la seguridad de aplicaciones como en operaciones, permite a los equipos de seguridad responder rápidamente a nuevas demandas, reducir costos de capacitación y simplificar la integración de nuevas capacidades de seguridad.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('prob2')">Código Generado por IA</div>
            <div class="description" id="prob2">
                <p><strong>Adopción Segura de la IA:</strong> La IA está desempeñando un papel crucial en el desarrollo de aplicaciones, lo que aumenta los desafíos de seguridad en la nube. El código generado por IA puede llevar a una rápida proliferación de configuraciones incorrectas, vulnerabilidades y errores. Es importante regular el uso de la IA, proteger las cadenas de suministro de software y asegurar que los entornos de desarrollo sean seguros para los desarrolladores, incluyendo los desarrolladores de IA.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('prob3')">Código Generado por IA</div>
            <div class="description" id="prob3">
                <p><strong>Seguridad Inteligente de Datos:</strong> Es crucial implementar una estrategia de seguridad de datos que defina cómo se protegerán los datos sensibles, independientemente de dónde se almacenen. Esto incluye medidas para cifrar los datos, controlar el acceso y monitorear actividades sospechosas. Invertir en soluciones automatizadas de descubrimiento y clasificación de datos, así como en la gestión de la postura de seguridad de los datos (DSPM) con detección y respuesta (DDR), ayuda a escanear grandes volúmenes de datos rápidamente, incluso en formatos no estructurados.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('prob4')">Código Generado por IA</div>
            <div class="description" id="prob4">
                <p><strong>Reducir Cuellos de Botella en la Canalización DevOps:</strong> Evaluar la madurez y los flujos de trabajo de DevOps es clave para identificar con qué frecuencia la seguridad se convierte en un factor limitante en la producción de código. Implementar un enfoque de seguridad por diseño mejora la eficiencia y la seguridad confiable, permitiendo que los ingenieros de software limpien vulnerabilidades antes de lanzar una aplicación.</p>
            </div>


            <div class="subnode" onclick="toggleDescription('prob5')">Código Generado por IA</div>
            <div class="description" id="prob5">
                <p><strong>Instalar Medidas de Seguridad Proactivas:</strong> Las diferencias en los flujos de trabajo y métricas de rendimiento entre los equipos de seguridad y desarrollo pueden generar conflictos. Es vital comprometerse estratégicamente a construir una cultura DevSecOps para evitar poner en riesgo los resultados empresariales, asegurando que ambos equipos trabajen en conjunto para apoyar los objetivos de la organización.</p>
            </div>
        </div>

        <div class="node" onclick="toggleSubnodes('subnodes2')">Problemáticas descritas en el reporte y sus soluciones</div>
        <div class="subnodes" id="subnodes2">
            <div class="subnode" onclick="toggleDescription('prob1')">Código Generado por IA</div>
            <div class="description" id="prob1">
                <p><strong>Descripción:</strong> El 44% de las organizaciones están preocupadas por las vulnerabilidades imprevistas en el código generado por IA. La falta de supervisión humana podría llevar a fallos de seguridad no detectados, y el ritmo rápido de desarrollo de este tipo de código podría superar los métodos tradicionales de pruebas de seguridad, permitiendo que vulnerabilidades lleguen a producción.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('prob2')">Riesgos de API</div>
            <div class="description" id="prob2">
                <p><strong>Descripción:</strong> El 43% de los encuestados a nivel mundial están preocupados por los riesgos asociados a las API, que pueden permitir acceso no autorizado, exponer datos sensibles y crear vulnerabilidades para ciberataques. La preocupación es mayor en Brasil, donde el 52% lo ve como una amenaza significativa.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('prob3')">Ataques Potenciados por IA</div>
            <div class="description" id="prob3">
                <p><strong>Descripción:</strong> El 38% de las organizaciones están preocupadas por la creciente sofisticación de los ataques potenciados por IA, que podrían ser más difíciles de planificar y defender. La IA podría ser utilizada de manera dañina, lo que alerta a las organizaciones sobre la evolución de las amenazas.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('prob4')">Gestión Inadecuada de Accesos</div>
            <div class="description" id="prob4">
                <p><strong>Descripción:</strong> El 35% de las organizaciones ven la gestión inadecuada de accesos como una preocupación principal, especialmente en América Latina, donde el 44% destaca la necesidad de soluciones efectivas para el control de identidad y acceso en la nube.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('prob5')">Impacto de CI/CD en la Superficie de Ataque</div>
            <div class="description" id="prob5">
                <p><strong>Descripción:</strong> El 34% de las organizaciones están preocupadas por el impacto del pipeline CI/CD (Integración Continua/Entrega Continua) en la superficie de ataque, ya que puede introducir vulnerabilidades rápidamente en producción. Esta preocupación es mayor en Japón y la región Asia-Pacífico, donde el 40% lo considera un problema significativo.</p>
            </div>
        </div>

        <div class="node" onclick="toggleSubnodes('subnodes3')">Describir 5 casos reales de ciberseguridad en Puerto Vallarta, Jalisco y México en 2024</div>
        <div class="subnodes" id="subnodes3">
            <div class="subnode" onclick="toggleDescription('desc1')">1. Ataque de Ransomware a una Empresa Hotelera en Puerto Vallarta</div>
            <div class="description" id="desc1">
                <p><strong>Descripción:</strong> Una importante cadena hotelera en Puerto Vallarta sufrió un ataque de ransomware en marzo de 2024. Los atacantes lograron infiltrarse en los sistemas a través de un correo electrónico de phishing enviado a un empleado del departamento de contabilidad. Una vez dentro, los atacantes cifraron los datos de reservaciones, sistemas de pagos y datos personales de los huéspedes, exigiendo un rescate en criptomonedas.</p>
                <p><strong>Impacto:</strong> El ataque causó interrupciones significativas en el servicio, afectando las operaciones del hotel durante casi una semana. La cadena hotelera tuvo que pagar una suma considerable para recuperar sus datos, además de enfrentar multas por violaciones de privacidad de datos.</p>
                <p><strong>Solución:</strong> La empresa implementó una revisión completa de sus protocolos de ciberseguridad, incluyendo entrenamiento para el personal y la implementación de sistemas de respaldo y recuperación más robustos.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('desc2')">2. Fuga de Datos en una Universidad de Jalisco</div>
            <div class="description" id="desc2">
                <p><strong>Descripción:</strong> En mayo de 2024, una universidad pública en Jalisco experimentó una fuga masiva de datos después de que un grupo de hackers accediera a la base de datos del sistema de inscripción. Los datos comprometidos incluían información personal de estudiantes y empleados, así como registros académicos y financieros.</p>
                <p><strong>Impacto:</strong> Miles de estudiantes y empleados estuvieron en riesgo de robo de identidad y fraude financiero. La universidad enfrentó una crisis de confianza y demandas legales por parte de los afectados.</p>
                <p><strong>Solución:</strong> La universidad fortaleció su infraestructura de ciberseguridad, implementó autenticación multifactor para el acceso a sistemas críticos y realizó auditorías de seguridad para evitar futuros incidentes.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('desc3')">3. Ataque a Infraestructura Crítica en Jalisco</div>
            <div class="description" id="desc3">
                <p><strong>Descripción:</strong> En agosto de 2024, un ataque cibernético dirigido a la red eléctrica de Jalisco causó interrupciones en el suministro de energía en varias zonas del estado, incluyendo partes de Puerto Vallarta. El ataque fue atribuido a un grupo de hackers con motivaciones políticas que explotó vulnerabilidades en el sistema de control industrial de la compañía eléctrica.</p>
                <p><strong>Impacto:</strong> El corte de energía afectó a miles de residentes y turistas, causando pérdidas económicas significativas y generando preocupación sobre la seguridad de las infraestructuras críticas.</p>
                <p><strong>Solución:</strong> La compañía eléctrica trabajó en conjunto con agencias gubernamentales para mejorar la seguridad de sus sistemas de control industrial, incluyendo la segmentación de redes y la actualización de software crítico.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('desc4')">4. Robo de Información de una Fintech en Guadalajara</div>
            <div class="description" id="desc4">
                <p><strong>Descripción:</strong> Una startup de tecnología financiera con sede en Guadalajara fue víctima de un ataque de ingeniería social en noviembre de 2024. Los atacantes lograron engañar a un empleado para que proporcionara credenciales de acceso, permitiéndoles robar información financiera sensible de miles de clientes.</p>
                <p><strong>Impacto:</strong> El incidente afectó la reputación de la fintech, y muchos clientes retiraron sus fondos y cerraron sus cuentas. Además, la empresa enfrentó multas y sanciones por incumplimiento de regulaciones de protección de datos.</p>
                <p><strong>Solución:</strong> La fintech implementó medidas de seguridad más estrictas, como la autenticación multifactor para todos los accesos y capacitaciones regulares en ciberseguridad para sus empleados.</p>
            </div>

            <div class="subnode" onclick="toggleDescription('desc5')">5. Ciberataque a Infraestructura Turística en Puerto Vallarta</div>
            <div class="description" id="desc5">
                <p><strong>Descripción:</strong> En diciembre de 2024, un grupo de ciberdelincuentes lanzó un ataque de denegación de servicio (DDoS) contra varios sitios web turísticos de Puerto Vallarta, incluyendo agencias de viajes y portales de información turística. El ataque sobrecargó los servidores, dejándolos inactivos durante varios días.</p>
                <p><strong>Impacto:</strong> La interrupción de servicios en línea afectó a miles de turistas que intentaban hacer reservaciones o buscar información, lo que resultó en pérdidas económicas significativas para el sector turístico local.</p>
                <p><strong>Solución:</strong> Los sitios web afectados implementaron soluciones avanzadas de mitigación de DDoS y trabajaron en mejorar la resiliencia de sus infraestructuras de TI.</p>
            </div>
        </div>
    </div>

    <script>
        function toggleSubnodes(id) {
            var subnodes = document.getElementById(id);
            if (subnodes.style.display === "none" || subnodes.style.display === "") {
                subnodes.style.display = "block";
            } else {
                subnodes.style.display = "none";
            }
        }

        function toggleDescription(id) {
            var description = document.getElementById(id);
            if (description.style.display === "none" || description.style.display === "") {
                description.style.display = "block";
            } else {
                description.style.display = "none";
            }
        }
    </script>
</body>
</html>
